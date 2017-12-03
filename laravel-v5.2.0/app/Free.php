<?php
namespace App;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Commom;

class Free extends Commom
{
        protected $dtable = "course_direction";
        protected $ctable = "course_classify";
        protected $ttable = "course_type";
        protected $imgtable = "courses";
        //获取方向的全部信息
        public function Getdir(){
               return $data = DB::table($this->dtable)->get();
        }
    //获取类型的数据
        public  function Gettype()
        {
            $type = DB::table($this->ttable)->select('type_id','type_name')->get();
            $all = [];
            foreach($type as $k=>$v){
                $all[$k]=(array)$v;
            }
            $val = [];
            foreach($all as $k=>$v){
                $val[] = $v['type_name'];
            }
          return  $a = array_unique($val);
        }
    //获取所有的分类
        public function Getclass()
        {
            return $data = DB::table($this->ctable)->get();
        }
    //获取所有的视屏
        public function Getimages()
        {
            return   $data = DB::table($this->imgtable)->paginate(5);
        }
    //按照父级id获取数据
        public function Parentclass($id)
        {
            return $data = DB::table($this->ctable)->where('class_parent_id','=',$id)->get();
        }
    //按照方向查出视屏
        public function Getimgdir($id)
        {
            return $data = DB::table($this->imgtable)->where('dir_id','=',$id)->paginate(5);
        }
    //按照父级查出分类中的数据
        public function Getparentclass($id)
        {
            return $data = DB::table($this->ctable)->where('class_parent_id','=',$id)->get();
        }
    //按照分类查出视频
        public function Getimgclass($id)
        {
            return DB::table($this->imgtable)->where('class_id','=',$id)->paginate(5);
        }
}