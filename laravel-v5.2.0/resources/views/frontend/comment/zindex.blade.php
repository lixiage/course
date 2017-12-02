<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>
PHP函数篇_课程评论_慕课网
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


<meta name="Description" content="本教程结合实例形式分析了PHP关于自定义函数的创建、返回值、默认值、参数、值传递、作用域
以及可变函数、嵌套函数、递归函数、闭包函数的使用等相关技巧。">






<link rel="stylesheet" href="./frontend/css/comment/moco.css" type="text/css">

<script src="./frontend/js/comment/push.js"></script><script type="text/javascript" async="" src="./frontend/js/comment/rt.js"></script><script src="./frontend/js/comment/hm.js"></script><script type="text/javascript">

// eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('!4(){3 a={};3 c=0;3 5=[{d:\'//o.q.g/o/p/K/J.r\',6:0},{d:\'//p.q.g/I/L-O.r\',6:0}];3 w=4(){3 j,s=e N("(^| )"+"k=([^;]*)(;|$)");8(j=u.l.M(s)){m H(j[2])}E{m z}};3 y=4(t){3 n=w();3 b=e F();b.G(b.D()+13*v*v*10);u.l="k="+t+";14="+b.R()+";S=/;P=Q.g";8(t&&t!=n){X.U.V()}};3 C=4(i){3 7=e W();7.T=4(){12(a[i]);a[i]=z;9(i,0)};7.Z=4(){9(i,1)};a[i]=11(4(){7.B="";9(i,1)},Y);7.B=5[i].d};3 9=4(x,6){c++;5[x].6=6;8(c==5.f){3 h=0;A(3 i=0;i<5.f;i++){8(5[i].6==1){h=1}}y(h)}};A(3 i=0;i<5.f;i++){C(i)}}()',62,67,'|||var|function|urls|flag|imgobj|if|callback|timer|exp|count|url|new|length|com|error||arr|IMCDNS|cookie|return|_0|static|img|mukewang|png|reg||document|60|getcookie|index|setcookie|null|for|src|checkCdn|getTime|else|Date|setTime|unescape|images|logo|common|unknow|match|RegExp|80|domain|imooc|toGMTString|path|onload|location|reload|Image|window|3000|onerror|1000|setTimeout|clearTimeout|24|expires'.split('|'),0,{}))

</script>


<script type="text/javascript">

var OP_CONFIG={"module":"course","page":"comment","userout":0,"usercaution":null,"userInfo":{"uid":6169489}};
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
    id: 827,
    name: 'PHP函数篇',
    pic: '',
    video_url: ''
  },
  classmates: 20 // 你的同学一页显示数量
};


</script>
<script>

var hasLearn;
    hasLearn = 0;

</script>



<link rel="stylesheet" href="./frontend/css/comment/a.css" type="text/css">
<script charset="utf-8" async="" src="./frontend/js/comment/jquery.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/seajs-text.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/common.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/string.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/userinfo.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/cart.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/cookie.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/suggest.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/store.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/moco.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/json.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/im.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/comment.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/socket.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/course_common.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/course_collection.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/jquery_002.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/layer.js"></script><link charset="utf-8" rel="stylesheet" href="./frontend/css/comment/layer.css"><script charset="utf-8" async="" src="./frontend/js/comment/course.js"></script><script charset="utf-8" async="" src="./frontend/js/comment/course_tipoff.js"></script><script src="./frontend/js/comment/share.js"></script><link rel="stylesheet" href="./frontend/css/comment/share_style0_16.css"></head>
<body>

<div id="header">
    <div class="page-container" id="nav">
         <div id="logo" class="logo"><a href="https://www.imooc.com/" target="_self" class="hide-text" title="首页">慕课网</a></div>
      

        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
                        <li class="set-btn visible-xs-block js-header-avator"><a href="https://www.imooc.com/u/6169489" target="_self"><img src="./frontend/js/comment/5a13e9020001af9101000100-100-100.jpg" width="40" height="40"></a></li>
                        
            <li>
                <a href="https://www.imooc.com/course/list" target="_self">免费课程</a>
            </li>           
            <li><a href="http://class.imooc.com/" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="http://coding.imooc.com/" target="_self">实战</a>
            </li>
            <li><a href="https://www.imooc.com/wenda" target="_self">猿问</a></li>
            <li><a href="https://www.imooc.com/article" target="_self">手记</a></li>
                                            <li class="visible-xs-block"><a href="https://www.imooc.com/user/setprofile" target="_self">我的设置</a></li>
                <li class="visible-xs-block"><a href="https://www.imooc.com/passport/user/logout?referer=//www.imooc.com" target="_self">退出</a></li>
            
        </ul>
                <div id="login-area">
            <ul class="clearfix logined">
                <li class="app-load" id="js-app-load">
                    <a href="https://www.imooc.com/mobile/app" target="_blank" style="width:60px;">下载APP</a>
                    <div class="app-load-box clearfix js-load-box">
                        <img src="./frontend/js/comment/appload.png" class="l">
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
                    <i class="msg_remind" style="display: inline;"></i>
                    <a target="_blank" href="https://www.imooc.com/u/6169489/notices">
                        <i class="icon-notifi"></i>
                        <!-- <span class="msg_icon" style="display: none;"></span> -->
                    </a>
                </li>
               
                <li class="set_btn user-card-box" id="header-user-card">
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="https://www.imooc.com/u/6169489" target="_self">
                        <img src="./frontend/js/comment/5a13e9020001af9101000100-100-100.jpg" width="40" height="40">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card"><div class="card-inner">                        <div class="card-top clearfix">                            <a href="https://www.imooc.com/u/6169489" class="l"><img src="./frontend/js/comment/5a13e9020001af9101000100-100-100.jpg" alt="qq_LinaD_0"></a>                            <div class="card-top-right-box l">                                <a href="https://www.imooc.com/u/6169489"><span class="name text-ellipsis">qq_LinaD_0</span></a>                                <div class="meta">                                    <a href="https://www.imooc.com/u/6169489/experience">经验<b id="js-user-mp">180</b></a>                                    <a href="https://www.imooc.com/u/6169489/credit">积分<b id="js-user-credit">0</b></a>                                </div>                            </div>                        </div>                        <div class="user-center-box">                            <ul class="clearfix">                                <li class="l"><a href="https://www.imooc.com/u/6169489/courses" target="_blank"><span class="user-center-icon icon-tick"></span>我的课程</a></li>                                <li class="l">                                    <a href="http://order.imooc.com/myorder" target="_blank"><span class="user-center-icon icon-receipt"></span>订单中心</a>                                                                    </li>                                <li class="l"><a href="https://www.imooc.com/mall/index" target="_blank"><span class="user-center-icon icon-score_shop"></span>积分商城</a></li>                                <li class="l"><a href="https://www.imooc.com/user/setbindsns" target="_blank"><span class="user-center-icon icon-set"></span>个人设置</a></li>                            </ul>                        </div><div class="card-history">                            <span class="history-item">                                <span class="tit text-ellipsis">Restful API实战</span>                                <span class="media-name text-ellipsis">3-1 restful设计要素</span>                                <i class="icon-clock"></i>                                <a href="https://www.imooc.com/video/14354" class="continue" title="Restful API实战
3-1  restful设计要素">继续</a>                            </span>                    </div><div class="card-sets clearfix"><a href="https://www.imooc.com/passport/user/logout?referer=//www.imooc.com" class="l">安全退出</a></div>                    </div></div>
                </li>
            </ul>
        </div>
                <div class="search-warp clearfix" style="min-width: 32px; height: 72px;">
                            <div class="pa searchTags">
                                    <a href="http://class.imooc.com/sc/20" target="_blank">前端入门</a>
                                    <a href="http://class.imooc.com/sc/18" target="_blank">Java入门</a>
                                </div>
            
            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" autocomplete="off" type="text">
                <input class="btn_search" data-search-btn="search-btn" type="hidden">
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
                        <i class="path-split">\</i><a href="https://www.imooc.com/course/list?c=be">后端开发</a>
                                    <i class="path-split">\</i><a href="https://www.imooc.com/course/list?c=php">PHP</a>
                        <i class="path-split">\</i><a href="https://www.imooc.com/learn/827"><span>PHP函数篇</span></a>
        </div>
        <div class="hd clearfix">
            <h2 class="l">PHP函数篇</h2>
                    </div>

        <div class="statics clearfix">
            
                        <div class="moco-btn l learn-btn green-btn red-btn"> 
                <a href="https://www.imooc.com/video/14667" class="J-learn-course">开始学习</a>
                <em></em>
                <i class="follow-action js-follow-action icon-star_outline" data-cid="827" data-cmd="follow" title="收藏"></i>
            </div>
                        
            
                        
            <div class="static-item l">
                <span class="meta">学习人数</span>
                <span class="meta-value js-learn-num">11328</span>
                            </div>
            <div class="static-item l">
                <span class="meta">难度级别</span>
                <span class="meta-value">初级</span>
                <em></em>
            </div>
            <div class="static-item l">
                <span class="meta">课程时长</span>
                <span class="meta-value"> 1小时42分</span>
                <em></em>
            </div>
            <div class="static-item l score-btn">
                <span class="meta">综合评分</span>
                <span class="meta-value">9.8</span>
                <em></em>
                
                                
                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="https://www.imooc.com/coursescore/827" class="person-num">
                            <span class="person-num l">21人评价</span>
                        </a>
                                                    <a href="https://www.imooc.com/coursescore/827?page=1" class="evaluation-btn r">查看评价</a>
                                                <div class="score-detail-box">
                            <div class="score-static-item">
                                <span class="meta-value">9.9</span>
                                <span class="meta">内容实用</span>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.7</span>
                                <span class="meta">简洁易懂</span>
                                <em></em>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.9</span>
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
            <div class="share-action r bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1512096270244">
                <a href="javascript:;" class="share wx js-share icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                <a href="javascript:;" class="share qq js-share icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="javascript:;" class="share sina js-share icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
            </div>
        </div>
    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="//img4.mukewang.com/58f85fb300013f4106000338.jpg" alt="" style="display: none" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    <canvas width="1349" height="212" class="cover-canvas" id="js-cover-canvas"></canvas></div>
    
        
</div>

<div class="course-info-main clearfix w">
    <div class="content-wrap clearfix">
        <div class="content">
            <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">简介：本教程结合实例形式分析了PHP关于自定义函数的创建、返回值、默认值、参数、值传递、作用域
以及可变函数、嵌套函数、递归函数、闭包函数的使用等相关技巧。</p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu ">
	<ul class="course-menu clearfix">
		<li><a class="ui-tabs-active " id="learnOn" href="https://www.imooc.com/learn/827"><span>章节</span></a></li>
		<li><a id="commentOn" class="active" ><span class="commbtn">评论</span></a></li>
		<li><a id="qaOn" class="" href="https://www.imooc.com/qa/827/t/1?page=1"><span>问答</span></a></li>
		<li><a id="noteOn" class="" href="https://www.imooc.com/note/827?sort=last&amp;page=1"><span>笔记</span></a></li>
	    <!--
        <li><a id="wikiOn" class="" href="/wiki/827">WIKI</a></li>
        -->
	</ul>
	<div class="publish clearfix" id="comminput" style="display: none;">
            <div class="publish-wrap publish-wrap-pl">
                <div class="pl-input-wrap clearfix">
                    <a href="" class="user-head l">
                        <img src="123213">
                    </a>                      
                       <textarea id="editor" class="content" type="text/plain" style="width:800px;height:20px;" placeholder=""></textarea>                 
                       <input type="button" id="submit" class="course-btn" value="发表评论">   
                </div>
            </div>
        </div>
</div><!-- 课程面板 -->

            
<!--发布评论-->
<div id="course_note">
<ul class="mod-post" id="comment-list">
               
 @foreach($comment as $val)
  <li class="post-row" id="496284">
    <div class="media">
        <a href="https://www.imooc.com/u/1047642/courses" target="_blank"><img src="./frontend/images/comment/meimei.jpg" width="40" height="40"></a>
    </div>
    <div class="bd">
        <div class="tit">
            <a href="https://www.imooc.com/u/1047642/courses" target="_blank">{{ isset($val['username'])?$val['username']:'' }}</a>
        </div>
        <p class="cnt">{{ isset($val['content'])?$val['content']:'' }}</p>
        <div class="footer clearfix">
            <span title="创建时间" class="l timeago">评论时间: {{ isset($val['addtime'])?$val['addtime']:'' }}</span>
                  <a href="https://www.imooc.com/video/14675" class="from">源自：3-6 函数变量作用域</a>
                <div class="actions r">
                    <a href="javascript:;" id="{{ isset($val['comment_id'])?$val['comment_id']:'' }}" data-type="4" data-uid="1047642" class="reply" data-src=" /video/14675">回复</a>
                    <a title="赞" href="javascript:;" class="zan" id="{{ isset($val['comment_id'])?$val['comment_id']:'' }}">
                    <img src="./frontend/images/comment/zan.png" width="40" height="40" alt="">
                    <span>{{ isset($val['hitsnum'])?$val['hitsnum']:'' }}</span>
                </a>
            </div>
        </div>
    </div>
     <div class="replydiv" id="replydiv{{ isset($val['comment_id'])?$val['comment_id']:'' }}" style="display: none;float: right;">   
           <textarea name="" id="aar" class="content" cols="50" rows="4" style="border: 1px solid #d9dde1"></textarea>              
                     
           <input type="button" id="{{ isset($val['comment_id'])?$val['comment_id']:'' }}" class="replybtn" value="回复">     
    </div>
</li>
@if (isset($val['reply']))
     @foreach($val['reply'] as $v)
        <div style="color: #14191e; font-weight:600px;  font-size:16px; padding-left: 100px; line-height: 50px;">{{ $v['admin_id'] }}回复说：</div>
        <div style="color: #5e5e5e;padding-left: 100px; font-size:10px;">回复内容：{{ $v['content'] }}</div>
        <div style="color: #5e5e5e;padding-left: 100px; font-size:10px;">回复时间：{{ $v['addtime'] }}</div>
     @endforeach
@endif
      

@endforeach
 </ul>
    <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="https://www.imooc.com/course/comment/id/827?page=2">2</a><a class="text-page-tag" href="https://www.imooc.com/course/comment/id/827?page=3">3</a><a class="text-page-tag" href="https://www.imooc.com/course/comment/id/827?page=4">4</a><a class="text-page-tag" href="https://www.imooc.com/course/comment/id/827?page=5">5</a><a href="https://www.imooc.com/course/comment/id/827?page=2">下一页</a><a href="https://www.imooc.com/course/comment/id/827?page=5">尾页</a></div>
    </div>
<div class="tipoff-block js-tipoff-block"></div>
<div class="tipoff-box js-tipoff-box">
	<div class="tipoff-top-box clearfix">
		<p class="l tipoff-title">举报</p>
		<span class="r tipoff-close-btn icon-close2 js-tipoff-close"></span>
	</div>
	<div class="tipoff-type-box js-tipoff-typebox clearfix">
		<div class="tipoff-loading">
		  	<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<div class="tipoff-content">
		<textarea name="tipoff-content" class="tipoff-desc js-tipoff-desc" placeholder="写下举报理由"></textarea>
		<div class="tipoff-text"><span class="js-tipoff-text">0</span>/150</div>
	</div>
	<div class="tipoff-btn-box clearfix">
		<div class="r tipoff-submit-btn js-tipoff-submit" data-tipofftype="">提交</div>
		<div class="r tipoff-cancel-btn js-tipoff-close">取消</div>
	</div>
</div>
        </div>
        <div class="aside r">
            <div class="bd">
        <div class="box mb40 js-usercard-box">
        <h4>讲师提示</h4>
                        <div class="teacher-info">
            <a href="https://www.imooc.com/u/5215097/courses?sort=publish" target="_blank">
                <img data-userid="5215097" class="js-usercard-dialog" src="./frontend/js/comment/5458505c00018e9202200220-80-80.jpg" width="80" height="80">
            </a>
            <span class="tit">
                <a href="https://www.imooc.com/u/5215097/courses?sort=publish" target="_blank">顾金鹤</a><i class="icon-imooc"></i>
            </span>
            <span class="job"></span>
        </div>
                                <div class="course-info-tip">
                        <dl class="first">
                <dt>课程须知</dt>
                <dd class="autowrap">本教程需要有一点点PHP基础，有基本的网络常识</dd>
            </dl>
                                    <dl>
                <dt>老师告诉你能学到什么？</dt>
                <dd class="autowrap">学完此教程，你能根据自己的业务逻辑实现相关的函数封装及调用。
可以根据不同的需求封装不同层次的递归函数，嵌套函数等。</dd>
            </dl>
                    </div>
            </div>
    
    <div class="js-recom-box"><div class="box mb40 all-attention-box">                        <h4>大家都关注</h4>                            <div class="js-all-attention all-attention"><a href="https://www.imooc.com/topic/azmianshi" target="_blank" data-id="28" class="blue fs16 normal">Android最新面试技巧</a><a href="https://www.imooc.com/topic/fullstack" target="_blank" data-id="29" class="yellow fs18 normal">全栈工程师是怎样炼成的</a><a href="https://www.imooc.com/topic/phpframe" target="_blank" data-id="7" class="green fs20 bold">PHP框架教程</a><a href="https://www.imooc.com/topic/yii" target="_blank" data-id="20" class="orange fs14 bold">Yii框架实战项目</a><a href="https://www.imooc.com/topic/fangzhan" target="_blank" data-id="27" class="lake-blue fs16 normal">最全仿站教程</a><a href="https://www.imooc.com/topic/thinkphp" target="_blank" data-id="19" class="blue fs18 normal">ThinkPHP 5.0实战</a><a href="https://www.imooc.com/topic/class" target="_blank" data-id="36" class="yellow fs20 normal">编程入门</a><a href="https://www.imooc.com/topic/ecom" target="_blank" data-id="8" class="orange fs14 normal">电商平台开发教程</a></div></div>
<div class="box mb40 recom-course-list-box">                        <h4>推荐课程</h4>                        <ul class="js-recom-course recom-course-list clearfix"><li class="clearfix"><a href="https://www.imooc.com/learn/620" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(https://www.imooc.com/courseimg/s/cover025_s.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">PHP微信公众平台开发高级篇—微信JS-SDK</p>                            <p class="content-text" title="通过使用微信JS-SDK，网页开发者可借助微信高效地使用拍照、选图、语音、位置等手机系统的能力，为微信用户提供更优质的网页体验。">通过使用微信JS-SDK，网页开发者可借助微信高效地使用拍照、选图、语音、位置等手机系统的能力，为微信用户提供更优质的网页体验。</p>                            <div class="clearfix learn-detail">高级<span>·</span>26305人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://coding.imooc.com/class/154.html" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(//szimg.mukewang.com/59fc347400016ad405400300-360-202.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">快速上手Linux 玩转典型应用</p>                            <p class="content-text" title=""></p>                            <div class="clearfix learn-detail">中级<span>·</span>221人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="https://www.imooc.com/learn/404" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(https://www.imooc.com/courseimg/s/cover018_s.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">与《Yii框架》不得不说的故事—基础篇</p>                            <p class="content-text" title="YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了YII就学习了最新的php技术，本课程主要学习YII的安装和mvc的基本使用方式，为后面学习YII的快速、安全、专业的特性打下基础。">YII是目前比较火的框架，框架里面使用了最新的技术和设计，可以说学习了YII就学习了最新的php技术，本课程主要学习YII的安装和mvc的基本使用方式，为后面学习YII的快速、安全、专业的特性打下基础。</p>                            <div class="clearfix learn-detail">初级<span>·</span>36334人在学</div>                        </div>                    </a>                </li></ul></div></div>

</div>        </div>
    </div>
    <div class="clear"></div>

</div>

<div class="maybe-wenda" id="maybe-wenda" style="display: none;">
    <i class="icon-chat"></i>
    <p class="text">你发的评论可能会是问题？<br>是否将他发到问答中</p>
    <input class="btn ok" value="好的" id="wenda-ok" type="button">
    <input class="btn no" value="不用" id="wenda-no" type="button">
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



<script type="text/javascript" charset="utf-8" src="./frontend/js/comment/ueditor.js"></script>

<!--script-->
<script type="text/javascript" src="./frontend/js/comment/error.js"></script>
<script src="./frontend/js/comment/ssologin.js"></script>
<script type="text/javascript" src="./frontend/js/comment/sea.js"></script>
<script type="text/javascript" src="./frontend/js/comment/sea_config.js"></script>
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


<script type="text/imooc-tpl" id="tpl_pl">
    <li class="post-row">
        <div class="media">
            <a href="/u/{uid}/courses" target="_blank">
                <img src="{upic}" width="40" height="40">
            </a>
        </div>
        <div class="bd">
            <div class="tit">
                <a href="/u/{uid}/courses" target="_blank">{nickname}</a>
            </div>
            <p class="cnt">{txt}</p>
            <div class="footer clearfix">
                <span title="创建时间" class="l timeago">时间：{time}</span>
                <div class="actions r">
                    <a title="赞" href="javascript:;" class="js-pl-praise list-praise post-action"  data-id="{id}">
                        <span class="icon-thumb-revert"></span>
                        <em>0</em>
                    </a>
                </div>
            </div>
      </div>
    </li>

</script>




<div style="display: none">
<script type="text/javascript">
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?f0cfcccd7b1393990c78efdeebff3968";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
(function (d) {
window.bd_cpro_rtid="rHT4P1c";
var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
})(document);
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div>


<script type="text/javascript" src="./frontend/js/comment/user.htm"></script><script type="text/javascript" src="./frontend/js/comment/iplookup.php"></script></body>



<script type="text/javascript" charset="utf-8" src="./utf8-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="./utf8-php/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="./utf8-php/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="../jq.js"></script>
<script>
    var ue = UE.getEditor('editor');//引入百度编辑器
    $(".commbtn").click(function(){//显示评论框

        $("#comminput").toggle("slow");
    });

    $(".course-btn").click(function(){//发表评论追加评论

        var content = ue.getPlainTxt();//接百度编辑器中的内容
        // alert("566");
        $.ajax({
            type:"post",
            url:"zadd",
            data:{content:content},
            dataType:"json",
            success:function(msg){
                var str ='';
                for(var i=0;i<msg.length;i++){
                    str+='<li class="post-row" id="496284">';
                    str+='<div class="media"><a href="https://www.imooc.com/u/1047642/courses" target="_blank"> <img src="./frontend/images/comment/meimei.jpg" width="40" height="40">  </a>  </div>';
                    str+='<div class="bd"><div class="tit">   <a href="https://www.imooc.com/u/1047642/courses" target="_blank">'+msg[i].username+'</a>  </div>';
                    str+='<p class="cnt">'+msg[i].content+'</p>';
                    str+='<div class="footer clearfix">  <span title="创建时间" class="l timeago">评论时间: '+msg[i].addtime+'</span>   <a href="https://www.imooc.com/video/14675" class="from">源自：3-6 函数变量作用域</a>  <div class="actions r">   <a href="javascript:;" data-type="4" data-uid="1047642" class="reply"data-src=" /video/14675">回复</a>     <a title="赞" href="javascript:;" class="zan" id="'+msg[i].comment_id+'"><img src="./frontend/images/comment/zan.png" width="40" height="40" alt=""><span>'+msg[i].hitsnum+'</span></a>  </div>  </div>   </div>';
                    str+='<div class="replydiv" id="replydiv'+msg[i].comment_id+'" style="display: none;float: right;">  <textarea name="" id="aar" class="content" cols="50" rows="4" style="border: 1px solid #d9dde1"></textarea><input type="button" id="'+msg[i].comment_id+'" class="replybtn" value="回复">   </div></li>';  
                }
                $('.mod-post').html(str);
            }

        })

    })

    //显示回复框

$(document).on("click",".reply",function(){//根据评论回复
    var comment_id = $(this).prop('id');
    // alert(comment_id);
    $("#replydiv"+comment_id).toggle("slow");
})



$(document).on("click",".replybtn",function(){
    var content = $(this).prev().val();
    var comment_id = $(this).prop('id');
    // alert(comment_id);return false;
    $.ajax({
        url:"{{ url('zreply') }}",
        type:"post",
        // dataType:"json",
        data:{content:content,comment_id:comment_id},
        success:function(msg){
            // console.log(msg);
            window.location.reload();
        }
    })

})
//点赞
$(document).on("click",".zan",function(){//给评论点赞

    var comment_id = $(this).prop('id');
    var hitsnum = $(this).children('span');
    console.log(hitsnum);
    // alert(1);return false;
    $.ajax({
        type:"post",
        url : "{{ url('zhits') }}",
        data: "comment_id="+comment_id,
        success:function(msg){
            // console.log(msg);
            hitsnum.text(msg);
        }
    })

    
    
})
</script>
</html>