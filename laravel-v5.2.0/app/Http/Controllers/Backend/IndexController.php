<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CourseDYW;
header("content-type:text/html;charset=utf-8");

class IndexController extends BaseController
{
    //后台Index首页
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function index(){

        return view('backend.index.index');
    }

    //direction--------------------start
    //添加方向页面
    public function addDirection(){
        return view('backend.index.addDirection');
    }
    //接收方向数据并添加
    public function addDirectionDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addDirectionDo($data);
        if($res) return redirect('index');
    }
    //方向列表展示页面
    public function directionList(){
        $directionData = (new CourseDYW)->directionList();
        return view('backend.index.directionList',['directionData'=>$directionData]);
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
        $data = (new CourseDYW)->addDirection();
        return view('backend.index.addClassify',['data'=>$data]);
    }
    //接收分类数据并添加
    public function addClassifyDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addClassifyDo($data);
        if($res) return redirect('index');
    }
    //分类列表展示页面
    public function classifyList(){
        $classifyData = (new CourseDYW)->classifyList();
        return view('backend.index.classifyList',['classifyData'=>$classifyData]);
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
        $dir_data = (new CourseDYW)->addDirection();
        $class_data = (new CourseDYW)->addClassify();
        return view('backend.index.addType',['dir_data'=>$dir_data,'class_data'=>$class_data]);
    }
    //接收类型数据并添加
    public function addTypeDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addTypeDo($data);
        if($res) return redirect('index');
    }
    //类型列表展示页面(如何查找类型的父类)
    public function typeList(){
        $typeData = (new CourseDYW)->typeList();
        return view('backend.index.typeList',['typeData'=>$typeData]);
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
        $dirData = (new CourseDYW)->addDirection();
        $classData = (new CourseDYW)->addClassify();
        $typeData = (new CourseDYW)->addType();
        return view('backend.course.addCourse',['dirData'=>$dirData,'classData'=>$classData,'typeData'=>$typeData]);
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
        $data = (new CourseDYW)->courseList();
        return view('backend.course.courseList',['data'=>$data]);
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
        $courseData = (new CourseDYW)->addCourse();
        return view('backend.chapter.addChapter',['courseData'=>$courseData]);
    }
    //接收章节数据并添加
    public function addChapterDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addChapterDo($data);
        if($res) return redirect('chapterList');
    }

    //章节展示页面
    public function chapterList(){
        $data = (new CourseDYW)->chapterList();
        return view('backend.chapter.chapterList',['data'=>$data]);
    }

    //删除章节
    public function delChapter($chap_id){
        $res = (new CourseDYW)->delChapter($chap_id);
        if($res) return redirect('chapterList');
    }
    //chapter-----------------end


    //smallMatter-----------------start
    //添加小节页面
    public function addSmallMatter(){
        $courseData = (new CourseDYW)->addCourse();
        $smallMatterData = (new CourseDYW)->addChapter();
        return view('backend.smallMatter.addSmallMatter',['courseData'=>$courseData,'smallMatterData'=>$smallMatterData]);
    }
    //接收小节数据并添加
    public function addSmallMatterDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->smallMatterList($data);
        if($res) return redirect('smallMatterList');
    }

    //小节展示
    public function smallMatterList(){
        $data = (new CourseDYW)->smallMatterList();
        return view('backend.smallMatter.smallMatterList',['data'=>$data]);
    }

    //小节删除
    public function delSmallMatter($small_id){
        $res = (new CourseDYW)->delSmallMatter($small_id);
        if($res) return redirect('smallMatterList');
    }
    //smallMatter--------------end

    //video--------------------start
    //视频添加
    public function addVideo(){
        $data = (new CourseDYW)->addSmallMatter();
        return view('backend.video.addVideo',['data'=>$data]);
    }
    //接收视频并添加
    public function addVideoDo(Request $request){
        $small_id = $request->input('small_id');
        $video = $_FILES['video'];
        $res = (new CourseDYW)->addVideoDo($small_id,$video);
        if($res) return redirect('videoList');
    }
    //视频展示页面
    public function videoList(){
        $data = (new CourseDYW())->videoList();
        return view('backend.video.videoList',['data'=>$data]);
    }
    //视频删除
    public function delVideo($video_id){
        $res = (new CourseDYW())->delVideo($video_id);
        if($res) return redirect('videoList');
    }
}