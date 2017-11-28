<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class LoginController extends  Controller
{
    public  function index(){
        $info = DB::table("ooo")->first();
       // var_dump($info);die;
        echo "222";
    }
}