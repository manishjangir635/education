<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Hash,Session;

class UserController extends Controller
{
    public function index(Request $request){

        $data=$request->all();
        extract($data);

        $all_data=User::where('user_role_id','!=',1);
        
        if(isset($name)){
            $all_data=$all_data->where('name', 'like', '%' .$name. '%');
        }

        if(isset($role) && $role=='teacher'){
            $all_data=$all_data->where('is_teacher',1);
        }

        if(isset($role) && $role=='student'){
            $all_data=$all_data->where('is_student',1);
        }
        
        $all_data=$all_data->orderBy('id', 'desc')->paginate(config('global.pagination_records'));
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
			'email'     =>	'required',
			'password'  =>	'required',
			'confirm_password'  =>	'required|same:password',
        ]);

        $user = new User;
        $user->username = $request->name;
        $user->name = $request->name;
        $user->user_role_id = 2;
        $user->is_teacher = $request->is_teacher;
        $user->email = $request->email;
        $user->is_active = 1;
        $user->is_email_verified = 1;
        
        
        $user->password = Hash::make($request->password);
        $insert = $user->save();
        if($insert){
            Session::flash('success', trans('New user register successfully.')); 
            return redirect('/admin/users');
        }else{
            return redirect()->back()->with('error', trans('Something went wrong.'));
        }
    }



    public function edit(Request $request,$id){
        $user = User::find($id); 
        return view('admin/users/edit',compact('user'));
       
    }



    public function update(Request $request,$id){


        $validated = $request->validate([
            'name' 		=>	'required',
        ]);



        $user = User::find($id); 
        $user->name = $request->name;
        $user->is_teacher = $request->is_teacher;
        $user->is_active = $request->is_active;
        $user->save();

        Session::flash('success', trans('User updated successfully.')); 
        return redirect('/admin/users');
    }


    public function delete(Request $request,$id){
        $user = User::find($id); // assuming the user with ID 1 exists
        $user->delete();

        Session::flash('success', trans('User deleted successfully.')); 
        return redirect('/admin/users');
    }



}
