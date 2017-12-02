<?php

require_once('./class.phpmailer.php');
include_once("class.smtp.php"); //可选,否则会在class.phpmailer.php中包含

$mail = new PHPMailer(true); //实例化PHPMailer类,true表示出现错误时抛出异常

$mail->IsSMTP(); // 使用SMTP

try {
  $mail->CharSet ="UTF-8";//设定邮件编码
  $mail->Host       = "smtp.163.com"; // SMTP server
  $mail->SMTPDebug  = 1;                     // 启用SMTP调试 1 = errors  2 =  messages
  $mail->SMTPAuth   = true;                  // 服务器需要验证
  $mail->Port       = 25;					//默认端口
  //$mail->Port       = 465;                    // ssl验证时默认端口
  //$mail->SMTPSecure = "ssl";     
/*
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";     
$mail->Port       = 465;                  
*/

  $mail->Username   = "18410178071"; //SMTP服务器的用户帐号
  $mail->Password   = "Wen5223488";        //SMTP服务器的用户密码
  $mail->AddReplyTo('18410178071@163.com', '回复'); //收件人回复时回复到此邮箱,可以多次执行该方法

 $mail->AddAddress('369367988@qq.com', '王'); //收件人如果多人发送循环执行AddAddress()方法即可 还有一个方法时清除收件人邮箱ClearAddresses()
  $mail->SetFrom('18410178071@163.com', '发件人');//发件人的邮箱
  //$mail->AddAttachment('./img/bloglogo.png');      // 添加附件,如果有多个附件则重复执行该方法
  $mail->Subject = '这里是邮件的标题' . date('Y-m-d H:i:s');

  //以下是邮件内容
  $mail->Body = '小弟性苦了' . date('His');
  $mail->IsHTML(true);

  //$body = file_get_contents('tpl.html'); //获取html网页内容
  //$mail->MsgHTML(str_replace('\\','',$body));


  $mail->Send();
  echo "Message Sent OK";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //从PHPMailer捕获异常
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
