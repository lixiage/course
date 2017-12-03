<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/12/2
 * Time: 16:24
 */

namespace App\Http\Controllers\Frontend;

use DB;
use Illuminate\Http\Request;

class NoteController extends CommonController{


    public function index(){

        return view('frontend/note/index');
    }

    public function insert(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $file = $request->file('notes_face');

                var_dump($file->isValid());
            var_dump($file);die;
        }else{
            $classes = DB::table('course_classify')->get();
            foreach ($classes as $class) {
                $class->len = strlen($class->class_name);
            }
            return view('frontend/note/insert',['classes'=>$classes]);
        }
    }

}