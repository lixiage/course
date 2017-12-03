<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use App\Login;
use App\Free;
use App\Prof;
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
        $models = new Prof();
        $model =new Free();
        $fession = $models->Getfession();
        $dir = $model->Getdir();
        $cour = $model->Getimages();
        $url = $this->weiboUrl();

        return view('frontend/Login/index',['url'=>$url,'dir'=>$dir,'zhi'=>$fession,'cour'=>$cour]);
    }
    /**
     * 微博登录
     * $param 获取 authorize
     * wen
     */
    public function weiboUrl(){
        $model = new Login();

        $url = $model->weiboUrl();
        return $url;
    }

    /**
     *微博回调 获取 access_token
    */
    public function weibo(){
         $code = isset($_REQUEST['code'])?$_REQUEST['code']:"";
         if(!empty($code)){
             $model = new Login();
             $res =$model->WeiboAccessToken($code);
             $res = json_decode($res,true);
             if($res['code']==1){
                  $info = $model->weiboUserMessage();
                   $res = json_decode($info,true);
                    $_SESSION['username']=  $res['name'];
                    $_SESSION['profile_image_url'] = $res['profile_image_url'];
                   return redirect("index");
             }else{
                 echo "<script>alert('授权失败');location.href='index'</script>";
             }
         }
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