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
    protected $directionTable='course_direction';
    protected $classifyTable='course_classify';
    protected $typeTable='course_type';
    protected $courseTable='courses';

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

    //查询课程表信息
    public function courseList(){
        $res = DB::table($this->courseTable)
                ->join($this->directionTable,$this->courseTable.'.dir_id','=',$this->directionTable.'.dir_id')
                ->join($this->classifyTable,$this->courseTable.'.class_id','=',$this->classifyTable.'.class_id')
                ->join($this->typeTable,$this->courseTable.'.type_id','=',$this->typeTable.'.type_id')
                ->simplePaginate(5);
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
}