<!DOCTYPE html>
<!-- saved from url=(0034)http://www.imooc.com/article/21649 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>
{{$data['data']->notes_title}}
</title>
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


<link rel="stylesheet" href="./frontend/note_info/moco.min.css" type="text/css">




<link rel="stylesheet" href="./frontend/note_info/saved_resource" type="text/css">
    <link charset="utf-8" rel="stylesheet" href="./frontend/note_info/prettify.css">
    <link charset="utf-8" rel="stylesheet" href="./frontend/note_info/layer.css">
    <link charset="utf-8" rel="stylesheet" href="./frontend/note_info/ueditor.css">
    <link href="./frontend/note_info/ueditor(1).css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="./frontend/note_info/share_style0_16.css">
    <link id="syntaxhighlighter_css" rel="stylesheet" type="text/css" href="./frontend/note_info/shCoreDefault.css">
</head>
<body style="">

<div id="header">
    <div class="page-container" id="nav">
         <div id="logo" class="logo">
             <a href="http://www.imooc.com/" target="_self" class="hide-text" style="background-image: url('./frontend/images/index/logo.jpg')" title="首页">慕课网</a>
         </div>
      

        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
            <li class="set-btn visible-xs-block js-header-avator">
                <a href="http://www.imooc.com/u/6197642" target="_self">
                    <img width="40" height="40" src="./frontend/note_info/5a1d5c790001797701000100-100-100.jpg">
                </a>
            </li>
            <li>
                <a href="Freeindex" target="_self">免费课程</a>
            </li>
            <li><a href="Elastic" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="Fight" target="_self">实战</a>
            </li>
            <li><a href="{{url('question_index')}}" target="_self">猿问</a></li>
            <li><a href="{{url('note_index')}}" class="active" target="_self">手记</a></li>
            <li class="visible-xs-block">
                <a href="http://www.imooc.com/user/setprofile" target="_self">我的设置</a>
            </li>
            <li class="visible-xs-block">
                <a href="http://www.imooc.com/passport/user/logout?referer=//www.imooc.com" target="_self">退出</a>
            </li>
            
        </ul>
                <div id="login-area">
            <ul class="clearfix logined">
                <li class="app-load" id="js-app-load">
                    <div class="app-load-box clearfix js-load-box">
                        <img src="./frontend/note_info/appload.png" class="l">

                    </div>
                </li>
                
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span>购物车</span><span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0" style="display: none">0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"><div class="cart-title-box clearfix">                                        <h2 class="l">我的购物车</h2>                                        <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>                                    </div>                                    <div class="cart-wrap">                                        <div class="clear-cart">                                            <span class="cartIcon icon-shopping-cart"></span>                                            <h3>购物车里空空如也</h3>                                            <div class="text">快去这里选购你中意的课程</div>                                            <p><a class="go-link" href="http://coding.imooc.com/" target="_blank">实战课程</a></p>                                            <p><a class="go-link" href="http://class.imooc.com/" target="_blank">职业路径</a></p>                                        </div>                                    </div>                                    <div class="more-box clearfix">                                        <div class="l show-box">                                            <span class="text"><a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a></span>                                        </div>                                        <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>                                    </div></div>
                </li>

               
                <li class="set_btn user-card-box" id="header-user-card">
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="http://www.imooc.com/u/6197642" target="_self">
                        <img width="40" height="40" src="./frontend/note_info/5a1d5c790001797701000100-100-100.jpg">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card"><div class="card-inner">
                            <div class="card-top clearfix">
                                <a href="http://www.imooc.com/u/6197642" class="l">
                                    <img src="./frontend/note_info/5a1d5c790001797701000100-100-100.jpg" alt="qq__11888">
                                </a>
                                <div class="card-top-right-box l">
                                    <a href="http://www.imooc.com/u/6197642">
                                        <span class="name text-ellipsis">qq__11888</span>
                                    </a>
                                    <div class="meta">
                                        <a href="http://www.imooc.com/u/6197642/experience">经验<b id="js-user-mp">15</b>
                                        </a>
                                        <a href="http://www.imooc.com/u/6197642/credit">积分<b id="js-user-credit">2</b></a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-center-box">
                                <ul class="clearfix">
                                    <li class="l">
                                        <a href="http://www.imooc.com/u/6197642/courses" target="_blank">
                                            <span class="user-center-icon icon-tick"></span>我的课程
                                        </a>
                                    </li>
                                    <li class="l">
                                        <a href="http://order.imooc.com/myorder" target="_blank">
                                            <span class="user-center-icon icon-receipt"></span>订单中心
                                        </a>
                                    </li>
                                    <li class="l">
                                        <a href="http://www.imooc.com/mall/index" target="_blank">
                                            <span class="user-center-icon icon-score_shop"></span>积分商城
                                        </a>
                                    </li>
                                    <li class="l">
                                        <a href="http://www.imooc.com/user/setbindsns" target="_blank">
                                            <span class="user-center-icon icon-set"></span>个人设置
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">HTML+CSS基础课程</span>
                                    <span class="media-name text-ellipsis">1-1 代码初体验，制作我的第一个网页</span>
                                    <i class="icon-clock"></i>
                                    <a href="http://www.imooc.com/video/49" class="continue" title="HTML+CSS基础课程1-1  代码初体验，制作我的第一个网页">继续</a>
                                </span>
                            </div>
                            <div class="card-sets clearfix">
                                <a href="http://www.imooc.com/passport/user/logout?referer=//www.imooc.com" class="l">安全退出</a>
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
        为了账号安全，请及时绑定邮箱和手机<a href="http://www.imooc.com/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<script>
var isLogin=1
</script>
<div class="top-bg-warp">
	<div class="top-bg clearfix">
		<div class="top-bg-left l">
		 					  	<!-- 面包屑 -->
			    <div class="detail-path">
			        <a href="note_index">手记</a> \ <span>{{$data['data']->notes_title}}</span>
			    </div>
			    <!-- 面包屑end -->
		 		   
			    <div class="detail-title-wrap">
			        <h1 class="detail-title">
			        <span class="d-t">{{$data['data']->notes_title}}</span>
			        {!!($data['data']->is_original)==1?"<span class='type'>原创</span>":''!!}
                    </h1>
			        <div class="dc-addon clearfix">
			            <div class="dc-profile clearfix">
			                <span class="spacer l">{{$data['data']->addtime}}</span>
			                {{--<span class="spacer l spacer-2">995浏览</span>--}}
			                <a class="spacer l" href="http://www.imooc.com/article/21649#comment">2评论</a>

							<div class="r rinfo">

                                <div class="font-info">

				                </div>
							</div>			              
			                
			            </div>
			        </div>
				</div>
			</div>
    <div class="top-bg-right r" style="float:right;margin-right:0px;">
    <div class="detail-right"><!-- 右侧start -->
        <div class="recommend-info">
              <!-- 作者信息 -->
            <div class="aside-author">
                    <div class="p clearfix">
                        <a href="http://www.imooc.com/u/6208006/articles" class="l" title="fengzhizi715" target="_blank">
                            <img src="{{$data['userInfo']->head_ico}}">
                        </a>
                    </div>
                    <p class="u-nick-warp">
                     <a class="nick" href="http://www.imooc.com/u/6208006/articles" target="_blank">
                        {{$data['userInfo']->username}}
                        </a>
                    </p>
                   
                    <span class="user-job">没有写详细信息</span>
                    <span class="user-desc">
                        他很懒没有描述
                    </span>
                    <div class="btn-box clearfix">
                        <a href="http://www.imooc.com/u/6208006/articles" target="_blank" class="article-num r-bor l">
                            <span>{{$data['num']}}</span>篇手记
                        </a>
                        <a href="http://www.imooc.com/u/6208006/articles?type=praise" target="_blank" class="article-recom l">
                            {{--<span>1</span>推荐--}}
                        </a>
                    </div>
                </div>
                                <!-- 推荐信息 -->
                <div class="recommend-list r-course-list">
                    <ul>
                        @foreach($data['notes'] as $key=>$val)
                                <li class="clearfix show-more">
                                    <a target="_blank" data-track="sztuijian-1-1" href="http://coding.imooc.com/class/71.html?mc_marking=4655172e1a62839eea65105dbf244230&amp;mc_channel=sjkctjpc">
                                        <div class="r-left l" style="background-image:url('{{$val->notes_face}}')">
                                            <div class="bg-all"></div>
                                        </div>
                                    </a>
                                    <div class="r-right l">
                                        <a target="_blank" data-track="sztuijian-1-1" href="http://coding.imooc.com/class/71.html?mc_marking=4655172e1a62839eea65105dbf244230&amp;mc_channel=sjkctjpc">
                                            <h3>{{$val->notes_content}}</h3>
                                        </a>
                                        {{--<p class="r-desc">ACM亚洲区获奖者亲授，附完整Java代码，帮你梳理算法思路，培养算法思维        </p>--}}
                                        {{--<p class="r-p">3958 人在学        </p>--}}
                                    </div>
                                </li>
                        @endforeach
                    </ul>
                </div>
               
        </div>
        
        <!-- 免费课程推荐 -->
        <div class="course-recommend r-course-list hide">
             <h2></h2>
             <ul>
               
             </ul>
        </div>    

        <!-- 作者信息end -->

    </div><!-- 右侧end -->
</div>
	</div>    
</div>



<div class="opus-wrap clearfix" style="">

<div class="detail-left l" style="">  
    <!-- 手记详情 -->
    <div class="detail-content-wrap">
        
        <div class="detail-content ">
            <p style="width:735px;">
                {!! $data['data']->notes_content !!}
            </p>
        </div>
       
        <!-- 标签 -->
        
        <div class="cat-box">
            <div class="cat-wrap clearfix">
                <span class="l ori-span">相关标签：</span>
                @foreach($class as $val)
                    <a class="cat l" href="http://www.imooc.com/article/tag/3" target="_blank">{{$val->class_name}}</a>
                @endforeach
                                
                <div class="original-warp r" style="width:300px;">
                    <span class="line-r"></span>
                    <p class="original">本文原创发布于慕课网 ，转载请注明出处，谢谢合作！</p>
                </div>

            </div>
            <button data-id="{{$data['data']->notes_id}}" style="font-size: 50px;{{!empty($is_hit)?'color:red;':'color:green;'}}" {{!empty($is_hit)?'disabled':''}} class="glyphicon glyphicon-thumbs-up hit"></button>
            <span>{{!empty($is_hit)?'已点赞':'点赞'}}</span>
            &nbsp;&nbsp;&nbsp;&nbsp;点赞量：<span>{{$data['data']->hitsnum}}</span>
        </div>
            

    </div>
    <!-- 手记详情end -->
  

    <!-- 相关阅读end -->


    <div class="detail-feedback-wrap" style="">
        <!-- 评论框 -->
        <form method="post" action="note_comment">
            <input type="hidden" value="{{$user->admin_id}}" name="uid"/>
            <input type="hidden" value="{{$data['data']->notes_id}}" name="n_id"/>
            <div class="df-ipt-wrap" id="comment" style="">
                        <h4 class="add-com-tip">添加评论</h4>
                <div class="feeds-author">
                    <img src="{{$user->head_ico}}" alt="qq__11888">

                </div>
                {{--百度编辑器--}}
                <script id="editor" name="comment_content" type="text/plain" style="width:600px;height:100px;"></script>
                <p id="feed-error" class="feed-error"></p>
                <div class="df-bottom clearfix">
                    <div class="verify-code"></div>
                    <button id="js-submit" class="btn btn-red r">评论</button>
                </div>
            </div>
        </form>
        <!-- 评论框end -->

        <div class="df-title" id="all_comments">
            <span class="comment-num">
                <i>{{$data['comment_num']}}</i>条
            </span>评论
        </div>
        <div id="js-feedback-list-wrap" class="feedback-list">
            
        <div id="js-feedback-list">
            @foreach($data['comment'] as $comment)
                <div class="comment-box">
                    <div class="comment clearfix">
                        <div class="feed-author l">
                            <a href="http://www.imooc.com/u/6207827/articles">
                                <img src="{{$comment->head_ico}}" width="48">
                            </a>
                            <a class="nick" href="" target="_blank">
                                {{$comment->username}}
                            </a>
                            <span class="com-floor r">{{$comment->n_c_id}}F</span>
                        </div>
                        <div class="feed-list-content">
                            <p></p>
                            <p>{!! $comment->comment_content !!}</p>
                            <p></p>
                            <div class="comment-footer clearfix">
                            {{--<span class="agree-with l" data-commentid="40538" data-uid="6207827" data-username="qq_白日梦_16">--}}
                                {{--<b class="imv2-thumb_up" title="赞同"></b>--}}
                                {{--<em>0</em>--}}
                            {{--</span>--}}
                            {{--<span class="reply-btn" data-commentid="40538" data-uid="6207827" data-username="qq_白日梦_16">--}}
                                {{--回复--}}
                            {{--</span>--}}
                                <span class="feed-list-times r"> {{$comment->addtime}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="reply-box"></div>
                    <div class="release-reply">
                        <a href="http://www.imooc.com/u/6197642/articles" class="user-head">
                            <img src="./frontend/note_info/5a1d5c790001797701000100-100-100(2).jpg" alt="qq__11888"></a>
                        <a href="http://www.imooc.com/u/6197642/articles" class="nick">qq__11888</a>
                        <div class="replay-con">
                            <div class="textarea-wrap">
                                <textarea placeholder="写下你的回复..."></textarea>
                            </div>
                            <p class="errtip"></p>
                            <div class="reply-ctrl clearfix">
                                <div class="verify-code"></div>
                                <div class="btn-wrap">
                                    <div class="cancel-btn">取消</div>
                                    <div data-comment-uid="6207827" class="release-reply-btn">回复</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
        <!-- 分页页码  -->
        <div class="qa-comment-page" style="display: none;"></div>
    </div>
</div><!-- 左侧end -->
<div class="hide">
    <input type="hidden" data-pic="5a20c5b8000185a305000333" id="js-share-img">
    <input type="hidden" data-pic="//img.mukewang.com/5a20cf4a00015e5416002000-100-100.jpg" id="js-img-author">
</div>
<div class="r">
</div>




</div><!--opus-wrap end-->

<div id="main">

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
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="http://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://www.imooc.com/about/faq" target="_blank">常见问题</a></li>
                        <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                       <!--  <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>





<script type="text/javascript" charset="utf-8" src="./frontend/note_info/ueditor.final.min.js.下载"></script>

<!--script-->
<script type="text/javascript" src="./frontend/note_info/error.js.下载"></script>
<script src="./frontend/note_info/ssologin.js.下载"></script>
<script type="text/javascript" src="./frontend/note_info/sea.js.下载"></script>
<script type="text/javascript" src="./frontend/note_info/sea_config.js.下载"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>






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


<script type="text/javascript" src="./frontend/note_info/user"></script>
<script type="text/javascript" src="./frontend/note_info/iplookup.php"></script>
<div>

</div>
<div style="position: absolute; top: 100px; left: 100px; width: 164px; height: 164px; margin-left: -82px; margin-top: -82px; opacity: 1; display: none; transform: rotate(0deg) translate(0px, 0px);">
    <svg style="position: absolute; width: 100%; height: 100%;">
        <ellipse cy="0" cx="0" ry="7" rx="7" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="deeppink" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;">

        </ellipse>
        <ellipse cy="0" cx="0" ry="7" rx="7" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="deeppink" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;">

        </ellipse>
        <ellipse cy="0" cx="0" ry="7" rx="7" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="deeppink" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;">

        </ellipse>
        <ellipse cy="0" cx="0" ry="7" rx="7" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="deeppink" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;">

        </ellipse>
        <ellipse cy="0" cx="0" ry="7" rx="7" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="deeppink" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;">

        </ellipse>
    </svg>
</div>
<div id="edui_fixedlayer" class="edui-imooc" style="position: fixed; left: 0px; top: 0px; width: 0px; height: 0px;">
    <div id="edui41" class="edui-popup  edui-bubble edui-imooc" onmousedown="return false;" style="display: none;">
        <div id="edui41_body" class="edui-popup-body edui-imooc">
            <iframe style="position:absolute;z-index:-1;left:0;top:0;background-color: transparent;" frameborder="0" width="100%" height="100%" src="./frontend/note_info/saved_resource(1).html" class="edui-imooc">

            </iframe>
            <div class="edui-shadow edui-imooc">

            </div>
            <div id="edui41_content" class="edui-popup-content edui-imooc">
            </div>
        </div>
    </div>
</div>
<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 1px; height: 1px; z-index: 999999999;">
    <object id="global-zeroclipboard-flash-bridge" name="global-zeroclipboard-flash-bridge" width="100%" height="100%" type="application/x-shockwave-flash" data="./frontend/note_info/ZeroClipboard.swf.下载">
        <param name="allowScriptAccess" value="sameDomain">
        <param name="allowNetworking" value="all">
        <param name="menu" value="false">
        <param name="wmode" value="transparent">
        <param name="flashvars" value="trustedOrigins=www.imooc.com%2C%2F%2Fwww.imooc.com%2Chttp%3A%2F%2Fwww.imooc.com">
    </object>
</div>
</body>
</html>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="./frontend/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="./frontend/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="./frontend/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    //实例化编辑器
    var ue = UE.getEditor('editor',{
        toolbars:[
            [
                'insertcode','source', 'insertimage', 'emotion', 'undo', 'redo','bold', 'italic', 'underline', 'link'
            ]
        ]
    });
</script>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script>
    $('.hit').click(function(){
        var id = $(this).data('id');
        var  num = parseInt($(this).next().next().text());
        var obj = $(this);
        $.ajax({
            url:'note_hit',
            data:{nid:id},
            type:'get',
            dataType:'json',
            success:function(msg){
                if(msg){
                    obj.next().next().text('');
                    obj.attr('disabled','disabled');
                    obj.css('color','red');
                    obj.next().text('已点赞');
                    obj.next().next().text(num + 1);
                }
            }
        });
    });
</script>