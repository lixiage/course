define(function(require,exports,module){require("/static/lib/backbone/backbone-1.0.0.min.js");var c=require("./tpl.js"),a=Backbone.View.extend({initialize:function(){this.tpl=c},events:{"click .tpl-changePwd .js-submit":"clickToSubmit"},clickToSubmit:function(){var c=this;if(W.validate(this.$el.find(".tpl-changePwd"))){$(".tpl-changePwd .js-submit").text("正在保存...");var a=this.$el.find(".js-prePwd").val(),h=this.$el.find(".js-pwd").val(),w=this.$el.find(".js-surPwd").val();return h!=w?(this.$el.find(".js-surPwd").siblings(".moco-control-tip").html("两次输入密码不一致"),void $(".tpl-changePwd .js-submit").text("确定")):void $.ajax({type:"post",url:"/user/ajaxsetinfo",data:{type:4,oldpw:a,newpw:h},dataType:"json",success:function(a){1==a.result?(c.renderFinish(),$.alert("密码修改成功，请重新登录。",{callback:function(){window.location.href="//www.imooc.com/user/newlogin/from_url/1004/"}})):c.$el.find(".js-gerror").html(a.msg)},error:function(){c.$el.find(".js-gerror").html("后端请求失败,请检查后端接口！")},complete:function(){$(".tpl-changePwd .js-submit").html("确定")}})}},render:function(){$.dialog(this.tpl,{modal:!0,title:"修改密码",width:488})},renderFinish:function(){$(".js-modal-close").click()}});module.exports=a});