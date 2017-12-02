<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Prof;
class ElasticController extends BaseController
{
    public function Elaindex($id = 0)
    {
        $model =new Prof();
        $fession = $model->Getfession();
        $cour = $model->Getcourses();
        switch($id){
            case 0:
                return view('frontend/zhiye/zhiye',['fession'=>$fession,'cour'=>$cour]);
            break;
            case 1:
                return view('frontend/zhiye/zhiye',['fession'=>$fession,'cour'=>$cour]);
                break;
            case $id:
                $cour = $model->Getweb($id);
                    return view('frontend/zhiye/zhiye',['fession'=>$fession,'cour'=>$cour]);
                break;
        }
    }
}