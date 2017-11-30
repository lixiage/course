<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
class FreeController extends BaseController
{
    public function Freeindex($id = 0)
    {
        //方向
        $data = DB::table('course_direction')->get();
        //类型
        $type = DB::select("select type_id,type_name from course_type");
        $all = [];
        foreach($type as $k=>$v){
            $all[$k]=(array)$v;
        }
        $val = [];
        foreach($all as $k=>$v){
            $val[] = $v['type_name'];
        }
        $a = array_unique($val);
        switch($id){
            case 0;
                header("content-type:text/html;charset=utf-8");
                //分类
                $arr = DB::select("select * from course_classify");
                //视屏图片
                $images = $users = DB::table('courses')->paginate(5);
                $img = [];
                foreach($images as $k=>$v){
                    $img[] = (array)$v;
                }
                return view('frontend/Free/index',['data'=>$data,'type'=>$a,'arr'=>$arr,'images'=>$images]);
                break;
            case 1:
                $arr = DB::select('select * from course_classify');
                return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                break;
            case $id:
//                echo $id;die;
                session_start();
                $_SESSION['id'] = $id;
                $arr = DB::select("select * from course_classify where class_parent_id = $id");
                $images = $users = DB::table('courses')->where('dir_id','=',$id)->paginate(5);
                return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                break;
        }
    }
        public function sclass($id=0)
        {
            header("content-type:text/html;charset=utf-8");
            $data = DB::table('course_direction')->get();
            $type = DB::select("select type_id,type_name from course_type");
            $images = $users = DB::table('courses')->paginate(5);
            //分类
            $all = [];
            foreach($type as $k=>$v){
                $all[$k]=(array)$v;
            }
            $val = [];
            foreach($all as $k=>$v){
                $val[] = $v['type_name'];
            }
            $a = array_unique($val);
            session_start();
            $dirid = $_SESSION['id'];
            $arr = DB::select("select * from course_classify where class_parent_id = $dirid");
                switch($id){
                    case 0 ;
                        return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                    break;
                    case $id;;
                        $dirid = $_SESSION['id'];
                        $images = $users = DB::table('courses')->where('class_id','=',$id)->paginate(5);
                        return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                    break;
                }
        }
}