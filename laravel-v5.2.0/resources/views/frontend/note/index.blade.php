<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>手记</title>
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

<link rel="stylesheet" href="./frontend/css/sji/moco.css" type="text/css">
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="./frontend/css/sji/a.css" type="text/css">

</head>
<body>

<div id="header">
    <div class="page-container" id="nav">
         <div id="logo" class="logo">
             <a href="https://www.imooc.com/" target="_self" class="hide-text" title="首页" style="background-image: url('./frontend/images/index/logo.jpg')">慕课网</a>
         </div>
      

        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
            <li class="set-btn visible-xs-block">
                <a href="https://www.imooc.com/user/newlogin" target="_self">登录</a> / <a href="https://www.imooc.com/user/newsignup" target="_self">注册</a></li>
                        
            <li>
                <a href="Freeindex" target="_self">免费课程</a>
            </li>           
            <li>
                <a href="Elastic" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a>
            </li>
            <li>
                <a href="Fight" target="_self">实战</a>
            </li>
            <li><a href="question_index" target="_self">猿问</a></li>
            <li><a href="note_index" class="active" target="_self">手记</a></li>
            
        </ul>
        <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span>购物车</span>
                        <span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0" style="display: none">0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"><div class="cart-title-box clearfix">                                        <h2 class="l">我的购物车</h2>                                        <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>                                    </div>                                    <div class="cart-wrap">                                        <div class="clear-cart">                                            <span class="cartIcon icon-shopping-cart"></span>                                            <h3>购物车里空空如也</h3>                                            <div class="text">快去这里选购你中意的课程</div>                                            <p><a class="go-link" href="http://coding.imooc.com/" target="_blank">实战课程</a></p>                                            <p><a class="go-link" href="http://class.imooc.com/" target="_blank">职业路径</a></p>                                        </div>                                    </div>                                    <div class="more-box clearfix">                                        <div class="l show-box">                                            <span class="text"><a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a></span>                                        </div>                                        <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>                                    </div></div>
                </li>             
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">登录</a> / <a href="#" id="js-signup-btn">注册</a>
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

<div class="container clearfix">
	<div class="article-left l">
        <div class="ad-create" style="background-image: url('./frontend/images/note.png')">
			<h3>用手记的方式，学习前沿流行技术</h3>
            <a href="note_insert" class="create-ques">创建手记</a>
		</div>
		<div class="article-ad-wrap clearfix">
			<div class="article-ad-img l">
                <a href="" class="article-ad-info" target="_blank"></a>
					<a class="article-ad-txt" href="" target="_blank">
						<span>{{isset($data[0])?$data[0]->notes_title:'此栏位暂时空缺'}}</span>
					</a>
					<img src="{{isset($data[0])?$data[0]->notes_face:'此栏位暂时空缺'}}" alt="{{isset($data[0])?$data[0]->notes_title:'此栏位暂时空缺'}}">
            </div>
			<!-- ad-img end -->
			<div class="ad-font l">
				<ul>
                    <li>
                        <div class="ad-r-warp ad-r-nottag">
						    <h2>
						    	<a href="" target="_blank">
                                    {{isset($data[1])?$data[1]->notes_title:'此栏位暂时空缺'}}
                                </a>
						    </h2>
                        </div>
                    </li>
                    <li>
					    <div class="ad-r-warp ad-r-nottag">
						    <h2>
						    	<a href="" target="_blank">
                                    {{isset($data[2])?$data[2]->notes_title:'此栏位暂时空缺'}}
                                </a>
						    </h2>
					    </div>
                    </li>
                </ul>
			</div>
			<!-- ad-font end -->
		</div>
				<!-- be-create end -->
        <div class="article-tool-bar clearfix">
	        <div class="tool-left l">
	            <a href="javascript:;" data-hot="hot" class="sort-item active">推荐</a>
	            <a href="javascript:;" class="sort-item ">新上榜</a>
	        </div>
        </div>

@foreach($data as $val)

            <div class="article-lwrap clearfix">

                <h3 class="item-title">
                    <a href="note_info?id={{$val->notes_id}}" class="title-detail" target="_blank">
                        {{$val->notes_title}}
                    </a>
                    @if($val->is_original==1)
                        <span class="original">原创</span>
                    @endif
                </h3>
                <!-- text -->
                <div class="item-txt">
                    <!-- img -->
                    <div class="item-img l" style="height: 110px;">
                        <a href="https://www.imooc.com/article/21560" target="_blank">
                            <img src="{{$val->notes_face}}" height="130" width="210">
                        </a>
                    </div>

                    <p class="item-bd" style="min-height:50px;max-height: 110px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;">

                    {{--<p class="item-bd" style="max-height: 140px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">--}}
                        {!! $val->notes_content !!}
                    </p>
                    <div class="item-btm clearfix">
                        <ul class="l left-info" data-fuid="1352822">
                            <li class="hd-pic">
                                <a class="publisher-name" href="javascript:void(0)" target="_blank">
                                    {{$val->username}}
                                </a>
                            </li>
                        </ul>
                        <div class="r right-info">
                            {{--<span class="looked">23浏览</span>--}}
                            {{--<span class="recom">3推荐</span>--}}
                            {{--<span class="judge">0评论</span>--}}
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
<!-- 分页 -->
<div id="pagenation" class="pagenation">
    <div class="page">
        <a href="{{$data->Url(1)}}">首页</a>
        <a href="{{$data->previousPageUrl()}}">上一页</a>
        @for($i = 1; $i <= $data->lastPage(); $i++)
            <a href="{{($data->CurrentPage() == $i)?'javascript:void(0)':$data->Url($i)}}" class="text-page-tag {{($data->CurrentPage() == $i)? ' active' : ''}}">
                {{$i}}
            </a>
        @endfor
        <a href="{{$data->nextPageUrl()}}">下一页</a>
        <a href="{{$data->lastPage()}}">尾页</a>
    </div>
</div>

	</div>
	<div class="article-right r">
        	
	<!-- 写手记 -->
	<div class="new-ques">
        <a href="note_insert" class="write-ques">创建手记</a>
	</div>

	    	
	</div>
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

