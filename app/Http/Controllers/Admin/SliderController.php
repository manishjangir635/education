<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Slider;
use Hash,Session;

class SliderController extends Controller
{
    public function index(){
        $sliders=Slider::orderBy('id', 'desc')->paginate(config('global.pagination_records'));
        return view('admin/slider/index',compact('sliders'));
    }
    public function add(){

        return view('admin/slider/add');
    }
    public function save(Request $request)
    {
        
        $validated = $request->validate([
            'image' 		=>	'required',
			'name'	=>	'required',
        ]);

     
        $slider = new Slider;

        if ($request->file()) 
        {
           $file = $request->file('image');                  
           if ($file)
           {
        $destinationPath = 'public/image/';
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = rand(11111, 99999) . '.' . $extension;
        $file->move($destinationPath, $filename);
        $slider->image = $filename;
           }
        }

      
        $slider->name = $request->name;
        $insert = $slider->save();
        if($insert){
            Session::flash('success', trans('Banner Added Successfully')); 
            return redirect('/admin/slider/index');
        }else{
            return redirect()->back()->with('error', trans('Something went wrong.'));
        }
    }



    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin/slider/edit',compact('slider'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' 		=>	'required',
        ]);
       
        $slider = Slider::find($id);
        $slider->name = $request->name;
       
        if ($request->file()) 
        {
           $file = $request->file('image');                  
           if ($file)
           {
        $destinationPath = 'public/image/';
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = rand(11111, 99999) . '.' . $extension;
        $file->move($destinationPath, $filename);
        $slider->image = $filename;
           }
        }
        $update = $slider->save();
        if($update){
		    Session::flash('success', 'Update successfully!');
            return redirect('admin/slider/index');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput();
        }
    }
    public function delete($id){
        $singleData = Slider::where('id',$id)->delete();
       
        if($singleData){
            Session::flash('success', 'Deleted successfully!');
            return redirect('admin/slider/index');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput(); 
        }
    }


}
