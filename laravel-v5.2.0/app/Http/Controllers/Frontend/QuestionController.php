<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/11/29
 * Time: 12:16
 */

namespace App\Http\Controllers\Frontend;


use Illuminate\Routing\Controller as BaseController;

class QuestionController extends BaseController{

    public function index(){
        return view('frontend/question/index');
    }

}