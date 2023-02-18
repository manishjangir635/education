<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //user signup
    public function register(){
        return view('student/auth/signup');
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


    public function auth(Request $req){

 
        $this->validate($req, [
           'email' => 'required|max:255',
           'password' => 'required',
        ]);

      
        $remember = $req->has('remember')? true: false;
        if(auth()->attempt(array('email' => $req->input('email'),'password' =>$req->input('password')), $remember)){
        
    
         if($remember)
            {
               setcookie('email',$req->input('email'), time()+(86400*30),"/");
               setcookie('password',$req->input('password'), time()+(86400*30),"/");
           } 
           else { 
             
               setcookie('email',$req->input('email'), time()-(86400*30),"/");
               setcookie('password',$req->input('password'), time()-(86400*30),"/");
           }

        
       
           $user = Auth::user();
          
          if(!$user->email_confirmed){
            return redirect()->back()->with('error','Email is not verified');

            //  $emailtemplate = EmailTemplate::where('slug','user-registration')->first();
            //  $activationlink = url('/activate/').'/'.base64_encode($user->id);  
            //  $emailtemplate->content = str_replace(array('{name}','{url}'),array($user->first_name,$activationlink), $emailtemplate->content);
            //  Auth::logout();
            //  return redirect('/')->with('login_resend','resend-email/'.base64_encode($user->id));
           }

           return redirect('/dashboard')->with('success','Successfully Login');

        }else{
            return redirect()->back()->with('error','Email or Password is incorrect');
        }            
   }


    public function forgot_password(){
        return view('student/auth/forgot_password');
    }
}
