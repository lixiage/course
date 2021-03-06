<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use App\Login;
use App\Free;
use App\Prof;
use Illuminate\Support\Facades\DB;

class LoginController extends BaseController
{
    /**
     * 开启session
     */

    public  function  __construct(){
        session_start();
        if(isset($_SESSION['user_id'])){
            $data = $_COOKIE;
            if(!empty($data)){
                $result = $this->login_shopcar();
            }
        }
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

    public function login_shopcar()
    {
        $data = $_COOKIE;
        foreach($data as $key => $val){
            if(is_numeric($key)){  //is_numeric  判断是不是数字
                $arr[$key] = $val;
            }
        }
        if(empty($arr)){
            $info = [];
        }else{
            foreach($arr as $k => $v){
                $info[] = json_decode($v);
                //setCookie($k,"",time()-60);
            }
        }
        foreach($info as $ke => $va){
            $va->u_id = $_SESSION['user_id'];
            unset($va->should_price);
            $list = (array)$va;
            //print_r($va);
            $result = DB::table('shopcar')->insert([
                $list,
            ]);
        }
        if(!empty($arr)){
            foreach($arr as $haha => $lala){
                setcookie($haha,'',time()-60);
            }
        }

    }

}