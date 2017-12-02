<?php
namespace App;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Commom;
class Prof extends Commom
{
    protected $ftable = 'fession';
    protected $ctable = 'courses';
    //查询职业里面的全部数据
    public  function  Getfession()
    {
        return $data = DB::table($this->ftable)->get();
    }
    //查询出所有前端的视频
    public  function  Getcourses()
    {
        return $data = DB::table($this->ctable)->where('cour_is_free','=','1')->get();
    }
    //查询出web前端的视频
    public  function  Getweb($id)
    {
        return $data = DB::table($this->ctable)->where('z_id','=',$id)->get();
    }
}