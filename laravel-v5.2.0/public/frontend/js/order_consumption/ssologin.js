function SSOController(){var t=this,i={success:function(){},error:function(){},complete:function(){}},e="ssoLoginFrame",r="ssoLoginForm",o="",s="",n=0,a=0,c=null,u=null,d={},l="/passport/user/login",g="/passport/user/register",f="/passport/user/prelogin";this.verifyCodeUrl="/passport/user/verifycode",this.checkVerifyUrl="/passport/user/loginverifyshow",this.checkVerifyCode="/passport/user/verifycheck",this.checkUserName="/passport/user/checkusername",this.checkNickName="/passport/user/checknickname",this.tpRegister="/passport/user/tpregister",this.tpBind="/passport/user/tpbind";var h=function(t){$(e).remove();var i=$("<iframe></iframe>");return i.css("display","none"),i.attr("id",t),i.attr("name",t),i.attr("src","javascript:void(0)"),i.appendTo("body"),i},m=function(t){$(r).remove();var i=$("<form></form>");i.attr("id",t),i.attr("name",t),i.attr("method","post"),i.css("display","none");for(var e in d)i.append($("<input type='text' name='"+e+"' value='"+d[e]+"' />"));return i.appendTo("body"),i},p=function(t,i,e){var r='<p class="warn-info" style="font-size: 16px;line-height: 28px;max-width: 600px;">'+t+"</p>";return i&&"undefined"!=typeof e&&(r+="imooc"==e?'<p class="warn-tip" style="color: #999;margin-top: 30px;">可能导致帐号冻结的原因  <a href="http://www.imooc.com/about/faq?t=5&id=13" target="_blank" style="color: #08c !important;">了解详情</a></p>':'<p class="warn-tip" style="color: #999;margin-top: 30px;">可能导致帐号冻结的原因  <a href="http://coding.imooc.com/user/faqdetail?column_id=2&id=17" target="_blank" style="color: #08c !important;">了解详情</a></p>'),r+='<div class="moco-modal-btns"><a class="moco-btn moco-btn-blue moco-modal-close js-modal-close" href="javascript:void(0)"><span>确定</span></a></div>'},v=function(){if("undefined"==typeof XMLHttpRequest)return!1;var i=new XMLHttpRequest;return!1 in i?!1:($.ajax({url:l,data:d,method:"post",dataType:"json",xhrFields:{withCredentials:!0},success:function(i){var e=function(){return window.location.href.indexOf("newlogin/from_url")>0?(window.location.reload(),!1):void 0};if(10020==i.status){var r="",o="十分抱歉，由于您的帐号最近在实战中存在严重违规的情况，已做冻结帐号处理";r=p(o,!0,"shizhan"),$.dialog?$.dialog(r,{title:"提示",modal:!0,callback:e}):(alert(o),e()),$("#signin").remove(),$(".modal-backdrop").remove()}else if(10021==i.status){var r="",o="十分抱歉，由于您的账号最近在实战中被多次警告，已做冻结账号处理";r=p(o,!0,"shizhan"),$.dialog?$.dialog(r,{title:"提示",modal:!0,callback:e}):(alert(o),e()),$("#signin").remove(),$(".modal-backdrop").remove()}else if(10022==i.status){var r="",o="十分抱歉，由于您的账号最近在慕课网被多次警告，已做冻结账号处理";r=p(o,!0,"imooc"),$.dialog?$.dialog(r,{title:"提示",modal:!0,callback:e}):(alert(o),e()),$("#signin").remove(),$(".modal-backdrop").remove()}else if(10006==i.status){var r="",o="十分抱歉，由于您的帐号最近在慕课网中存在严重违规的情况，已做冻结帐号处理";r=p(o,!0,"imooc"),$.dialog?$.dialog(r,{title:"提示",modal:!0,callback:e}):(alert(o),e()),$("#signin").remove(),$(".modal-backdrop").remove()}else if(10001==i.status)if(i.caution){var r=p(i.caution,!1);$("#signin").remove(),$(".modal-backdrop").remove(),$.dialog?$.dialog(r,{title:"提示",modal:!0,callback:function(){window.location.href="http://www.imooc.com/index/usercheck?uid="+i.data.userInfo.uid}}):(alert(i.caution),window.location.href="http://www.imooc.com/index/usercheck?uid="+i.data.userInfo.uid)}else t.ssoLoginCallBack(i);else t.ssoLoginCallBack(i)},error:function(){d.returntype="html",N()}}),!0)},w=function(){return"undefined"==typeof XMLHttpRequest?!1:(new XMLHttpRequest,$.ajax({url:g,data:d,method:"post",dataType:"json",success:function(i){t.ssoLoginCallBack(i)},error:function(){d.returntype="html",k()}}),!0)},N=function(){h(e);var t=m(r);t.attr("action",l),t.attr("target",e);try{t.submit()}catch(i){$(e).remove()}setTimeout(function(){$(t).remove()},10)},k=function(){h(e);var t=m(r);t.attr("action",g),t.attr("target",e);try{t.submit()}catch(i){$(e).remove()}setTimeout(function(){$(t).remove()},10)},b=function(t){clearInterval(a),a=null,o=t.pubkey,s=t.code,n=t.servertime,setInterval(function(){n++},1e3)};this.preLogin=function(t){return o&&s?(t.success&&t.success(),void 0):(t=t||{success:function(){},error:function(){}},$.ajax({url:f,method:"post",dataType:"json",success:function(i){10001==i.status?(b(i),t.success&&t.success()):t.error&&t.error()},error:function(){t.error()}}),void 0)},this.setCrossDomainCookie=function(i){url=i[0],-1!=window.location.protocol.indexOf("https")&&(url=url.replace("http:","https:")),$.get(url,function(){clearTimeout(u),t.crossDomainResult()},"jsonp")},this.ssoLoginCallBack=function(e){10001==e.status?(c=function(){i.success(e),i.complete()},this.setCrossDomainCookie(e.data.url),u=setTimeout(function(){t.crossDomainResult()},5e3)):(i.success(e),i.complete())},this.crossDomainResult=function(){"function"==typeof c&&c()},this.crossDomainAction=function(i){return"function"==typeof i&&(c=i),u=setTimeout(function(){t.crossDomainResult()},5e3),!1},this.frameLoginCallBack=function(t){i.success(t),i.complete(),$(e).remove()},this.login=function(t){if(t.data.pwencode){if(""==s||0==n||""==o)return t.error(),t.complete(),this.preLogin(),void 0;var e=y(s+"	"+n+"	"+t.data.password);t.data.password=window.btoa(e)}return d=t.data,d.referer=window.location.protocol+"//"+window.location.hostname,i={success:t.success,error:t.error,complete:t.complete},v()?!0:(d.returntype="html",N(),void 0)},this.register=function(t){return i={success:t.success,error:t.error,complete:t.complete},d=t.data,d.referer=window.location.protocol+"//"+window.location.hostname,w()?!0:(d.returntype="html",k(),void 0)};var y=function(t){function i(t){R=t,D=new Array(R);for(var i=0;i<D.length;i++)D[i]=0;q=new e,O=new e,O.digits[0]=1}function e(t){this.digits="boolean"==typeof t&&1==t?null:D.slice(0),this.isNeg=!1}function r(t){var i=new e(!0);return i.digits=t.digits.slice(0),i.isNeg=t.isNeg,i}function s(t){var i=new e;i.isNeg=0>t,t=Math.abs(t);for(var r=0;t>0;)i.digits[r++]=t&U,t>>=B;return i}function n(t){var i,e=48,r=e+9,o=97,s=o+25,n=65,a=90;return i=t>=e&&r>=t?t-e:t>=n&&a>=t?10+t-n:t>=o&&s>=t?10+t-o:0}function a(t){for(var i=0,e=Math.min(t.length,4),r=0;e>r;++r)i<<=4,i|=n(t.charCodeAt(r));return i}function c(t){for(var i=new e,r=t.length,o=r,s=0;o>0;o-=4,++s)i.digits[s]=a(t.substr(Math.max(o-4,0),Math.min(o,4)));return i}function u(t){for(var i="",e=f(t);e>-1;--e)i+=d(t.digits[e]);return i}function d(t){var i=String.fromCharCode(255&t);t>>>=8;var e=String.fromCharCode(255&t);return e+i}function l(t,i){var r;if(t.isNeg!=i.isNeg)i.isNeg=!i.isNeg,r=g(t,i),i.isNeg=!i.isNeg;else{r=new e;for(var o,s=0,n=0;n<t.digits.length;++n)o=t.digits[n]+i.digits[n]+s,r.digits[n]=65535&o,s=Number(o>=H);r.isNeg=t.isNeg}return r}function g(t,i){var r;if(t.isNeg!=i.isNeg)i.isNeg=!i.isNeg,r=l(t,i),i.isNeg=!i.isNeg;else{r=new e;var o,s;s=0;for(var n=0;n<t.digits.length;++n)o=t.digits[n]-i.digits[n]+s,r.digits[n]=65535&o,r.digits[n]<0&&(r.digits[n]+=H),s=0-Number(0>o);if(-1==s){s=0;for(var n=0;n<t.digits.length;++n)o=0-r.digits[n]+s,r.digits[n]=65535&o,r.digits[n]<0&&(r.digits[n]+=H),s=0-Number(0>o);r.isNeg=!t.isNeg}else r.isNeg=t.isNeg}return r}function f(t){for(var i=t.digits.length-1;i>0&&0==t.digits[i];)--i;return i}function h(t){var i,e=f(t),r=t.digits[e],o=(e+1)*I;for(i=o;i>o-I&&0==(32768&r);--i)r<<=1;return i}function m(t,i){for(var r,o,s,n=new e,a=f(t),c=f(i),u=0;c>=u;++u){for(r=0,s=u,j=0;a>=j;++j,++s)o=n.digits[s]+t.digits[j]*i.digits[u]+r,n.digits[s]=o&U,r=o>>>B;n.digits[u+a+1]=r}return n.isNeg=t.isNeg!=i.isNeg,n}function p(t,i){var r,o,s;result=new e,r=f(t),o=0;for(var n=0;r>=n;++n)s=result.digits[n]+t.digits[n]*i+o,result.digits[n]=s&U,o=s>>>B;return result.digits[1+r]=o,result}function v(t,i,e,r,o){for(var s=Math.min(i+o,t.length),n=i,a=r;s>n;++n,++a)e[a]=t[n]}function w(t,i){var r=Math.floor(i/I),o=new e;v(t.digits,0,o.digits,r,o.digits.length-r);for(var s=i%I,n=I-s,a=o.digits.length-1,c=a-1;a>0;--a,--c)o.digits[a]=o.digits[a]<<s&U|(o.digits[c]&_[s])>>>n;return o.digits[0]=o.digits[a]<<s&U,o.isNeg=t.isNeg,o}function N(t,i){var r=Math.floor(i/I),o=new e;v(t.digits,r,o.digits,0,t.digits.length-r);for(var s=i%I,n=I-s,a=0,c=a+1;a<o.digits.length-1;++a,++c)o.digits[a]=o.digits[a]>>>s|(o.digits[c]&E[s])<<n;return o.digits[o.digits.length-1]>>>=s,o.isNeg=t.isNeg,o}function k(t,i){var r=new e;return v(t.digits,0,r.digits,i,r.digits.length-i),r}function b(t,i){var r=new e;return v(t.digits,i,r.digits,0,r.digits.length-i),r}function y(t,i){var r=new e;return v(t.digits,0,r.digits,0,i),r}function $(t,i){if(t.isNeg!=i.isNeg)return 1-2*Number(t.isNeg);for(var e=t.digits.length-1;e>=0;--e)if(t.digits[e]!=i.digits[e])return t.isNeg?1-2*Number(t.digits[e]>i.digits[e]):1-2*Number(t.digits[e]<i.digits[e]);return 0}function C(t,i){var o,s,n=h(t),a=h(i),c=i.isNeg;if(a>n)return t.isNeg?(o=r(O),o.isNeg=!i.isNeg,t.isNeg=!1,i.isNeg=!1,s=g(i,t),t.isNeg=!0,i.isNeg=c):(o=new e,s=r(t)),new Array(o,s);o=new e,s=t;for(var u=Math.ceil(a/I)-1,d=0;i.digits[u]<X;)i=w(i,1),++d,++a,u=Math.ceil(a/I)-1;s=w(s,d),n+=d;for(var m=Math.ceil(n/I)-1,v=k(i,m-u);-1!=$(s,v);)++o.digits[m-u],s=g(s,v);for(var b=m;b>u;--b){var y=b>=s.digits.length?0:s.digits[b],C=b-1>=s.digits.length?0:s.digits[b-1],M=b-2>=s.digits.length?0:s.digits[b-2],x=u>=i.digits.length?0:i.digits[u],S=u-1>=i.digits.length?0:i.digits[u-1];o.digits[b-u-1]=y==x?U:Math.floor((y*H+C)/x);for(var j=o.digits[b-u-1]*(x*H+S),A=y*F+(C*H+M);j>A;)--o.digits[b-u-1],j=o.digits[b-u-1]*(x*H|S),A=y*H*H+(C*H+M);v=k(i,b-u-1),s=g(s,p(v,o.digits[b-u-1])),s.isNeg&&(s=l(s,v),--o.digits[b-u-1])}return s=N(s,d),o.isNeg=t.isNeg!=c,t.isNeg&&(o=c?l(o,O):g(o,O),i=N(i,d),s=g(i,s)),0==s.digits[0]&&0==f(s)&&(s.isNeg=!1),new Array(o,s)}function M(t,i){return C(t,i)[0]}function x(t){this.modulus=r(t),this.k=f(this.modulus)+1;var i=new e;i.digits[2*this.k]=1,this.mu=M(i,this.modulus),this.bkplus1=new e,this.bkplus1.digits[this.k+1]=1,this.modulo=S,this.multiplyMod=A,this.powMod=L}function S(t){var i=b(t,this.k-1),e=m(i,this.mu),r=b(e,this.k+1),o=y(t,this.k+1),s=m(r,this.modulus),n=y(s,this.k+1),a=g(o,n);a.isNeg&&(a=l(a,this.bkplus1));for(var c=$(a,this.modulus)>=0;c;)a=g(a,this.modulus),c=$(a,this.modulus)>=0;return a}function A(t,i){var e=m(t,i);return this.modulo(e)}function L(t,i){var r=new e;r.digits[0]=1;for(var o=t,s=i;;){if(0!=(1&s.digits[0])&&(r=this.multiplyMod(r,o)),s=N(s,1),0==s.digits[0]&&0==f(s))break;o=this.multiplyMod(o,o)}return r}function z(t){var i=1024;this.e=c("10001"),this.d=c(""),this.m=c(t),this.chunkSize="number"!=typeof i?2*f(this.m):i/8,this.radix=16,this.barrett=new x(this.m)}function T(t){var i,r,s,n,a,c,d,l,g=new Array,f=t.length,h="",m=new z(o);for(f>m.chunkSize-11&&(f=m.chunkSize-11),i=0,r=f-1;f>i;)g[r]=t.charCodeAt(i),i++,r--;for(r=m.chunkSize-f%m.chunkSize;r>0;){for(n=Math.floor(256*Math.random());!n;)n=Math.floor(256*Math.random());g[i]=n,i++,r--}for(g[f]=0,g[m.chunkSize-2]=2,g[m.chunkSize-1]=0,a=g.length,i=0;a>i;i+=m.chunkSize){for(c=new e,r=0,s=i;s<i+m.chunkSize;++r)c.digits[r]=g[s++],c.digits[r]+=g[s++]<<8;d=m.barrett.powMod(c,m.e),l=u(d),h+=l}return h}var R,D,q,O,B=16,I=B,H=65536,X=H>>>1,F=H*H,U=H-1;i(20),s(1e15),new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"),new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");var _=new Array(0,32768,49152,57344,61440,63488,64512,65024,65280,65408,65472,65504,65520,65528,65532,65534,65535),E=new Array(0,1,3,7,15,31,63,127,255,511,1023,2047,4095,8191,16383,32767,65535);return i(131),T(t)}}!function(){function t(t){this.message=t}var i="undefined"!=typeof exports?exports:self,e="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";t.prototype=new Error,t.prototype.name="InvalidCharacterError",i.btoa||(i.btoa=function(i){for(var r,o,s=String(i),n=0,a=e,c="";s.charAt(0|n)||(a="=",n%1);c+=a.charAt(63&r>>8-8*(n%1))){if(o=s.charCodeAt(n+=.75),o>255)throw new t("'btoa' failed: The string to be encoded contains characters outside of the Latin1 range.");r=r<<8|o}return c}),i.atob||(i.atob=function(i){var r=String(i).replace(/=+$/,"");if(1==r.length%4)throw new t("'atob' failed: The string to be decoded is not correctly encoded.");for(var o,s,n=0,a=0,c="";s=r.charAt(a++);~s&&(o=n%4?64*o+s:s,n++%4)?c+=String.fromCharCode(255&o>>(6&-2*n)):0)s=e.indexOf(s);return c})}(),imoocSSO=new SSOController;