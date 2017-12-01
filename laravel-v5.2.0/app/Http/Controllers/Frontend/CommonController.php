<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/11/30
 * Time: 16:03
 */

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;

header("content-type:text/html;charset=utf-8");
class CommonController extends Controller{

    /**
     * 返回上一页面
     */
    public function goBack(){
        return header("url=".$_SERVER['HTTP_REFERER']);
    }

    /**
     * @param $request
     * @param $key
     * @param $value
     * @return mixed
     * 存储session
     */
    public function setSession($request,$key,$value){
        return $request->session()->put($key,$value);
    }

    /**
     * @param $request
     * @param $key
     * @return mixed
     * 获取session
     */
    public function getSession($request,$key){
        return $request->session()->get($key);
    }

    /**
     * @param $request
     * @param $key
     * @return mixed
     * 移除单个session
     */
    public function removeSession($request,$key){
        return $request->session()->forget($key);
    }

    /**
     * @param $request
     * @return mixed
     * 移除全部session
     */
    public function removeAllSession($request){
        return $request->session()->flush();
    }

    /**
     * @param $request
     * @param $key
     * @return mixed
     * 判断session是否存在
     */
    public function hasSession($request,$key){
        return $request->session()->has($key);
    }

}