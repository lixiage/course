<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Free;
class FreeController extends BaseController
{
    public function __construct()
    {
        session_start();
        header("content-type:text/html;charset=utf-8");
    }
    public function Freeindex($id = 0)
    {
        $model = new Free;
        //方向
        $data = $model->Getdir();
        //类型
        $a = $model->Gettype();
        $images = $model->Getimages();
        switch($id){
            case 0;
                //分类
                $arr = $model->Getclass();
                //视屏图片
                $images = $model->Getimages();
                return view('frontend/Free/index',['data'=>$data,'type'=>$a,'arr'=>$arr,'images'=>$images]);
                break;
            case 1:
                $arr = $model->Getclass();
                return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                break;
            case $id:
                $_SESSION['id'] = $id;
                $arr = $model->Parentclass($id);
                $images =$model->Getimgdir($id);
                return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                break;
        }
    }
    public function sclass($id=0)
        {
            $model = new Free;
            $data = $model->Getdir();
            $a = $model->Gettype();
            $dirid = $_SESSION['id'];
            $images = $model->Getimgdir($dirid);
            $dirid = $_SESSION['id'];
            $arr = $model->Getparentclass($dirid);
                switch($id){
                    case 0 ;
                        return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                    break;
                    case $id;
                        $images = $model->Getimgclass($id);
                        return view('frontend/Free/index',['arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                    break;
                }
        }
}