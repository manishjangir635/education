<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Cmspage;
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
          'content_en' => 'required',
          'meta_description_en' => 'required',
          "title_en" =>"required|max:150",
            )
            ,
            [
             'content_en.required' => 'Description is Required',
             'meta_description_en.required' => 'Meta Description is Required',
             ]

       );
       $data=$request->all();
        extract($data);
        $record   =   Cmspage::find(base64_decode($id));
        $record->title_en=$title_en;
        $record->content_en=$content_en;
        $record->meta_description_en=$meta_description_en;
        $record->save();
        Session::flash('success', 'Content updated successfully!');
        return redirect()->route('cms-manager');

    }

}
