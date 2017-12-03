<?php
namespace App;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Commom;
class Fight extends Commom{
        protected $ctable = 'course_classify';
        protected $fight = 'fight';
        protected $courses = 'courses';
    //查询出所有分类表中的数据
    public  function  Getclass()
    {
        return $data = DB::table($this->ctable)->get();
    }
    //查询出所有实战的种类
    public  function  Getf()
    {
        return $data = DB::table($this->fight)->get();
    }
    //查询出所有的实战视频
    public function  Getcou()
    {
        return $data = DB::table($this->courses)->where('f_status','=',1)->get();
    }
    //查询出实战种类下面的视频
    public  function  Getfd($id){
        return $data = DB::table($this->courses)->where('fd_id','=',$id)->get();
    }
    //按照实战查询分类
    public  function  GetFclass($id){
        return $data = DB::table($this->ctable)->where('f_id','=',$id)->get();
    }
    //查询出分类下面的视频
    public  function  GetFc($id)
    {
        return $data = DB::table($this->courses)->where('fc_id', '=', $id)->get();
    }
}