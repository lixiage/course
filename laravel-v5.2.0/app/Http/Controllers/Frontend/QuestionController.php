<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/11/29
 * Time: 12:16
 */

namespace App\Http\Controllers\Frontend;

use DB;
use Illuminate\Routing\Controller as BaseController;

class QuestionController extends BaseController{

    public function index(){
        return view('frontend/question/index');
    }
<<<<<<< HEAD
    public  function  qusetion(){
        $arr = array("css","php","java","hrml","nginx","mysql","laraval","tp");
        return view("frontend/question/tiwen",['info'=>$arr]);
    }
=======

    public function question(){
        $classes = DB::table('course_classify')->get();
        return view('frontend/question/insert',['classes'=>$classes]);
    }

>>>>>>> 80b61d00a2c200ab3e8533e74c2f784194d1cb4c
}