<!DOCTYPE html>
<!-- saved from url=(0036)https://www.imooc.com/user/newforgot -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>慕课网-忘记密码</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <link rel="dns-prefetch" href="https://www.imooc.com/">
    <link rel="dns-prefetch" href="https://img.imooc.com/">
    <link rel="dns-prefetch" href="https://img.mukewang.com/">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.imooc.com/static/img/common/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.imooc.com/static/img/common/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.imooc.com/static/img/common/touch-icon-ipad-retina.png">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">
    <link rel="stylesheet" href="./frontend/mima/base.css" type="text/css">
    <link rel="stylesheet" href="./frontend/mima/common-less.css" type="text/css">
    <link rel="stylesheet" href="./frontend/mima/moco.min.css" type="text/css">
    <link rel="stylesheet" href="./frontend/mima/loginsign-less.css">
    <link rel="stylesheet" href="./frontend/mima/settings.css">

    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="./frontend/verify-master/css/verify.css">
<body>
<div id="head" class="sig-head">
    <a href="https://www.imooc.com/" target="_self" class="sig-img">慕课网</a>
</div>
<div id="main">
    <div class="wcontainer">
        <div class="wwrap">
            <div class="page-forgotpwd">
                <div class="page-forgotpwd-wrap">
                    <div class="js-forgotpwd-form-wrap">
                        <div class="fgtpaw-wrap">
                            <h2>忘记密码</h2>
                        </div>
                        <div class="link-info">
                            <h3>通过注册邮箱或手机号重设密码</h3>
                            <a class="right-back" href="https://www.imooc.com/user/newlogin/from_url/"> 返回立即登录</a>
                        </div>

                        <form id="js-forgot-form">
                            <p class="tips" id="js-g-forgot-error">&nbsp;</p>
                            <div class="form-control">
                                <input type="text" name="email" data-validate="email" class="ipt ipt-email emsilss" placeholder="请输入登录手机号/邮箱">
                                <p class="tips"></p>
                            </div>
                            <div id="mpanel1" >
                            </div>
                            <div>
                                <a href="javascript:void(0);" id="js-forgot-submit" class="btn btn-red link-btn btn-block tijiaos">提交</a>
                            </div>
                            <div class="faq-link">
                                收不到邮件？查看 <a href="https://www.imooc.com/about/faq?t=5&amp;id=6" target="_blank">常见问题</a>
                            </div>
                        </form>
                    </div>
                    <div class="js-forgot-result forgot-send-result">
                        <i></i>
                        <p class="">密码重设连接邮件发送成功</p>
                        <p class="get-info">已发送至<span class="xa-email"></span></p>
                        <a href="https://www.imooc.com/user/newlogin" class="btn btn-red link-btn back-regir js-email-add">去邮箱</a>
                        <p class="get-info" style="padding-top:20px">收不到邮件？查看<a href="https://www.imooc.com/about/faq?t=2" target="_blank" style="color: #f00000 !important"> 常见问题</a></p>
                        <!-- <p>
                        密码重设连接邮件已发送到您的邮箱<em></em><br/>
                        请注意查收并重新设置密码
                        </p>
                        <a href="/user/newlogin"  class="btn btn-green link-btn btn-block">返回登录</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="./frontend/verify-master/js/jquery.min.js"></script>

<!--引入JS-->
<script type="text/javascript" src="./frontend/verify-master/js/verify.min.js"></script>
<script>
    $(function(){
        $('#mpanel1').slideVerify({
            //滑动验证码type=1，拼图验证码type=2
            type : 1,
            //拼图验证码或选择验证码图片名称
            imgName : ['1.jpg', '2.jpg'],
            //拼图验证码的图片尺寸
            imgSize : {
                width: '400px',
                height: '200px'
            }
        });
        $(".tijiaos").click(function(){
            var username = $(".emsilss").val();
            $.ajax({
                type : "get",
                data: {username:username},
                url : "savePassword",
                dataType : 'json',
                success: function(msg){
                   if(msg['code'] ==6 ){
                        alert("发送成功，请登录你的邮箱进行查看");
                   }else{
                       alert("发送失败")
                   }
                }
            })
        })
  })
</script>
