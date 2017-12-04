<?php
namespace app;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseDirection  方向类
 * @package app
 */
class CourseDYW extends Model
{
    protected $directionTable='course_direction';//方向表
    protected $classifyTable='course_classify';//分类表
    protected $typeTable='course_type';//类型表
    protected $courseTable='courses';//课程表
    protected $chapterTable='course_chapter';//章节表
    protected $smallMatterTable='course_small_matter';//小节表
    protected $courseVideoTable='course_video';//视频表
    protected $relationCourseChapterTable='relation_course_chapter';//课程章节关联表
    protected $relationChapterSmallTable='relation_chapter_small';//章节小节关联表
    protected $relationCourseSmallTable='relation_course_small';//课程小节关联表


    //接收方向数据并添加
    public function addDirectionDo($data){
        $dir_addtime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->directionTable)->insert(
            ['dir_name'=>$data['dir_name'],'dir_addtime'=>$dir_addtime]
        );
        return $res;
    }

    //方向数据查询
    public function directionList(){
        $res = DB::table($this->directionTable)->simplePaginate(2);
        return $res;
    }

    //方向删除
    public function delDirection($dir_id){
        $res = DB::table($this->directionTable)->where('dir_id','=',$dir_id)->delete();
        return $res;
    }

    //修改方向名称
    public function editDirection($dir_id,$dir_name,$dir_updatetime){
        $res = DB::table($this->directionTable)->where('dir_id',$dir_id)->update(['dir_name'=>$dir_name,'dir_updatetime'=>$dir_updatetime]);
        return $res;
    }

    //修改方向状态
    public function editDirectionStatus($dir_id,$dir_status){
        if($dir_status == 0){
            $dir_status = 1;
        }else{
            $dir_status = 0;
        }
        $dir_updatetime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->directionTable)->where('dir_id',$dir_id)->update(['dir_status'=>$dir_status,'dir_updatetime'=>$dir_updatetime]);
        return $res;
    }



    //获取方类表信息
    public function addClassify(){
        $res = DB::table($this->classifyTable)->get();
        return $res;
    }

    //接收分类数据并添加
    public function addClassifyDo($data){
        $class_addtime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->classifyTable)->insert(
            ['class_name'=>$data['class_name'],'class_parent_id'=>$data['class_parent_id'],'class_addtime'=>$class_addtime]
        );
        return $res;
    }

    //分类列表展示(查询分类表和方向表的数据)
    public function classifyList(){
        $res = DB::table($this->classifyTable)
            ->leftJoin('course_direction','course_classify.class_parent_id','=','course_direction.dir_id')
            ->simplePaginate(5);
        return $res;
    }

    //删除分类
    public function delClassify($class_id){
        $res = DB::table($this->classifyTable)->where('class_id','=',$class_id)->delete();
        return $res;
    }

    //修改分类名称
    public function editClassify($class_id,$class_name){
        $class_updatetime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->classifyTable)->where('class_id',$class_id)->update(['class_name'=>$class_name,'class_updatetime'=>$class_updatetime]);
        return $res;
    }

    //修改分类状态
    public function editClassifyStatus($class_id,$class_status){
        if($class_status == 0){
            $class_status = 1;
        }else{
            $class_status = 0;
        }
        $class_updatetime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->classifyTable)->where('class_id',$class_id)->update(['class_status'=>$class_status,'class_updatetime'=>$class_updatetime]);
        return $res;
    }



    //查询方向表数据
    public function addDirection(){
        $res = DB::table($this->directionTable)->get();
        return $res;
    }

    //查询类型表数据(给类型去重)
    public function addType(){
        $res = DB::table($this->typeTable)->get();
        //        $arr = [];
//        foreach($typeData as $v){
//            $arr[] = (array)$v;
//        }
//        foreach($arr as $k=>$v){
//            $v['type_id']
//        }
//        print_r($arr);die;
        return $res;
    }

    //接收类型数据并添加
    public function addTypeDo($data){
        $type_addtime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->typeTable)->insert(
            ['type_name'=>$data['type_name'],'type_parent_id'=>$data['dir_id'],'type_addtime'=>$type_addtime]
        );
        return $res;
    }

    //类型列表展示页面(如何查找类型的父类)
    public function typeList(){
        $res = DB::table($this->typeTable)->simplePaginate(5);
        //        $arr = [];
//        foreach($typeData as $v){
//            $arr[] = (array)$v;
//        }
//
//        foreach($arr as $k=>$v){
//            $data = DB::table("course_classify")->where('class_id='.$v['type_parent_id'])->get();
//            foreach($data as $key=>$val){
//                $v['type_parent_id'] =
//            }
//        }
//        print_r($arr);die;
//            ->leftJoin('course_classify','course_type.type_parent_id','=','course_classify.class_parent_id')
//            ->leftJoin('course_direction','course_type.type_parent_id','=','course_direction.dir_id')
//            ->get();
        return $res;
    }

    //类型删除
    public function delType($type_id){
        $res = DB::table($this->typeTable)->where('type_id','=',$type_id)->delete();
        return $res;
    }

    //修改类型名称
    public function editType($type_id,$type_name){
        $type_updatetime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->typeTable)->where('type_id',$type_id)->update(['type_name'=>$type_name,'type_updatetime'=>$type_updatetime]);
        return $res;
    }

    //修改类型状态
    public function editTypeStatus($type_id,$type_status){
        if($type_status == 0){
            $type_status = 1;
        }else{
            $type_status = 0;
        }
        $type_updatetime = date("Y-m-d H:i:s",time());
        $res = DB::table($this->typeTable)->where('type_id',$type_id)->update(['type_status'=>$type_status,'type_updatetime'=>$type_updatetime]);
        return $res;
    }

    //添加课程
    public function addCourseDo($data,$image){
        $cour_addtime = date("Y-m-d H:i:s",time());
        //上传图片
        $dir= "backend/images/DYW/";
        $baseDir = $dir.Date("Y_m_d",time());
        if(!is_dir($baseDir)){
            mkdir("$baseDir",0777,true);
        }
        $tmpFile = $image['tmp_name'];

        $ext = substr($image['name'],strrpos($image['name'],'.'));

        $newFileName = $baseDir."/".md5(time().rand(1,1000)).$ext;

        move_uploaded_file($tmpFile,$newFileName);

        $res = DB::table($this->courseTable)->insert(
            ['cour_name'=>$data['cour_name'],'cour_money'=>$data['cour_money'],'cour_content'=>$data['cour_content'],'cour_image'=>$newFileName,'cour_level'=>$data['cour_level'],'cour_is_free'=>$data['cour_is_free'],'dir_id'=>$data['dir_id'],'class_id'=>$data['class_id'],'type_id'=>$data['type_id'],'cour_addtime'=>$cour_addtime]
        );
        return $res;
    }

    //查询课程表及关联表所有信息
    public function courseList(){
        $res = DB::table($this->courseTable)
                ->join($this->directionTable,$this->courseTable.'.dir_id','=',$this->directionTable.'.dir_id')
                ->join($this->classifyTable,$this->courseTable.'.class_id','=',$this->classifyTable.'.class_id')
                ->join($this->typeTable,$this->courseTable.'.type_id','=',$this->typeTable.'.type_id')
                ->Paginate(5);
        return $res;
    }

    //查询课程表信息
    public function addCourse(){
        $res = DB::table($this->courseTable)->get();
        return $res;
    }

    //删除课程
    public function delCourse($cour_id){
        $res = DB::table($this->courseTable)->where('cour_id','=',$cour_id)->delete();
        return $res;
    }

    //查询课程表中的一条
    public function editCourse($cour_id){
        $res = DB::table($this->courseTable)->where('cour_id',$cour_id)->first();
        return $res;
    }

    //修改课程信息
    public function editCourseDO(){
    }

    //添加章节
    public function addChapterDo($data){
        $chap_addtime = date("Y-m-d H:i:s",time());
        $chapterId = DB::table($this->chapterTable)->insertGetId(['chap_name'=>$data['chap_name'],'chap_addtime'=>$chap_addtime]);
        if($chapterId){
            $res = DB::table($this->relationCourseChapterTable)->insert(['cour_id'=>$data['cour_id'],'chap_id'=>$chapterId]);
        }
        return $res;
    }

    //查询章节表和课程表信息
    public function chapterList(){
        $arr = [];
        $chapData = DB::table($this->chapterTable)
            ->leftJoin($this->relationCourseChapterTable,$this->chapterTable.'.chap_id','=',$this->relationCourseChapterTable.'.chap_id')
            ->get();
        $courData = DB::table($this->courseTable)
            ->rightJoin($this->relationCourseChapterTable,$this->courseTable.'.cour_id','=',$this->relationCourseChapterTable.'.cour_id')
            ->get();
        $one = [];
        foreach($chapData as $k=>$v){
            $one[] = (array)$v;
        }
        $two = [];
        foreach($courData as $k=>$v){
            $two[] = (array)$v;
        }
        for($i=0;$i<count($chapData);$i++){
            $arr[] = array_merge($one[$i],$two[$i]);
        }
        return $arr;
    }

    //删除章节
    public function delChapter($chap_id){
        $res = DB::table($this->chapterTable)->where('chap_id','=',$chap_id)->delete();
        return $res;
    }

    //查询章节表信息
    public function addChapter(){
        $res = DB::table($this->chapterTable)->get();
        return $res;
    }

    //添加小节
    public function addSmallMatterDo($data){
        $small_addtime = date("Y-m-d H:i:s",time());
        $smallId = DB::table($this->smallMatterTable)->insertGetId(['small_name'=>$data['small_name'],'small_addtime'=>$small_addtime]);
        if($smallId){
            //将小节添加的id和章节id添加到章节小节关联表中
            DB::table($this->relationChapterSmallTable)->insert(['chap_id'=>$data['chap_id'],'small_id'=>$smallId]);
            //将小节id和课程id添加到课程小节关联表中
            $res = DB::table($this->relationCourseSmallTable)->insert(['cour_id'=>$data['cour_id'],'small_id'=>$smallId]);
        }
        return $res;
    }

    //查询小节、章节表和课程表信息
    public function smallMatterList(){
        $smallMatterData = DB::table($this->relationChapterSmallTable)
                         ->leftJoin($this->smallMatterTable,$this->relationChapterSmallTable.'.small_id','=',$this->smallMatterTable.'.small_id')
                         ->get();
        $chapterData = DB::table($this->relationChapterSmallTable)
                     ->leftJoin($this->chapterTable,$this->relationChapterSmallTable.'.chap_id','=',$this->chapterTable.'.chap_id')
                     ->get();
        $courseData = DB::table($this->relationCourseSmallTable)
                    ->leftJoin($this->courseTable,$this->relationCourseSmallTable.'.small_id','=',$this->courseTable.'.cour_id')
                    ->get();
        $one = [];
        foreach($smallMatterData as $k=>$v){
            $one[] = (array)$v;
        }
        $two = [];
        foreach($chapterData as $k=>$v){
            $two[] = (array)$v;
        }
        $three = [];
        foreach($courseData as $k=>$v){
            $three[] = (array)$v;
        }
        for($i=0;$i<count($smallMatterData);$i++){
            $arr[] = array_merge($one[$i],$two[$i],$three[$i]);
        }
        return $arr;
    }

    //删除小节
    public function delSmallMatter($small_id){
        DB::table($this->relationCourseSmallTable)->where('small_id',$small_id)->delete();
        DB::table($this->relationChapterSmallTable)->where('small_id',$small_id)->delete();
        $res = DB::table($this->smallMatterTable)->where('small_id',$small_id)->delete();
        return $res;
    }

    //查询小节表信息
    public function addSmallMatter(){
        $res = DB::table($this->smallMatterTable)->get();
        return $res;
    }

    //接收视频信息并添加
    public function addVideoDo($small_id,$fileName){
        $newFileName = 'backend/upload/'.$fileName;
        $video_addtime = time();
        $res = DB::table($this->courseVideoTable)->insert(
            ['small_id'=>$small_id,'video_path'=>$newFileName,'video_addtime'=>$video_addtime]
        );
        return $res;
    }

    //查询视频表信息
    public function videoList(){
        $res = DB::table($this->courseVideoTable)
               ->join($this->smallMatterTable,$this->courseVideoTable.'.small_id','=',$this->smallMatterTable.'.small_id')
               ->get();
        foreach($res as $k=>$v){
            $v->video_addtime = date("Y-m-d H:i:s",$v->video_addtime);
        }
        return $res;
    }
    //删除视频
    public function delVideo($video_id){
        $res = DB::table($this->courseVideoTable)->where('video_id',$video_id)->delete();
        return $res;
    }
}