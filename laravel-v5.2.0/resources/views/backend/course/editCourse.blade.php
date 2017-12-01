<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>添加课程</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="./backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Custom styles for this template -->
    <link href="./backend/css/style.css" rel="stylesheet">
    <link href="./backend/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>后台管理</b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        {{--<ul class="nav top-menu">--}}
            {{--<!-- settings start -->--}}
            {{--<li class="dropdown">--}}
                {{--<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">--}}
                    {{--<i class="fa fa-tasks"></i>--}}
                    {{--<span class="badge bg-theme">4</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu extended tasks-bar">--}}
                    {{--<div class="notify-arrow notify-arrow-green"></div>--}}
                    {{--<li>--}}
                        {{--<p class="green">You have 4 pending tasks</p>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<div class="task-info">--}}
                                {{--<div class="desc">DashGum Admin Panel</div>--}}
                                {{--<div class="percent">40%</div>--}}
                            {{--</div>--}}
                            {{--<div class="progress progress-striped">--}}
                                {{--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">--}}
                                    {{--<span class="sr-only">40% Complete (success)</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<div class="task-info">--}}
                                {{--<div class="desc">Database Update</div>--}}
                                {{--<div class="percent">60%</div>--}}
                            {{--</div>--}}
                            {{--<div class="progress progress-striped">--}}
                                {{--<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">--}}
                                    {{--<span class="sr-only">60% Complete (warning)</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<div class="task-info">--}}
                                {{--<div class="desc">Product Development</div>--}}
                                {{--<div class="percent">80%</div>--}}
                            {{--</div>--}}
                            {{--<div class="progress progress-striped">--}}
                                {{--<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">--}}
                                    {{--<span class="sr-only">80% Complete</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<div class="task-info">--}}
                                {{--<div class="desc">Payments Sent</div>--}}
                                {{--<div class="percent">70%</div>--}}
                            {{--</div>--}}
                            {{--<div class="progress progress-striped">--}}
                                {{--<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">--}}
                                    {{--<span class="sr-only">70% Complete (Important)</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="external">--}}
                        {{--<a href="#">See All Tasks</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<!-- settings end -->--}}
            {{--<!-- inbox dropdown start-->--}}
            {{--<li id="header_inbox_bar" class="dropdown">--}}
                {{--<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">--}}
                    {{--<i class="fa fa-envelope-o"></i>--}}
                    {{--<span class="badge bg-theme">5</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu extended inbox">--}}
                    {{--<div class="notify-arrow notify-arrow-green"></div>--}}
                    {{--<li>--}}
                        {{--<p class="green">You have 5 new messages</p>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<span class="photo"><img alt="avatar" src="./backend/img/ui-zac.jpg"></span>--}}
                                    {{--<span class="subject">--}}
                                    {{--<span class="from">Zac Snider</span>--}}
                                    {{--<span class="time">Just now</span>--}}
                                    {{--</span>--}}
                                    {{--<span class="message">--}}
                                        {{--Hi mate, how is everything?--}}
                                    {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<span class="photo"><img alt="avatar" src="./backend/img/ui-divya.jpg"></span>--}}
                                    {{--<span class="subject">--}}
                                    {{--<span class="from">Divya Manian</span>--}}
                                    {{--<span class="time">40 mins.</span>--}}
                                    {{--</span>--}}
                                    {{--<span class="message">--}}
                                     {{--Hi, I need your help with this.--}}
                                    {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<span class="photo"><img alt="avatar" src="./backend/img/ui-danro.jpg"></span>--}}
                                    {{--<span class="subject">--}}
                                    {{--<span class="from">Dan Rogers</span>--}}
                                    {{--<span class="time">2 hrs.</span>--}}
                                    {{--</span>--}}
                                    {{--<span class="message">--}}
                                        {{--Love your new Dashboard.--}}
                                    {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">--}}
                            {{--<span class="photo"><img alt="avatar" src="./backend/img/ui-sherman.jpg"></span>--}}
                                    {{--<span class="subject">--}}
                                    {{--<span class="from">Dj Sherman</span>--}}
                                    {{--<span class="time">4 hrs.</span>--}}
                                    {{--</span>--}}
                                    {{--<span class="message">--}}
                                        {{--Please, answer asap.--}}
                                    {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="index.html#">See all messages</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<!-- inbox dropdown end -->--}}
        {{--</ul>--}}
        <!--  notification end -->
    </div>
    <div class="top-menu">
    <ul class="nav pull-right top-menu">
        <li><a class="logout" href="login.html">Logout</a></li>
    </ul>
    </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('backend.layouts.menu');
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>添加课程</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form class="form-horizontal style-form" action="{{ url('addCourseDo') }}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择课程的方向</label>
                                <div class="col-sm-10">
                                    <select name="dir_id"  class="form-control">
                                            <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择课程的分类</label>
                                <div class="col-sm-10">
                                    <select name="class_id"  class="form-control">
                                            <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择课程的类型</label>
                                <div class="col-sm-10">
                                    <select name="type_id"  class="form-control">
                                            <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请输入课程的名称</label>
                                <div class="col-sm-10">
                                    <input type="text" name="cour_name"  class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请输入课程的价格（RMB/元）</label>
                                <div class="col-sm-10">
                                    <input type="text" name="cour_money"  class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请输入课程的简介</label>
                                <div class="col-sm-10">
                                    <textarea name="cour_content" cols="20" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择课程的等级</label>
                                <div class="col-sm-10">
                                    <select name="cour_level"  class="form-control">
                                        <option value="0">初级</option>
                                        <option value="1">中级</option>
                                        <option value="2">高级</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">是否设为免费课程</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="cour_is_free" value="0" checked/>是<br><br>
                                    <input type="radio" name="cour_is_free" value="1"/>否
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请添加课程的封面</label>
                                <div class="col-sm-10">
                                    <input type="file" name="cour_image"  class="form-control"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-theme">添加课程</button>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->



        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    @include('backend.layouts.footer');
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src=" {{ asset('backend/js/jquery.js')}}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('backend/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('backend/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


<!--common script for all pages-->
<script src="{{ asset('backend/js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{ asset('backend/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

<!--custom switch-->
<script src="{{ asset('backend/js/bootstrap-switch.js')}}"></script>

<!--custom tagsinput-->
<script src="{{ asset('backend/js/jquery.tagsinput.js')}}"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="{{ asset('backend/js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend/js/bootstrap-daterangepicker/date.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend/js/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{ asset('backend/js/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>


<script src="{{ asset('backend/js/form-component.js')}}"></script>


<script>
    //custom select box

    //    $(function(){
    //        $('select.styled').customSelect();
    //    });

</script>

</body>
</html>
