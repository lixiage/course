<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Mail;
use Mail;

class EmailController extends BaseController
{

    public function email(){
      //  echo "fasdf";die;
        Mail::raw("邮件测试",function($message){
        $message->from("18611511648@163.com",'慕课网');
        $message->subject('哈喽');
         $message->to("ll9595585@qq.com");
        });
    }
}