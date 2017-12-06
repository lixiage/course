<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/12/4
 * Time: 15:43
 */

namespace App\Http\Controllers\Frontend;


use App\Admin;
use Illuminate\Http\Request;

class PersonalController extends CommonController{

    public function index(Request $request){
        $uid = $this->getSession($request,'user_id');
        $uid = !empty($uid)?$uid:1;
        $admin = new Admin();
        $info = $admin->getThisUserInfo($uid);

        return view('frontend/personal/index',['info'=>$info]);
    }

}