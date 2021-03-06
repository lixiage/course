

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>支付中心_慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{ asset('frontend/css/payment/moco.min.css') }}" type="text/css" />

    <script type="text/javascript">
        var OP_CONFIG = {"module":"pay","page":"cashier","userout":0,"userInfo":{"uid":"6169489","nickname":"qq_LinaD_0","head":"http:\/\/img.mukewang.com\/user\/5a13e9020001af9101000100-80-80.jpg","usertype":"1","roleid":0,"phone":"13311552192"}};
        OP_CONFIG.isLogin = 1;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
        var requirejsTimestamp="v=201711291413";
    </script>

    <link rel="stylesheet" href="/static/module/??common/css/common-less.css,pay/common/css/common-less.css,pay/center/css/pay-center-less.css?v=1509701228" type="text/css" />
</head>

<body>

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo">
            <a href="http://www.imooc.com/" target="_self" class="hide-text" title="首页">慕课网</a>
        </div>

        <div class="l">
            <ul class="nav-item l">
                <li><a href="http://www.imooc.com/course/list" target="_self">课程</a></li>
                <li><a class='program-nav' href="http://class.imooc.com" target="_self">职业路径<i class="icn-new"></i></a></li>
                <li><a href="http://coding.imooc.com" target="_self">实战</a></li>
                <li><a href="{{url('question_index')}}" target="_self">猿问</a></li>
                <li><a href="{{url('note_index')}}" target="_self">手记</a></li>

            </ul>
        </div>

        <div id="login-area">
            <ul class="clearfix logined">
                <li class="app-download" id="js-app-load">
                    <a href="http://www.imooc.com/mobile/app" target="_blank" style="width:60px;">下载APP</a>
                    <div class="app-load-box clearfix js-load-box">
                        <img src="http://www.imooc.com/static/img/common/appload.png" class="l">
                        <div class="r">
                            <p>扫描下载慕课网APP</p>
                            <a href="https://itunes.apple.com/cn/app/mu-ke-wang/id722179140?mt=8"><i class="imv2-ios"></i>App Store下载</a>
                            <a href="http://www.imooc.com/mobile/mukewang.apk"><i class="imv2-android"></i>Android下载</a>
                        </div>
                    </div>
                </li>

                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="icon-shopping-cart imv2-cart  js-endcart"></span><span>购物车</span><span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"></div>
                </li>
                <li class='remind_warp'>
                    <i class="msg_remind"></i>
                    <a target="_blank" href='http://www.imooc.com/u/6169489/notices'>
                        <i class='imv2-notifications'></i>
                    </a>
                </li>

                <li class="set_btn user-card-box"  id="header-user-card">
                    <a id="header-avator" class="user-card-item" action-type="my_menu"  href="http://www.imooc.com/u/6169489/plans" target="_self">
                        <img src='' width='40' height='40' />
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card"></div>
                </li>
            </ul>
        </div>

        <div class='search-warp clearfix' style='min-width: 32px;'>
            <div class="pa searchTags js-searchtags" ></div>

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result"></ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='imv2-search'></i></div>
        </div>
    </div>
</div>

<div class='body-main'>


    <div class='cart-header'>
        <div class='cart-header-warp clearfix'>
            <div class='cart-title left clearfix'>
                <h1 class='left'>支付中心</h1>

            </div>
            <div class='right'>

            </div>
        </div>
    </div>


    <div class='cart-body'>
        <div class='cart-body-title'>
            <form action="{{ url('pay') }}" method="post">
            <div class='clearfix'>
                <div class='left trade-title'>
                    <span class='order'>订单：</span><span class='num'>
                        <input type="hidden" name="order_no" value="{{ $data[0]->order_no }}"/>
                        {{ $data[0]->order_no }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="red">{{ $cour_name }}</font>
                        <input type="hidden" name="cour_name" value="{{ $cour_name }}"/>
                    </span>
                </div>
                <div class='right'>
                    <a href='javascript:;' class='js-toggle-detai'></a>
                </div>
            </div>
        </div>
        <div class='pay-method'>
            <h2 class='pay-method-title'>支付方式</h2>
            <ul class='clearfix js-pay-method'>
                <li class='alipay active' data-type='1'>
                    <img src="{{ asset('frontend/css/payment/timg.jpg') }}" height="80px" width="230px" alt=""/>
                    <div class="huabei">
                    </div>
                    <div class='bottomright'>
                        <div class='triangle'></div>
                        <i class='imv2-check'></i>
                    </div>
                </li>

            </ul>
        </div>
        <div class='pay-summary clearfix'>
            <div class='warning'>
                <i class='imv2-error_c'></i>
            </div>

            <div class='summary'>

                <div class='clearfix total'>
                    <span class='label'>应付金额：</span>
				<span class='price'>
					<em>￥</em>
					<span>{{ $data[0]->goods_price }}</span>
                    <input type="hidden" name="goods_price" value="{{ $data[0]->goods_price }}"/>
				</span>
                </div>

                <div class='submit-warp clearfix'>
                    <button type="submit" data-ordernum='1711292045337004' class='pay-summary-submit js-pay-submit'>立即支付</button>
                </div>

            </div>
        </div>
    </div>
    </form>
    <!-- </div> -->

    <input type='hidden' id='jsPrice' value='366.00'>




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
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="http://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://class.imooc.com/user/faq" target="_blank">常见问题</a></li>
                        <li> <a href="http://class.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>

<div id="J_GotoTop" class="elevator">
    <a href="/user/feedback" class="elevator-msg" target="_blank">
        <i class="imv2-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="http://www.imooc.com/about/faq" class="elevator-faq" target="_blank">
        <i class="imv2-help_outline"></i>
        <span class="">常见问题</span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="imv2-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="imv2-weixigzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="imv2-arrow2_u"></i>
        <span class="">返回顶部</span>
    </a>
</div>

<div style="display: none">
</div>
</body>
</html>