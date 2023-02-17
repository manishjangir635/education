<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use App\Models\EmailAction;

use Auth,Session,Input;

class EmailTemplateController extends Controller
{
    public function index(Request $request)
    {
		
        $all_data = EmailTemplate::query();
        if($request->all()){
            if($request->name){
                $all_data = $all_data->where('name','like','%'.$request->name.'%');
            }
            if($request->subject){
                $all_data = $all_data->where('subject','like','%'.$request->subject.'%');
            }
        }

        $all_data = $all_data->orderBy('id', 'desc')->paginate(config('global.pagination_records'));
        // pre($all_data);
        return view('admin.emailtemplates.index',compact('all_data'));
    }

    public function add(){
        $all_emails_actions = EmailAction::all();
        return view('admin.emailtemplates.add',compact('all_emails_actions'));
    }
    public function getConstant(Request $request)
    {
        $value = $request->value;
        if(!empty($value)){
            $html='';
            $singleData = EmailAction::where('action',$request->value)->pluck('options','action');
            $singleDataOptions = 	explode(',',$singleData[$value]);
            $html .= '<option value=""> Select Option </option>';
            foreach ($singleDataOptions as  $value) {
                $html .='<option value="'.$value.'">'. $value .'</option>';
            }
        }else{
            $html = '<option value=""> Select Option </option>';
            
        }
        echo $html;
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'name' 		=>	'required',
			'subject'	=>	'required',
			'body'      =>	'required',
        ]);
        $singleData = new EmailTemplate;
        $singleData->name = $request->name;
        $singleData->subject = $request->subject;
        $singleData->action = $request->action;
        $singleData->body = $request->body;
        $update = $singleData->save();
        if($update){
		    Session::flash('success', 'Template add successfully!');
            return redirect('admin/email_template');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput();
        }
    }
    public function edit($id)
    {
        $singleData = EmailTemplate::where('id',$id)->first();
        $allData = EmailAction::where('action',$singleData['action'])->pluck('options','action')->first();
        $constantData = explode(',',$allData);
        // pre($constantData);
        return view('admin.emailtemplates.edit',compact('singleData','constantData'));
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' 		=>	'required',
			'subject'	=>	'required',
			'body'      =>	'required'
        ]);
        $id = $request->id;
        $singleData = EmailTemplate::where('id',$id)->first();
        $singleData->name = $request->name;
        $singleData->subject = $request->subject;
        $singleData->body = $request->body;
        $update = $singleData->save();
        if($update){
		    Session::flash('success', 'Template update successfully!');
            return redirect('admin/email_template');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput();
        }
    }
    public function delete($id){
        $singleData = EmailTemplate::where('id',$id)->first();
        $data = $singleData->delete();
        if($data){
            Session::flash('success', 'Template delete successfully!');
            return redirect('admin/email_template');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput(); 
        }
    }
}
