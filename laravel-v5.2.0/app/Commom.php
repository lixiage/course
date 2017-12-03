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
    //发送的内容
    protected $content;
    //发送给谁
    protected $cliendName="369367988@qq.com";
    //邮件的标题
    protected $subject = "你的名字我的心";
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

    /**
     * 发送邮件
     */
    public  function SendMail(){
        require("./Mail/class.smtp.php");
        require("./Mail/class.phpmailer.php");
        $mail = new \PHPMailer(true); //实例化PHPMailer类,true表示出现错误时抛出异常
        $mail->IsSMTP(); // 使用SMTP
        try {
            $mail->CharSet ="UTF-8";//设定邮件编码
            $mail->Host       = "smtp.163.com"; // SMTP server
            $mail->SMTPDebug  = 1;                     // 启用SMTP调试 1 = errors  2 =  messages
            $mail->SMTPAuth   = true;                  // 服务器需要验证
            $mail->Port       = 25;					//默认端口
            $mail->Username   = "18410178071"; //SMTP服务器的用户帐号
            $mail->Password   = "Wen5223488";        //SMTP服务器的用户密码
            $mail->AddReplyTo('18410178071@163.com', '回复'); //收件人回复时回复到此邮箱,可以多次执行该方法
            $mail->AddAddress($this->cliendName, ''); //收件人如果多人发送循环执行AddAddress()方法即可 还有一个方法时清除收件人邮箱ClearAddresses()
            $mail->SetFrom('18410178071@163.com', '发件人');//发件人的邮箱
            //$mail->AddAttachment('./img/bloglogo.png');      // 添加附件,如果有多个附件则重复执行该方法
            $mail->Subject = $this->subject . date('Y-m-d H:i:s');
            //以下是邮件内容
            $mail->Body = $this->content;
            $mail->IsHTML(true);
            $mail->Send();
            return json_encode(['code'=>6,'content'=>"发送成功"]);
        } catch (\phpmailerException $e) {
            return json_encode(['code'=>4,'content'=>$e->errorMessage()]);
        } catch (\Exception $e) {
            return json_encode(['code'=>5,'content'=>$e->getMessage()]);
        }
    }

    /**
     * 无限极分类
     */
    public function  typesList($info,$parent_id=0,$leve=0){
       // echo "afsfasdf";die;
            static $result = array();
            foreach($info as $key=>$val){
                if($parent_id == $val->parent_id){
                    $val->leve = $leve;
                    $result[] = $val;
                    $this->typesList($info,$val->pid,$leve+1);
                }
            }
            return $result;
    }
    /*
     * 递归
     */
    //递归查询
    public function asArray($data){
        $arr = array();
        foreach($data as $key=>$val){
            $arr[] = (array)$val;
        }
        return $arr;
    }

    public  function showSon($data,$parentId=0){
       // print_r($data);die;
        $arr =array();
        foreach($data as $key=>$val)
        {
            if($val['parent_id']==$parentId){
                $arr[$key]=$val;
                $arr[$key]["son"]=$this->showSon($data,$val['pid']);
            }
        }
        return $arr;
    }
}