<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<style>

</style>
<link rel="stylesheet" href="stylesheet\displayarea.css">

<link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="manifest" href="fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
     <?php session_start();	//start or continue session
//$_SESSION['limit']=10;	
$_SESSION['offset']=0;	
$_SESSION['offsetViewDoctor'] = 0;
$_SESSION['offsetDoctor'] = 0;
	
?>           
<div id="displayarea" class="row" style="padding:0px;">	
							
<?php include 'navbar.php';?>

<div id="slider" style="padding:0px;">

<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: https://www.jssor.com -->
<!-- This is deep minimized code which works independently. -->
<script type="text/javascript">
(function(g,j,c,f,e,k,i){/*! Jssor */
new(function(){});var d={l:function(a){return a},we:function(a){return-a*(a-2)},n:function(a){return a*a*a},td:function(a){return(a-=1)*a*a+1}};var b=new function(){var h=this,zb=/\S+/g,H=1,bb=2,eb=3,db=4,hb=5,I,s=0,l=0,t=0,Z=0,B=0,K=navigator,mb=K.appName,o=K.userAgent,p=parseFloat;function Ib(){if(!I){I={Le:"ontouchstart"in g||"createTouch"in j};var a;if(K.pointerEnabled||(a=K.msPointerEnabled))I.Nd=a?"msTouchAction":"touchAction"}return I}function w(h){if(!s){s=-1;if(mb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var e=o.indexOf("MSIE");s=H;t=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on Z=@_jscript_version@*/;l=j.documentMode||t}else if(mb=="Netscape"&&!!g.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){s=bb;l=p(o.substring(d+8))}else if(b>=0){var i=o.substring(0,b).lastIndexOf("/");s=f>=0?db:eb;l=p(o.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){s=H;l=t=p(a[1])}}if(c>=0)B=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){s=hb;l=p(a[2])}}}return h==s}function q(){return w(H)}function xb(){return q()&&(l<6||j.compatMode=="BackCompat")}function cb(){return w(eb)}function gb(){return w(hb)}function tb(){return cb()&&B>534&&B<535}function L(){w();return B>537||l>42||s==H&&l>=11}function vb(){return q()&&l<9}function ub(a){var b,c;return function(f){if(!b){b=e;var d=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,e){var b=a;if(e)b=g+d;if(f.style[b]!=i)return c=b})}return c}}function sb(b){var a;return function(c){a=a||ub(b)(c)||b;return a}}var M=sb("transform");function lb(a){return{}.toString.call(a)}var ib={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){ib["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(lb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==f?String(a):ib[lb(a)]||"object"}function jb(a){for(var b in a)return e}function C(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function v(a,b){return{x:a,y:b}}function pb(b,a){setTimeout(b,a||0)}function J(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function rb(b,a){if(l<9)b.style.filter=a}function Hb(a,b){if(a===i)a=b;return a}h.ef=Ib;h.Od=q;h.kf=xb;h.Kf=cb;h.Lf=L;ub("transform");h.Fd=function(){return l};h.Md=function(){return t||l};h.Ef=function(){w();return B};h.U=pb;h.If=function(a,b){b.call(a);return D({},a)};function W(a){a.constructor===W.caller&&a.Xb&&a.Xb.apply(a,W.caller.arguments)}h.Xb=W;h.Mb=function(a){if(h.Jf(a))a=j.getElementById(a);return a};function u(a){return a||g.event}h.Dd=u;h.Ic=function(b){b=u(b);var a=b.target||b.srcElement||j;if(a.nodeType==3)a=h.Jc(a);return a};h.Bd=function(a){a=u(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function x(c,d,a){if(a!==i)c.style[d]=a==i?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Y(b,c,a,d){if(a===i){a=p(x(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");x(b,c,a)}function m(c,a){var d=a?Y:x,b;if(a&4)b=sb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Cb(b){if(q()&&t<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Eb(b,a,f){if(q()&&t<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=J(h,[i],d);rb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var N={K:["rotate"],ib:["rotateX"],jb:["rotateY"],Rb:["skewX"],Qb:["skewY"]};if(!L())N=D(N,{L:["scaleX",2],M:["scaleY",2],nb:["translateZ",1]});function O(d,a){var c="";if(a){if(q()&&l&&l<10){delete a.ib;delete a.jb;delete a.nb}b.j(a,function(d,b){var a=N[b];if(a){var e=a[1]||0;if(P[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(L()){if(a.xb||a.wb||a.nb!=i)c+=" translate3d("+(a.xb||0)+"px,"+(a.wb||0)+"px,"+(a.nb||0)+"px)";if(a.L==i)a.L=1;if(a.M==i)a.M=1;if(a.L!=1||a.M!=1)c+=" scale3d("+a.L+", "+a.M+", 1)"}}d.style[M(d)]=c}h.Ff=m("transformOrigin",4);h.Df=m("backfaceVisibility",4);h.Cf=m("transformStyle",4);h.Bf=m("perspective",6);h.Af=m("perspectiveOrigin",4);h.Mf=function(a,b){if(q()&&t<9||t<10&&xb())a.style.zoom=b==1?"":b;else{var c=M(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=J(e,[g],f);a.style[c]=d}};h.i=function(a,d,b,c){a=h.Mb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};h.ab=function(a,c,d,b){a=h.Mb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};h.Pb=function(a){a=u(a);a.preventDefault&&a.preventDefault();a.cancel=e;a.returnValue=k};h.pf=function(a){a=u(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=e};h.Y=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};h.Ub=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function kb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(U(a,b)==c)return a;if(!e){var d=kb(a,c,e,b);if(d)return d}}}h.Tb=kb;function T(a,d,g,b){b=b||"u";var c=[];for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){U(a,b)==d&&c.push(a);if(!g){var e=T(a,d,g,b);if(e.length)c=c.concat(e)}}return c}function fb(a,c,d){for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=fb(a,c,d);if(b)return b}}}h.mf=fb;h.nf=function(b,a){return b.getElementsByTagName(a)};h.Db=function(a,f,d){d=d||"u";var e;do{if(a.nodeType==1){var c=b.v(a,d);if(c&&c==Hb(f,c)){e=a;break}}a=b.Jc(a)}while(a&&a!=j.body);return e};function D(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==i){a=c[b];var h=d[b];d[b]=g&&(C(h)||C(a))?D(g,{},h,a):a}}return d}h.P=D;function X(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(C(a)&&C(b)){a=X(a,b);e=!jb(a)}!e&&(d[c]=a)}}return d}h.Oc=function(a){return E(a)=="function"};h.Jf=function(a){return E(a)=="string"};h.Wc=function(a){return!isNaN(p(a))&&isFinite(a)};h.j=n;h.ff=C;function R(a){return j.createElement(a)}h.Nb=function(){return R("DIV")};h.Mc=function(){};function y(b,c,a){if(a==i)return b.getAttribute(c);b.setAttribute(c,a)}function U(a,b){return y(a,b)||y(a,"data-"+b)}h.O=y;h.v=U;h.bc=function(d,b,c){var a=h.Pc(y(d,b));if(isNaN(a))a=c;return a};function z(b,a){return y(b,"class",a)||""}function ob(b){var a={};n(b,function(b){if(b!=i)a[b]=b});return a}function qb(b,a){return b.match(a||zb)}function Q(b,a){return ob(qb(b||"",a))}h.of=ob;h.qf=qb;function ab(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function F(a,c,b){z(a,ab(" ",D(X(Q(z(a)),Q(c)),Q(b))))}h.Jc=function(a){return a.parentNode};h.Z=function(a){h.rb(a,"none")};h.J=function(a,b){h.rb(a,b?"none":"")};h.sf=function(b,a){b.removeAttribute(a)};h.uf=function(){return q()&&l<10};h.vf=function(d,a){if(a)d.style.clip="rect("+c.round(a.c||a.E||0)+"px "+c.round(a.q)+"px "+c.round(a.s)+"px "+c.round(a.f||a.F||0)+"px)";else if(a!==i){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=J(g,f,"");b.Tc(d,e)}};h.ob=function(){return+new Date};h.Q=function(b,a){b.appendChild(a)};h.Gb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};h.lc=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};h.xf=function(a,b){n(a,function(a){h.lc(a,b)})};h.Vc=function(a){h.xf(h.Ub(a,e),a)};h.Kc=function(a,b){var c=h.Jc(a);b&1&&h.S(a,(h.D(c)-h.D(a))/2);b&2&&h.R(a,(h.B(c)-h.B(a))/2)};var S={c:f,q:f,s:f,f:f,G:f,H:f};h.ue=function(a){var b=h.Nb();r(b,{xe:"block",qb:h.T(a),c:0,f:0,G:0,H:0});var d=h.yd(a,S);h.Gb(b,a);h.Q(b,a);var e=h.yd(a,S),c={};n(d,function(b,a){if(b==e[a])c[a]=b});r(b,S);r(b,c);r(a,{c:0,f:0});return c};h.Pc=p;function V(d,c,b){var a=d.cloneNode(!c);!b&&h.sf(a,"id");return a}h.hb=V;h.Fb=function(d,f){var a=new Image;function b(e,d){h.ab(a,"load",b);h.ab(a,"abort",c);h.ab(a,"error",c);f&&f(a,d)}function c(a){b(a,e)}if(gb()&&l<11.6||!d)b(!d);else{h.i(a,"load",b);h.i(a,"abort",c);h.i(a,"error",c);a.src=d}};h.de=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){h.Fb(a.src,b)});b()};h.oe=function(a,g,i,h){if(h)a=V(a);var c=T(a,g);if(!c.length)c=b.nf(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=V(i);z(e,z(d));b.Tc(e,d.style.cssText);b.Gb(e,d);b.lc(d)}return a};function Fb(a){var l=this,p="",r=["av","pv","ds","dn"],d=[],q,k=0,f=0,e=0;function g(){F(a,q,(d[e||f&2||f]||"")+" "+(d[k]||""));b.zb(a,"pointer-events",e?"none":"")}function c(){k=0;g();h.ab(j,"mouseup",c);h.ab(j,"touchend",c);h.ab(j,"touchcancel",c)}function o(a){if(e)h.Pb(a);else{k=4;g();h.i(j,"mouseup",c);h.i(j,"touchend",c);h.i(j,"touchcancel",c)}}l.ee=function(a){if(a===i)return f;f=a&2||a&1;g()};l.hc=function(a){if(a===i)return!e;e=a?0:3;g()};l.eb=a=h.Mb(a);y(a,"data-jssor-button","1");var m=b.qf(z(a));if(m)p=m.shift();n(r,function(a){d.push(p+a)});q=ab(" ",d);d.unshift("");h.i(a,"mousedown",o);h.i(a,"touchstart",o)}h.Ec=function(a){return new Fb(a)};h.zb=x;h.Bb=m("overflow");h.R=m("top",2);h.Sd=m("right",2);h.ke=m("bottom",2);h.S=m("left",2);h.D=m("width",2);h.B=m("height",2);h.ie=m("marginLeft",2);h.he=m("marginTop",2);h.T=m("position");h.rb=m("display");h.I=m("zIndex",1);h.nc=function(b,a,c){if(a!=i)Eb(b,a,c);else return Cb(b)};h.Tc=function(a,b){if(b!=i)a.style.cssText=b;else return a.style.cssText};h.ne=function(b,a){if(a===i){a=x(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}x(b,"backgroundImage",a?"url('"+a+"')":"")};var G;h.se=G={a:h.nc,c:h.R,q:h.Sd,s:h.ke,f:h.S,G:h.D,H:h.B,qb:h.T,xe:h.rb,bb:h.I};h.yd=function(c,b){var a={};n(b,function(d,b){if(G[b])a[b]=G[b](c)});return a};function r(g,l){var e=vb(),b=L(),d=tb(),j=M(g);function k(b,d,a){var e=b.ub(v(-d/2,-a/2)),f=b.ub(v(d/2,-a/2)),g=b.ub(v(d/2,a/2)),h=b.ub(v(-d/2,a/2));b.ub(v(300,300));return v(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.nb||0,p=(a.ib||0)%360,q=(a.jb||0)%360,u=(a.K||0)%360,l=a.L,m=a.M,f=a.Uf;if(l==i)l=1;if(m==i)m=1;if(f==i)f=1;if(e){n=0;p=0;q=0;f=0}var c=new Bb(a.xb,a.wb,n);c.ib(p);c.jb(q);c.Yd(u);c.te(a.Rb,a.Qb);c.Hb(l,m,f);if(b){c.vb(a.F,a.E);d.style[j]=c.re()}else if(!Z||Z<9){var o="",g={x:0,y:0};if(a.fb)g=k(c,a.fb,a.pb);h.he(d,g.y);h.ie(d,g.x);o=c.ge();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=J(s,[t],o);rb(d,r)}}r=function(e,c){c=c||{};var j=c.F,k=c.E,g;n(G,function(a,b){g=c[b];g!==i&&a(e,g)});h.vf(e,c.g);if(!b){j!=i&&h.S(e,(c.Qd||0)+j);k!=i&&h.R(e,(c.Pd||0)+k)}if(c.le)if(d)pb(h.Y(f,O,e,c));else a(e,c)};h.Wb=O;if(d)h.Wb=r;if(e)h.Wb=a;else if(!b)a=O;h.N=r;r(g,l)}h.Wb=r;h.N=r;function Bb(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],i=c.sin,h=c.cos,l=c.tan;function g(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.Hb=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.vb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.ib=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.jb=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.Yd=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.te=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.ub=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.re=function(){return"matrix3d("+b.join(",")+")"};d.ge=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.L=function(b,c){return a.zd(b,c,0)};a.M=function(b,c){return a.zd(b,0,c)};a.zd=function(a,c,d){return b(a,[[c,0],[0,d]])};a.ub=function(d,c){var a=b(d,[[c.x],[c.y]]);return v(a[0][0],a[1][0])}};var P={Qd:0,Pd:0,F:0,E:0,V:1,L:1,M:1,K:0,ib:0,jb:0,xb:0,wb:0,nb:0,Rb:0,Qb:0};h.Yc=function(c,d){var a=c||{};if(c)if(b.Oc(c))a={db:a};else if(b.Oc(c.g))a.g={db:c.g};a.db=a.db||d;if(a.g)a.g.db=a.g.db||d;return a};h.ad=function(n,j,s,t,B,C,o){var a=j;if(n){a={};for(var h in j){var D=C[h]||1,z=B[h]||[0,1],g=(s-z[0])/z[1];g=c.min(c.max(g,0),1);g=g*D;var x=c.floor(g);if(g!=x)g-=x;var k=t.db||d.l,m,E=n[h],p=j[h];if(b.Wc(p)){k=t[h]||k;var A=k(g);m=E+p*A}else{m=b.P({gc:{}},n[h]);var y=t[h]||{};b.j(p.gc||p,function(d,a){k=y[a]||y.db||k;var c=k(g),b=d*c;m.gc[a]=b;m[a]+=b})}a[h]=m}var w=b.j(j,function(b,a){return P[a]!=i});w&&b.j(P,function(c,b){if(a[b]==i&&n[b]!==i)a[b]=n[b]});if(w){if(a.V)a.L=a.M=a.V;a.fb=o.fb;a.pb=o.pb;if(q()&&l>=11&&(j.F||j.E)&&s!=0&&s!=1)a.K=a.K||1e-8;a.le=e}}if(j.g&&o.vb){var r=a.g.gc,v=(r.c||0)+(r.s||0),u=(r.f||0)+(r.q||0);a.f=(a.f||0)+u;a.c=(a.c||0)+v;a.g.f-=u;a.g.q-=u;a.g.c-=v;a.g.s-=v}if(a.g&&b.uf()&&!a.g.c&&!a.g.f&&!a.g.E&&!a.g.F&&a.g.q==o.fb&&a.g.s==o.pb)a.g=f;return a}};function o(){var a=this,d=[];function i(a,b){d.push({Cc:a,Dc:b})}function h(a,c){b.j(d,function(b,e){b.Cc==a&&b.Dc===c&&d.splice(e,1)})}a.Jb=a.addEventListener=i;a.removeEventListener=h;a.o=function(a){var c=[].slice.call(arguments,1);b.j(d,function(b){b.Cc==a&&b.Dc.apply(g,c)})}}var l=function(A,E,h,J,M,L){A=A||0;var a=this,p,m,n,s,C=0,G,H,F,D,z=0,i=0,l=0,y,j,d,f,o,x,u=[],w;function O(a){d+=a;f+=a;j+=a;i+=a;l+=a;z+=a}function r(p){var g=p;if(o)if(!x&&(g>=f||g<d)||x&&g>=d)g=((g-d)%o+o)%o+d;if(!y||s||i!=g){var k=c.min(g,f);k=c.max(k,d);if(!y||s||k!=l){if(L){var m=(k-j)/(E||1);if(h.cd)m=1-m;var n=b.ad(M,L,m,G,F,H,h);if(w)b.j(n,function(b,a){w[a]&&w[a](J,b)});else b.N(J,n)}a.wc(l-j,k-j);var r=l,q=l=k;b.j(u,function(b,c){var a=!y&&x||g<=i?u[u.length-c-1]:b;a.X(l-z)});i=g;y=e;a.ac(r,q)}}}function B(a,b,e){b&&a.cc(f);if(!e){d=c.min(d,a.gd()+z);f=c.max(f,a.jc()+z)}u.push(a)}var v=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.msRequestAnimationFrame;if(b.Kf()&&b.Fd()<7||!v)v=function(a){b.U(a,h.mb)};function I(){if(p){var d=b.ob(),e=c.min(d-C,h.id),a=i+e*n;C=d;if(a*n>=m*n)a=m;r(a);if(!s&&a*n>=m*n)K(D);else v(I)}}function q(g,h,j){if(!p){p=e;s=j;D=h;g=c.max(g,d);g=c.min(g,f);m=g;n=m<i?-1:1;a.kd();C=b.ob();v(I)}}function K(b){if(p){s=p=D=k;a.wd();b&&b()}}a.md=function(a,b,c){q(a?i+a:f,b,c)};a.od=q;a.Ab=K;a.fe=function(a){q(a)};a.lb=function(){return i};a.pd=function(){return m};a.Kb=function(){return l};a.X=r;a.vb=function(a){r(i+a)};a.rd=function(){return p};a.Ud=function(a){o=a};a.cc=O;a.sd=function(a,b){B(a,0,b)};a.vc=function(a){B(a,1)};a.gd=function(){return d};a.jc=function(){return f};a.ac=a.kd=a.wd=a.wc=b.Mc;a.mc=b.ob();h=b.P({mb:16,id:50},h);o=h.oc;x=h.Wd;w=h.Xd;d=j=A;f=A+E;H=h.ud||{};F=h.A||{};G=b.Yc(h.k)};var m={dc:"data-scale",tc:"data-scale-ratio",Cb:"data-autocenter"},n=new function(){var a=this;a.yb=function(c,a,e,d){(d||!b.O(c,a))&&b.O(c,a,e)};a.uc=function(a){var c=b.bc(a,m.Cb);b.Kc(a,c)}},q=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.Zd=function(d){for(var e=[],a,b=0;b<d.z;b++)for(a=0;a<d.p;a++)g(e,c.ceil(1e5*c.random())%13,[b,a]);return e}},t=function(m,s,p,u,z,A){var a=this,v,h,g,y=0,x=u.Td,r,i=8;function t(a){if(a.c)a.E=a.c;if(a.f)a.F=a.f;b.j(a,function(a){b.ff(a)&&t(a)})}function j(h,f,g){var a={mb:f,m:1,U:0,p:1,z:1,a:0,V:0,g:0,vb:k,u:k,cd:k,Rd:q.Zd,C:{cb:0,gb:0},k:d.l,ud:{},Zb:[],A:{}};b.P(a,h);if(a.z==0)a.z=c.round(a.p*g);t(a);a.k=b.Yc(a.k,d.l);a.qe=c.ceil(a.m/a.mb);a.pe=function(c,b){c/=a.p;b/=a.z;var f=c+"x"+b;if(!a.Zb[f]){a.Zb[f]={G:c,H:b};for(var d=0;d<a.p;d++)for(var e=0;e<a.z;e++)a.Zb[f][e+","+d]={c:e*b,q:d*c+c,s:e*b+b,f:d*c}}return a.Zb[f]};if(a.Gc){a.Gc=j(a.Gc,f,g);a.u=e}return a}function n(z,i,a,v,n,l){var y=this,t,u={},h={},m=[],f,d,r,p=a.C.cb||0,q=a.C.gb||0,g=a.pe(n,l),o=B(a),C=o.length-1,s=a.m+a.U*C,w=v+s,j=a.u,x;w+=50;function B(a){var b=a.Rd(a);return a.cd?b.reverse():b}y.Xc=w;y.fc=function(d){d-=v;var e=d<s;if(e||x){x=e;if(!j)d=s-d;var f=c.ceil(d/a.mb);b.j(h,function(a,e){var d=c.max(f,a.me);d=c.min(d,a.length-1);if(a.Zc!=d){if(!a.Zc&&!j)b.J(m[e]);else d==a.Vd&&j&&b.Z(m[e]);a.Zc=d;b.N(m[e],a[d])}})}};i=b.hb(i);A(i,0,0);b.j(o,function(i,m){b.j(i,function(G){var I=G[0],H=G[1],v=I+","+H,o=k,s=k,x=k;if(p&&H%2){if(p&3)o=!o;if(p&12)s=!s;if(p&16)x=!x}if(q&&I%2){if(q&3)o=!o;if(q&12)s=!s;if(q&16)x=!x}a.c=a.c||a.g&4;a.s=a.s||a.g&8;a.f=a.f||a.g&1;a.q=a.q||a.g&2;var E=s?a.s:a.c,B=s?a.c:a.s,D=o?a.q:a.f,C=o?a.f:a.q;a.g=E||B||D||C;r={};d={E:0,F:0,a:1,G:n,H:l};f=b.P({},d);t=b.P({},g[v]);if(a.a)d.a=2-a.a;if(a.bb){d.bb=a.bb;f.bb=0}var K=a.p*a.z>1||a.g;if(a.V||a.K){var J=e;if(J){d.V=a.V?a.V-1:1;f.V=1;var N=a.K||0;d.K=N*360*(x?-1:1);f.K=0}}if(K){var i=t.gc={};if(a.g){var w=a.Qf||1;if(E&&B){i.c=g.H/2*w;i.s=-i.c}else if(E)i.s=-g.H*w;else if(B)i.c=g.H*w;if(D&&C){i.f=g.G/2*w;i.q=-i.f}else if(D)i.q=-g.G*w;else if(C)i.f=g.G*w}r.g=t;f.g=g[v]}var L=o?1:-1,M=s?1:-1;if(a.x)d.F+=n*a.x*L;if(a.y)d.E+=l*a.y*M;b.j(d,function(a,c){if(b.Wc(a))if(a!=f[c])r[c]=a-f[c]});u[v]=j?f:d;var F=a.qe,A=c.round(m*a.U/a.mb);h[v]=new Array(A);h[v].me=A;h[v].Vd=A+F-1;for(var z=0;z<=F;z++){var y=b.ad(f,r,z/F,a.k,a.A,a.ud,{vb:a.vb,fb:n,pb:l});y.bb=y.bb||1;h[v].push(y)}})});o.reverse();b.j(o,function(a){b.j(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=i;if(e||f)a=b.hb(i);b.N(a,u[d]);b.Bb(a,"hidden");b.T(a,"absolute");z.be(a);m[d]=a;b.J(a,!j)})})}function w(){var a=this,b=0;l.call(a,0,v);a.ac=function(c,a){if(a-b>i){b=a;g&&g.fc(a);h&&h.fc(a)}};a.Sc=r}a.je=function(){var a=0,b=u.Fc,d=b.length;if(x)a=y++%d;else a=c.floor(c.random()*d);b[a]&&(b[a].tb=a);return b[a]};a.wf=function(x,y,k,l,b,t){a.sb();r=b;b=j(b,i,t);var f=l.Qc,e=k.Qc;f["no-image"]=!l.Yb;e["no-image"]=!k.Yb;var o=f,q=e,w=b,d=b.Gc||j({},i,t);if(!b.u){o=e;q=f}var u=d.cc||0;h=new n(m,q,d,c.max(u-d.mb,0),s,p);g=new n(m,o,w,c.max(d.mb-u,0),s,p);h.fc(0);g.fc(0);v=c.max(h.Xc,g.Xc);a.tb=x};a.sb=function(){m.sb();h=f;g=f};a.tf=function(){var a=f;if(g)a=new w;return a};if(z&&b.Ef()<537)i=16;o.call(a);l.call(a,-1e7,1e7)},p={Hc:1};var u=function(a,d,i){var c=this;o.call(c);var t,g,h,j;b.D(a);b.B(a);var r,q;function l(a){c.o(p.Hc,a,e)}function v(c){b.J(a,c);b.J(d,c)}function u(){r.hc(i.Sb||g>0);q.hc(i.Sb||g<t-i.p)}c.Ac=function(b,a,c){if(c)g=a;else{g=b;u()}};c.Bc=v;var s;c.xc=function(c){t=c;g=0;if(!s){b.i(a,"click",b.Y(f,l,-j));b.i(d,"click",b.Y(f,l,j));r=b.Ec(a);q=b.Ec(d);s=e}};c.Ob=h=b.P({lf:1},i);j=h.lf;if(h.Hb==k){n.yb(a,m.dc,1);n.yb(d,m.dc,1)}if(h.kb){n.yb(a,m.Cb,h.kb);n.yb(d,m.Cb,h.kb)}n.uc(a);n.uc(d)},r=function(i,D){var j=this,B,s,a,x=[],z,y,d,t,u,w,v,r,l,g,q;o.call(j);i=b.Mb(i);function C(o,g){var h=this,c,n,m;function r(){n.ee(s==g)}function i(f){if(f||!l.jf()){var a=d-g%d,b=l.Rc((g+a)/d-1),c=b*d+d-a;j.o(p.Hc,c,k,e)}}h.tb=g;h.Lc=r;m=o.hf||o.Yb||b.Nb();h.Vb=c=b.oe(q,"thumbnailtemplate",m,e);n=b.Ec(c);a.zc&1&&b.i(c,"click",b.Y(f,i,0));a.zc&2&&b.i(c,"mouseenter",b.Y(f,i,1))}j.Ac=function(b,e,f){var a=s;s=b;a!=-1&&x[a].Lc();x[b].Lc();!f&&l.yf(l.Rc(c.floor(e/d)))};j.Bc=function(a){b.J(i,a)};var A;j.xc=function(F,D){if(!A){B=F;c.ceil(B/d);s=-1;r=c.min(r,D.length);var f=a.Eb&1,o=w+(w+t)*(d-1)*(1-f),n=v+(v+u)*(d-1)*f,q=o+(o+t)*(r-1)*f,p=n+(n+u)*(r-1)*(1-f);b.T(g,"absolute");b.Bb(g,"hidden");b.S(g,(z-q)/2);b.R(g,(y-p)/2);b.D(g,q);b.B(g,p);var m=[];b.j(D,function(k,h){var i=new C(k,h),e=i.Vb,a=c.floor(h/d),j=h%d;b.S(e,(w+t)*j*(1-f));b.R(e,(v+u)*j*f);if(!m[a]){m[a]=b.Nb();b.Q(g,m[a])}b.Q(m[a],e);x.push(i)});var E=b.P({Ib:0,Ad:k,Gf:o,Hf:n,Cd:t*f+u*(1-f),Hd:12,Id:200,Jd:1,Kd:a.Eb,Ld:a.Pf||a.Rf?0:a.Eb},a);l=new h(i,E);j.He=l.He;A=e}};j.Ob=a=b.P({Nc:0,Uc:0,p:1,Eb:1,zc:1},D);z=b.D(i);y=b.B(i);g=b.Tb(i,"slides",e);q=b.Tb(g,"prototype");w=b.D(q);v=b.B(q);b.lc(q,g);d=a.z||1;t=a.Nc;u=a.Uc;r=a.p;a.Hb==k&&n.yb(i,m.dc,1);a.kb&=a.Eb;a.kb&&n.yb(i,m.Cb,a.kb);n.uc(i)};function s(e,d,c){var a=this;l.call(a,0,c);a.Ed=b.Mc;a.xd=0;a.jd=c}var h=function(){var a=this;b.If(a,o);var Qb="data-jssor-slider",Tb="data-jssor-thumb",v,n,U,eb,V,ob,db,hb,H,G,Kb,hc=1,cc=1,Ub=1,Vb={},z,T,Pb,vb,ub,pb,Ob,Nb,cb,r=-1,N,Ab,q,K,I,Hb,lb,mb,nb,t,R,x,P,Jb,Y=[],Zb,ac,Wb,ic,Bc,u,fb,F,Yb,kb,yb,Bb,jb,Cb,L,gb,Q,J=1,S,D,X,Db=0,Eb=0,M,qb,ib,Mb,y,ab,A,tb,Z=[],rb=b.ef(),Gb=rb.Le,B=[],C,O,E,xb,Sb,W;function qc(d,n,o){var k=this,h={c:2,q:1,s:2,f:1},l={c:"top",q:"right",s:"bottom",f:"left"},g,a,f,i,j={};k.eb=d;k.ic=function(q,k){var p,s=q,r=k;if(!f){f=b.ue(d);g=d.parentNode;i={Hb:b.bc(d,m.dc,1),kb:b.bc(d,m.Cb)};b.j(l,function(c,a){j[a]=b.bc(d,"data-scale-"+c,1)});a=d;if(n){a=b.hb(g,e);b.N(a,{c:0,f:0});b.Q(a,d);b.Q(g,a)}}if(o)p=q>k?q:k;else s=r=p=c.pow(H<G?k:q,i.Hb);b.Mf(a,p);b.O(a,m.tc,p);b.D(g,f.G*s);b.B(g,f.H*r);var t=b.Od()&&b.Md()<9||b.Md()<10&&b.kf()?p:1,u=(s-t)*f.G/2,v=(r-t)*f.H/2;b.S(a,u);b.R(a,v);b.j(f,function(d,a){if(h[a]&&d){var e=(h[a]&1)*c.pow(q,j[a])*d+(h[a]&2)*c.pow(k,j[a])*d/2;b.se[a](g,e)}});b.Kc(g,i.kb)}}function Ac(){var b=this;l.call(b,-1e8,2e8);b.Ee=function(){var a=b.Kb(),d=c.floor(a),f=w(d),e=a-c.floor(a);return{tb:f,De:d,qb:e}};b.ac=function(d,b){var f=c.floor(b);if(f!=b&&b>d)f++;bc(f,e);a.o(h.Ce,w(b),w(d),b,d)}}function zc(){var a=this;l.call(a,0,0,{oc:q});b.j(B,function(b){L&1&&b.Ud(q);a.vc(b);b.cc(jb/nb)})}function yc(){var a=this,b=tb.eb;l.call(a,-1,2,{k:d.l,Xd:{qb:gc},oc:q},b,{qb:1},{qb:-2});a.Vb=b}function rc(o,m){var b=this,d,g,i,j,c;l.call(b,-1e8,2e8,{id:100});b.kd=function(){S=e;X=f;a.o(h.Be,w(y.lb()),y.lb())};b.wd=function(){S=k;j=k;var b=y.Ee();a.o(h.Ae,w(y.lb()),y.lb());!b.qb&&Cc(b.De,r)};b.ac=function(f,e){var a;if(j)a=c;else{a=g;if(i){var b=e/i;a=n.bd(b)*(g-d)+d}}y.X(a)};b.ec=function(a,e,c,f){d=a;g=e;i=c;y.X(a);b.X(0);b.od(c,f)};b.ze=function(a){j=e;c=a;b.md(a,f,e)};b.ye=function(a){c=a};y=new Ac;y.sd(o);y.sd(m)}function sc(){var c=this,a=ec();b.I(a,0);b.zb(a,"pointerEvents","none");c.eb=a;c.be=function(c){b.Q(a,c);b.J(a)};c.sb=function(){b.Z(a);b.Vc(a)}}function xc(m,g){var d=this,s,M,v,j,z=[],y,D,S,H,P,F,J,i,x,p;l.call(d,-t,t+1,{});function E(a){s&&s.Ed();R(m,a,0);F=e;s=new V.W(m,V,b.Pc(b.v(m,"idle"))||Yb,!u);s.X(0)}function Y(){s.mc<V.mc&&E()}function N(p,r,o){if(!H){H=e;if(j&&o){var f=o.width,c=o.height,m=f,l=c;if(f&&c&&n.Lb){if(n.Lb&3&&(!(n.Lb&4)||f>K||c>I)){var i=k,q=K/I*c/f;if(n.Lb&1)i=q>1;else if(n.Lb&2)i=q<1;m=i?f*I/c:K;l=i?I:c*K/f}b.D(j,m);b.B(j,l);b.R(j,(I-l)/2);b.S(j,(K-m)/2)}b.T(j,"absolute");a.o(h.ve,g)}}b.Z(r);p&&p(d)}function W(f,b,c,e){if(e==X&&r==g&&u)if(!Bc){var a=w(f);C.wf(a,g,b,d,c,I/K);b.Ke();ab.cc(a-ab.gd()-1);ab.X(a);A.ec(a,a,0)}}function bb(b){if(b==X&&r==g){if(!i){var a=f;if(C)if(C.tb==g)a=C.tf();else C.sb();Y();i=new wc(m,g,a,s);i.dd(p)}!i.rd()&&i.yc()}}function G(a,e,k){if(a==g){if(a!=e)B[e]&&B[e].ed();else!k&&i&&i.Me();p&&p.hc();var l=X=b.ob();d.Fb(b.Y(f,bb,l))}else{var j=c.min(g,a),h=c.max(g,a),o=c.min(h-j,j+q-h),m=t+n.df-1;(!P||o<=m)&&d.Fb()}}function db(){if(r==g&&i){i.Ab();p&&p.Ne();p&&p.cf();i.fd()}}function eb(){r==g&&i&&i.Ab()}function Z(b){!Q&&a.o(h.bf,g,b)}function O(){p=x.pInstance;i&&i.dd(p)}d.Fb=function(d,c){c=c||v;if(z.length&&!H){b.J(c);if(!S){S=e;a.o(h.af,g);b.j(z,function(a){if(!b.O(a,"src")){a.src=b.v(a,"src2")||"";b.rb(a,a["display-origin"])}})}b.de(z,j,b.Y(f,N,d,c))}else N(d,c)};d.Ze=function(){if(q==1){d.ed();G(g,g)}else if(C){var a=C.je(q);if(a){var h=X=b.ob(),c=g+fb,e=B[w(c)];return e.Fb(b.Y(f,W,c,e,a,h),v)}}else Ib(fb)};d.kc=function(){G(g,g,e)};d.ed=function(){p&&p.Ne();p&&p.cf();d.hd();i&&i.Ye();i=f;E()};d.Ke=function(){b.Z(m)};d.hd=function(){b.J(m)};d.Xe=function(){p&&p.hc()};function R(a,f,c,h){if(b.O(a,Qb))return;if(!F){if(a.tagName=="IMG"){z.push(a);if(!b.O(a,"src")){P=e;a["display-origin"]=b.rb(a);b.Z(a)}}var d=b.ne(a);if(d){var g=new Image;b.v(g,"src2",d);z.push(g)}c&&b.I(a,(b.I(a)||0)+1)}var i=b.Ub(a);b.j(i,function(a){var d=a.tagName,g=b.v(a,"u");if(g=="player"&&!x){x=a;if(x.pInstance)O();else b.i(x,"dataavailable",O)}if(g=="caption"){if(f){b.Ff(a,b.v(a,"to"));b.Df(a,b.v(a,"bf"));J&&b.v(a,"3d")&&b.Cf(a,"preserve-3d")}}else if(!F&&!c&&!j){if(d=="A"){if(b.v(a,"u")=="image")j=b.mf(a,"IMG");else j=b.Tb(a,"image",e);if(j){y=a;b.rb(y,"block");b.N(y,cb);D=b.hb(y,e);b.T(y,"relative");b.nc(D,0);b.zb(D,"backgroundColor","#000")}}else if(d=="IMG"&&b.v(a,"u")=="image")j=a;if(j){j.border=0;b.N(j,cb)}}R(a,f,c+1,h)})}d.wc=function(c,b){var a=t-b;gc(M,a)};d.tb=g;o.call(d);J=b.v(m,"p");b.Bf(m,J);b.Af(m,b.v(m,"po"));var L=b.Tb(m,"thumb",e);if(L){d.hf=b.hb(L);b.Z(L)}b.J(m);v=b.hb(T);b.I(v,1e3);b.i(m,"click",Z);E(e);d.Yb=j;d.ld=D;d.Qc=m;d.Vb=M=m;b.Q(M,v);a.Jb(203,G);a.Jb(28,eb);a.Jb(24,db)}function wc(z,g,p,q){var c=this,n=0,v=0,i,j,f,d,m,t,s,o=B[g];l.call(c,0,0);function w(){b.Vc(O);ic&&m&&o.ld&&b.Q(O,o.ld);b.J(O,!m&&o.Yb)}function x(){c.yc()}function y(a){s=a;c.Ab();c.yc()}c.yc=function(){var b=c.Kb();if(!D&&!S&&!s&&r==g){if(!b){if(i&&!m){m=e;c.fd(e);a.o(h.We,g,n,v,i,d)}w()}var k,p=h.nd;if(b!=d)if(b==f)k=d;else if(b==j)k=f;else if(!b)k=j;else k=c.pd();a.o(p,g,b,n,j,f,d);var l=u&&(!F||J);if(b==d)(f!=d&&!(F&12)||l)&&o.Ze();else(l||b!=f)&&c.od(k,x)}};c.Me=function(){f==d&&f==c.Kb()&&c.X(j)};c.Ye=function(){C&&C.tb==g&&C.sb();var b=c.Kb();b<d&&a.o(h.nd,g,-b-1,n,j,f,d)};c.fd=function(a){p&&b.Bb(R,a&&p.Sc.Sf?"":"hidden")};c.wc=function(c,b){if(m&&b>=i){m=k;w();o.hd();C.sb();a.o(h.Ve,g,n,v,i,d)}a.o(h.Ue,g,b,n,j,f,d)};c.dd=function(a){if(a&&!t){t=a;a.Jb($JssorPlayer$.ae,y)}};p&&c.vc(p);i=c.jc();c.vc(q);j=i+q.xd;d=c.jc();f=u?i+q.jd:d}function zb(a,c,d){b.S(a,c);b.R(a,d)}function gc(c,b){var a=x>0?x:U,d=lb*b*(a&1),e=mb*b*(a>>1&1);zb(c,d,e)}function Xb(){xb=S;Sb=A.pd();E=y.lb()}function kc(){Xb();if(D||!J&&F&12){A.Ab();a.o(h.Te)}}function jc(f){if(!D&&(J||!(F&12))&&!A.rd()){var b=y.lb(),a=c.ceil(E);if(f&&c.abs(M)>=n.Hd){a=c.ceil(b);a+=ib}if(!(L&1))a=c.min(q-t,c.max(a,0));var e=c.abs(a-b);if(e<1&&n.bd!=d.l)e=1-c.pow(1-e,5);if(!Q&&xb)A.fe(Sb);else if(b==a){Ab.Xe();Ab.kc()}else A.ec(b,a,e*kb)}}function Rb(a){!b.Db(b.Ic(a),"nodrag")&&b.Pb(a)}function uc(a){fc(a,1)}function fc(c,g){c=b.Dd(c);var d=b.Ic(c);Jb=k;var l=b.Db(d,"1",Tb);if((!l||l===v)&&!P&&(!g||c.touches.length==1)&&!b.Db(d,"nodrag")&&vc()){var n=b.Db(d,i,m.tc);if(n)Ub=b.O(n,m.tc);if(g){var p=c.touches[0];Db=p.clientX;Eb=p.clientY}else{var o=b.Bd(c);Db=o.x;Eb=o.y}D=e;X=f;b.i(j,g?"touchmove":"mousemove",Lb);b.ob();Q=0;kc();if(!xb)x=0;M=0;qb=0;ib=0;a.o(h.Se,w(E),E,c)}}function Lb(a){if(D){a=b.Dd(a);var d;if(a.type!="mousemove")if(a.touches.length==1){var m=a.touches[0];d={x:m.clientX,y:m.clientY}}else bb();else d=b.Bd(a);if(d){var f=d.x-Db,g=d.y-Eb;if(x||c.abs(f)>1.5||c.abs(g)>1.5){if(c.floor(E)!=E)x=x||U&P;if((f||g)&&!x)if(P==3)if(c.abs(g)>c.abs(f))x=2;else x=1;else{x=P;var n=[0,c.abs(f),c.abs(g)],p=n[x],o=n[~x&3];if(o>p)Jb=e}if(x&&!Jb){var l=g,h=mb;if(x==1){l=f;h=lb}if(M-qb<-1.5)ib=0;else if(M-qb>1.5)ib=-1;qb=M;M=l;W=E-M/h/Ub;if(!(L&1)){var j=0,i=[-E,0,E-q+t];b.j(i,function(b,d){if(b>0){var a=c.pow(b,1/1.6);a=c.tan(a*c.PI/2);j=(a-b)*(d-1)}});var k=j+W;i=[-k,0,k-q+t];b.j(i,function(a,b){if(a>0){a=c.min(a,h);a=c.atan(a)*2/c.PI;a=c.pow(a,1.6);W=a*(b-1);if(b)W+=q-t}})}b.Pb(a);if(!S)A.ze(W);else A.ye(W)}}}}}function bb(){tc();if(D){D=k;Q=M;b.ob();b.ab(j,"mousemove",Lb);b.ab(j,"touchmove",Lb);Q&&u&8&&(u=0);A.Ab();var c=y.lb();a.o(h.Re,w(c),c,w(E),E);F&12&&Xb();jc(e)}}function pc(c){var a=b.Ic(c),d=b.Db(a,"1",Qb);if(v===d)if(Q){b.pf(c);while(a&&v!==a){(a.tagName=="A"||b.O(a,"data-jssor-button"))&&b.Pb(c);a=a.parentNode}}else u&4&&(u=0)}function lc(a){B[r];r=w(a);Ab=B[r];y.X(r);bc(r);return r}function Cc(b,c){x=0;lc(b);if(u&2&&(fb>0&&r==q-1||fb<0&&!r))u=0;a.o(h.Qe,r,c)}function bc(a,c){N=a;b.j(Y,function(b){b.Ac(w(a),a,c)})}function vc(){var b=h.qd||0,a=gb;if(Gb)a&1&&(a&=1);h.qd|=a;return P=a&~b}function tc(){if(P){h.qd&=~gb;P=0}}function ec(){var a=b.Nb();b.N(a,cb);b.T(a,"absolute");return a}function w(b,a){a=a||q||1;return(b%a+a)%a}function wb(c,a,b){u&8&&(u=0);sb(c,kb,a,b)}function Fb(){b.j(Y,function(a){a.Bc(a.Ob.Tf<=J)})}function nc(){if(!J){J=1;Fb();if(!D){F&12&&jc();F&3&&B[r]&&B[r].kc()}}a.o(h.Pe)}function mc(){if(J){J=0;Fb();D||!(F&12)||kc()}a.o(h.Oe)}function oc(){b.j(Z,function(a){b.N(a,cb);b.T(a,"absolute");b.Bb(a,"hidden");b.Z(a)});b.N(T,cb)}function Ib(b,a){sb(b,a,e)}function sb(g,f,m,o){if(Cb&&(!D&&(J||!(F&12))||n.Ad)){S=e;D=k;A.Ab();if(f==i)f=kb;var d=Mb.Kb(),b=g;if(m){b=N+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}var a=b;if(!(L&1))if(o)a=w(a);else if(L&2&&(a<0&&!N||a>q-t&&N>=q-t))a=a<0?q-t:0;else a=c.max(0,c.min(a,q-t));var l=(a-d)%q;a=d+l;var h=d==a?0:f*c.abs(l),j=1;if(t>1)j=(U&1?Ob:Nb)/nb;h=c.min(h,f*j*1.5);A.ec(d,a,h||1)}}a.Ib=function(a){if(a==i)return a;if(a!=u){u=a;u&&B[r]&&B[r].kc()}};a.jf=function(){return Q};a.fb=function(){return H};a.pb=function(){return G};a.zf=function(b){if(b==i)return Kb||H;a.ic(b,b/H*G)};a.ic=function(c,a){b.D(v,c);b.B(v,a);hc=c/H;cc=a/G;b.j(Vb,function(a){a.ic(hc,cc)});if(!Kb){b.Gb(R,z);b.R(R,0);b.S(R,0)}Kb=c};a.yf=sb;a.md=function(){a.Ib(u||1)};a.Rc=function(a){var d=c.ceil(w(jb/nb)),b=w(a-N+d);if(b>t){if(a-N>q/2)a-=q;else if(a-N<=-q/2)a+=q}else a=N+b-d;if(!(L&1))a=w(a);return a};a.Xb=function(r,l){a.eb=v=b.Mb(r);H=b.D(v);G=b.B(v);n=b.P({Lb:0,df:1,pc:1,qc:0,Ib:0,Sb:1,rc:e,Ad:e,Ge:1,vd:3e3,Jd:1,Id:500,bd:d.we,Hd:20,Cd:0,p:1,sc:0,Ie:1,Kd:1,Ld:1},l);n.rc=n.rc&&b.Lf();if(n.Je!=i)n.vd=n.Je;if(n.gf!=i)n.sc=n.gf;U=n.Kd&3;eb=n.Fe;V=b.P({W:s},n.Of);ob=n.Nf;db=n.rf;hb=n.ce;!n.Ie;var x=b.Ub(v);b.j(x,function(a,d){var c=b.v(a,"u");if(c=="loading")T=a;else{if(c=="slides")z=a;if(c=="navigator")Pb=a;if(c=="arrowleft")vb=a;if(c=="arrowright")ub=a;if(c=="thumbnavigator")pb=a;if(a.tagName=="DIV"||a.tagName=="SPAN")Vb[c||d]=new qc(a,c=="slides",b.of(["slides","thumbnavigator"])[c])}});T=T||b.Nb(j);Ob=b.D(z);Nb=b.B(z);K=n.Gf||Ob;I=n.Hf||Nb;cb={G:K,H:I,c:0,f:0};Hb=n.Cd;lb=K+Hb;mb=I+Hb;nb=U&1?lb:mb;fb=n.Ge;F=n.Jd;Yb=n.vd;kb=n.Id;tb=new sc;if(n.rc)zb=function(a,c,d){b.Wb(a,{xb:c,wb:d})};u=n.Ib&63;a.Ob=l;b.O(v,Qb,"1");b.I(z,b.I(z)||0);b.T(z,"absolute");R=b.hb(z,e);b.Gb(R,z);ab=new yc;b.Q(R,ab.Vb);b.Bb(z,"hidden");F&=Gb?10:5;var y=b.Ub(z);b.j(y,function(a){a.tagName=="DIV"&&!b.v(a,"u")&&Z.push(a);b.I(a,(b.I(a)||0)+1)});O=ec();b.zb(O,"backgroundColor","#000");b.nc(O,0);b.I(O,0);b.Gb(O,z.firstChild,z);q=Z.length;t=c.min(n.p,q);Cb=t<q;L=Cb?n.Sb:0;if(q){oc();if(eb){ic=eb.Vf;yb=eb.W;Bb=t==1&&q>1&&yb&&(!b.Od()||b.Fd()>=9)}jb=Bb||t>=q||!(L&1)?0:n.sc;gb=(t>1||jb?U:-1)&n.Ld;rb.Nd&&b.zb(z,rb.Nd,([f,"pan-y","pan-x","none"])[gb]||"");if(Bb)C=new yb(tb,K,I,eb,Gb,zb);for(var k=0;k<Z.length;k++){var m=Z[k],o=new xc(m,k);B.push(o)}b.Z(T);Mb=new zc;A=new rc(Mb,ab);b.i(v,"click",pc,e);b.i(v,"mouseleave",nc);b.i(v,"mouseenter",mc);if(gb){b.i(v,"mousedown",fc);b.i(v,"touchstart",uc);b.i(v,"dragstart",Rb);b.i(v,"selectstart",Rb);b.i(g,"mouseup",bb);b.i(j,"mouseup",bb);b.i(j,"touchend",bb);b.i(j,"touchcancel",bb);b.i(g,"blur",bb)}if(Pb&&ob){Zb=new ob.W(Pb,ob,H,G);Y.push(Zb)}if(db&&vb&&ub){db.Sb=L;db.p=t;ac=new db.W(vb,ub,db,H,G);Y.push(ac)}if(pb&&hb){hb.qc=n.qc;Wb=new hb.W(pb,hb);b.O(pb,Tb,"1");Y.push(Wb)}b.j(Y,function(a){a.xc(q,B,T);a.Jb(p.Hc,wb)});b.zb(v,"visibility","visible");a.ic(H,G);Fb();n.pc&&b.i(j,"keydown",function(a){if(a.keyCode==37)wb(-n.pc,e);else a.keyCode==39&&wb(n.pc,e)});var h=n.qc;h=w(h);A.ec(h,h,0)}};b.Xb(a)};h.bf=21;h.Se=22;h.Re=23;h.Be=24;h.Ae=25;h.af=26;h.ve=27;h.Te=28;h.Oe=31;h.Pe=32;h.Ce=202;h.Qe=203;h.We=206;h.Ve=207;h.Ue=208;h.nd=209;jssor_1_slider_init=function(){var i=[{m:1200,x:.3,A:{f:[.3,.7]},k:{f:d.n,a:d.l},a:2},{m:1200,x:-.3,u:e,k:{f:d.n,a:d.l},a:2},{m:1200,x:-.3,A:{f:[.3,.7]},k:{f:d.n,a:d.l},a:2},{m:1200,x:.3,u:e,k:{f:d.n,a:d.l},a:2},{m:1200,y:.3,A:{c:[.3,.7]},k:{c:d.n,a:d.l},a:2},{m:1200,y:-.3,u:e,k:{c:d.n,a:d.l},a:2},{m:1200,y:-.3,A:{c:[.3,.7]},k:{c:d.n,a:d.l},a:2},{m:1200,y:.3,u:e,k:{c:d.n,a:d.l},a:2},{m:1200,x:.3,p:2,A:{f:[.3,.7]},C:{cb:3},k:{f:d.n,a:d.l},a:2},{m:1200,x:.3,p:2,u:e,C:{cb:3},k:{f:d.n,a:d.l},a:2},{m:1200,y:.3,z:2,A:{c:[.3,.7]},C:{gb:12},k:{c:d.n,a:d.l},a:2},{m:1200,y:.3,z:2,u:e,C:{gb:12},k:{c:d.n,a:d.l},a:2},{m:1200,y:.3,p:2,A:{c:[.3,.7]},C:{cb:12},k:{c:d.n,a:d.l},a:2},{m:1200,y:-.3,p:2,u:e,C:{cb:12},k:{c:d.n,a:d.l},a:2},{m:1200,x:.3,z:2,A:{f:[.3,.7]},C:{gb:3},k:{f:d.n,a:d.l},a:2},{m:1200,x:-.3,z:2,u:e,C:{gb:3},k:{f:d.n,a:d.l},a:2},{m:1200,x:.3,y:.3,p:2,z:2,A:{f:[.3,.7],c:[.3,.7]},C:{cb:3,gb:12},k:{f:d.n,c:d.n,a:d.l},a:2},{m:1200,x:.3,y:.3,p:2,z:2,A:{f:[.3,.7],c:[.3,.7]},u:e,C:{cb:3,gb:12},k:{f:d.n,c:d.n,a:d.l},a:2},{m:1200,U:20,g:3,k:{g:d.n,a:d.l},a:2},{m:1200,U:20,g:3,u:e,k:{g:d.td,a:d.l},a:2},{m:1200,U:20,g:12,k:{g:d.n,a:d.l},a:2},{m:1200,U:20,g:12,u:e,k:{g:d.td,a:d.l},a:2}],j={Ib:1,Fe:{W:t,Fc:i,Td:1},rf:{W:u},ce:{W:r,p:5,sc:400}},f=new h("jssor_1",j);function a(){var b=f.eb.parentNode.clientWidth;if(b){b=c.min(b,1080);f.zf(b)}else g.setTimeout(a,30)}a();b.i(g,"load",a);b.i(g,"resize",a);b.i(g,"orientationchange",a)}})(window,document,Math,null,true,false)
</script>
<style>
.jssora106{display:block;position:absolute;cursor:pointer}.jssora106 .c{fill:#fff;opacity:.3}.jssora106 .a{fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10}.jssora106:hover .c{opacity:.5}.jssora106:hover .a{opacity:.8}.jssora106.jssora106dn .c{opacity:.2}.jssora106.jssora106dn .a{opacity:1}.jssora106.jssora106ds{opacity:.3;pointer-events:none}.jssort051 .p{position:absolute;top:0;left:0;background-color:#000}.jssort051 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.45}.jssort051 .p:hover .t{opacity:.8}.jssort051 .pav .t,.jssort051 .pdn .t,.jssort051 .p:hover.pdn .t{opacity:1}
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1280px;height:680px;overflow:hidden;visibility:hidden;" style="padding:0px;">
<!-- Loading Screen -->
<div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);" style="padding:0px;"></div>
<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1280px;height:580px;overflow:hidden;" style="padding:0px;">
<div>
<img data-u="image" src="img/001.jpg" />
<img data-u="thumb" src="img/001-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/002.jpg" />
<img data-u="thumb" src="img/002-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/003.jpg" />
<img data-u="thumb" src="img/003-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/004.jpg" />
<img data-u="thumb" src="img/004-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/005.jpg" />
<img data-u="thumb" src="img/005-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/006.jpg" />
<img data-u="thumb" src="img/006-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/007.jpg" />
<img data-u="thumb" src="img/007-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/008.jpg" />
<img data-u="thumb" src="img/008-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/009.jpg" />
<img data-u="thumb" src="img/009-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/010.jpg" />
<img data-u="thumb" src="img/010-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/011.jpg" />
<img data-u="thumb" src="img/011-s200x100.jpg" />
</div>
<div>
<img data-u="image" src="img/012.jpg" />
<img data-u="thumb" src="img/012-s200x100.jpg" />
</div>
<a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slider</a>
</div>
<!-- Thumbnail Navigator -->
<div data-u="thumbnavigator" class="jssort051" style="position:absolute;left:0px;bottom:0px;width:200px;height:300px;" data-autocenter="1" data-scale-bottom="0.75">
<div data-u="slides">
<div data-u="prototype" class="p" style="width:200px;height:100px;">
<div data-u="thumbnailtemplate" class="t"></div>
</div>
</div>
</div>
<!-- Arrow Navigator -->
<div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
<polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
<line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
</svg>
</div>
<div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
<polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
<line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
</svg>
</div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->
</div>


<hr>

<div id="services">
<h1> Our Services</h1>
<div class="col-sm-3">
<img src="http://www.cmg.md/wp-content/uploads/2012/12/digital-imaging-700x300.jpg" alt="Health Press" style='width:200px;height:100px; text-align:center;'>
 <h3>Radiology Services</h3>
                <h4>$5,000JMD - $10,000JMD</h4>
                <p> Ultrasound & X-ray for your medical services. Our range of services includes x-rays, ultrasounds, mammography, barium meal, barium enema, intravenous pyelogram, hysterosalpinogram and CT scan. </p>
                </div>

<div class="col-sm-3">
<img src="https://www.obgyn.pitt.edu/sites/default/files/slider-image/General%20Patient%20Ultrasound_1.jpg" alt="Health Press" style='width:200px;height:100px; text-align:center;'>
<h3>Obstetrics and Gynecology Services</h3>
                <h4>$3,000JMD - $10,000JMD</h4>
                <p>Our women's health services include services for breast care, maternity, newborn care and sexual health.</p>
                </div>

<div class="col-sm-3">
<img src="http://www.cmg.md/wp-content/uploads/2013/01/patient-doctor-700x300.jpg" alt="Health Press" style='width:200px;height:100px; text-align:center;'>
<h3>General Doctor's Visit</h3>
                <h4>$2,000JMD</h4>
                <p>Our doctor consultation platform which enables you to ask a doctor & get your questions answered by top medical adviserss, consultants and physicians at affordable prices.</p>
               </div>

<div class="col-sm-3">
<img src="http://www.huntbridge.com/wp-content/uploads/2016/12/blood-test-700x300.jpg" alt="Health Press" style='width:200px;height:100px; text-align:center;'>
 <h3>Blood Analysis</h3>
                <h4>$500JMD - $2000JMD</h4>
                <p>Some of our wide range of lab tests includes Blood Urea Nitrogen (BUN), Complete blood count, Fast Blood Sugar (FBS), Postprandial Blood Sugar (PPBS), Lipid Profile, Serum Creatinine, Uric Acid and more.</p>
                </div>

</div><!-- #endregion services End -->

<hr>

</div><!-- #endregion displayarea End -->

<!--BMI Calculator-->

	<div id='BMIModal' class='modal fade' role='dialog'>
	  <div class='modal-dialog'>

		<!-- Modal content-->
		<div class='modal-content'>
		  <div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'><span class='glyphicon glyphicon-off'></span></button>
			<h4 class='modal-title'><i class="fa fa-calculator" aria-hidden="true"></i> BMI Calculator</h4>
		  </div>
		  <div class='modal-body'>
	

	<form>
						<center>
	<table style='width:90%' class='table table-striped table-hover table-bordered' >
	  <tr class='info'>
		<!--<th>Fields</th>-->
		<th>User Input</th> 
	   </tr>
	  <tr>
		<!--<td>Weight</td>-->
		<td>
			<div class='input-group'>
				<input type = 'number' step='any' name = 'weight' id='weight' value='$weight' placeholder = 'Weight (kilograms)' title= 'Please enter your weight' required class='form-control col-md-5 col-xs-6'>
				<span class='input-group-addon'><i class='glyphicon glyphicon-scale'></i></span>
			</div> 		
		</td>
	   </tr>
	  <tr>
		<!--<td>Height</td>-->
		<td>
		<label for='height' >Height</label>
		<div class='input-group'>
			<input type = 'number' step='any' name = 'height' id= 'height' value='$height' placeholder = 'Height (meters)' title= 'Please enter your height' required class='form-control'>
			<span class='input-group-addon'><i class='glyphicon glyphicon-paste'></i></span>
		</div>
		</td>
		
	  </tr>
	  <tr>
		<!--<td>BMI</td>-->
		<td><p id="bmi" value="5"></p></td>
	  </tr> 
	  <tr>
		<!--<td>BMI Class</td>-->
		<td><p id="bmiclass"></p></td>
	  </tr> 
	
	  
	</table>
	<button type='button' class='btn btn-default' name="submit" onclick="calculateBmi()"><i class="fa fa-calculator" aria-hidden="true"></i> Calculate BMI</button>
	</form>
	</center>	  
		  
			  
		  </div>
		  <div class='modal-footer'>
			<button type='button' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-off'></span> Close</button>
			
		  </div>
		</div>

		
	  </div>
	</div>

	

	
<?php include 'footer.php';
?>


</body>
</html>

