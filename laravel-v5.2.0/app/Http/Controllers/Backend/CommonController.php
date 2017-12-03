<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CourseDYW;
header("content-type:text/html;charset=utf-8");

//公共控制器
class CommonController extends BaseController
{
    public  function  __construct(){
        session_start();
       $user_id  = isset($_SESSION['user_id'])?$_SESSION['user_id']:"";
        if(empty($user_id)){
            echo "<script>window.location.href='bandLogin'</script>";
            die;
        }
        $url = request()->route()->getAction();
        $pathUrl  = $url['controller'];
        $len = strlen($pathUrl);
        $sub = substr($pathUrl,strrpos($pathUrl,"\\")+1,$len-strrpos($pathUrl,"\\"));
        $str = explode("@",$sub);
        define("_CONTROLLER_",$str['0']);
        define("_METHOD_",$str['1']);

        $res = $this->getAccess();
      //  var_dump($res);die;
        $_SESSION['userInfo'] = $res;
      //  var_dump($res);die;
//        if($res == false){
//            //window.location.href='index'
//            echo   "<script>alert('你的权限不足，请先联系管理员');</script>";
//            die;
//        }
    }

     protected function getAccess(){
          $user_id = $_SESSION['user_id'];
          $sql = "select * from ci_u_r where uid = '$user_id'";
          $res = DB::select($sql);
          $res = $this->asArray($res);
          $rid = array_column($res,"rid");
          $rids = implode(",",$rid);
          $sql1 = "select * from ci_r_p where rid in ('$rids')";
           $ress = DB::select($sql1);
           $ress = $this->asArray($ress);
           $pid= array_column($ress,"pid");
             $arr= array();
         foreach($pid as $key=>$val){
            $arr[] =  $info=   DB::table("ci_privilege")->where(['pid'=>$val])->first();
         }
         $arr = $this->asArray($arr);
         //数组去重
      //   print_r($arr);die;
            foreach($arr as $key=>$val){
                foreach($arr as $k=>$v){
                    if($key != $k && $val['pid'] == $v['pid']){
                        unset($arr[$key]);
                    }
                }
            }

         $res = $this->showSon($arr);
         return $res;
//       //  die;
//         //查看权限
//         foreach($arr as $key=>$val)
//         {
//             if($val['pcontroller']==_CONTROLLER_ && $val['paction']==_METHOD_ ){
//                 $_SESSION['userInfo'] = $arr;
//                 return true;
//             }
//         }
//         return false;
     }
    public function asArray($data)
    {
        $arr = array();
        foreach ($data as $key => $val) {
            $arr[] = (array)$val;
        }
        return $arr;
    }


    public  function showSon($data,$parentId=0){
        // print_r($data);die;
        $arr =array();
        foreach($data as $key=>$val)
        {
            if($val['parent_id']==$parentId){
                $arr[$key]=$val;
                $arr[$key]["son"]=$this->showSon($data,$val['pid']);
            }
        }
        return $arr;
    }
}