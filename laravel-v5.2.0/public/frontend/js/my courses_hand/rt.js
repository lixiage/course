(function(){var a=function(k){var e=new Image();var l="mini_tangram_log_"+Math.floor(Math.random()*2147483648).toString(36);window[l]=e;e.onload=e.onerror=e.onabort=function(){e.onload=e.onerror=e.onabort=null;window[l]=null;e=null};e.src=k};var b=(new Date()).getTime();var i="";var j="";var h="";try{top.location.toString();j=encodeURIComponent(top.location.href);var d=top.document.referrer||"";if(d.indexOf("cpro.baidu.com/cpro/ui/uijs.php")>-1){i=d.match(/word=(.*?)&/g)[0];i=i.substring(5,i.length-1)}else{i=encodeURIComponent(d)}h=d}catch(f){j=encodeURIComponent(location.href);i=encodeURIComponent(document.referrer);h=document.referrer}if(h!=""){h=encodeURIComponent(h.match(/^(\w*:\/\/)?(\w*\.)?(\w*\.\w*(\.\w*)?)/)[3])}var g="";if(typeof bd_cpro_rtid=="object"){g=bd_cpro_rtid.shift().id}else{g=bd_cpro_rtid}var c=("https:"==document.location.protocol?"https://":"http://")+"eclick.baidu.com/rt.jpg?t=script&rtid="+g+"&stamp="+b+"&refer="+i+"&word="+j+"&origin="+h;if(g){a(c)}})();