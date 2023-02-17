<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Images;
use Hash,Auth;
class Test extends Controller
{
    //
    public function register(){
        pre(Hash::make("Admin@123"));
        return view('register');
    }
    public function save(Request $request){
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(config('global.WEBSITE_IMG_UPLOAD'), $imageName);
        $data = array(
            'name' => $imageName
        );

        $img = new Images();
        $img->name = $data['name'];
        $img->save();
   }

   public function auth_login(Request $request)
   {
       $auth = array(
           'email' => $request->email,
           'password' => $request->password,
       );
       $credential_check = Auth::attempt($auth);
       if($credential_check){
           return redirect('dashboard');
       }
   }
   public function dashboard()
   {
    return view('dashboard');
   }
   public function logout()
   {
      $logout= Auth::logout();
          return redirect('/');
   }
}
