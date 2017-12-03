<?php
namespace App;

use Illuminate\Support\Facades\DB;
use App\Commom;

class UserMange extends Commom
{

    public  function typeLists(){
        $info = DB::select("select * from ci_privilege");
        return $info;
    }
    public function  DiGui($info,$parnet_id,$leve){
        $info = $this->typesList($info,$parnet_id,$leve);
        return $info;
    }
}