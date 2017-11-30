<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use App\Login;

class LoginController extends BaseController
{
    /**
     * 开启session
     */
    public  function  __construct(){
        session_start();
    }
    /**
     * @用户退出
     */
    public function loginOut(){
        session_destroy();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author wen
     * 首页展示
     */
    public function index()
    {
        $url = $this->weiboUrl();
        return view('frontend/Login/index',['url'=>$url]);
    }
    /**
     * 微博登录
     * wen
     */
    public function weiboUrl(){
        $model = new Login();
        $url = $model->weiboUrl();
        return $url;
    }
    /**
     * 用户登录
     * @author wen
     */
    public function login(){
        $post = Input::all();
        if(empty($post['username']) || empty($post['password'])){
            return json_encode(['code' => '0', 'state' => '失败']);
        }
        $model = new Login();
        $info = $model->selectData($post['username'],$post['password']);
        if($info){
            $_SESSION['user_id'] = $info->admin_id;
            $_SESSION['username'] = $info->username;
            return json_encode(['code' => '1', 'state' => '成功']);
        }else{
            return json_encode(['code' => '0', 'state' => '失败']);
        }
    }


}