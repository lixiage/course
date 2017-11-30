<?php
namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Commom extends Model
{
    //微博登录的key和秘钥
    protected  $apple_id;
    protected  $apple_key;
    /**
     * 查询友情链接
     */
    public function getlist()
    {
       echo "sa";
    }
    /**
     * 第三方登录 微博登录
     */
    public function LoginWeiboUrl(){
        $url = "https://api.weibo.com/oauth2/authorize";
        $arr = array();
        $arr['client_id']="3574957717";
        $arr['redirect_uri']="http://www.frontend.com/index";
        $arr['response_type']="code";
        $arr['state']=null;
        $arr['display']=null;
        return $url."?".http_build_query($arr);
    }

}