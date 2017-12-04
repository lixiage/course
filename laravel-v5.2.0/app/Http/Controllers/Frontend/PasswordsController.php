<?php
namespace App\Http\Controllers\Frontend;

use App\Password;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;

class PasswordsController extends BaseController
{
    /**
     * 忘记密码首页
     */
    public function index(){
        return view("frontend/Mima/mima");
    }
    /**
     * 修改密码
     */
    public  function savePassword(){
       $username =  Input::get("username");
       $model =  new Password();
       $info = $model->SelectData($username);
       return $info;
    }
    /**
     * 修改密码链接
     */
    public function SaveUrl(){
        $apple =  Input::get("apple_id");
        if(empty($apple)){
            echo "<script>alert('参数不能为空');window.location.href='password'</script>";
            die;
        }
        $model =  new Password();
        $res = $model->SelectDatas($apple);
        $info = json_decode($res);
        $info = (array)$info;
        switch($info['code']){
            case 1 :
                return view("frontend/Mima/saveMIma",['email'=>$info['content']]);
                break;
            case 7 :
                echo "<script>alert('时间过期');window.location.href='password'</script>";
                break;
            case 8 :
                echo "<script>alert('参数错误');window.location.href='password'</script>";
                break;
            case 9 :
                echo "<script>alert('邮箱不存在');window.location.href='password'</script>";
                break;
            case 10 :
                echo "<script>alert('你确定是这个参数吗');window.location.href='password'</script>";
                break;
        }
    }
    /**
     * 提交新的密码
     */
    public function passwordSuccsee(){
        $post = Input::all();
        $model =  new Password();
        $res = $model->updateSave($post);
        return $res;
    }
}