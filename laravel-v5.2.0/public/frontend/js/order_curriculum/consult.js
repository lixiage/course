define("consult/js/consult",["require"],function(){$(".js-like-btn").on("click",function(){var t=$(this),e=t.data("id");$.ajax({url:"/service/consult/ajaxpraiseconsult",type:"POST",dataType:"json",data:{advid:e},success:function(e){if(0==e.result){var s=t.parents(".like-wrap").find(".like-num");t.addClass("like"),s.html(parseInt(parseInt(s.html())+1)),$.prompt("成功")}else-11==e.result?location.href("http://www.imooc.com/user/newlogin"):$.prompt(e.msg)}})})});