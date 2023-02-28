<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Cmspage;
use App\Models\AboutUs;
use Hash,Session;

class CmsController extends Controller
{
    public function index(){
        $all_data=Cmspage::orderBy('id', 'desc')->paginate(config('global.pagination_records'));

        return view('admin/cms/index',compact('all_data'));
    }
    public function edit($id){
        $record = Cmspage::find(base64_decode($id));
        return view('admin/cms/edit',compact('record'));
    }

    public function update(Request $request, $id) {

        $this->validate($request, array(
          "title" =>"required|max:150",
            ));

    

       $data=$request->all();
        extract($data);
        $record   =   Cmspage::find(base64_decode($id));
        $record->title=$title;
        $record->description=$description;
        $record->content=$content;
        $record->save();
        Session::flash('success', 'Content updated successfully!');
        return redirect()->route('cms-manager');

    }


    public function edit_about_us($id){
        $record = AboutUs::find(base64_decode($id)); 
        return view('admin/cms/edit_about_us',compact('record'));
    }


    

    public function update_about_us(Request $request, $id) {

    

        $this->validate($request, array(
          "title" =>"required|max:150",
            ));

        $data=$request->all();
        extract($data);
        $record   =   AboutUs::find(base64_decode($id));
        $record->title=$title;
        $record->page_title=$page_title;
        $record->page_description=$page_description;
        $record->content=$content;
        $record->description=$description;
        $record->vision=$vision;
        $record->mission=$mission;
        $record->save();
        Session::flash('success', 'Content updated successfully!');
        return redirect()->route('cms-manager');

    }

}
