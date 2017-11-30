<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="">


<?php
    foreach($info as $key=>$val){

?>
<input style="border: none; width: 30px;" class="tttt" value="<?php echo $val?>" type="text" readonly>
<?php }?>
</form>
</body>
</html>

<script src="{{asset('frontend/js.js')}}"></script>
<script>
    $(function(){
        var num = 0;
        $(document).on("mouseover",".tttt",function(){

            var shu = $(this).attr("data-id");
            if(shu) {
                $(this).attr("data-id", "");
                $(this).css("color", "red");
                num--
            }
            if(num>2){
                alert("sss");
                return false;
            }
            if(!shu){
                $(this).attr("data-id","1");
                $(this).css("color","yellow");
                num++
            }
        })
    })
</script>