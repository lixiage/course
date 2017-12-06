<!DOCTYPE html>
<!-- saved from url=(0031)https://www.imooc.com/learn/920 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>
            Elastic Stack入门
    </title>
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

<meta name="Keywords" content="">

<meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">







<link rel="stylesheet" href="./frontend/css/mf/moco.min.css" type="text/css">
<script type="text/javascript">
var OP_CONFIG={"module":"course","page":"learn","userout":0,"usercaution":null,"userInfo":{"uid":6190687}};
var isLogin = 1;
var is_choice = "";
var seajsTimestamp="v=201711281133";
var _msg_unread = 0; 
var _not_unread = 0; 
var _cart_num = 0;
</script>








<script>
/*学习页通用配置*/
var GC = {
  course: {
    id: 920,
    name: 'Elastic Stack入门',
    pic: '',
    video_url: ''
  },
  classmates: 20 // 你的同学一页显示数量
};


</script>
<script>

var hasLearn;
    var learnChapter = 16131;
    hasLearn = 1;

</script>




<link rel="stylesheet" href="./ela_files/saved_resource" type="text/css">
<link charset="utf-8" rel="stylesheet" href="frontend/css/mf/layer.css"><link rel="stylesheet" href="./frontend/css/mf/share_style0_16.css"></head>
<body>

<div id="header">
    <div class="page-container" id="nav">
         <div id="logo" class="logo"><a href="https://www.imooc.com/" target="_self" class="hide-text" title="首页">慕课网</a></div>
      

        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
                        <li class="set-btn visible-xs-block js-header-avator"><a href="https://www.imooc.com/u/6190687" target="_self"><img width="40" height="40" src="./ela_files/5a1b82df0001884c01000100-100-100.jpg"></a></li>
                        
            <li>
                <a href="https://www.imooc.com/course/list" class="active" target="_self">免费课程</a>
            </li>           
            <li><a href="http://class.imooc.com/" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="http://coding.imooc.com/" target="_self">实战</a>
            </li>
            <li><a href="question_index" target="_self">猿问</a></li>
            <li><a href="note_index" target="_self">手记</a></li>
                                            <li class="visible-xs-block"><a href="https://www.imooc.com/user/setprofile" target="_self">我的设置</a></li>
                <li class="visible-xs-block"><a href="https://www.imooc.com/passport/user/logout?referer=//www.imooc.com" target="_self">退出</a></li>
            
        </ul>
                <div id="login-area">
            <ul class="clearfix logined">
                <li class="app-load" id="js-app-load">
                    <a href="https://www.imooc.com/mobile/app" target="_blank" style="width:60px;">下载APP</a>
                    <div class="app-load-box clearfix js-load-box">
                        <img src="./ela_files/appload.png" class="l">
                        <div class="r">
                            <p>扫描下载慕课网APP</p>
                            <a href="https://itunes.apple.com/cn/app/mu-ke-wang/id722179140?mt=8"><i class="icon-apple"></i>App Store下载</a>
                            <a href="https://www.imooc.com/mobile/mukewang.apk"><i class="icon-android"></i>Android下载</a>
                        </div>
                    </div>
                </li>
                
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="icon-shopping-cart js-endcart"></span><span>购物车</span><span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0" style="display: none">0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"><div class="cart-title-box clearfix">                                        <h2 class="l">我的购物车</h2>                                        <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>                                    </div>                                    <div class="cart-wrap">                                        <div class="clear-cart">                                            <span class="cartIcon icon-shopping-cart"></span>                                            <h3>购物车里空空如也</h3>                                            <div class="text">快去这里选购你中意的课程</div>                                            <p><a class="go-link" href="http://coding.imooc.com/" target="_blank">实战课程</a></p>                                            <p><a class="go-link" href="http://class.imooc.com/" target="_blank">职业路径</a></p>                                        </div>                                    </div>                                    <div class="more-box clearfix">                                        <div class="l show-box">                                            <span class="text"><a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a></span>                                        </div>                                        <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>                                    </div></div>
                </li>
                
                <li class="remind_warp">
                    <i class="msg_remind" style="display: none;"></i>
                    <a target="_blank" href="https://www.imooc.com/u/6190687/notices">
                        <i class="icon-notifi"></i>
                        <!-- <span class="msg_icon" style="display: none;"></span> -->
                    </a>
                </li>
               
                <li class="set_btn user-card-box" id="header-user-card">
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="https://www.imooc.com/u/6190687" target="_self">
                        <img width="40" height="40" src="./ela_files/5a1b82df0001884c01000100-100-100.jpg">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card"><div class="card-inner">                        <div class="card-top clearfix">                            <a href="https://www.imooc.com/u/6190687" class="l"><img src="./ela_files/5a1b82df0001884c01000100-100-100.jpg" alt="qq_伪男_0"></a>                            <div class="card-top-right-box l">                                <a href="https://www.imooc.com/u/6190687"><span class="name text-ellipsis">qq_伪男_0</span></a>                                <div class="meta">                                    <a href="https://www.imooc.com/u/6190687/experience">经验<b id="js-user-mp">20</b></a>                                    <a href="https://www.imooc.com/u/6190687/credit">积分<b id="js-user-credit">0</b></a>                                </div>                            </div>                        </div>                        <div class="user-center-box">                            <ul class="clearfix">                                <li class="l"><a href="https://www.imooc.com/u/6190687/courses" target="_blank"><span class="user-center-icon icon-tick"></span>我的课程</a></li>                                <li class="l">                                    <a href="http://order.imooc.com/myorder" target="_blank"><span class="user-center-icon icon-receipt"></span>订单中心</a>                                                                    </li>                                <li class="l"><a href="https://www.imooc.com/mall/index" target="_blank"><span class="user-center-icon icon-score_shop"></span>积分商城</a></li>                                <li class="l"><a href="https://www.imooc.com/user/setbindsns" target="_blank"><span class="user-center-icon icon-set"></span>个人设置</a></li>                            </ul>                        </div><div class="card-history">                            <span class="history-item">                                <span class="tit text-ellipsis">Elastic Stack入门</span>                                <span class="media-name text-ellipsis">1-1 课程简介</span>                                <i class="icon-clock"></i>                                <a href="https://www.imooc.com/video/16131" class="continue" title="Elastic Stack入门
1-1  课程简介">继续</a>                            </span>                    </div><div class="card-sets clearfix"><a href="https://www.imooc.com/passport/user/logout?referer=//www.imooc.com" class="l">安全退出</a></div>                    </div></div>
                </li>
            </ul>
        </div>
                <div class="search-warp clearfix" style="min-width: 32px; height: 72px;">
                            <div class="pa searchTags">
                                    <a href="http://class.imooc.com/sc/20" target="_blank">前端入门</a>
                                    <a href="http://class.imooc.com/sc/18" target="_blank">Java入门</a>
                                </div>
            
            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" type="text" autocomplete="off">
                <input type="hidden" class="btn_search" data-search-btn="search-btn">
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class="showhide-search" data-show="no"><i class="icon-search"></i></div>
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

<div class="course-infos">
    <div class="w pr">
        <div class="path">  
            <a href="https://www.imooc.com/course/list">课程</a>
                        <i class="path-split">\</i><a href="https://www.imooc.com/course/list?c=cb">云计算&amp;大数据</a>
                                    <i class="path-split">\</i><a href="https://www.imooc.com/course/list?c=bigdata">大数据</a>
                        <i class="path-split">\</i><a href="https://www.imooc.com/learn/920"><span>Elastic Stack入门</span></a>
        </div>
        <div class="hd clearfix">
            <h2 class="l">Elastic Stack入门</h2>
                    </div>

        <div class="statics clearfix">
            
                        
                <div class="moco-btn l learn-btn green-btn">
                    <a href="https://www.imooc.com/video/16131" class="learn-btn-box">继续学习</a>
                    <em></em>
                    <i class="follow-action js-follow-action icon-star_outline" data-cid="920" data-cmd="follow" title="收藏"></i>
                </div>
            
                        
            
                        <div class="static-item l">
                <span class="meta">上次学到</span>
                <span class="meta-value smale-value" title="课程简介"> 1-1 课程简介</span>
            </div>
                        
            <div class="static-item l">
                <span class="meta">学习人数</span>
                <span class="meta-value js-learn-num">870</span>
                <em></em>            </div>
            <div class="static-item l">
                <span class="meta">难度级别</span>
                <span class="meta-value">中级</span>
                <em></em>
            </div>
            <div class="static-item l">
                <span class="meta">课程时长</span>
                <span class="meta-value"> 1小时36分</span>
                <em></em>
            </div>
            <div class="static-item l score-btn">
                <span class="meta">综合评分</span>
                <span class="meta-value">10.0</span>
                <em></em>
                
                                                                    
                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="https://www.imooc.com/coursescore/920" class="person-num">
                            <span class="person-num l">2人评价</span>
                        </a>
                                                                                <a href="https://www.imooc.com/coursescore/920?page=1" class="evaluation-btn r">查看评价</a>
                                                                            <div class="score-detail-box">
                            <div class="score-static-item">
                                <span class="meta-value">10.0</span>
                                <span class="meta">内容实用</span>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">10.0</span>
                                <span class="meta">简洁易懂</span>
                                <em></em>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">10.0</span>
                                <span class="meta">逻辑清晰</span>
                                <em></em>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="extra">
            <!-- credit -->
            
            <!-- share -->
            <div class="share-action r bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512091004543">
                <a href="javascript:;" class="share wx js-share icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                <a href="javascript:;" class="share qq js-share icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="javascript:;" class="share sina js-share icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
            </div>
        </div>
    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="//img1.mukewang.com/5a1b74b40001136005950337.jpg" alt="" style="display: none" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    <canvas width="1349" height="212" class="cover-canvas" id="js-cover-canvas"></canvas></div>
    
        <div class="progress">
      <ins data-progress="0" title="已完成0%，用时 0分" style="width: 0%;"></ins>
    </div>
        
</div>


<div class="course-info-main clearfix w">
    <div class="content-wrap">
        <div class="content">
                        <!-- 课程公告 -->
                        <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">简介：学习 Elastic Stack 架构，掌握 Elasticsearch、Logstash、Beats、Kibana 的基础知识入门课程；</p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu green-box">
	<ul class="course-menu clearfix">
		<li><a class="ui-tabs-active active" id="learnOn" href="https://www.imooc.com/learn/920"><span>章节</span></a></li>
		<li><a id="commentOn" class="" href="https://www.imooc.com/comment/920"><span>评论</span></a></li>
		<li><a id="qaOn" class="" href="https://www.imooc.com/qa/920/t/1?page=1"><span>问答</span></a></li>
		<li><a id="noteOn" class="" href="https://www.imooc.com/note/920?sort=last&amp;page=1"><span>笔记</span></a></li>
	    <!--
        <li><a id="wikiOn" class="" href="/wiki/920">WIKI</a></li>
        -->
	</ul>
	
</div><!-- 课程面板 -->
            <!-- 课程章节 -->
            <div class="mod-chapters">
                                        <div class="chapter chapter-active">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close .js-open"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第1章 课程介绍
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content" style="width: 280px; white-space: pre-line; text-align: center;">介绍Elastic Stack，课程安排等</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="16131"><em class="laststudy">最近学习</em>
                                                            <a href="https://www.imooc.com/video/16131" class="J-media-item"><i class="icon-half ing"></i>
                                    <i class="icon-video type"></i>
                                    1-1 课程简介 
                                                                            (01:32)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第2章 Elastic Search和Kibana入门
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content" style="width: 280px; white-space: pre-line; text-align: center;">介绍.Elastic Search和Kibana安装，配置，集群搭建</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="16150">
                                                            <a href="https://www.imooc.com/video/16150" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    2-1 Elasticsearch安装与演示 
                                                                            (04:31)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16151">
                                                            <a href="https://www.imooc.com/video/16151" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    2-2 Elasticsearch配置详解 
                                                                            (06:45)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16152">
                                                            <a href="https://www.imooc.com/video/16152" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    2-3 Elasticsearch本地快速搭建集群 
                                                                            (04:05)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16153">
                                                            <a href="https://www.imooc.com/video/16153" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    2-4 Kibana安装与演示 
                                                                            (02:48)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16154">
                                                            <a href="https://www.imooc.com/video/16154" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    2-5 Kibana 配置详解 
                                                                            (01:25)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16155">
                                                            <a href="https://www.imooc.com/video/16155" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    2-6 Elasticsearch 术语介绍与CRUD实际操作 
                                                                            (05:28)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16156">
                                                            <a href="https://www.imooc.com/video/16156" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    2-7 Elasticsearch查询简介 
                                                                            (03:51)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第3章 Beats、Filebea入门
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content" style="width: 280px; white-space: pre-line; text-align: center;">介绍Beats、Filebea相关知识</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="16157">
                                                            <a href="https://www.imooc.com/video/16157" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    3-1 Beats简介 
                                                                            (01:45)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16158">
                                                            <a href="https://www.imooc.com/video/16158" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    3-2 Filebeat简介 
                                                                            (02:00)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16159">
                                                            <a href="https://www.imooc.com/video/16159" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    3-3 Filebeat配置简介 
                                                                            (04:38)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16160">
                                                            <a href="https://www.imooc.com/video/16160" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    3-4 Filebeat高级使用简介 
                                                                            (02:48)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16161">
                                                            <a href="https://www.imooc.com/video/16161" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    3-5 Filebeat演示 
                                                                            (05:15)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16162">
                                                            <a href="https://www.imooc.com/video/16162" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    3-6 Packetbeat简介 
                                                                            (03:47)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16163">
                                                            <a href="https://www.imooc.com/video/16163" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    3-7 Packetbeat演示 
                                                                            (03:55)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第4章 Logstash入门
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content" style="width: 280px; white-space: pre-line; text-align: center;">介绍Logstash的基本知识</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="16147">
                                                            <a href="https://www.imooc.com/video/16147" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    4-1 Logstash简介 
                                                                            (02:55)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16148">
                                                            <a href="https://www.imooc.com/video/16148" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    4-2 Logstash 配置简介 
                                                                            (03:43)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16149">
                                                            <a href="https://www.imooc.com/video/16149" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    4-3 Logstash演示 
                                                                            (05:39)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第5章 案例实战
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content" style="width: 280px; white-space: pre-line; text-align: center;">通过一个小案例出串联各组件使用</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="16133">
                                                            <a href="https://www.imooc.com/video/16133" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    5-1 实战目标和方案介绍 
                                                                            (04:26)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16134">
                                                            <a href="https://www.imooc.com/video/16134" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    5-2 实战之数据收集演示 
                                                                            (03:44)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16135">
                                                            <a href="https://www.imooc.com/video/16135" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    5-3 实战指Kibana使用演示 
                                                                            (04:47)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="16136">
                                                            <a href="https://www.imooc.com/video/16136" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    5-4 实战指Kibana数据可视化演示 
                                                                            (05:59)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第6章 课程总结
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content" style="width: 280px; white-space: pre-line; text-align: center;">课程总结</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="16132">
                                                            <a href="https://www.imooc.com/video/16132" class="J-media-item"><i class="icon-nolearn start"></i>
                                    <i class="icon-video type"></i>
                                    6-1 总结与建议 
                                                                            (01:59)
                                                                        
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                                    </div>
            <!-- 课程章节 end -->
        </div><!--content end-->
        <div class="aside r">
            <div class="bd">
    
        <div class="box download">
        <h4>资料下载</h4>
        <ul class="downlist">
                        <li>
                <a href="https://img.mukewang.com/down/5a1e14d40001130700000000.zip" target="_blank" download="" data-id="" title="日志和配置文件" class="download-item">
                    <span><i class="icon icon-folder"></i>日志和配置文件</span>
                    <span class="downcode">下载</span>
                </a>
            </li>
                    </ul>
    </div>
        
        <div class="box mb40 js-usercard-box">
        <h4>讲师提示</h4>
                        <div class="teacher-info">
            <a href="https://www.imooc.com/u/1193871/courses?sort=publish" target="_blank">
                <img data-userid="1193871" class="js-usercard-dialog" src="./ela_files/54bb4f63000161eb01800180-80-80.jpg" width="80" height="80">
            </a>
            <span class="tit">
                <a href="https://www.imooc.com/u/1193871/courses?sort=publish" target="_blank">rockybean</a><i class="icon-imooc"></i>
            </span>
            <span class="job">全栈工程师</span>
        </div>
                                <div class="course-info-tip">
                        <dl class="first">
                <dt>课程须知</dt>
                <dd class="autowrap">掌握Linux的基本操作</dd>
            </dl>
                                    <dl>
                <dt>老师告诉你能学到什么？</dt>
                <dd class="autowrap">Elastic Stack 架构，掌握 Elasticsearch、Logstash、Beats、Kibana 的基础知识，不用一行代码即可实现日志分析、指标分析、数据可视化等大数据领域的常见需求。</dd>
            </dl>
                    </div>
            </div>
    
    <div class="js-recom-box"><div class="box mb40 all-attention-box">                        <h4>大家都关注</h4>                            <div class="js-all-attention all-attention"><a href="https://www.imooc.com/topic/uiandroid" target="_blank" data-id="42" class="blue fs18 normal">从UI搭建入门Android开发</a><a href="https://www.imooc.com/topic/android" target="_blank" data-id="38" class="lake-blue fs14 normal">Android工程师学习路线</a><a href="https://www.imooc.com/topic/zhaopin" target="_blank" data-id="44" class="green fs16 bold">校招面试技巧合辑</a><a href="https://www.imooc.com/topic/job" target="_blank" data-id="50" class="orange fs20 bold">最高效的求职全攻略</a><a href="https://www.imooc.com/topic/class" target="_blank" data-id="36" class="yellow fs18 bold">小白入门</a><a href="https://www.imooc.com/topic/bigdata" target="_blank" data-id="52" class="lake-blue fs14 bold">大数据训练营</a><a href="https://www.imooc.com/topic/dianshang" target="_blank" data-id="41" class="blue fs16 normal">电商平台开发</a><a href="https://www.imooc.com/topic/springboot" target="_blank" data-id="54" class="orange fs20 bold">Spring Boot实战项目</a><a href="https://www.imooc.com/topic/list" target="_blank" data-id="45" class="green fs18 normal">职场必杀技清单</a></div></div>
<div class="box mb40 recom-course-list-box">                        <h4>推荐课程</h4>                        <ul class="js-recom-course recom-course-list clearfix"><li class="clearfix"><a href="http://coding.imooc.com/class/153.html" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(//szimg.mukewang.com/59f85ec90001103405400300-360-202.jpg);"><div class="cart-color red"></div></div><div class="l content-box">                            <p class="smalle-title">Spark Streaming实时流处理项目实战 </p>                            <p class="content-text" title=""></p>                            <div class="clearfix learn-detail">中级<span>·</span>163人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="https://www.imooc.com/learn/460" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(https://www.imooc.com/courseimg/s/cover042_s.jpg);"><div class="cart-color red"></div></div><div class="l content-box">                            <p class="smalle-title">电商大数据应用之用户画像</p>                            <p class="content-text" title="大数据时代已经到来，企业迫切希望从已经积累的数据中分析出有价值的东西，而用户行为的分析尤为重要。本课分享从大型电商公司的真实用户画像中提练出的精华内容，旨在培养学员了解用户画像的内容，掌握构建用户画像的方法。">大数据时代已经到来，企业迫切希望从已经积累的数据中分析出有价值的东西，而用户行为的分析尤为重要。本课分享从大型电商公司的真实用户画像中提练出的精华内容，旨在培养学员了解用户画像的内容，掌握构建用户画像的方法。</p>                            <div class="clearfix learn-detail">中级<span>·</span>33717人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="https://www.imooc.com/learn/881" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(https://www.imooc.com/courseimg/s/cover044_s.jpg);"><div class="cart-color red"></div></div><div class="l content-box">                            <p class="smalle-title">HBase入门</p>                            <p class="content-text" title="从基础概念到实战操作，目标是让零基础的学习者或者是菜鸟级的初学者都能够快速的入门。">从基础概念到实战操作，目标是让零基础的学习者或者是菜鸟级的初学者都能够快速的入门。</p>                            <div class="clearfix learn-detail">初级<span>·</span>8995人在学</div>                        </div>                    </a>                </li></ul></div></div>

</div>        </div>
    </div>
    <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
</div>

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


<div id="J_GotoTop" class="elevator">

    <a href="https://www.imooc.com/user/feedback" class="elevator-msg" target="_blank">
        <i class="icon-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="https://www.imooc.com/about/faq" class="elevator-faq" target="_blank">
        <i class="icon-ques"></i>
        <span class="">常见问题</span>
    </a>
    <a href="https://www.imooc.com/mobile/app" target="_blank" class="elevator-app">
        <i class="icon-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin">
        <i class="icon-wxgzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="icon-up2"></i>
        <span class="">返回顶部</span>
    </a>
</div>



<!--script-->
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

 

<script type="text/javascript">
  (function(){
    var imgPic = GC.course.pic || 'https://www.imooc.com/static/img/index/logo_new.png',
        text = '我正在参加@慕课网  的一门课程【' + GC.course.name + '】，很不错哦！快来一起学习吧！', //节名称
        url = 'https://www.imooc.com' + window.location.pathname;

    window._bd_share_config = {
        "common": {
            "bdUrl": url,
            "bdSnsKey": {
              'tsina':'2254855082'
            },
            "bdText": text,
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": imgPic,
            "bdStyle": "0",
            "bdSize": "16"
        },
        "share": {}
    };
    setTimeout(function(){
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = '/static/lib/baiduShare/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
        },1000)

  })();
</script>
<div class="mask"></div>




<div style="display: none">

</div>


<script type="text/javascript" src="./ela_files/user"></script><script type="text/javascript" src="./ela_files/iplookup.php"></script></body></html>