<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/12/5
 * Time: 19:32
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class Admin extends Model{

    protected $table = 'admin_user';

    /**
     * @param $id
     * @return mixed
     * 获取当前用户的信息
     */
    public function getThisUserInfo($id){
        $info = DB::table($this->table)->where(['admin_id'=>$id])->first();
        if(empty($info->autograph)){
            $info->autograph = '这位同学很懒，木有签名的说～';
        }
        return $info;
    }

}