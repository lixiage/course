<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Free;
use Illuminate\Support\Facades\Cache;
class FreeController extends BaseController
{
    public function __construct()
    {
        session_start();
        header("content-type:text/html;charset=utf-8");
    }
    public function Cache($string){
        $Cdata = Cache::get("'".$string."'");
        if($Cdata){
            $data = $Cdata;
        }else{
            $data = [];
        }
        return $data;
    }

    public function Freeindex($id = 0)
    {
        //方向
        $model = new Free();
        $string = 'data';
        $data = $this->Cache($string);
        if(empty($data)){
            $data = $model->Getdir();
            Cache::put("'".$string."'",$data,10);
        }
//        dd($data);die;
        //头部
        $hea = $model->GetHea();
        //类型
        $string = 'a';
        $a = $this->Cache($string);
        $model = new Free();
        if(empty($a)){
            $a = $model->Gettype();
            Cache::put("'".$string."'",$a,10);
        }
        $Cdata = Cache::pull('a');
        $images = isset($Cdata)?$Cdata:$model->Getimages();
        Cache::put('images',$images,10);
        switch($id){
            case 0;
                //分类
                $Cdata = Cache::pull('a');
                $arr = isset($Cdata)?$Cdata:$model->Getclass();
                Cache::put('arr',$arr,10);
                //视屏图片
                $Cdata = Cache::pull('a');
                $images = isset($Cdata)?$Cdata:$model->Getimages();
                Cache::put('images',$images,10);
                return view('frontend/Free/index',['hea'=>$hea,'data'=>$data,'type'=>$a,'arr'=>$arr,'images'=>$images]);
                break;
            case 1:
//                $arr = $model->Getclass();
                $Cdata = Cache::pull('a');
                $arr = isset($Cdata)?$Cdata:$model->Getclass();
                Cache::put('arr',$arr,10);
                return view('frontend/Free/index',['hea'=>$hea,'arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                break;
            case $id:
                $_SESSION['id'] = $id;
//                $arr = $model->Parentclass($id);
                $Cdata = Cache::pull('a');
                $arr = isset($Cdata)?$Cdata:$model->Parentclass($id);
                Cache::put('arr',$arr,10);
//                $images =$model->Getimgdir($id);
                $Cdata = Cache::pull('a');
                $images = isset($Cdata)?$Cdata:$model->Getimgdir($id);
                Cache::put('images',$images,10);
                return view('frontend/Free/index',['hea'=>$hea,'arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                break;
        }
    }
    public function sclass($id=0)
    {
        $model = new Free;
//            $data = $model->Getdir();
        $hea = $model->GetHea();
        $Cdata = Cache::pull('a');
        $data = isset($Cdata)?$Cdata:$model->Getdir();
        Cache::put('data',$data,10);

//            $a = $model->Gettype();

        $Cdata = Cache::pull('a');
        $a = isset($Cdata)?$Cdata:$model->Gettype();
        Cache::put('a',$a,10);


        if(isset($_SESSION['id'])){
            $dirid = $_SESSION['id'];
//            $images = $model->Getimgdir($dirid);
//            $Cdata = Cache::pull('a');
            $images = $model->Getimgdir($dirid);
//            Cache::put('images',$images,10);

//            $dirid = $_SESSION['id'];
            $arr = $model->Getparentclass($dirid);

            $Cdata = Cache::pull('a');
            $arr = isset($Cdata)?$Cdata:$model->Getparentclass($dirid);
            Cache::put('arr',$arr,10);

            switch($id){
                case 0 ;
                    return view('frontend/Free/index',['hea'=>$hea,'arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                    break;
                case $id;
                    $images = $model->Getimgclass($id);
                    return view('frontend/Free/index',['hea'=>$hea,'arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
                    break;
            }
        }else{
            $string = 'empt';
            $arr = $this->Cache($string);
            $model = new Free();
            if(empty($arr)){
                $arr = $model->Getclass();
                Cache::put("'".$string."'",$arr,10);
            }

            $string = 'nempt';
            $images = $this->Cache($string);
            $model = new Free();
            if(empty($images)){
                $images = $model->Getimgclass($id);
                Cache::put("'".$string."'",$images,10);
            }
            $data =$model->Getdir();
            return view('frontend/Free/index',['hea'=>$hea,'arr'=>$arr,'type'=>$a,'images'=>$images,'data'=>$data]);
        }
    }
}