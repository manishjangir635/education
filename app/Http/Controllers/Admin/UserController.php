<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Hash,Session;

class UserController extends Controller
{
    public function index(){
        $all_data=User::where('user_role_id','!=',1);


        $all_data = $all_data->orderBy('id', 'desc')->paginate(config('global.pagination_records'));
        return view('admin/users/index',compact('all_data'));
    }
    public function add(){
        return view('admin/users/add');
    }
    public function save(Request $request)
    {
        // pre($request->all());
        
        $validated = $request->validate([
            'name' 		=>	'required',
			'shop_name'	=>	'required',
			'email'     =>	'required',
            'phone' 	=>	'required',
			'role'	    =>	'required',
			'location'	    =>	'required',
			'password'  =>	'required',
			'confirm_password'  =>	'required|same:password',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->name;
        $user->shop_name = $request->shop_name;
        $user->user_role_id = $request->role;
        $user->email = $request->email;
        $user->mobile_number = $request->phone;
        $user->address = $request->location;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->pincode = $request->zipcode;
        $user->latitude = $request->lat;
        $user->longitude = $request->lng;
        $user->password = Hash::make($request->password);
        $insert = $user->save();
        if($insert){
            Session::flash('success', trans('New user register successfully.')); 
            return redirect('/admin/users');
        }else{
            return redirect()->back()->with('error', trans('Something went wrong.'));
        }
    }
}
