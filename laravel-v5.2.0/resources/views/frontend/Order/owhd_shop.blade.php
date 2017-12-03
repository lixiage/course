

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BAT大咖助力 全面升级Android面试-慕课网实战</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.imooc.com *.mukewang.com *.baidu.com *.sina.com.cn *.bootcss.com">
    <meta name="keywords" content="Android面试技巧" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="这是一门区别于其他面试指南讲解的课程，课程不仅有BAT大咖分享面试真题，还会系统完整讲解Android面试综合性知识，为了面试，同时也提升自己的技术水平，实现双赢效果" />

    <link rel="stylesheet" href="//www.imooc.com/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />

    <style type="text/css">
        .moco-modal-info {
            font-size: 14px;
            line-height: 20px;
        }
    </style>
    <link merge="false" rel="stylesheet" type='text/css' href="/static/module/class/content/css/101-less.css?v=201711291022" />

    <script type="text/javascript">
        var OP_CONFIG={"module":"class","page":"index","userout":0,"usercaution":null};
        OP_CONFIG.isLogin = 0;
        var isLogin = 0;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cartFlag = 0;
        var seajsTimestamp="v=201711291022";
    </script>


    <link rel="stylesheet" href="//coding.imooc.com/static/module/??common/css/common-less.css,course/css/course-less.css,course/css/precon-less.css,class/common/css/index-less.css?v=1511867735" type="text/css" />
</head>
<body >

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="//www.imooc.com/" target="_self" class="hide-text" title="首页">慕课网</a></div>

        <button type="button" class="navbar-toggle visible-xs-block js-show-menu" >
            <i class="sz-list"></i>
        </button>

        <div class="g-menu-mini l">
            <a href="javascript:;" class="menu-ctrl">
                <i class="sz-list"></i>
            </a>
            <ul class="nav-item l">
                <li class="set-btn visible-xs-block"><a href="//www.imooc.com/user/newlogin" target="_self">登录</a> / <a href="//www.imooc.com/user/newsignup" target="_self">注册</a></li>

                <li><a href="//www.imooc.com/course/list" target="_self">免费课程</a></li>
                <li><a href="http://class.imooc.com" target="_self" class="program-nav">职业路径<i class="icn-new"></i></a></li>
                <li><a href="/" class="active" target="_self">实战</a></li>
                <!--<li><a href="http://www.imooc.com/corp/index"   target="_self">分享</a></li>-->
                <li><a href="//www.imooc.com/wenda" target="_self">猿问</a></li>
                <li><a href="//www.imooc.com/article" target="_self">手记</a></li>
                <!--<li><a href="http://www.imooc.com/wiki" target="_self">WIKI</a></li>-->

            </ul>
        </div>
        <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="app-download" id="js-app-load">
                    <a href="//www.imooc.com/mobile/app" target="_blank" style="width:60px;">下载APP</a>
                    <div class="app-load-box clearfix js-load-box">
                        <img src="//www.imooc.com/static/img/common/appload.png " class="l">
                        <div class="r">
                            <p>扫描下载慕课网APP</p>
                            <a href="https://itunes.apple.com/cn/app/mu-ke-wang/id722179140?mt=8"><i class="imv2-ios"></i>App Store下载</a>
                            <a href="//www.imooc.com/mobile/mukewang.apk"><i class="imv2-android"></i>Android下载</a>
                        </div>
                    </div>
                </li>

                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="sz-shopping-cart js-endcart"></span><span>购物车</span><span class="shopping_icon js-cart-num"  data-ordernum="0" data-cartnum="0" style='display: none'>0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"></div>
                </li>
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">登录</a> / <a href="#" id="js-signup-btn">注册</a>
                </li>
            </ul>
        </div>
        <div class='search-warp clearfix' style='min-width: 32px;'>

            <div class="pa searchTags js-searchtags" ></div>

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='sz-search'></i></div>
        </div>
    </div>
</div>



<div class="course-class-infos pale-color">
    <div class="w pr">
        <div class="path">
            <a href="/">实战</a>
            <i class="path-split">\</i><span>{{ $info[0]->cour_name }}</span>
        </div>

        <div class="extra">
            <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1439263858135">
                <a href="javascript:;" class="share wx js-share sz-weixin" data-cmd="weixin" title="分享到微信">
                </a>
                <a href="javascript:;" class="share qq js-share sz-qq" data-cmd="qzone" title="分享到QQ空间">
                </a>

                <a href="javascript:;" class="share sina js-share sz-weibo" data-cmd="tsina" title="分享到新浪微博">
                </a>
            </div>
        </div>

        <div class='info-warp tc'>

            <div class='hide'>
                <h1 class="l">{{ $info[0]->cour_name }}</h1>
            </div>


            <div class='info-bar tc'>
                <div class="statics clearfix">
                    <div class="static-item first">
                        <span class="meta">难度</span>
                        <span class="meta-value"><strong>中级</strong></span>
                    </div>
                    <div class="static-item static-time">
                        <span class="meta">时长</span>
                        <span class="meta-value"><strong>18小时</strong></span>
                        <em></em>
                    </div>
                    <div class="static-item">
                        <span class="meta">学习人数</span>
                        <span class="meta-value"><strong>1821</strong></span>
                        <em></em>
                    </div>
                    <div class="static-item">
                        <span class="meta-value"><strong>9.9分</strong></span>
						<span class="meta meta-stars">
							<i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i>
						</span>
                        <em></em>
                    </div>
                </div>
            </div>

            <div class="price-box">
				<span class="num clearfix">

                        <span class="discount-price">
						<span class="baseline baseline-y">
						<span class="new-y">&yen;</span>
						<span class="cur-price"><b>{{ $info[0]->cour_money }}</b><b class="sub"></b></span>
						<input type="hidden" class="img" value="{{ $info[0]->cour_image }}"/>
                        </span>
					</span>

				</span>


            </div>

            <div class="clearfix btnwarp">
                <a href="{{ url('owhd_order',['cour_id'=>$info[0]->cour_id]) }}" class="js-buy-trigger buy-class-btn class-btn1 buynow-btn" data-cid="101" data-pay="0" id="buy-trigger">
                    <span>立即购买</span>
                </a>

                <button class='js-addcart addcart car' data-cid='101' data-type='1'>
                    <img  src="{{ asset('frontend/css/confirm/gouwuche.jpg') }}" height="50px" width="40px" alt=""/>
                </button>

                <div class="preview-tip">
                </div>
            </div>

            <div class="adjustment-intro-box">
            </div>
        </div>
    </div>

    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap" style="background-image:url(//img.mukewang.com/szimg/594a1221000141d420000520.jpg)"></div>
    </div>
</div>







<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973"  target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="//www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="//www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="//www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="//www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="//www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://coding.imooc.com/user/faq" target="_blank">常见问题</a></li>
                        <li> <a href="//www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="//www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                        <!-- <li><a href="http://www.imooc.com/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<div id="J_GotoTop" class="elevator">

    <a href="/user/feedback" class="elevator-msg"  target="_blank" >
        <i class="sz-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="/user/faq" class="elevator-faq"  target="_blank" >
        <i class="sz-help_outline"></i>
        <span class="">常见问题</span>
    </a>
    <a href="//www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="sz-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="sz-weixigzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="sz-arrow-up"></i>
        <span class="">返回顶部</span>
    </a>
</div>

<div class="comp-modal-overlay"></div>
<div class="modal modal-buy" id="before-buy-modal">
    <div class="inner">
        <div class="header">
            <strong class="tit">购买课程</strong>
            <a href="javascript:;" class="help">帮助？</a>
        </div>
        <div class="content">
            <div class="infos">
                <span class="name">BAT大咖助力 全面升级Android面试</span>
                <span class="price">
																	<i>&yen;</i><b>288</b><i>.00</i>
								</span>
                <span class="deadline">

					                </span>
            </div>
        </div>
        <div class="footer">
            <a href="javascript:;" class="cancel-btn" rel="modal:close">取消</a>
            <a data-href="/pay/buynow/cid/101" href='javascript:;' class="go-pay-btn">去支付</a>
        </div>
    </div>
</div>


</body>
</html>
<script src="{{ asset('jquery.min.js') }}"></script>
<script src="{{ asset('layer/layer.js') }}"></script>
<script>
   $(document).on('click','.car',function(){
        var cour_name = "{{ $info[0]->cour_name }}";
        //alert(cour_name);return false;
        var cour_id = "{{ $info[0]->cour_id }}";
        var cour_money = "{{ $info[0]->cour_money }}";
        var type_id = "{{ $info[0]->type_id }}";
        var cour_image = "{{ $info[0]->cour_image }}";

        $.ajax({
            url:"{{ url('swhd_index') }}",
            type:"post",
            data:'cour_name='+cour_name+'&cour_id='+cour_id+'&cour_money='+cour_money+'&type_id='+type_id+'&cour_image='+cour_image,
            success:function(msg){
                if(msg == 1){
                    layer.msg('加入购物车成功', {
                        offset: 't',
                        anim: 6
                    });
                }
                if(msg == 2){
                    layer.msg('请不要重复添加', {
                        offset: 't',
                        anim: 6
                    });
                }
            }
        })
    })
</script>

