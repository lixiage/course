<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/11/29
 * Time: 12:16
 */

namespace App\Http\Controllers\Frontend;

use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class QuestionController extends BaseController{

    public function index(){
        return view('frontend/question/index');
    }

    public function question(Request $request){
        if($request->isMethod('post')){
            var_dump($request->input());
        }else{
            $classes = DB::table('course_classify')->get();
            foreach($classes as $class){
                $class->len = strlen($class->class_name);
            }
            return view('frontend/question/insert',['classes'=>$classes]);
        }
    }



}