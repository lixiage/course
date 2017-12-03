<?php
namespace App\Http\Controllers\Backend;

use App\UserMange;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
header("content-type:text/html;charset=utf-8");

class PaticeController extends CommonController
{

    public function index(){
        $infoooo = $_SESSION['userInfo'];
        return view('backend.index.index',['infoo'=>$infoooo]);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 首页展示
     */
    public function  bandlist(){
        $infoooo = $_SESSION['userInfo'];
        $info = $_SESSION['userInfo'];
        $res = DB::select("select * from ci_user");
       // print_r($res);die;
        return view("backend/Managemen/gallery",['info'=>$res,'infoo'=>$infoooo]);
    }
    /**
     *用户列表
     */
    public function empower(){
        $infoooo = $_SESSION['userInfo'];
        $res = DB::select("select * from ci_roel");
        return view("backend/Managemen/empower",['info'=>$res,'infoo'=>$infoooo]);
    }
    /**
     * 角色管理
     */
    public function  SelectUser(){
        $infoooo = $_SESSION['userInfo'];
        return view("backend/Managemen/gallery",['infoo'=>$infoooo]);
    }
    /**
     * 用户赋权
     */
    public function usePower(){
        $infoooo = $_SESSION['userInfo'];
        $code =  isset($_GET['id'])?$_GET['id']:"";
        $username = "";
        $result = "";
        $rid = "";
        if($code){
            $res = DB::select("select * from ci_user where uid = '$code'");
            $res = (array)$res[0];
            $username = $res['uname'];
            $rid = $res['uid'];
        }else{
            $result = DB::select("select * from ci_user");
        }
        $info = DB::select("select * from ci_roel");
        return view("backend/Managemen/usePower",['info'=>$info,'username'=>$username,'result'=>$result,'rid'=>$rid,'infoo'=>$infoooo]);
    }
    /***
     * 添加管理员
     */
    public  function  addUser(){
        $infoooo = $_SESSION['userInfo'];
        $post = $_POST;
        if(!empty($post['user_id'])){
            foreach($post['checkbox'] as $key=>$val){
                $ress = DB::select("select * from ci_u_r where uid = '$post[user_id]' and rid = $val");
                if(!$ress){
                    $res = DB::insert("insert into ci_u_r(`uid`,`rid`) VALUES('$post[user_id]','$val')");
                }
            }
            echo "<script>alert('添加成功');window.location.href='bandlist'</script>";
        }else{
            if($post['password']!=$post['repassword']){
                echo "<script>alert('密码不一致,请重新输入');window.location.href='usePower'</script>";
                die;
            }
            $info = DB::select("select uid from ci_user where uname = '$post[username]'");
            if($info){
                echo "<script>alert('用户已存在，不可重复添加');window.location.href='usePower'</script>";
                die;
            }
            DB::transaction(function () {
                $post = $_POST;
                $code = $post['username'];
                $password = $post['password'];
                //添加用户
                $sql = "insert into ci_user(`uname`,`upwd`) VALUES('$code','$password')";
                $res = DB::insert($sql);
                //找出用户的主键ID
                $res = DB::select("select uid from ci_user where uname = '$code'");
                $res = (array)$res[0];
                $uid= $res['uid'];
                foreach($post['checkbox'] as $key=>$val){
                    $res = DB::insert("replace into ci_u_r(`uid`,`rid`) VALUES('$uid','$val')");
                }
                echo "<script>alert('添加成功');window.location.href='bandlist'</script>";
            });
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 节点列表
     */
    public function  powerList(){
        $infoooo = $_SESSION['userInfo'];
        $model = new UserMange();
        $info = $model->typeLists();
        return view("backend/Managemen/userPowerAdd",['info'=>$info,'infoo'=>$infoooo]);
    }
    /**
     * 节点添加
     * @无限极分类
     *
     */
    public function privilege(){
        $infoooo = $_SESSION['userInfo'];
        if($_POST){
            DB::transaction(function () {
                $post = $_POST;
                $pname = $post['pname'];
                $controller = $post['controller'];
                $action = $post['action'];
                $parent_id=$post['parent_id'];
                $res = DB::insert("insert into ci_privilege(`pname`,`pcontroller`,`paction`,`parent_id`) VALUES('$pname','$controller','$action','$parent_id')");
                echo "<script>alert('添加成功');window.location.href='powerList'</script>";
            });
        }else{
            $model = new UserMange();
            $info = $model->typeLists();
            // print_r($info);die;
            $arr = $model->DiGui($info,0,0);
            return view("backend/Managemen/blog",['info'=>$arr,'infoo'=>$infoooo]);
        }
    }

    /**
     * 添加角色
     */
    public function  charar(){
        $infoooo = $_SESSION['userInfo'];
        if($_POST){
            $pname = $_POST['pname'];
            $pdesc = $_POST['pdesc'];
            $sql = "insert into ci_roel(`rname`,`rdesc`) VALUES('$pname','$pdesc')";
            $res = DB::insert($sql);
            return redirect("empower",['infoo'=>$infoooo]);
        }else{
            return view("backend/Managemen/chara",['infoo'=>$infoooo]);
        }
    }

    /**
     * 为角色赋权
     */
    public  function givePrivilege(){
        $infoooo = $_SESSION['userInfo'];
        if($_POST){
            //echo "<pre>";
            // print_r($_POST);die;
            DB::transaction(function () {
                $pid =$_POST['pid'];
                $rid = $_POST['rid'];

                foreach($pid as $key=>$val){
                    $ress = DB::select("select * from ci_r_p where pid='$val' and rid = '$rid' ");
                    if(!$ress){
                        $res = DB::insert("replace into ci_r_p(`pid`,`rid`) VALUES('$val','$rid')");
                    }
                }
                echo "<script>alert('赋权成功');window.location.href='powerList'</script>";
            });

        }else{
            $model = new UserMange();
            $id = isset($_GET['id'])?$_GET['id']:"";
            if(empty($id)){
                echo "<script>alert('跳转失败');window.location.href='charar'</script>";
            }
            //查询所有权限
            $row = DB::select("select * from `ci_privilege`");
            //查询儿子节点
            $sub = $model->asArray($row);    //将对象转化为数组
            $data = $model->showSon($sub);
            $info = DB::table('ci_r_p')->where(['rid'=>$id])->get();
            $info = $model->asArray($info);    //将对象转化为数组
            $res = array_column($info, 'pid');
            //   print_r($data);die;
            foreach($data as $key=>&$val){
                if(in_array($val['pid'],$res)){
                    $data[$key]["curr"] = 1;
                }
                foreach($val['son'] as $k=>$v){
                    if(in_array($v['pid'],$res)){
                        $val['son'][$k]["curr"] = 1;
                    }
                }
            }
            // print_r($data);die;
            return view("backend/Managemen/givePrivilege",['info'=>$id,'row'=>$data,'infoo'=>$infoooo]);
        }
    }
}