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
            'name'   => 'required',
            'email'  =>	'required|email:rfc,dns',
            'password'   => 'required',
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
            'email'  =>	'required|email:rfc,dns',
            'password'   => 'required',
        ]);
        $auth = array(
            'email' => $request->email,
            'password' => $request->password,
           
        );
        $userDetail	=	User::where('is_email_verified',1)->where('email',$request->email)->first();
        if(!empty($userDetail)){
            if($userDetail->is_active == 1){
                if(Auth::attempt($auth)){ 
                    Auth::login($userDetail);
                    return redirect('/my-learning')->with('success','Successfully Login');
         
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
}
