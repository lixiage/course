<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/11/30
 * Time: 16:03
 */

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use Storage;
use Illuminate\Http\Request;

header("content-type:text/html;charset=utf-8");
class CommonController extends Controller{

    /**
     * @param string $msg
     * @return string
     * 返回上一页面
     */
    public function goBack($msg = ''){
        header("refresh:2;url=".$_SERVER['HTTP_REFERER']);
        return '<font color="red">'.$msg.'</font>,三秒后进行跳转···';
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

    /**
     * @param $fileObj
     * @return string
     * 上传
     */
    public function upload($fileObj){
        if($fileObj->isValid()){
            //获取文件相关信息
            $originalName = $fileObj->getClientOriginalName();//文件原名
            $ext = $fileObj->getClientOriginalExtension();//扩展名（后缀）
            $realPath = $fileObj->getRealPath();//获取文件临时存储路径
            $type = $fileObj->getClientMimeType();//上传文件类型

            //上传文件
            $newFileName = date('YmdHis').'-'.uniqid().'.'.$ext;//重命名文件名
            //使用我们新建的uploads本地存储空间（目录）
            $res = Storage::disk('uploads')->put($newFileName,file_get_contents($realPath));
            if(!$res){
                return $this->goBack('文件上传失败');
            }
            return './uploads/'.$newFileName;
        }
        return $this->goBack('上传文件不符合');
    }


}