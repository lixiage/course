<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Fight;
class FightController extends BaseController{
        public function  __construct()
        {
            session_start();
        }
        //实战的种类
        public function Findex($id = 0)
        {
            $model = new Fight();
            $class = $model->Getclass();
            $fight = $model->Getf();
            $courses = $model->Getcou();
            switch($id){
                case 0;
                    return view('frontend/Fight/index',['class'=>$class,'fight'=>$fight,'courses'=>$courses]);
                    break;
                case 1;
                    $_SESSION['id']=$id;
                    return view('frontend/Fight/index',['class'=>$class,'fight'=>$fight,'courses'=>$courses]);
                    break;
                case $id;
                    $_SESSION['id']=$id;
                    $class = $model->GetFclass($id);
                    $courses = $model->Getfd($id);
                    return view('frontend/Fight/index',['class'=>$class,'fight'=>$fight,'courses'=>$courses]);
                    break;
            }
        }
            //实战下面的分类
            public function Findexc($id = 0)
        {
            $did = $_SESSION['id'];
            $model = new Fight();
            $fight = $model->Getf();
            $courses = $model->GetFc($id);
            $class = $model->GetFclass($did);
            return view('frontend/Fight/index',['class'=>$class,'fight'=>$fight,'courses'=>$courses]);
        }


}