<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmailAction;
use App\Models\EmailTemplate;

use validate,Auth,Session,Hash;
class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.adminlogin.login');
    }
    public function loginAuth(Request $request){
        $auth = array(
            'email' => $request->email,
            'password' => $request->password,
            'user_role_id' => 1
        );
        $userDetail	=	User::where('user_role_id',1)->where('email',$request->email)->first();
        if(!empty($userDetail)){
            if(Auth::attempt($auth)){
                Auth::login($userDetail);
                Session::flash('flash_notice', 'You are now logged in!');
                return Redirect('/admin/dashboard')->with('message','You are now logged in!');
            }else{
                Session::flash('error', 'Email or Password is incorrect.');
                return redirect()->back()->withInput();
            }
        }else{
            Session::flash('error', 'Please login with valid email.');
			return redirect()->back()->withInput();
        }
        
    }

    public function logout(){
		Auth::logout();
		Session::flash('flash_notice', 'You are now logged out!');
		return redirect('/admin')->with('message', 'You are now logged out!');
    }

    public function fogetPassword(){
		return View('admin.adminlogin.forget_password');
    }

    public function sendPassword(Request $request){
        $validated = $request->validate([
            'email' 		=>	'required|email:rfc,dns',
        ]);
        $email = $request->email;
		$userDetail	=	User::where('email',$email)->where('is_active',1)->first();
        if(!empty($userDetail)){
            $forgot_password_validate_string	= 	md5($userDetail->email.time().time());
            User::where('email',$email)->update(array('forgot_password_validate_string'=>$forgot_password_validate_string));
            $settingsEmail 		= config('global.Email');
            $username			=  $userDetail->username;
			$full_name			=  $userDetail->name;  
			$route_url      	=  url('admin/resetPassword/'.$forgot_password_validate_string);
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
			return redirect('/admin');						

        }else{
            return redirect()->back()->with('error', trans('Credential is not found.'));

        }
    }

    public function resetPassword($validate_string=null){
		if($validate_string!="" && $validate_string!=null){
			$userDetail	=	User::where('is_active','1')->where('forgot_password_validate_string',$validate_string)->first();
			if(!empty($userDetail)){
				return view('admin.adminlogin.reset_password' ,compact('validate_string'));
			}else{
				return redirect('/admin')
						->with('error', trans('Sorry, you are using wrong link.'));
			}
			
		}else{
			return redirect('/admin')->with('error', trans('Sorry, you are using wrong link.'));
		}
	}

    public function resetPasswordSave(Request $request){
        $validated = $request->validate([
			'new_password'		=>	'required|max:255|same:confirm_password',
			'confirm_password'  =>	'required|max:255'
        ]);

        $user = User::where('forgot_password_validate_string',$request->validate_string)->first();
        if(!empty($user)){
            $user->password = Hash::make($request->new_password);
            $user->forgot_password_validate_string = '';
            $update = $user->save();
            if($update){
                Session::flash('success', trans('Thank you for resetting your password. Please login to access your account.')); 
                return redirect('/admin');
            }
        }else{
            return redirect()->back()->with('error', trans('Sorry, you are using wrong link.'));
        }


    }

}
