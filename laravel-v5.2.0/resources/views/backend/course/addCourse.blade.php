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
    <link href="./backend/css/bootstrap.css" rel="stylesheet">
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
    @include('backend.layouts.header');
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
                                        @foreach($dirData as $v)
                                            <option value="{{ $v->dir_id }}">{{ $v->dir_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择课程的分类</label>
                                <div class="col-sm-10">
                                    <select name="class_id"  class="form-control">
                                        @foreach($classData as $v)
                                            <option value="{{ $v->class_id }}">{{ $v->class_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">请选择课程的类型</label>
                                <div class="col-sm-10">
                                    <select name="type_id"  class="form-control">
                                        @foreach($typeData as $v)
                                            <option value="{{ $v->type_id }}">{{ $v->type_name }}</option>
                                        @endforeach
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
<script src="./backend/js/jquery.js"></script>
<script src="./backend/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="./backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="./backend/js/jquery.scrollTo.min.js"></script>
<script src="./backend/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="./backend/js/common-scripts.js"></script>

<!--script for this page-->
<script src="./backend/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom switch-->
<script src="./backend/js/bootstrap-switch.js"></script>

<!--custom tagsinput-->
<script src="./backend/js/jquery.tagsinput.js"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="./backend/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="./backend/js/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="./backend/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


<script src="./backend/js/form-component.js"></script>


<script>
    //custom select box

//    $(function(){
//        $('select.styled').customSelect();
//    });

</script>

</body>
</html>
