define(function(require,exports,module){require("/static/lib/backbone/backbone-1.0.0.min.js");var c=require("./tpl.js"),a=Backbone.View.extend({initialize:function(a){this.tpl=c,this.hasPass=a.hasPass,this.email,this.timer},events:{"click .tpl-changeemail .js-submit":"clickToSubmit","click .tpl-changeemail .js-notVerity":"clickClearTimer","click .js-gotoVerity1":"clickToVerityEmail"},clickClearTimer:function(){clearInterval(this.timer)},math:function(){var c="sohu.com::http://mail.sohu.com                         |sina.com,sina.cn :: http://mail.sina.com                         |vip.sina.com :: http://vip.sina.com.cn                         |126.com :: http://www.126.com                         |163.com :: http://mail.163.com                         |vip.163.com :: http://vip.163.com                         |vip.126.com :: http://vip.126.com                         |qq.com,vip.qq.com :: http://mail.qq.com                         |msn.com,outlook.com,hotmail.com,live.cn,live.com :: http://outlook.com                         |gmail.com :: http://www.gmail.com                         |yahoo.com.cn,yahoo.cn,aliyun.com :: http://mail.aliyun.com                         |yahoo.com.tw :: http://mail.yahoo.com.tw                         |21cn.com :: http://mail.21cn.com                         |tom.com :: http://mail.tom.com/ ",a={};$.each(c.split("|"),function(c,h){var i,v,b=h.split("::"),h=$.trim(b[1]);for(b=b[0].split(","),i=0,v=b.length;v>i;i++)a[$.trim(b[i])]=h});var h=a[this.email.match(/[^@]*$/)[0]];return h},clickToVerityEmail:function(){var c=this.math();window.open(c),window.location.reload()},timerForColse:function(){},clickToSubmit:function(){if(W.validate(this.$el.find(".tpl-changeemail"))){$(".tpl-changeemail .js-submit").text("正在保存...");var c=this.$el.find(".js-email").val();this.email=c;var a=this;$.ajax({url:"/user/verificationmail",data:{t:"chg",new_email:c},dataType:"JSON",type:"post",success:function(c){0==c.status?a.renderFinish():a.$el.find(".js-gerror").html(c.msg)},error:function(){a.$el.find(".js-gerror").html("系统出错，请稍后重试！")},complete:function(){$(".tpl-changeemail .js-submit").text("确定")}})}},render:function(){clearInterval(this.timer),$.dialog(this.tpl,{modal:!0,title:"修改邮箱",width:488})},renderFinish:function(){$(".js-modal-close").click(),$.dialog('<div class="icon-tick-revert s-right"></div>                <div class="finshBox">                 <p class="font1">已向<span class="account color-red boreakall">'+this.email+'</span>发送邮件</p>                <p class="success-hint">请登录邮箱点击确认链接完成验证</p>                <a href="/about/faq?t=7&id=6" target="_blank" class="cantGot  js-resendMail">收不到邮件怎么办</a><div class="cb mb30"></div>                <a  class="moco-btn moco-btn-blue js-gotoVerity1"  target="_blank">马上去验证</a>                <button class="moco-btn moco-btn-normal js-modal-close js-notVerity">暂不验证</button>                </div>                ',{modal:!0,title:"  ",width:488,callback:function(){location.reload()}}),this.math(),this.timerForColse()}});module.exports=a});