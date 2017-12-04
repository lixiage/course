<?php
namespace App\Http\Controllers\Backend;

use App\UserMange;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
header("content-type:text/html;charset=utf-8");

class ManagementController extends BaseController
{
      public function __construct(){
          session_start();
      }
    /**
     * 用户登录
     */
    public function  bandLogin(){
        if($_POST){
            $username = $_POST['uname'];
            $pwd = $_POST['upwd'];
            $res = DB::select("select * from ci_user where uname='$username' and upwd = '$pwd'");
            if(!$res){
                echo "<script>alert('用户名密码错误');window.location.href='bandLogin'</script>";
            }else{
                $res = (array)$res[0];
                $_SESSION['user_id']= $res['uid'];
                $_SESSION['username'] = $res['uname'];
                return redirect("index");
            }
        }else{
             return view("backend/Managemen/login");
        }
    }
}