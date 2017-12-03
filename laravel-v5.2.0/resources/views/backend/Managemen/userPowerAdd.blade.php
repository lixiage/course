<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>分类列表</title>
    <!-- Bootstrap core CSS -->
    <link href="./backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="./backend/font-awesome/css/font-awesome.css" rel="stylesheet" />

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
    @include('backend.layouts.header');
    @include('backend.layouts.menu');
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>权限列表</h3>

            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> 权限列表 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="privilege">添加权限</a></h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i><span style="width:30px;margin-left:30px;">权限名称</span></th>
                                <th><i class="fa fa-bullhorn"></i><span style="width:30px;margin-left:30px;">控制器</span></th>
                                <th><i class="fa fa-bullhorn"></i><span style="width:30px;margin-left:30px;">方法</span></th>
                                <th><i class="fa fa-bullhorn"></i><span style="width:30px;margin-left:30px;">排序</span></th>
                                <th><i class="fa fa-bullhorn"></i><span style="width:30px;margin-left:30px;">操作</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  foreach($info as $key=>$val){?>
                            <tr>
                                <th><span style="margin-left:50px;"><?php echo $val->pname?></span></th>
                                <th><span style="margin-left:50px;"><?php echo $val->pcontroller?></span></th>
                                <th><span style="margin-left:50px;"><?php echo $val->paction?></span></th>
                                <th><span style="margin-left:50px;"><?php echo $val->sorts?></span></th>
                                <th><a href="">编辑</a> | <a href="">移除</a></th>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        {{--{!! $classifyData->render() !!}--}}
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
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

<script>

</script>

</body>
</html>
