<?php
// use App\Models\Images;

if (! function_exists('pre')) {
    function pre($data,$condition=true) {
        echo "<pre>";
        print_r($data);
        if($condition == true){
            die;
        }
    }
}

if (!function_exists('assets')) {
    function assets($path, $secure = null)
    {
        return app('url')->asset("public/".$path, $secure);
    }
}

if(!function_exists('sendMail')){
    function sendMail($to,$fullName,$subject,$messageBody, $from = '',$files = false,$path='',$attachmentName='')
    {
        $data				=	array();
		$data['to']			=	$to;
		$data['from']		=	(!empty($from) ? $from : config('global.Email'));
		$data['fullName']	=	$fullName;
		$data['subject']	=	$subject;
		$data['filepath']	=	$path;
		$data['attachmentName']	=	$attachmentName;
		if($files===false){
			Mail::send('emails.template', array('messageBody'=> $messageBody), function($message) use ($data){
				$message->to($data['to'], $data['fullName'])->from($data['from'])->subject($data['subject']);
			});	
		}else{
			if($attachmentName!=''){
				Mail::send('emails.template', array('messageBody'=> $messageBody), function($message) use ($data){
					$message->to($data['to'], $data['fullName'])->from($data['from'])->subject($data['subject'])->attach($data['filepath'],array('as'=>$data['attachmentName']));
				});
			}else{
				Mail::send('emails.template', array('messageBody'=> $messageBody), function($message) use ($data){
					$message->to($data['to'], $data['fullName'])->from($data['from'])->subject($data['subject'])->attach($data['filepath']);
				});
			}
		}
    }
}