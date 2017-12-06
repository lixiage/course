<!DOCTYPE html>
<!-- saved from url=(0031)https://www.imooc.com/u/6197642 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title></title>
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


<link rel="stylesheet" href="./frontend/user_files/moco.min.css" type="text/css">


<link rel="stylesheet" href="./frontend/user_files/layer.css">

<link rel="stylesheet" href="./frontend/user_files/saved_resource" type="text/css">
    <link rel="stylesheet" href="./frontend/user_files/share_style0_16.css">
    <link charset="utf-8" rel="stylesheet" href="./frontend/user_files/layer(1).css">

</head>
<body>

<div id="header">
    <div class="page-container" id="nav">
         <div id="logo" class="logo">
             <a href="https://www.imooc.com/" target="_self" class="hide-text" style="background-image: url('./frontend/images/index/logo.jpg')" title="首页">慕课网</a></div>

        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
            <li class="set-btn visible-xs-block js-header-avator">
                <a href="https://www.imooc.com/u/6197642" target="_self">
                    <img width="40" height="40" src="./frontend/user_files/5a1d5c790001797701000100-100-100.jpg">
                </a>
            </li>
            <li>
                <a href="{{url('Freeindex')}}" target="_self">免费课程</a>
            </li>           
            <li><a href="{{url('Elastic')}}" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="{{url('Fight')}}" target="_self">实战</a>
            </li>
            <li><a href="{{url('question_index')}}" target="_self">猿问</a></li>
            <li><a href="{{url('note_index')}}" target="_self">手记</a></li>
            <li class="visible-xs-block">
                <a href="https://www.imooc.com/user/setprofile" target="_self">我的设置</a>
            </li>
            <li class="visible-xs-block">
                <a href="https://www.imooc.com/passport/user/logout?referer=//www.imooc.com" target="_self">
                    退出
                </a>
            </li>
            
        </ul>
        <div id="login-area">
            <ul class="clearfix logined">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span>购物车</span>
                        <span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0" style="display: none">0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"><div class="cart-title-box clearfix">
                            <h2 class="l">我的购物车</h2>
                            <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>
                        </div>
                        <div class="cart-wrap">
                            <div class="clear-cart">
                                <span class="cartIcon icon-shopping-cart"></span>
                                <h3>购物车里空空如也</h3>
                                <div class="text">快去这里选购你中意的课程</div>
                                <p>
                                    <a class="go-link" href="http://coding.imooc.com/" target="_blank">实战课程</a>
                                </p>
                                <p>
                                    <a class="go-link" href="http://class.imooc.com/" target="_blank">职业路径</a>
                                </p>
                            </div>
                        </div>
                        <div class="more-box clearfix">
                            <div class="l show-box">
                                <span class="text">
                                    <a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a>
                                </span>
                            </div>
                            <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>
                        </div>
                    </div>
                </li>

                <li class="set_btn user-card-box" id="header-user-card">
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="https://www.imooc.com/u/6197642" target="_self">
                        <img width="40" height="40" src="./frontend/user_files/5a1d5c790001797701000100-100-100.jpg">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top clearfix">
                                <a href="{{url('personal_index')}}" class="l">
                                    <img src="{{$info->head_ico}}" alt="qq__11888">
                                </a>
                                <div class="card-top-right-box l">
                                    <a href="{{url('personal_index')}}">
                                        <span class="name text-ellipsis">{{$info->username}}</span>
                                    </a>
                                    <div class="meta">
                                        {{--<a href="javascript:void(0)">经验--}}
                                            {{--<b id="js-user-mp">85</b>--}}
                                        {{--</a>--}}
                                        <a href="javascript:void(0)">积分
                                            <b id="js-user-credit">{{$info->integral}}</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-center-box">
                                <ul class="clearfix">
                                    <li class="l">
                                        <a href="https://www.imooc.com/u/6197642/courses" target="_blank">
                                            <span class="user-center-icon icon-tick"></span>我的课程</a>
                                    </li>
                                    <li class="l">
                                        <a href="http://order.imooc.com/myorder" target="_blank">
                                            <span class="user-center-icon icon-receipt"></span>订单中心
                                        </a>
                                    </li>
                                    <li class="l">
                                        <a href="https://www.imooc.com/mall/index" target="_blank">
                                            <span class="user-center-icon icon-score_shop"></span>积分商城</a>
                                    </li>
                                    <li class="l">
                                        <a href="https://www.imooc.com/user/setbindsns" target="_blank">
                                            <span class="user-center-icon icon-set"></span>个人设置</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">PHP第三方登录—OAuth2.0协议</span>
                                    <span class="media-name text-ellipsis">2-4 步骤三返回登录结果</span>
                                    <i class="icon-clock"></i>
                                    <a href="https://www.imooc.com/video/10613" class="continue" title="PHP第三方登录—OAuth2.0协议2-4  步骤三返回登录结果">继续</a>
                                </span>
                            </div>
                            <div class="card-sets clearfix">
                                <a href="https://www.imooc.com/passport/user/logout?referer=//www.imooc.com" class="l">安全退出</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="https://www.imooc.com/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">

<div class="bg-other user-head-info" style="background-image: url('./frontend/images/user_back.jpg')">
    <div class="user-info">
        <h3 class="user-name clearfix">
            <span>{{$info->username}}</span>
        </h3>
        <!--25-->
        <p class="about-info">
            
        <span class=" gender {{$info->sex==1?'girl':''}}" title=" 男 " style="background-image: url('./frontend/images/sex.png')"></span>
        {{--<span class="u-info-learn">学习时长 <em> 6小时26分</em></span>--}}
         <span class="u-info-credit">
             <a href="https://www.imooc.com/u/6197642/credit">积分<em>{{$info->integral}}</em></a>
         </span>
        <span class="u-info-mp">
            {{--<a href="https://www.imooc.com/u/6197642/experience">经验<em>85</em></a>--}}
        </span>
        </p>
        <p class="user-desc">
            {{$info->autograph}}
        </p>
        <div class="study-info clearfix">
            {{--<div class="item follows">--}}
                {{--<a href="https://www.imooc.com/u/6197642/follows"><em>1</em></a>--}}
                {{--<span>关注</span>--}}
            {{--</div>--}}
            {{--<div class="item followers">--}}
                {{--<a href="https://www.imooc.com/u/6197642/fans"><em>1</em></a>--}}
                {{--<span>粉丝</span>--}}
            {{--</div>--}}
                        
        </div><!--.study-info end-->
    </div><!-- .user-info end -->
</div><!-- .big-pic end -->
<div class="wrap">
        
<div class="slider" style="position: absolute; left: 0px; top: 0px;">
        <div class="user-pic" data-is-fans="" data-is-follows="">
            <div class="user-pic-bg"></div><!--user-pic-big end-->
            <img class="img" src="{{$info->head_ico}}" alt="">
            <div class="set-btn">
                <a href="https://www.imooc.com/user/setbindsns">
                    <i class="icon-set"></i>
                </a>
            </div>
        </div>

        <ul>
         <li>
            <a href="https://www.imooc.com/u/6197642" class="active">
            <i class="icon-home"></i><span>主页</span><b class="icon-drop_right"></b>
            </a>
        </li>
        <li>
            <a href="https://www.imooc.com/u/6197642/courses">
            <i class="icon-tick"></i><span>课程</span><b class="icon-drop_right"></b>
            </a>
        </li>     

        <li>
            <a href="https://www.imooc.com/u/6197642/plans">
            <i class="imv2-path"></i><span>路径</span><b class="icon-drop_right"></b>
            </a>
        </li>
                         
         <li>
            <a href="https://www.imooc.com/u/6197642/szcourses/list">
            <i class="imv2-war"></i><span>实战</span><b class="icon-drop_right"></b>
            </a>
         </li>
           
                                             
          <li>
            <a href="https://www.imooc.com/u/6197642/notebook">
            <i class="imv2-nav_note"></i><span>笔记</span><b class="icon-drop_right"></b>
            </a>
         </li>
                                          
         <li>
            <a href="https://www.imooc.com/u/6197642/bbs">
                <i class="icon-yuanwen"></i><span>猿问</span><b class="icon-drop_right"></b>
            </a>
        </li>
                         
        <li>
            <a href="https://www.imooc.com/u/6197642/articles">
            <i class="icon-blog"></i><span>手记</span><b class="icon-drop_right"></b>
            </a>
        </li>

        </ul>
</div><!-- .slider end -->
    <div class="u-container">




<div class=" page-home js-usercard-box" id="notices">
{{--<div class="dyanmic-title-wrap">--}}
    {{--<p class="dynamic-title">最新动态--}}
        {{--<span class="tip-setting pointer fr">--}}
            {{--<span class="settingicon">--}}
                {{--<i class="icon-set2"></i>--}}
            {{--</span>--}}
            {{--动态设置--}}
        {{--</span>--}}
    {{--</p>--}}
{{--</div>--}}


        
    <div class="item newcourse">
        <span class=" pa share js-share" data-shareid="share_17597798"><i data-shareid="2222" class="icon-share2"></i></span>
        <div class="share-box hide clearfix share_17597798" data-objtype="0" data-nickname="qq__11888" data-tuid="557" data-title="PHP第三方登录—OAuth2.0协议 " data-img="5668dc790001aa2b06000338">
            <div class="a shareWrapBox">
                           
                <div class="share-box-con">
                    <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                        <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                        <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                    </div>
                </div><!-- .share-box-con end -->
            </div><!-- .share-box end -->
        </div>
        <a href="https://www.imooc.com/u/6197642" target="_blank">
            <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead   " width="40" height="40" data-userid="6197642">
        </a>
        <div class="content fr">
            <div class="head">
                <div class="name">
                    <a class=" " date-userid="6197642" href="https://www.imooc.com/u/6197642" target="_blank">
                        qq__11888
                    </a>
                </div>
                <div class="time">
                    6小时前
                </div>
                <div class="title">
                    学习了课程
                </div>
            </div>
            <div class="body pr h135">
                <a href="https://www.imooc.com/learn/557" target="_blank">
                    <img class="fl" src="./frontend/user_files/5668dc790001aa2b06000338.jpg" width="240" height="135">
                    <div class="content w636 fr">
                        <div class="subtitle">
                            PHP第三方登录—OAuth2.0协议
                        </div>
                        <div class="describe">
                            <span>高 级</span>
                            <span class="ml20"><strong>35</strong>分</span>
                            <span class="ml20"> 更新完毕 </span>
                        </div>
                        <div class="detail">
                            本课程主要介绍第三方登录相关协议—OAuth2.0协议。主要介绍了OAuth的使用场...
                        </div>
                    </div>
                </a>
            </div>
            <div class="cb"></div>
        </div>
        <div class="cb"></div>
    </div>
    <div class="item newplan">
        <span class=" pa share js-share" data-shareid="share_17597796"><i data-shareid="2222" class="icon-share2"></i></span>
        <div class="share-box hide clearfix share_17597796" data-objtype="80" data-nickname="qq__11888" data-tuid="54" data-title="快速搞定PHP第三方登录 " data-img="58341c4f0001078806000338">
            <div class="a shareWrapBox">
                <div class="share-box-con">
                    <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                        <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                        <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                    </div>
                </div><!-- .share-box-con end -->
            </div><!-- .share-box end -->
        </div>
        <a href="https://www.imooc.com/u/6197642" target="_blank">
            <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead   " width="40" height="40" data-userid="6197642">
        </a>
        <div class="content fr ">
            <div class="head">
                <div class="name">
                    <a class=" " href="https://www.imooc.com/u/6197642" data-userid="6197642" target="_blank">
                        qq__11888
                    </a>
                </div>
                <div class="time">
                    6小时前
                </div>
                <div class="title">
                    参加了路径
                </div>

                </div>
                <a href="https://www.imooc.com/course/programdetail/pid/54" target="_blank">
                <div class="body pr">

                    <img src="./frontend/user_files/58341c4f0001078806000338.jpg" width="240" height="180">
                    <div class="content w636 fr">
                        <div class="subtitle">
                             快速搞定PHP第三方登录
                        </div> 
                        <div class="describe">
                            <span>加薪利器</span> <span class="ml20">3门课</span> 
                        </div>
                        <div class="detail">
                            第三方登录是一种开放式的验证登录方式，用户可以使用第三方的账号快捷地登录系统，免去重新注册账号的繁琐操作。该登录方式普遍应用在各大网站。本计划带您全面了解第三方登录知识，并以QQ和微博作为案例详细讲解PHP如何实现第三方登录。
                        </div>
                    </div>
                    
                </div>
                </a>
            </div>
            <div class="cb"></div>

        </div>

    
                        <div class="item newcourse">
                    <span class=" pa share js-share" data-shareid="share_17597785"><i data-shareid="2222" class="icon-share2"></i></span>
                        <div class="share-box hide clearfix share_17597785" data-objtype="0" data-nickname="qq__11888" data-tuid="596" data-title=" PHP第三方登录—QQ登录 " data-img="56a0932200014c4d06000338">
                     <div class="a shareWrapBox">
                           
                            <div class="share-box-con">
                                <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                                    <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                    <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                </div>
                            </div><!-- .share-box-con end -->
                        </div><!-- .share-box end -->
                    </div>
                    <a href="https://www.imooc.com/u/6197642" target="_blank">
                        <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead   " width="40" height="40" data-userid="6197642">
                    </a>
                    <div class="content fr">   
                        <div class="head">
                            <div class="name"> 
                                <a class=" " date-userid="6197642" href="https://www.imooc.com/u/6197642" target="_blank">
                                    qq__11888
                                </a>
                            </div>
                            <div class="time">  
                                6小时前
                            </div> 
                            <div class="title">
                                学习了课程
                            </div>
                        </div>
                        <div class="body pr h135">
                            <a href="https://www.imooc.com/learn/596" target="_blank">
                                <img class="fl" src="./frontend/user_files/56a0932200014c4d06000338.jpg" width="240" height="135">
                                <div class="content w636 fr">
                                    <div class="subtitle">
                                         PHP第三方登录—QQ登录
                                    </div> 
                                    <div class="describe">
                                        <span>高 级</span>
                                        <span class="ml20"><strong> 1</strong>小时<strong>13</strong>分</span>
                                        <span class="ml20"> 更新完毕 </span> 
                                    </div>
                                    <div class="detail">

                                       想使用最简单的方法为我们的Web应用获取新用户，你绝对不应该错过。使用QQ互联官方提...
                                    </div>
                                </div>
                                
                            </a>
                            
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="cb"></div>
                </div>

                         <div class="item newarticlescrap">
                    <span class=" pa share js-share" data-shareid="share_17571486"><i data-shareid="2222" class="icon-share2"></i></span>
                        <div class="share-box hide clearfix share_17571486" data-objtype="49" data-nickname="qq__11888" data-tuid="21649" data-title="构建一个给爬虫使用的代理IP池" data-img="5a20c5b8000185a305000333">
                     <div class="a shareWrapBox">
                           
                            <div class="share-box-con">
                                <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                                    <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                    <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                </div>
                            </div><!-- .share-box-con end -->
                        </div><!-- .share-box end -->
                    </div>
                     <a href="https://www.imooc.com/u/6197642" target="_blank">
                        <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead   " width="40" height="40" data-userid="6197642">
                    </a>
                    <div class="content fr">   
                        <div class="head">
                            <div class="name"> 
                                <a class=" " href="https://www.imooc.com/u/6197642" data-userid="6197642" target="_blank">
                                    qq__11888
                                </a>
                            </div>
                            <div class="time">  
                                1天前
                            </div> 
                            <div class="title">
                                推荐了手记
                            </div>
     

                        </div>
                        <a href="https://www.imooc.com/article/21649" target="_blank">
                            <div class="body pr">
                                                                            <img class="fl" src="./frontend/user_files/5a20c5b8000185a305000333.jpg" width="150" height="93">
                                                                        <div class="content  h136 ">
                                        <div class="subtitle">
                                            构建一个给爬虫使用的代理IP池
                                        </div> 
                                        <!--  <div class="describe">
                                            <span >高级</span> <span class="ml20">3小时15分钟</span><span class="ml20">更新至5-7</span> 
                                        </div> -->
                                        <div class="detail  pl203 ">
                                            做网络爬虫时，一般对代理IP的需求量比较大。因为在爬取网站信息的过程中，很多网站做了反爬虫策略，可能会对每个IP做频次控制。这样我们在爬取网站时就需要很多代理IP。 代理IP的获取，可以从以下几个途径得到： 从免费的网站上获取，质量很低，能用的IP极少 购买收费的代理服务，质量高很多 自己搭建代理服务器，稳定，但需要大量的服务器资源。 本文的代理IP池是通过爬虫事先从多个免费网...
                                        </div>
                                        <div class="cb"></div>
                                    </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="cb"></div>

        </div>

                        <div class="item newcourse">
                    <span class=" pa share js-share" data-shareid="share_17559174"><i data-shareid="2222" class="icon-share2"></i></span>
                        <div class="share-box hide clearfix share_17559174" data-objtype="0" data-nickname="qq__11888" data-tuid="9" data-title="HTML+CSS基础课程 " data-img="529dc3380001379906000338">
                     <div class="a shareWrapBox">
                           
                            <div class="share-box-con">
                                <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                                    <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                    <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                </div>
                            </div><!-- .share-box-con end -->
                        </div><!-- .share-box end -->
                    </div>
                    <a href="https://www.imooc.com/u/6197642" target="_blank">
                        <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead   " width="40" height="40" data-userid="6197642">
                    </a>
                    <div class="content fr">   
                        <div class="head">
                            <div class="name"> 
                                <a class=" " date-userid="6197642" href="https://www.imooc.com/u/6197642" target="_blank">
                                    qq__11888
                                </a>
                            </div>
                            <div class="time">  
                                2天前
                            </div> 
                            <div class="title">
                                学习了课程
                            </div>
                        </div>
                        <div class="body pr h135">
                            <a href="https://www.imooc.com/learn/9" target="_blank">
                                <img class="fl" src="./frontend/user_files/529dc3380001379906000338.jpg" width="240" height="135">
                                <div class="content w636 fr">
                                    <div class="subtitle">
                                        HTML+CSS基础课程
                                    </div> 
                                    <div class="describe">
                                        <span>初 级</span>
                                        <span class="ml20"><strong> 9</strong>小时<strong>18</strong>分</span>
                                        <span class="ml20"> 更新完毕 </span> 
                                    </div>
                                    <div class="detail">

                                       本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了...
                                    </div>
                                </div>
                                
                            </a>
                            
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="cb"></div>
                </div>

                        <div class="item newanswer">
                    <span class=" pa share js-share" data-shareid="share_17549662"><i data-shareid="2222" class="icon-share2"></i></span>
                        <div class="share-box hide clearfix share_17549662" data-objtype="33" data-nickname="qq__11888" data-tuid="383313" data-title="你的名字我的心">
                     <div class="a shareWrapBox">
                           
                            <div class="share-box-con">
                                <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                                    <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                    <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                </div>
                            </div><!-- .share-box-con end -->
                        </div><!-- .share-box end -->
                    </div>
                   <a class="fl" href="https://www.imooc.com/u/6197642" target="_blank">
                    <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead  " width="40" height="40" data-userid="6197642">
                </a>
                    <div class="content fr">   
                        <div class="head">
                            <div class="name"> 
                                <a class=" " href="https://www.imooc.com/u/6197642" data-userid="6197642" target="_blank">
                                qq__11888
                                </a>
                            </div>
                            <div class="time">  
                                3天前
                            </div> 
                            <div class="title">
                                在猿问回答了问题
                            </div>


                        </div>
                        <div class="body pr">
                                                        <a class="fl" href="https://www.imooc.com/wenda/5" target="_blank">
                                <img src="./frontend/user_files/59e96ff90001ab0402400240.jpg" width="40" height="40" title="Html/CSS">
                            </a>
                                                        <div class="content">
                                <div class="tag">   
                                    <span>来自</span> 
                                                                                <a href="https://www.imooc.com/wenda/5" target="_blank">
                                            <span class="ml10">Html/CSS</span> 
                                        </a>
                                                                        </div>
                                    <div class="subtitle">
                                    <a href="https://www.imooc.com/wenda/detail/383313" target="_blank">
                                        你的名字我的心 


                                     </a>
                                    </div> 
                            </div>
                            
                        </div>
                    </div>
                    <div class="cb"></div>
                </div>

                
                        <div class="item newanswer">
                    <span class=" pa share js-share" data-shareid="share_17549615"><i data-shareid="2222" class="icon-share2"></i></span>
                        <div class="share-box hide clearfix share_17549615" data-objtype="33" data-nickname="qq__11888" data-tuid="383312" data-title="cookie怎么用jquery设置">
                     <div class="a shareWrapBox">
                           
                            <div class="share-box-con">
                                <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                                    <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                    <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                </div>
                            </div><!-- .share-box-con end -->
                        </div><!-- .share-box end -->
                    </div>
                   <a class="fl" href="https://www.imooc.com/u/6197642" target="_blank">
                    <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead  " width="40" height="40" data-userid="6197642">
                </a>
                    <div class="content fr">   
                        <div class="head">
                            <div class="name"> 
                                <a class=" " href="https://www.imooc.com/u/6197642" data-userid="6197642" target="_blank">
                                qq__11888
                                </a>
                            </div>
                            <div class="time">  
                                3天前
                            </div> 
                            <div class="title">
                                在猿问回答了问题
                            </div>


                        </div>
                        <div class="body pr">
                                                        <a class="fl" href="https://www.imooc.com/wenda/17" target="_blank">
                                <img src="./frontend/user_files/59e96f340001faac02400240.jpg" width="40" height="40" title="JavaScript">
                            </a>
                                                        <div class="content">
                                <div class="tag">   
                                    <span>来自</span> 
                                                                                <a href="https://www.imooc.com/wenda/17" target="_blank">
                                            <span class="ml10">JavaScript</span> 
                                        </a>
                                                                                <a href="https://www.imooc.com/wenda/15" target="_blank">
                                            <span class="ml10">JQuery</span> 
                                        </a>
                                                                                <a href="https://www.imooc.com/wenda/2" target="_blank">
                                            <span class="ml10">PHP</span> 
                                        </a>
                                                                        </div>
                                    <div class="subtitle">
                                    <a href="https://www.imooc.com/wenda/detail/383312" target="_blank">
                                        cookie怎么用jquery设置 


                                     </a>
                                    </div> 
                            </div>
                            
                        </div>
                    </div>
                    <div class="cb"></div>
                </div>

                
                        <div class="item newcourse">
                    <span class=" pa share js-share" data-shareid="share_17506590"><i data-shareid="2222" class="icon-share2"></i></span>
                        <div class="share-box hide clearfix share_17506590" data-objtype="0" data-nickname="qq__11888" data-tuid="85" data-title="Java入门第一季 " data-img="57035ff200014b8a06000338">
                     <div class="a shareWrapBox">
                           
                            <div class="share-box-con">
                                <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                                    <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                    <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                </div>
                            </div><!-- .share-box-con end -->
                        </div><!-- .share-box end -->
                    </div>
                    <a href="https://www.imooc.com/u/6197642" target="_blank">
                        <img src="./frontend/user_files/5a1d5c790001797701000100-40-40.jpg" class="userHead   " width="40" height="40" data-userid="6197642">
                    </a>
                    <div class="content fr">   
                        <div class="head">
                            <div class="name"> 
                                <a class=" " date-userid="6197642" href="https://www.imooc.com/u/6197642" target="_blank">
                                    qq__11888
                                </a>
                            </div>
                            <div class="time">  
                                6天前
                            </div> 
                            <div class="title">
                                学习了课程
                            </div>
                        </div>
                        <div class="body pr h135">
                            <a href="https://www.imooc.com/learn/85" target="_blank">
                                <img class="fl" src="./frontend/user_files/57035ff200014b8a06000338.jpg" width="240" height="135">
                                <div class="content w636 fr">
                                    <div class="subtitle">
                                        Java入门第一季
                                    </div> 
                                    <div class="describe">
                                        <span>初 级</span>
                                        <span class="ml20"><strong> 5</strong>小时<strong> 0</strong>分</span>
                                        <span class="ml20"> 更新完毕 </span> 
                                    </div>
                                    <div class="detail">

                                       本教程为Java入门第一季，欢迎来到精彩的Java编程世界！Java语言已经成为当前...
                                    </div>
                                </div>
                                
                            </a>
                            
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="cb"></div>
                </div>

                        <div class="item newanswer">
                <span class=" pa share js-share" data-shareid="share_17490096"><i data-shareid="2222" class="icon-share2"></i></span>
                 <div class="share-box hide clearfix share_17490096" data-objtype="32" data-nickname="慕女神" data-tuid="383123" data-title="【有奖问答】与大咖交流前端JS与框架开发，免费赢取前端图书（11.28-12.4）">
                     <div class="a shareWrapBox">
                           
                            <div class="share-box-con">
                                <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512454312114" style="width: 138px;">
                                    <a class="bds link bds_weixin icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                    <a class="bds link bds_tsina icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a class="bds link bds_qzone icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                </div>
                            </div><!-- .share-box-con end -->
                        </div><!-- .share-box end -->
                    </div>
                <a href="https://www.imooc.com/u/10000" target="_blank">
                    <img src="./frontend/user_files/57a322f00001e4ae02560256-40-40.jpg" class="userHead  js-usercard-dialog " width="40" height="40" data-userid="10000">
                </a>
                        
                        <div class="content fr">   
                            <div class="head">
                                <div class="name"> 
                                    <a class=" js-usercard-dialog " data-userid="10000" href="https://www.imooc.com/u/10000" target="_blank">
                                        慕女神
                                    </a>
                                </div>
                                <div class="time">  
                                    6天前
                                </div> 
                                <div class="title">
                                    在猿问提了问题
                                </div>


                            </div>
                            <div class="body pr">
                                                                <a class="fl" href="https://www.imooc.com/wenda/22" target="_blank">
                                    <img src="./frontend/user_files/59e96ed90001e4e702400240.jpg" width="40" height="40" title="AngularJS">
                                </a>
                                                                <div class="content">
                                    <div class="tag">   
                                        <span>来自</span> 
                                                                                        <a href="https://www.imooc.com/wenda/22" target="_blank">
                                                <span class="ml10">AngularJS</span> 
                                            </a>
                                                                                        <a href="https://www.imooc.com/wenda/5" target="_blank">
                                                <span class="ml10">Html/CSS</span> 
                                            </a>
                                                                                        <a href="https://www.imooc.com/wenda/17" target="_blank">
                                                <span class="ml10">JavaScript</span> 
                                            </a>
                                                                                </div>
                                        <div class="subtitle">
                                        <a href="https://www.imooc.com/wenda/detail/383123" target="_blank">
                                            【有奖问答】与大咖交流前端JS与框架开发，免费赢取前端图书（11.28-12.4）
                                         </a>
                                        </div> 
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="cb"></div>
                        
                </div>

    
        
       
        





 



    
    <div id="js-setup-popl" class="setup-popl">
    <div class="setup-popl-top clearfix">
        <span class="title">动态设置</span>
        <i class="icon-close close"></i>
    </div>
    
    <div class="setup-content">
        <!-- 课程 -->
        <dl>
            <dt class="clearfix">
                <span class="dt-tit">课程</span>
                <div class="dt-line"></div>
            </dt>
            <dd class="clearfix">
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="0">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示学习课程动态</p>
                </div>
                
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="1">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示新增主讲课程动态</p>
                </div>
                
               
            </dd>
        </dl>
        <!-- 课程end -->
        <!-- 猿问 -->
        <dl>
            <dt class="clearfix">
                <span class="dt-tit">猿问</span>
                <div class="dt-line"></div>
            </dt>
            <dd class="clearfix">
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="32">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示提问动态</p>
                </div>
                
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="33">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示回答动态</p>
                </div>
                
                
            </dd>
        </dl>
        <!-- 猿问end -->

        <!-- 路径 -->
        <dl>
            <dt class="clearfix">
                <span class="dt-tit">路径</span>
                <div class="dt-line"></div>
            </dt>
            <dd class="clearfix">
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="80">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示参加路径动态</p>
                </div>
                
                
                
                
            </dd>
        </dl>
        <!-- 路径end -->

        <!-- 手记 -->
        <dl>
            <dt class="clearfix">
                <span class="dt-tit">手记</span>
                <div class="dt-line"></div>
            </dt>
            <dd class="clearfix">
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="48">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示发表手记动态</p>
                </div>
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="50">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示评论手记动态</p>
                </div>
                <div class="dd-item clearfix">
                    <div class="switch on" data-setting="49">
                        <div class="pinkline"></div>
                        <span class="pinkround"></span>
                    </div>
                    
                    <p class="switchname">显示推荐手记动态</p>
                </div>
               <!--  <div class='dd-item clearfix'>
                    <div class='switch on' data-setting='myblog_reply_is_replied'>
                        <div class='pinkline'></div>
                        <span class='pinkround'></span>
                    </div>
                    
                    <p class='switchname'>回复被回复</p>
                </div> -->
            </dd>
        </dl>
        <!-- 手记end -->
    </div>
    
    <div class="clearfix">
        <p class="noctiseTip">关闭选项后，你将不会看到别人的此类动态</p><span class="save">保存</span>
    </div>
</div>
<div class="setup-coverLayer"></div>

</div>

     <p class="js-noreload     dynamicLoad js-dynamicLoadwrap">
            <span class="js-dynamicLoad hide  ">
                下拉显示更多
            </span>
    </p>
       


   


</div><!-- .container end -->
</div><!-- .wrap end-->

</div>

<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="https://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="https://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="https://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="https://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="https://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="https://www.imooc.com/about/faq" target="_blank">常见问题</a></li>
                        <li> <a href="https://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="https://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                       <!--  <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="./frontend/user_files/user"></script>
<script type="text/javascript" src="./frontend/user_files/iplookup.php"></script>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
{{--<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>--}}
{{--<script src="./bootstrap/js/bootstrap.min.js"></script>--}}
</body>
</html>