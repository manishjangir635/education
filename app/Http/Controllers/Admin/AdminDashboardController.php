<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use validate,Auth,Hash,Session;

class AdminDashboardController extends Controller
{
    public function dashboard(){
        return view('admin.layout.dashboard');
    }
    public function changePassword(){
        return view('admin.layout.changepassword');
    }

    public function saveChangePassword(Request $request)
    {
        // pre($request->all());
        $validated = $request->validate([
            'old_password' 		=>	'required|max:255',
			'new_password'		=>	'required|max:255|same:confirom_password',
			'confirom_password'  =>	'required|max:255'
        ]);

        $user = User::where('id',Auth::id())->first();
        if(Hash::check($request->old_password, $user->password)){
			$user->password = Hash::make($request->new_password);
            if($user->save()) {
                Session::flash('success',trans("Password changed successfully."));
                return redirect('/admin/changePassword');
            }
        }else{
            Session::flash('error',trans("Your old password is incorrect."));
            return redirect('/admin/changePassword');
        }
    }

    
}
