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
     * 访问微博登录地址
     */
    public function  weiboUrl(){
      $url   = $this->LoginWeiboUrl();
      return $url;
    }

    /**
     * @param $id
     * @return array
     * 验证用户是否有积分   并且  今天的提问次数
     */
    public function verify($id){
        $userInfo = DB::table($this->table)->where(['admin_id'=>$id])->first();
        $today = date('Y-m-d');
        $question = DB::table('question')->where(['uid'=>$id])->whereBetween('addtime',[$today.' 00:00:00',$today.' 23:59:59'])->get();

        //code  0：成功（不扣分） 1:错误  2：成功（扣分-2）
        if($userInfo->integral==0||($userInfo->integral - 2)<0){
            return ['code'=>1,'msg'=>'您的积分不足'];
        }
        //判断今天是否提问超过两次
        if(count($question)<=2){
            return ['code'=>0,'msg'=>'免费'];
        }else{
            return ['code'=>2,'msg'=>'付费'];
        }
    }

    /**
     * 微博
     * @param string $code
     * @return string
     * 获取accessToken
     */
    public function WeiboAccessToken($code=""){
       $res  = $this->AccessToken($code);
       return $res;
    }
}