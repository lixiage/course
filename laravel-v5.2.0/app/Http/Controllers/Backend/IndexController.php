<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CourseDYW;
header("content-type:text/html;charset=utf-8");

class IndexController extends CommonController
{
    //后台Index首页
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
//    public function index(){
//        return view('backend.index.index');
//    }

    //direction--------------------start
    //添加方向页面
    public function addDirection(){
        $infoooo = $_SESSION['userInfo'];
        return view('backend.index.addDirection',['infoo'=>$infoooo]);
    }
    //接收方向数据并添加
    public function addDirectionDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addDirectionDo($data);
        if($res) return redirect('index');
    }
    //方向列表展示页面
    public function directionList(){
        $infoooo = $_SESSION['userInfo'];
        $directionData = (new CourseDYW)->directionList();
        return view('backend.index.directionList',['directionData'=>$directionData,'infoo'=>$infoooo]);
    }
    //方向删除
    public function delDirection($dir_id=0){

        $res = (new CourseDYW)->delDirection($dir_id);
        if($res) return redirect('directionList');
    }
    //修改方向名称
    public function editDirection(Request $request){
        $dir_id = $request->input('dir_id');
        $dir_name = $request->input('dir_name');
        $dir_updatetime = date("Y-m-d H:i:s",time());
        $res = (new CourseDYW)->editDirection($dir_id,$dir_name,$dir_updatetime);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //修改方向状态
    public function editDirectionStatus(Request $request){
        $dir_id = $request->input('dir_id');
        $dir_status = $request->input('dir_status');
        $res = (new CourseDYW)->editDirectionStatus($dir_id,$dir_status);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //direction--------------------end


    //classify--------------------start
    //添加分类页面
    public function addClassify(){
        $infoooo = $_SESSION['userInfo'];
        $data = (new CourseDYW)->addClassify();
        return view('backend.index.addClassify',['data'=>$data,'infoo'=>$infoooo]);
    }
    //接收分类数据并添加
    public function addClassifyDo(Request $request){

        $data = $request->input();
        $res = (new CourseDYW)->addClassifyDo($data);
        if($res) return redirect('index');
    }
    //分类列表展示页面
    public function classifyList(){
        $infoooo = $_SESSION['userInfo'];
        $classifyData = (new CourseDYW)->classifyList();
        return view('backend.index.classifyList',['classifyData'=>$classifyData,'infoo'=>$infoooo]);
    }
    //分类删除
    public function delClassify($class_id=0){
        $res = (new CourseDYW)->delClassify($class_id);
        if($res) return redirect('classifyList');
    }
    //修改分类名称
    public function editClassify(Request $request){
        $class_id = $request->input('class_id');
        $class_name = $request->input('class_name');
        $res = (new CourseDYW)->editClassify($class_id,$class_name);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //修改分类状态
    public function editClassifyStatus(Request $request){
        $class_id = $request->input('class_id');
        $class_status = $request->input('class_status');
        $res = (new CourseDYW)->editClassifyStatus($class_id,$class_status);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //classify--------------------end



    //type--------------------start
    //添加类型页面
    public function addType(){
        $infoooo = $_SESSION['userInfo'];
        $dir_data = (new CourseDYW)->addDirection();
        $class_data = (new CourseDYW)->addClassify();
        return view('backend.index.addType',['dir_data'=>$dir_data,'class_data'=>$class_data,'infoo'=>$infoooo]);
    }
    //接收类型数据并添加
    public function addTypeDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addTypeDo($data);
        if($res) return redirect('index');
    }
    //类型列表展示页面(如何查找类型的父类)
    public function typeList(){
        $infoooo = $_SESSION['userInfo'];
        $typeData = (new CourseDYW)->typeList();
        return view('backend.index.typeList',['typeData'=>$typeData,'infoo'=>$infoooo]);
    }
    //类型删除
    public function delType($type_id=0){
        $res = (new CourseDYW)->delType($type_id);
        if($res) return redirect('typeList');
    }
    //修改类型名称
    public function editType(Request $request){
        $type_id = $request->input('type_id');
        $type_name = $request->input('type_name');
        $res = (new CourseDYW)->editType($type_id,$type_name);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //修改类型状态
    public function editTypeStatus(Request $request){
        $type_id = $request->input('type_id');
        $type_status = $request->input('type_status');
        $res = (new CourseDYW)->editTypeStatus($type_id,$type_status);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //type--------------------start

    //courses-----------------start
    //添加课程页面
    public function addCourse(){
        $infoooo = $_SESSION['userInfo'];
        $dirData = (new CourseDYW)->addDirection();
        $classData = (new CourseDYW)->addClassify();
        $typeData = (new CourseDYW)->addType();
        return view('backend.course.addCourse',['dirData'=>$dirData,'classData'=>$classData,'typeData'=>$typeData,'infoo'=>$infoooo]);
    }

    //添加课程
    public function addCourseDo(Request $request){
        $data = $request->input();
        $image = $_FILES['cour_image'];
        $res = (new CourseDYW)->addCourseDo($data,$image);
        if($res) return redirect('courseList');
    }

    //课程展示页面
    public function courseList(){
        $infoooo = $_SESSION['userInfo'];
        $data = (new CourseDYW)->courseList();
        return view('backend.course.courseList',['data'=>$data,'infoo'=>$infoooo]);
    }

    //课程删除
    public function delCourse($cour_id){
        $res = (new CourseDYW)->delCourse($cour_id);
        if($res) return redirect('courseList');
    }

    //课程修改
    public function editCourse($cour_id){
        $data = (new CourseDYW)->editCourse($cour_id);
        if($data) return redirect('courseList');
//        return view('backend.course.editCourse',['data'=>$data]);
    }
    //courses-----------------end

    //chapter-----------------start
    //添加章节页面
    public function addChapter(){
        return view('');
    }
}