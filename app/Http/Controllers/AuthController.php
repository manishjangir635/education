<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EmailAction;
use App\Models\EmailTemplate;
use validate,Auth,Session,Hash;

class AuthController extends Controller
{
    //user signup
    public function register(){
        return view('student/auth/signup');
    }

    public function userRegister(Request $request)
    {
        $validated = $request->validate([
            'name'   => 'required|min:1|max:55',
            'email'  =>	'required|unique:users,email|email:rfc,dns',
            'password'   => 'required|min:6|max:12',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $insert_id = $user->id;
        if($insert_id){
            $settingsEmail 		= config('global.Email');
            $username			=  $request->username;
			$full_name			=  $request->name; 
			$email			=  $request->email;  
			$route_url      	=  url('activate/'.base64_encode($insert_id));
			$varify_link   		=   $route_url;

            $emailActions		=	EmailAction::where('action','=','registration')->first();
            $emailTemplates		=	EmailTemplate::where('action','=','registration')->select('name','subject','action','body')->first();
            $cons = explode(',',$emailActions['options']);
            $constants = array();
            
            foreach($cons as $key=>$val){
                $constants[] = '{'.$val.'}';
            }
            $subject 			=  $emailTemplates['subject'];
            $rep_Array 			= array($username,$varify_link,$route_url); 
            $messageBody		=  str_replace($constants, $rep_Array, $emailTemplates['body']);
            // pre($messageBody);
            sendMail($email,$full_name,$subject,$messageBody,$settingsEmail);
            Session::flash('success', trans('A unique link has been sent your email id. Kindly verify the email.')); 
			return redirect('/');	
        }else{
            return redirect()->back()->with('error', trans('Something went to wrong.'));

        }

    }
    public function login(Request $request){

        if(Auth::check()){
          
            $user = Auth::user();
          
            if($user->status == 1 && $user->is_student){
                return redirect('dashboard');
  
            }elseif($user->status == 1 && $user->is_teacher){
                return redirect('dashboard');
            }else{
                return view('student/auth/login');
            }
          }
         
        return view('student/auth/login');
    }


    public function auth(Request $request){
        $validated = $request->validate([
            'email'  =>	'required|email',
            'password'   => 'required|min:6|max:12',
        ]);
        $auth = array(
            'email' => $request->email,
            'password' => $request->password,
           
        );
        $userDetail	=	User::where('is_email_verified',1)->where('user_role_id','!=',1)->where('email',$request->email)->first();
        if(!empty($userDetail)){
            if($userDetail->is_active == 1){
                if(Auth::attempt($auth)){ 
                    Auth::login($userDetail);
                    return redirect('/')->with('success','Successfully Login');
         
                 }else{
                     return redirect()->back()->with('error','Email or Password is incorrect');
                 } 
            }else{
                Session::flash('error', 'Your account has been deactivate.');
                return redirect()->back()->withInput();
            }
           
        }else{
            Session::flash('error', 'Please login with valid email.');
			return redirect()->back()->withInput();
        }
                   
   }


   public function activate($id)
   {
        $id =  base64_decode($id);

        $data = User::find($id);
        $data->is_active=1;        
        $data->is_email_verified = 1;
        $data->save();
        Session::flash('success', 'Your account has been activated successfully.');
        return redirect('/');
   }
    public function forgot_password(){
        return view('student/auth/forgot_password');
    }

    public function logout()
    {
        Auth::logout();
		Session::flash('success', 'You are now logged out!');
		return redirect('/login')->with('success', 'You are now logged out!');
    }

    public function sendResetLink(Request $request)
    {
  
        $validated = $request->validate([
            'email' 		=>	'required|email:rfc,dns',
        ]);
        $email = $request->email;
		$userDetail	=	User::where('email',$email)->where('is_active',1)->first();
        if(!empty($userDetail)){
            if($userDetail->is_active == 1){
            $forgot_password_validate_string	= 	md5($userDetail->email.time().time());
            User::where('email',$email)->update(array('forgot_password_validate_string'=>$forgot_password_validate_string));
            $settingsEmail 		= config('global.Email');
            $username			=  $userDetail->username;
			$full_name			=  $userDetail->name;  
			$route_url      	=  url('resetPassword/'.$forgot_password_validate_string);
			$varify_link   		=   $route_url;

            $emailActions		=	EmailAction::where('action','=','forgot_password')->first();
            $emailTemplates		=	EmailTemplate::where('action','=','forgot_password')->select('name','subject','action','body')->first();
            $cons = explode(',',$emailActions['options']);
            $constants = array();
            
            foreach($cons as $key=>$val){
                $constants[] = '{'.$val.'}';
            }
            $subject 			=  $emailTemplates['subject'];
            $rep_Array 			= array($username,$varify_link,$route_url); 
            $messageBody		=  str_replace($constants, $rep_Array, $emailTemplates['body']);
            // pre($messageBody);
            sendMail($email,$full_name,$subject,$messageBody,$settingsEmail);
            Session::flash('success', trans('An email has been sent to your inbox. To reset your password please follow the steps mentioned in the email.')); 
			return redirect('/');						
            }else{
            return redirect()->back()->with('error', trans('Email is still not verified.'));
            }
        }else{
            return redirect()->back()->with('error', trans('Credential is not found.'));

        }
    }

    public function resetPassword($validate_string=null){
		if($validate_string!="" && $validate_string!=null){
			$userDetail	=	User::where('is_active','1')->where('forgot_password_validate_string',$validate_string)->first();
			if(!empty($userDetail)){
				return view('student.auth.reset_password' ,compact('validate_string'));
			}else{
				return redirect('/')
						->with('error', trans('error, you are using wrong link.'));
			}
			
		}else{
			return redirect('/')->with('error', trans('Sorry, you are using wrong link.'));
		}
	}

    public function newPassword(Request $request){
        $validated = $request->validate([
			'new_password'		=>	'required|min:6|max:12|same:confirm_password',
			'confirm_password'  =>	'required|min:6|max:12'
        ]);

        $user = User::where('forgot_password_validate_string',$request->validate_string)->first();
        if(!empty($user)){
            $user->password = Hash::make($request->new_password);
            $user->forgot_password_validate_string = '';
            $update = $user->save();
            if($update){
                Session::flash('success', trans('Thank you for resetting your password. Please login to access your account.')); 
                return redirect('/');
            }
        }else{
            return redirect()->back()->with('error', trans('Sorry, you are using wrong link.'));
        }


    }

}
