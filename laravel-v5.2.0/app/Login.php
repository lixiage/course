<?php
namespace App;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Commom;

class Login extends Commom
{
    protected $table = "admin_user";
    protected $dateFormat = false;

    public function  selectData($username,$password){
    $str =  DB::table($this->table)->where(['username'=>$username,'password'=>$password])->first();
    return $str;
    }

    /**
     *
     * 访问微博登录地址
     */
    public function  weiboUrl(){
      $url   = $this->LoginWeiboUrl();
      return $url;
    }

    /**
     * 微博
     * @param $code
     * 获取accessToken
     */
    public function WeiboAccessToken($code=""){
       $res  = $this->AccessToken($code);
       return $res;
    }
}