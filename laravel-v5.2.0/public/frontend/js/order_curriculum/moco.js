function Boxy(t,o){this.WRAPPER='<div class="moco-modal-layer" >                    <div class="moco-modal-title"></div>                    <div class="moco-modal-inner"></div>            </div>',this.DEFAULTS={title:null,closeable:!0,draggable:!0,clone:!1,actuator:null,center:!0,show:!0,modal:!1,fixed:!0,unloadOnHide:!1,clickToFront:!1,behaviours:function(){},afterDrop:function(){},afterShow:function(){},afterHide:function(){},beforeUnload:function(){}},this.DEFAULT_X=50,this.DEFAULT_Y=50,this.boxy=$(this.WRAPPER),$.data(this.boxy[0],"boxy",this),this.visible=!1,this.options=$.extend({},this.DEFAULTS,o||{}),this.options.modal&&(this.options=$.extend(this.options,{center:!0,draggable:!1})),this.options.actuator&&$.data(this.options.actuator,"active.boxy",this),this.setContent(t||"<div></div>"),this._setupTitleBar(),this.boxy.css("display","none").appendTo(document.body),this.toTop(),this.options.fixed&&(Boxy.browser.msie&&Boxy.browser.version<7?this.options.fixed=!1:this.boxy.addClass("fixed")),this.options.center&&Boxy._u(this.options.x,this.options.y)?this.center():this.moveTo(Boxy._u(this.options.x)?this.options.x:this.DEFAULT_X,Boxy._u(this.options.y)?this.options.y:this.DEFAULT_Y),this.options.show&&this.show()}function Boxy(t,o){this.boxy=jQuery(Boxy.WRAPPER),jQuery.data(this.boxy[0],"boxy",this),this.visible=!1,this.options=jQuery.extend({},Boxy.DEFAULTS,o||{}),this.options.modal&&(this.options=jQuery.extend(this.options,{center:!0,draggable:!1})),this.options.actuator&&jQuery.data(this.options.actuator,"active.boxy",this),this.setContent(t||"<div></div>"),this._setupTitleBar(),this.boxy.css("display","none").appendTo(document.body),this.toTop(),this.options.fixed&&(jQuery.browser.msie&&jQuery.browser.version<7?this.options.fixed=!1:this.boxy.addClass("fixed")),this.options.center&&Boxy._u(this.options.x,this.options.y)?this.center():this.moveTo(Boxy._u(this.options.x)?this.options.x:Boxy.DEFAULT_X,Boxy._u(this.options.y)?this.options.y:Boxy.DEFAULT_Y),this.options.show&&this.show()}Boxy.zIndex=900,Boxy.dragConfigured=!1,Boxy.resizeConfigured=!1,Boxy.dragging=null,Boxy.browser={mozilla:/firefox/.test(navigator.userAgent.toLowerCase()),webkit:/webkit/.test(navigator.userAgent.toLowerCase()),opera:/opera/.test(navigator.userAgent.toLowerCase()),msie:/msie/.test(navigator.userAgent.toLowerCase())},Boxy.isModalVisible=function(){return $(".moco-modal-blackout").length>0},Boxy._u=function(){for(var t=0;t<arguments.length;t++)if("undefined"!=typeof arguments[t])return!1;return!0},Boxy._handleResize=function(t){var o=$(document);$(".moco-modal-blackout").css("display","none").css({width:o.width(),height:o.height()}).css("display","block")},Boxy._handleDrag=function(t){var o;(o=Boxy.dragging)&&o[0].boxy.css({left:t.pageX-o[1],top:t.pageY-o[2]})},Boxy._nextZ=function(){return Boxy.zIndex++},Boxy._viewport=function(){var t=document.documentElement,o=document.body,e=window;return $.extend(Boxy.browser.msie?{left:o.scrollLeft||t.scrollLeft,top:o.scrollTop||t.scrollTop}:{left:e.pageXOffset,top:e.pageYOffset},Boxy._u(e.innerWidth)?Boxy._u(t)||Boxy._u(t.clientWidth)||0==t.clientWidth?{width:o.clientWidth,height:o.clientHeight}:{width:t.clientWidth,height:t.clientHeight}:{width:e.innerWidth,height:e.innerHeight})},Boxy.prototype={estimateSize:function(){this.boxy.css({visibility:"hidden",display:"block"});var t=this.getSize();return this.boxy.css("display","none").css("visibility","visible"),t},getSize:function(){return[this.boxy.width(),this.boxy.height()]},getContentSize:function(){var t=this.getContent();return[t.width(),t.height()]},getPosition:function(){var t=this.boxy[0];return[t.offsetLeft,t.offsetTop]},getCenter:function(){var t=this.getPosition(),o=this.getSize();return[Math.floor(t[0]+o[0]/2),Math.floor(t[1]+o[1]/2)]},getInner:function(){return $(".moco-modal-inner",this.boxy)},getTInner:function(){return $(".moco-modal-title",this.boxy)},getContent:function(){return this.boxy},setContent:function(t){return t=$(t).css({display:"block"}),this.options.clone&&(t=t.clone(!0)),this.getInner().append(t),this._setupDefaultBehaviours(t),this.options.behaviours.call(this,t),this},moveTo:function(t,o){return this.moveToX(t).moveToY(o),this},moveToX:function(t){return"number"==typeof t?this.boxy.css({left:t}):this.centerX(),this},moveToY:function(t){return"number"==typeof t?this.boxy.css({top:t}):this.centerY(),this},centerAt:function(t,o){var e=this[this.visible?"getSize":"estimateSize"]();return"number"==typeof t&&this.moveToX(t-e[0]/2),"number"==typeof o&&this.moveToY(o-e[1]/2),this},centerAtX:function(t){return this.centerAt(t,null)},centerAtY:function(t){return this.centerAt(null,t)},center:function(t){var o=Boxy._viewport(),e=this.options.fixed?[0,0]:[o.left,o.top];return t&&"x"!=t||this.centerAt(e[0]+o.width/2,null),t&&"y"!=t||this.centerAt(null,e[1]+o.height/2),this},centerX:function(){return this.center("x")},centerY:function(){return this.center("y")},resize:function(t){if(this.visible){t=t||{};var o=t.width||this.boxy.width(),e=t.height||this.boxy.height(),i=this._getBoundsForResize(o,e);return this.boxy.css({left:i[0],top:i[1]}),this.getContent().css({width:i[2],height:i[3]}),t.after&&t.after(this),this}},tween:function(t,o,e){if(this.visible){var i=this._getBoundsForResize(t,o),n=this;return this.boxy.stop().animate({left:i[0],top:i[1]}),this.getContent().stop().animate({width:i[2],height:i[3]},function(){e&&e(n)}),this}},isVisible:function(){return this.visible},show:function(){if(!this.visible){if(this.options.modal){var t=this;Boxy.resizeConfigured||(Boxy.resizeConfigured=!0,$(window).resize(function(){Boxy._handleResize()})),this.modalBlackout=$('<div class="moco-modal-blackout js-moco-modal-cancel"></div>').css({zIndex:Boxy._nextZ(),opacity:.7,width:$(document).width(),height:$(document).height()}).appendTo(document.body),this.toTop(),this.options.closeable&&$(document.body).bind("keypress.boxy",function(o){var e=o.which||o.keyCode;27==e&&(t.hide(),$(document.body).unbind("keypress.boxy"))})}return this.boxy.stop().css({opacity:1}).show(),this.visible=!0,this._fire("afterShow"),this}},hide:function(t){if(this.visible){var o=this;return this.options.modal&&($(document.body).unbind("keypress.boxy"),this.modalBlackout.animate({opacity:0},function(){$(this).remove()})),this.boxy.stop().animate({opacity:0},300,function(){o.boxy.css({display:"none"}),o.visible=!1,$(o.boxy).remove(),o._fire("afterHide"),t&&t(o),o.options.unloadOnHide&&o.unload()}),o.options.closeCallback&&o.options.closeCallback(),this}},toggle:function(){return this[this.visible?"hide":"show"](),this},hideAndUnload:function(t){return this.options.unloadOnHide=!0,this.hide(t),this},unload:function(){this._fire("beforeUnload"),this.boxy.remove(),this.options.actuator&&$.data(this.options.actuator,"active.boxy",!1)},toTop:function(){return this.boxy.css({zIndex:Boxy._nextZ()}),this},getTitle:function(){return $("> .moco-modal-title span",this.getInner()).html()},setTitle:function(t){return $("> .moco-modal-title span",this.getTInner()).html(t),this},_getBoundsForResize:function(t,o){var e=this.getContentSize(),i=[t-e[0],o-e[1]],n=this.getPosition();return[Math.max(n[0]-i[0]/2,0),Math.max(n[1]-i[1]/2,0),t,o]},_setupTitleBar:function(){if(this.options.title){var t=this,o=$("<div></div>").html("<span>"+this.options.title+"</span>");this.options.closeable&&o.append($("<a href='javascript:void(0)' class='moco-icon-close moco-modal-close js-modal-close'></a>").html(this.options.closeText)),this.options.draggable&&(o.addClass("moco-modal-draggable"),o[0].onselectstart=function(){return!1},o[0].unselectable="on",o[0].style.MozUserSelect="none",Boxy.dragConfigured||($(document).mousemove(Boxy._handleDrag),Boxy.dragConfigured=!0),o.mousedown(function(o){t.toTop(),Boxy.dragging=[t,o.pageX-t.boxy[0].offsetLeft,o.pageY-t.boxy[0].offsetTop],$(this).addClass("dragging")}).mouseup(function(){$(this).removeClass("dragging"),Boxy.dragging=null,t._fire("afterDrop")})),this.getTInner().prepend(o),this._setupDefaultBehaviours(o)}else this.getTInner().remove()},_setupDefaultBehaviours:function(t){var o=this;this.options.clickToFront&&t.click(function(){o.toTop()}),$(".js-modal-close",t).click(function(){return o.hide(),!1}).mousedown(function(t){t.stopPropagation()})},_fire:function(t){this.options[t].call(this)}},jQuery.browser={mozilla:/firefox/.test(navigator.userAgent.toLowerCase()),webkit:/webkit/.test(navigator.userAgent.toLowerCase()),opera:/opera/.test(navigator.userAgent.toLowerCase()),msie:/msie/.test(navigator.userAgent.toLowerCase())},jQuery.fn.boxy=function(t){return t=t||{},this.each(function(){var o=this.nodeName.toLowerCase(),e=this;"a"==o?jQuery(this).click(function(){var o=Boxy.linkedTo(this),e=this.getAttribute("href"),i=jQuery.extend({actuator:this,title:this.title},t);if(o)o.show();else if(e.indexOf("#")>=0){var n=jQuery(e.substr(e.indexOf("#"))),s=n.clone(!0);n.remove(),i.unloadOnHide=!1,new Boxy(s,i)}else i.cache||(i.unloadOnHide=!0),Boxy.load(this.href,i);return!1}):"form"==o&&jQuery(this).bind("submit.boxy",function(){return Boxy.confirm(t.message||"Please confirm:",function(){jQuery(e).unbind("submit.boxy").submit()}),!1})})},Boxy.EF=function(){},jQuery.extend(Boxy,{WRAPPER:'<div class="moco-modal-layer" >                \t<div class="moco-modal-title"></div>                \t<div class="moco-modal-inner"></div>            </div>',DEFAULTS:{title:null,closeable:!0,draggable:!0,clone:!1,actuator:null,center:!0,show:!0,modal:!1,fixed:!0,unloadOnHide:!1,clickToFront:!1,behaviours:Boxy.EF,afterDrop:Boxy.EF,afterShow:Boxy.EF,afterHide:Boxy.EF,beforeUnload:Boxy.EF},DEFAULT_X:50,DEFAULT_Y:50,zIndex:1337,dragConfigured:!1,resizeConfigured:!1,dragging:null,isModalVisible:function(){return jQuery(".moco-modal-blackout").length>0},_u:function(){for(var t=0;t<arguments.length;t++)if("undefined"!=typeof arguments[t])return!1;return!0},_handleResize:function(t){var o=jQuery(document);jQuery(".moco-modal-blackout").css("display","none").css({width:o.width(),height:o.height()}).css("display","block")},_handleDrag:function(t){var o;(o=Boxy.dragging)&&o[0].boxy.css({left:t.pageX-o[1],top:t.pageY-o[2]})},_nextZ:function(){return Boxy.zIndex++},_viewport:function(){var t=document.documentElement,o=document.body,e=window;return jQuery.extend(jQuery.browser.msie?{left:o.scrollLeft||t.scrollLeft,top:o.scrollTop||t.scrollTop}:{left:e.pageXOffset,top:e.pageYOffset},Boxy._u(e.innerWidth)?Boxy._u(t)||Boxy._u(t.clientWidth)||0==t.clientWidth?{width:o.clientWidth,height:o.clientHeight}:{width:t.clientWidth,height:t.clientHeight}:{width:e.innerWidth,height:e.innerHeight})}}),Boxy.prototype={estimateSize:function(){this.boxy.css({visibility:"hidden",display:"block"});var t=this.getSize();return this.boxy.css("display","none").css("visibility","visible"),t},getSize:function(){return[this.boxy.width(),this.boxy.height()]},getContentSize:function(){var t=this.getContent();return[t.width(),t.height()]},getPosition:function(){var t=this.boxy[0];return[t.offsetLeft,t.offsetTop]},getCenter:function(){var t=this.getPosition(),o=this.getSize();return[Math.floor(t[0]+o[0]/2),Math.floor(t[1]+o[1]/2)]},getInner:function(){return jQuery(".moco-modal-inner",this.boxy)},getTInner:function(){return jQuery(".moco-modal-title",this.boxy)},getContent:function(){return this.boxy},setContent:function(t){return t=jQuery(t).css({display:"block"}),this.options.clone&&(t=t.clone(!0)),this.getInner().append(t),this._setupDefaultBehaviours(t),this.options.behaviours.call(this,t),this},moveTo:function(t,o){return this.moveToX(t).moveToY(o),this},moveToX:function(t){return"number"==typeof t?this.boxy.css({left:t}):this.centerX(),this},moveToY:function(t){return"number"==typeof t?this.boxy.css({top:t}):this.centerY(),this},centerAt:function(t,o){var e=this[this.visible?"getSize":"estimateSize"]();return"number"==typeof t&&this.moveToX(t-e[0]/2),"number"==typeof o&&this.moveToY(o-e[1]/2),this},centerAtX:function(t){return this.centerAt(t,null)},centerAtY:function(t){return this.centerAt(null,t)},center:function(t){var o=Boxy._viewport(),e=this.options.fixed?[0,0]:[o.left,o.top];return t&&"x"!=t||this.centerAt(e[0]+o.width/2,null),t&&"y"!=t||this.centerAt(null,e[1]+o.height/2),this},centerX:function(){return this.center("x")},centerY:function(){return this.center("y")},resize:function(t){if(this.visible){t=t||{};var o=t.width||this.boxy.width(),e=t.height||this.boxy.height(),i=this._getBoundsForResize(o,e);return this.boxy.css({left:i[0],top:i[1]}),this.getContent().css({width:i[2],height:i[3]}),t.after&&t.after(this),this}},tween:function(t,o,e){if(this.visible){var i=this._getBoundsForResize(t,o),n=this;return this.boxy.stop().animate({left:i[0],top:i[1]}),this.getContent().stop().animate({width:i[2],height:i[3]},function(){e&&e(n)}),this}},isVisible:function(){return this.visible},show:function(){if(!this.visible){if(this.options.modal){var t=this;Boxy.resizeConfigured||(Boxy.resizeConfigured=!0,jQuery(window).resize(function(){Boxy._handleResize()})),this.modalBlackout=jQuery('<div class="moco-modal-blackout js-moco-modal-cancel"></div>').css({zIndex:Boxy._nextZ(),opacity:.7,width:jQuery(document).width(),height:jQuery(document).height()}).appendTo(document.body),this.toTop(),this.options.closeable&&jQuery(document.body).bind("keypress.boxy",function(o){var e=o.which||o.keyCode;27==e&&(t.hide(),jQuery(document.body).unbind("keypress.boxy"))})}return this.boxy.stop().css({opacity:1}).show(),this.visible=!0,this._fire("afterShow"),this}},hide:function(t){if(this.visible){var o=this;return this.options.modal&&(jQuery(document.body).unbind("keypress.boxy"),this.modalBlackout.animate({opacity:0},function(){jQuery(this).remove()})),this.boxy.stop().animate({opacity:0},300,function(){o.boxy.css({display:"none"}),o.visible=!1,jQuery(o.boxy).remove(),o._fire("afterHide"),t&&t(o),o.options.unloadOnHide&&o.unload()}),o.options.closeCallback&&o.options.closeCallback(),this}},toggle:function(){return this[this.visible?"hide":"show"](),this},hideAndUnload:function(t){return this.options.unloadOnHide=!0,this.hide(t),this},unload:function(){this._fire("beforeUnload"),this.boxy.remove(),this.options.actuator&&jQuery.data(this.options.actuator,"active.boxy",!1)},toTop:function(){return this.boxy.css({zIndex:Boxy._nextZ()}),this},getTitle:function(){return jQuery("> .moco-modal-title span",this.getInner()).html()},setTitle:function(t){return jQuery("> .moco-modal-title span",this.getTInner()).html(t),this},_getBoundsForResize:function(t,o){var e=this.getContentSize(),i=[t-e[0],o-e[1]],n=this.getPosition();return[Math.max(n[0]-i[0]/2,0),Math.max(n[1]-i[1]/2,0),t,o]},_setupTitleBar:function(){if(this.options.title){var t=this,o=jQuery("<div></div>").html("<span>"+this.options.title+"</span>");this.options.closeable&&o.append(jQuery("<a href='javascript:void(0)' class='moco-icon-close moco-modal-close js-modal-close'></a>").html(this.options.closeText)),this.options.draggable&&(o.addClass("moco-modal-draggable"),o[0].onselectstart=function(){return!1},o[0].unselectable="on",o[0].style.MozUserSelect="none",Boxy.dragConfigured||(jQuery(document).mousemove(Boxy._handleDrag),Boxy.dragConfigured=!0),o.mousedown(function(o){t.toTop(),Boxy.dragging=[t,o.pageX-t.boxy[0].offsetLeft,o.pageY-t.boxy[0].offsetTop],jQuery(this).addClass("dragging")}).mouseup(function(){jQuery(this).removeClass("dragging"),Boxy.dragging=null,t._fire("afterDrop")})),this.getTInner().prepend(o),this._setupDefaultBehaviours(o)}else this.getTInner().remove()},_setupDefaultBehaviours:function(t){var o=this;this.options.clickToFront&&t.click(function(){o.toTop()}),jQuery(".js-modal-close",t).click(function(){return o.hide(),!1}).mousedown(function(t){t.stopPropagation()})},_fire:function(t){this.options[t].call(this)}},!function(){$.dialog=function(t,o){var e=$.extend({title:"提示",timeout:0,modal:!1,draggable:!0,callback:function(){}},o),i='<div class="moco-modal-dialog">'+t+"</div>",n=new Boxy(i,{title:e.title,modal:e.modal,draggable:e.draggable,closeCallback:e.callback});return 0!=e.timeout&&setTimeout(function(){n.hide(),e.callback()},e.timeout),(e.width||e.height)&&n.resize({width:e.width,height:e.height}),n},$.alert=function(t,o){var e='<div class="moco-modal-wrap">                    <p class="moco-modal-content js-modal-content">$content</p>                    $info                    <div class="moco-modal-btns">                        <a class="moco-btn moco-btn-blue js-modal-submit" onclick="return false" href="javascript:void(0)"><span>$submit</span></a>                    </div>                </div>',i=$.extend({submit:"确定",timeout:0,modal:!0,callback:function(){}},o),n=e.replace("$content",t);n=i.info?n.replace("$info",'<p class="moco-modal-info js-modal-info">'+i.info+"</p>"):n.replace("$info",""),n=n.replace("$submit",i.submit);var s=new Boxy(n,{modal:i.modal,draggable:!1,closeCallback:i.callback});return $(s.boxy).find("a.js-modal-submit").click(function(){s.hide(),i.callback()}),$(s.modalBlackout).click(function(){s.hide(),i.callback()}),0!=i.timeout&&setTimeout(function(){s.hide(),i.callback()},i.timeout),s},$.confirm=function(t,o){var e='<div class="moco-modal-wrap" node-type="outer">                        <p class="moco-modal-content js-modal-content">$content</p>                        $info                    <div class="moco-modal-btns">                        <a class="moco-btn moco-btn-normal js-modal-cancel" onclick="return false" href="javascript:void(0)"><span>$cancel</span></a><a class="moco-btn moco-btn-blue js-modal-submit" onclick="return false" href="javascript:void(0)"><span>$submit</span></a>                    </div>                </div>',i=$.extend({submit:"确定",cancel:"取消",modal:!0,callback:function(){},cancelcallback:function(){}},o),n=e.replace("$content",t);n=i.info?n.replace("$info",'<p class="moco-modal-info js-modal-info">'+i.info+"</p>"):n.replace("$info",""),n=n.replace("$submit",i.submit).replace("$cancel",i.cancel);var s=new Boxy(n,{modal:i.modal,draggable:!1,closeCallback:i.CancelCallback});return $(s.boxy).find("a.js-modal-submit").click(function(){s.hide(),i.callback()}),$(s.boxy).find("a.js-modal-cancel").click(function(){s.hide(),i.cancelcallback()}),$(s.modalBlackout).click(function(){s.hide(),i.cancelcallback()}),s},$.prompt=function(t,o){var e=($(window).width(),$(window).height(),$(".moco-tip-layer").remove(),{success:"moco-icon-tick-revert",error:"moco-icon-point-revert",question:"moco-icon-ques-revert"}),o=$.extend({icon:"success",timeout:1e3,modal:!0,callback:function(){}},o),i="<div class='moco-prompt-layer'><i class='"+e[o.icon]+"'></i>                <span >"+t+"</span></div>",n=new Boxy(i,{modal:o.modal,draggable:!1,closeCallback:o.callback});return setTimeout(function(){n.hide()},o.timeout),n},$.tipAlert=function(t,o){var e=$(".moco-tip-layer").remove();e=$('<div class="moco-modal-layer moco-tip-layer">').appendTo($("body"));var i={success:"moco-icon-tick-revert",error:"moco-icon-point-revert",question:"moco-icon-ques-revert"},o=$.extend({icon:"success",info:"",timeout:1e3},o),n="<i class='"+i[o.icon]+"'></i>                <span>"+o.info+"</span>";e.hide().html(n).css({top:$(t).offset().top-30,left:$(t).offset().left-15}),e.animate({top:$(t).offset().top-45,left:$(t).offset().left-15,opacity:"show"},300),setTimeout(function(){e.animate({opacity:"hide"},300)},o.timeout)},$.tipConfirm=function(t,o){var e=$(".moco-tip-layer").remove();e=$('<div class="moco-modal-layer moco-tip-layer moco-tipconfirm-layer">').appendTo($("body"));var i={success:"moco-icon-tick-revert",error:"moco-icon-point-revert",question:"moco-icon-ques-revert"},o=$.extend({icon:"question",info:"",callback:function(){},cancelcallback:function(){}},o),n='<i class="'+i[o.icon]+'"></i>                <span class="moco-tipconfirm-info">'+o.info+'</span>                <a class="moco-btn moco-btn-blue js-modal-submit" onclick="return false" href="javascript:void(0)"><i class="moco-icon-check"></i></a><a class="moco-btn moco-btn-normal js-modal-cancel" onclick="return false" href="javascript:void(0)"><i class="moco-icon-close"></i></a>';e.hide().html(n).css({top:$(t).offset().top-30,left:$(t).offset().left-15}),e.animate({top:$(t).offset().top-45,left:$(t).offset().left-15,opacity:"show"},300),e.find(".js-modal-cancel").click(function(){e.hide(),o.cancelcallback()}),e.find(".js-modal-submit").click(function(){e.hide(),o.callback()})}}();