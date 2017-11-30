<?php
namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Commom extends Model
{
    //微博登录的$apple_id
    protected  $apple_id=3574957717;
    //微博登录的秘钥
    protected  $apple_key="62339d17c638ecf7d515cbbc9f26e94f";
    //回调地址
    protected  $redirect_uri = "http://www.frontend.com/weibo";
    //获取authorize
    protected  $authorize= "https://api.weibo.com/oauth2/authorize";
    //获取accessToken
    protected  $accessToken = "https://api.weibo.com/oauth2/access_token";
   //获取用户信息
    protected  $UserMessage = "https://api.weibo.com/2/users/show.json";
    /**
     * 查询友情链接
     */
    public function getlist()
    {
       echo "sa";
    }
    /**
     * 第三方登录 微博登录 获取authorize
     */
    public function LoginWeiboUrl(){
        $url = $this->authorize;
        $arr = array();
        $arr['client_id']=$this->apple_id;
        $arr['redirect_uri']=$this->redirect_uri;
        $arr['response_type']="code";
        $arr['state']=null;
        $arr['display']=null;
        return $url."?".http_build_query($arr);
    }

    /***
     * 微信获取accsssToken
     * 步骤一
     */
    public function AccessToken($code=""){
        $keys = array();
        $keys['code'] = $code;
        $keys['redirect_uri'] = $this->redirect_uri;;
        $token = $this->actionGetAccessToken( 'code', $keys );
        if($token){
                return json_encode(['code' => '1', 'state' =>$token]);
        }else{
            return json_encode(['code' => '3', 'state' => '获accessToken错误']);
        }
    }

    /**
     * 微信获取accsssToken
     *  步骤二
     * @param string $type
     * @param $keys
     * @return mixed|string
     *
     */
    public function actionGetAccessToken( $type = 'code', $keys ) {
        $params = array();
        $params['client_id'] = $this->apple_id;
        $params['client_secret'] = $this->apple_key;
        if ( $type === 'code' ) {
            $params['grant_type'] = 'authorization_code';
            $params['code'] = $keys['code'];
            $params['redirect_uri'] = $keys['redirect_uri'];
        } else {
            return json_encode(['code' => '3', 'state' => '获accessToken参数错误']);
        }
          return  $response = $this->actionOut($params);
    }

    /**
     * 微信获取accsssToken
     *  步骤二san
     * @param $params
     * @return mixed
     */
    public  function actionOut($params){
        $url = $this->accessToken;
        $ttt = $this->actionUrl($params);
        // 初始化一个 cURL 对象
        $ci = curl_init();
        curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($ci, CURLOPT_USERAGENT,'Sae T OAuth2 v0.1');
        curl_setopt($ci, CURLOPT_CONNECTTIMEOUT,30);
        curl_setopt($ci, CURLOPT_TIMEOUT,30);
        curl_setopt($ci, CURLOPT_RETURNTRANSFER,TRUE);//是否自动输出
        curl_setopt($ci, CURLOPT_ENCODING,"");

        //https方式调用，必须使用下面2行代码打开ssl安全校验。
        curl_setopt($ci, CURLOPT_SSL_VERIFYPEER,false);//重大作用
        if (version_compare(phpversion(), '5.4.0', '<')) {
            curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, 1);
        } else {
            curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, 2);
        }
        curl_setopt($ci, CURLOPT_POST, TRUE);
        curl_setopt($ci, CURLOPT_POSTFIELDS,$ttt);
        curl_setopt($ci, CURLOPT_URL,$url);
        $return = curl_exec($ci);
        curl_close ( $ci );
        $res = json_decode($return,true);
        $_SESSION['token'] = $res;
        return $res;
    }

    /**
     * 合并 链接
     * @param $arr
     * @return string
     */
    public  function  actionUrl($arr){
        return http_build_query($arr);
    }


    public  function actionUrll(){
        $arr = array();
        $url  = $this->UserMessage;
        $token = $_SESSION['token'];
        //print_r($token);die;
        $accessToken = $token['access_token'];
        $arr['access_token']=$accessToken;
        $arr['uid']=$token['uid'];
        return $url."?".http_build_query($arr);
    }
    /**
     * 获取用户信息
     */
    public function weiboUserMessage(){
        $res = $this->actionUrll();
        $str = file_get_contents($res);
        return $str;
    }

}