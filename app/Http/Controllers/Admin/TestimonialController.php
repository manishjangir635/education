<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Hash,Session;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials=Testimonial::orderBy('id', 'desc')->paginate(config('global.pagination_records'));
        return view('admin/testimonial/index',compact('testimonials'));
    }
    public function add(){

        return view('admin/testimonial/add');
    }
    public function save(Request $request)
    {
        
        $validated = $request->validate([
            'image' 		=>	'required',
			'name'	=>	'required',
            'rating'	=>	'required',
        ]);

     


        $testimonial = new Testimonial;

        if ($request->file()) 
        {
           $file = $request->file('image');                  
           if ($file)
           {
        $destinationPath = 'public/testimonial/image/';
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = rand(11111, 99999) . '.' . $extension;
        $file->move($destinationPath, $filename);
        $testimonial->image = $filename;
           }
        }

      
        $testimonial->name = $request->name;
        $testimonial->content = $request->content;
        $testimonial->rating = $request->rating;
        $insert = $testimonial->save();
        if($insert){
            Session::flash('success', trans('Testimonial Added Successfully')); 
            return redirect('/admin/testimonials');
        }else{
            return redirect()->back()->with('error', trans('Something went wrong.'));
        }
    }



    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin/testimonial/edit',compact('testimonial'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' 		=>	'required',
            'rating' 		=>	'required|min:1|max:5',
        ]);
       
        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->content = $request->content;
       
        if ($request->file()) 
        {
           $file = $request->file('image');                  
           if ($file)
           {
        $destinationPath = 'public/testimonial/image/';
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = rand(11111, 99999) . '.' . $extension;
        $file->move($destinationPath, $filename);
        $testimonial->image = $filename;
           }
        }

        $testimonial->rating = $request->rating;
        $update = $testimonial->save();
        if($update){
		    Session::flash('success', 'Update successfully!');
            return redirect('admin/testimonials');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput();
        }
    }
    public function delete($id){
        $singleData = Testimonial::where('id',$id)->delete();
       
        if($singleData){
            Session::flash('success', 'Deleted successfully!');
            return redirect('admin/testimonials');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput(); 
        }
    }


}
