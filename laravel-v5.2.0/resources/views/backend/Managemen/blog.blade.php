<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>添加权限</title>
    <!-- Bootstrap core CSS -->
    <link href="./backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="./backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="./backend/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="./backend/css/style.css" rel="stylesheet">
    <link href="./backend/css/style-responsive.css" rel="stylesheet">
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
            <h3><i class="fa fa-angle-right"></i>添加权限</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form class="form-horizontal style-form" action="{{ url('privilege') }}" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">权限名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pname" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">选择父权限</label>
                                <div class="col-sm-10">
                                    <select name="parent_id"  class="form-control">
                                            <option value="0">根权限</option>
                                        <?php
                                            foreach($info as $key=>$val){
                                        ?>
                                            <option value="<?php echo $val->pid?>"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;",$val->leve)?><?php echo $val->pname?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">控制器</label>
                                <div class="col-sm-10">
                                    <input type="text" name="controller"  class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">方法</label>
                                <div class="col-sm-10">
                                    <input type="text" name="action"  class="form-control"/>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-theme">添加权限</button>
                            <button type="reset"  class="btn btn-theme">重置</button>
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

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
