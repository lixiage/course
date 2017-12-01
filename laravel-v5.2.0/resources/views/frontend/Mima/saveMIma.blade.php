<!DOCTYPE html>
<!-- saved from url=(0163)http://www.imooc.com/user/resetpasspage?active=MzY5MzY3OTg4QHFxLmNvbSwxNTEyMDgxNzc0&uuid=NjIwNzA4NA==&linkid=MjA5ODY1OQ==&checkstr=MTUxMjA4MTc3NDYyMDcwODRlbG1zcWs= -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>慕课网</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">
<link rel="dns-prefetch" href="http://www.imooc.com/">
<link rel="dns-prefetch" href="http://img.imooc.com/">
<link rel="dns-prefetch" href="http://img.mukewang.com/">
<link rel="apple-touch-icon" sizes="76x76" href="http://www.imooc.com/static/img/common/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://www.imooc.com/static/img/common/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://www.imooc.com/static/img/common/touch-icon-ipad-retina.png">
<meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
<meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">
<link rel="stylesheet" href="./frontend/savePassword/base.css" type="text/css">
<link rel="stylesheet" href="./frontend/savePassword/common-less.css" type="text/css">
<link rel="stylesheet" href="./frontend/savePassword/moco.min.css" type="text/css">
<link rel="stylesheet" href="./frontend/savePassword/login-regist.css">
<link rel="stylesheet" href="./frontend/savePassword/settings.css">
<script charset="utf-8" async="" src="./frontend/savePassword/jquery.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/seajs-text.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/common.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/string.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/userinfo.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/cart.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/cookie.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/suggest.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/store.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/moco.min.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/json.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/im.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/resetpasspage.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/socket.io.min.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/placeholder.js.下载"></script><script charset="utf-8" async="" src="./frontend/savePassword/validate.js.下载"></script></head>
<body>
<div id="head" class="sig-head">
    <a href="http://www.imooc.com/" target="_self" class="sig-img">你的名字我的心</a>
</div>
<div id="main">
<div class="wcontainer">
    <div class="wwrap wrap-boxes">
        <div class="pwd-reset-box">
            <div class="wel-hd">
                <h1 class="form-h1">重设密码</h1>
                <h2 class="user-email">帐号：<span id="ppppppp"><?php echo $email ?></span></h2>
            </div>
            <form action="passwordSuccsee" method="post" id="pagePwReset">
                <div class="wlfg-box">
                    <div class="rlf-group">
                        <input type="password" data-validate="password" name="newpass" id="newpass" class="ipt rlf-input-pwd" placeholder="请输入新密码"><!-- 请输入6-16位密码，区分大小写，不能使用空格！ -->
                        <p class="rlf-tip-wrap"></p>
                    </div>
                </div>
                <div class="wlfg-box">
                    <div class="rlf-group">
                        <input type="password" name="confirm" id="confirm" class="ipt rlf-input-pwd requires" placeholder="请确认新密码">
                        <p class="rlf-tip-wrap"></p><!-- 请输入确认密码！ -->
                    </div>
                </div>
                <div class="wlfg-box">
                    <label class="label-name" for=""></label>
                    <div class="rlf-group">
                        <span id="reset-submit" hidefocus="true" data-dismiss="modal" aria-role="button" class="btn-red btn-block">提交</span>
                    </div>
                </div>
                <input id="hideVal" class="hideVal" type="hidden" name="active" value="MzY5MzY3OTg4QHFxLmNvbSwxNTEyMDgxNzc0">
                <input id="hideVal" class="hideVal" type="hidden" name="linkid" value="2098659">
            </form>
        </div>
    </div>
</div>
</div>
<div class="vright">© 2014 imooc.com All Rights Reserved  京ICP备 13046642号</div>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function(){
        $("#reset-submit").click(function(){
            var password = $("#newpass").val();
            var email = $("#ppppppp").text();
            var re_password = $(".requires").val();
            if(password!=re_password){
                alert("密码不一致");
                return false;
            }
            $.ajax({
                type : "post",
                data: {password:password,email:email,re_password:re_password},
                url : "passwordSuccsee",
                dataType : "json",
                success: function(msg){
                   if(msg['code']==1){
                       alert(msg['content']);
                       location.href="index";
                   } else{
                       alert(msg['content']);
                   }

                }
            })
        })
    })
</script>
