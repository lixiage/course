<?php
namespace App;

use Illuminate\Support\Facades\DB;

class Password extends Commom
{
    protected $table = "admin_user";
    protected $yanzhi = 123;
    protected $url = "http://www.frontend.com/password_url";

    protected $content;
    protected $subject;
    protected $email_l;
    protected  $cliendName;

    /**
     * @param $name
     * @return \Illuminate\Http\JsonResponse
     * 查询时否有这个邮箱
     */
    public  function SelectData($name){
        $info = DB::table($this->table)->where(['pname'=>$name])->first();
        if(empty($info)){
            return response()->json(['code' => '1', 'content' => '邮箱不存在']);
        }
        $this->email_l = $name;
        $this->cliendName = $name;
        $time = time();
        $arr = array($name,$this->yanzhi,$time);
        $str = base64_encode(json_encode($arr));
        $url = $this->url."?apple_id=".$str;
        $this->content ="尊敬的慕课网用户，您好！您在访问慕课网时点击了“忘记密码”链接，这是一封密码重置确认邮件。您可以通过点击以下链接重置帐户密码:为保障您的帐号安全，请在1小时内点击该链接，您也可以将链接复制到浏览器地址栏访问。 若如果您并未尝试修改密码，请忽略本邮件，由此给您带来的不便请谅解"."<br/>".$url;
        $this->subject = "[慕课网]找回您的账户密码";
        $res =  $this->SendMail();
        return $res;
    }
    /**
     * 修改密码页面
     */
    public function SelectDatas($apple_id){
        //echo $apple_id."<br/>";
        $info = json_decode(base64_decode($apple_id));
        //var_dump($info);
        list($email,$script,$pretime) = $info;
        $arr = array($email,$this->yanzhi,$pretime);
        $str = base64_encode(json_encode($arr));
        if($str!=$apple_id){
            return json_encode(['code'=>10,'content'=>"输入的参数有误"]);
        }
        if(time()-$pretime>3600){
            return json_encode(['code'=>7,'content'=>"时间已过期"]);
        }elseif($this->yanzhi!=$script){
            return json_encode(['code'=>8,'content'=>"请重新数入"]);
        }
        $info = DB::table($this->table)->where(['pname'=>$email])->first();
        if(empty($info)){
            return json_encode(['code'=>9,'content'=>"邮箱不存在 "]);
        }
        return json_encode(['code'=>1,"content"=>$email]);
    }
    /**
     * 正式修改密码
     */
    public function updateSave($post){
        $email = $post['email'];
        $password = $post['password'];
        $sql = "update ".$this->table." set password = '$password' where pname='$email'";
        $res = DB::update($sql);
        if($res){
            return json_encode(['code'=>1,"content"=>"修改成功"]);
        }else{
            return json_encode(['code'=>0,"content"=>"修改失败"]);
        }
    }
}