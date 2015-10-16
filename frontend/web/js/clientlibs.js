window.Modernizr=(function(a,C,G){var i="2.8.3",W={},Y=true,l=C.documentElement,A="modernizr",h=C.createElement(A),e=h.style,k=C.createElement("input"),c=":)",B={}.toString,J=" -webkit- -moz- -o- -ms- ".split(" "),H="Webkit Moz O ms",f=H.split(" "),j=H.toLowerCase().split(" "),g={svg:"http://www.w3.org/2000/svg"},L={},P={},F={},E=[],K=E.slice,S,N=function(u,w,o,v){var n,t,q,r,m=C.createElement("div"),s=C.body,p=s||C.createElement("body");
if(parseInt(o,10)){while(o--){q=C.createElement("div");
q.id=v?v[o]:A+(o+1);
m.appendChild(q)
}}n=["&#173;",'<style id="s',A,'">',u,"</style>"].join("");
m.id=A;
(s?m:p).innerHTML+=n;
p.appendChild(m);
if(!s){p.style.background="";
p.style.overflow="hidden";
r=l.style.overflow;
l.style.overflow="hidden";
l.appendChild(p)
}t=w(m,u);
if(!s){p.parentNode.removeChild(p);
l.style.overflow=r
}else{m.parentNode.removeChild(m)
}return !!t
},O=(function(){var n={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};
function m(o,q){q=q||C.createElement(n[o]||"div");
o="on"+o;
var p=o in q;
if(!p){if(!q.setAttribute){q=C.createElement("div")
}if(q.setAttribute&&q.removeAttribute){q.setAttribute(o,"");
p=R(q[o],"function");
if(!R(q[o],"undefined")){q[o]=G
}q.removeAttribute(o)
}}q=null;
return p
}return m
})(),I=({}).hasOwnProperty,X;
if(!R(I,"undefined")&&!R(I.call,"undefined")){X=function(m,n){return I.call(m,n)
}
}else{X=function(m,n){return((n in m)&&R(m.constructor.prototype[n],"undefined"))
}
}if(!Function.prototype.bind){Function.prototype.bind=function D(o){var p=this;
if(typeof p!="function"){throw new TypeError()
}var m=K.call(arguments,1),n=function(){if(this instanceof n){var s=function(){};
s.prototype=p.prototype;
var r=new s();
var q=p.apply(r,m.concat(K.call(arguments)));
if(Object(q)===q){return q
}return r
}else{return p.apply(o,m.concat(K.call(arguments)))
}};
return n
}
}function d(m){e.cssText=m
}function U(n,m){return d(J.join(n+";")+(m||""))
}function R(n,m){return typeof n===m
}function T(n,m){return !!~(""+n).indexOf(m)
}function Z(o,m){for(var n in o){var p=o[n];
if(!T(p,"-")&&e[p]!==G){return m=="pfx"?p:true
}}return false
}function Q(n,q,p){for(var m in n){var o=q[n[m]];
if(o!==G){if(p===false){return n[m]
}if(R(o,"function")){return o.bind(p||q)
}return o
}}return false
}function M(q,m,p){var n=q.charAt(0).toUpperCase()+q.slice(1),o=(q+" "+f.join(n+" ")+n).split(" ");
if(R(m,"string")||R(m,"undefined")){return Z(o,m)
}else{o=(q+" "+(j).join(n+" ")+n).split(" ");
return Q(o,m,p)
}}L.flexbox=function(){return M("flexWrap")
};
L.canvas=function(){var m=C.createElement("canvas");
return !!(m.getContext&&m.getContext("2d"))
};
L.canvastext=function(){return !!(W.canvas&&R(C.createElement("canvas").getContext("2d").fillText,"function"))
};
L.webgl=function(){return !!a.WebGLRenderingContext
};
L.touch=function(){var m;
if(("ontouchstart" in a)||a.DocumentTouch&&C instanceof DocumentTouch){m=true
}else{N(["@media (",J.join("touch-enabled),("),A,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(n){m=n.offsetTop===9
})
}return m
};
L.geolocation=function(){return"geolocation" in navigator
};
L.postmessage=function(){return !!a.postMessage
};
L.websqldatabase=function(){return !!a.openDatabase
};
L.indexedDB=function(){return !!M("indexedDB",a)
};
L.hashchange=function(){return O("hashchange",a)&&(C.documentMode===G||C.documentMode>7)
};
L.history=function(){return !!(a.history&&history.pushState)
};
L.draganddrop=function(){var m=C.createElement("div");
return("draggable" in m)||("ondragstart" in m&&"ondrop" in m)
};
L.websockets=function(){return"WebSocket" in a||"MozWebSocket" in a
};
L.rgba=function(){d("background-color:rgba(150,255,150,.5)");
return T(e.backgroundColor,"rgba")
};
L.hsla=function(){d("background-color:hsla(120,40%,100%,.5)");
return T(e.backgroundColor,"rgba")||T(e.backgroundColor,"hsla")
};
L.multiplebgs=function(){d("background:url(https://),url(https://),red url(https://)");
return(/(url\s*\(.*?){3}/).test(e.background)
};
L.backgroundsize=function(){return M("backgroundSize")
};
L.borderimage=function(){return M("borderImage")
};
L.borderradius=function(){return M("borderRadius")
};
L.boxshadow=function(){return M("boxShadow")
};
L.textshadow=function(){return C.createElement("div").style.textShadow===""
};
L.opacity=function(){U("opacity:.55");
return(/^0.55$/).test(e.opacity)
};
L.cssanimations=function(){return M("animationName")
};
L.csscolumns=function(){return M("columnCount")
};
L.cssgradients=function(){var o="background-image:",n="gradient(linear,left top,right bottom,from(#9f9),to(white));",m="linear-gradient(left top,#9f9, white);";
d((o+"-webkit- ".split(" ").join(n+o)+J.join(m+o)).slice(0,-o.length));
return T(e.backgroundImage,"gradient")
};
L.cssreflections=function(){return M("boxReflect")
};
L.csstransforms=function(){return !!M("transform")
};
L.csstransforms3d=function(){var m=!!M("perspective");
if(m&&"webkitPerspective" in l.style){N("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(n,o){m=n.offsetLeft===9&&n.offsetHeight===3
})
}return m
};
L.csstransitions=function(){return M("transition")
};
L.fontface=function(){var m;
N('@font-face {font-family:"font";src:url("https://")}',function(q,r){var p=C.getElementById("smodernizr"),n=p.sheet||p.styleSheet,o=n?(n.cssRules&&n.cssRules[0]?n.cssRules[0].cssText:n.cssText||""):"";
m=/src/i.test(o)&&o.indexOf(r.split(" ")[0])===0
});
return m
};
L.generatedcontent=function(){var m;
N(["#",A,"{font:0/0 a}#",A,':after{content:"',c,'";visibility:hidden;font:3px/1 a}'].join(""),function(n){m=n.offsetHeight>=3
});
return m
};
L.video=function(){var n=C.createElement("video"),m=false;
try{if(m=!!n.canPlayType){m=new Boolean(m);
m.ogg=n.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,"");
m.h264=n.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,"");
m.webm=n.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,"")
}}catch(o){}return m
};
L.audio=function(){var n=C.createElement("audio"),m=false;
try{if(m=!!n.canPlayType){m=new Boolean(m);
m.ogg=n.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,"");
m.mp3=n.canPlayType("audio/mpeg;").replace(/^no$/,"");
m.wav=n.canPlayType('audio/wav; codecs="1"').replace(/^no$/,"");
m.m4a=(n.canPlayType("audio/x-m4a;")||n.canPlayType("audio/aac;")).replace(/^no$/,"")
}}catch(o){}return m
};
L.localstorage=function(){try{localStorage.setItem(A,A);
localStorage.removeItem(A);
return true
}catch(m){return false
}};
L.sessionstorage=function(){try{sessionStorage.setItem(A,A);
sessionStorage.removeItem(A);
return true
}catch(m){return false
}};
L.webworkers=function(){return !!a.Worker
};
L.applicationcache=function(){return !!a.applicationCache
};
L.svg=function(){return !!C.createElementNS&&!!C.createElementNS(g.svg,"svg").createSVGRect
};
L.inlinesvg=function(){var m=C.createElement("div");
m.innerHTML="<svg/>";
return(m.firstChild&&m.firstChild.namespaceURI)==g.svg
};
L.smil=function(){return !!C.createElementNS&&/SVGAnimate/.test(B.call(C.createElementNS(g.svg,"animate")))
};
L.svgclippaths=function(){return !!C.createElementNS&&/SVGClipPath/.test(B.call(C.createElementNS(g.svg,"clipPath")))
};
function b(){W.input=(function(o){for(var n=0,m=o.length;
n<m;
n++){F[o[n]]=!!(o[n] in k)
}if(F.list){F.list=!!(C.createElement("datalist")&&a.HTMLDataListElement)
}return F
})("autocomplete autofocus list placeholder max min multiple pattern required step".split(" "));
W.inputtypes=(function(p){for(var o=0,n,r,q,m=p.length;
o<m;
o++){k.setAttribute("type",r=p[o]);
n=k.type!=="text";
if(n){k.value=c;
k.style.cssText="position:absolute;visibility:hidden;";
if(/^range$/.test(r)&&k.style.WebkitAppearance!==G){l.appendChild(k);
q=C.defaultView;
n=q.getComputedStyle&&q.getComputedStyle(k,null).WebkitAppearance!=="textfield"&&(k.offsetHeight!==0);
l.removeChild(k)
}else{if(/^(search|tel)$/.test(r)){}else{if(/^(url|email)$/.test(r)){n=k.checkValidity&&k.checkValidity()===false
}else{n=k.value!=c
}}}}P[p[o]]=!!n
}return P
})("search tel url email datetime date month week time datetime-local number range color".split(" "))
}for(var V in L){if(X(L,V)){S=V.toLowerCase();
W[S]=L[V]();
E.push((W[S]?"":"no-")+S)
}}W.input||b();
W.addTest=function(n,o){if(typeof n=="object"){for(var m in n){if(X(n,m)){W.addTest(m,n[m])
}}}else{n=n.toLowerCase();
if(W[n]!==G){return W
}o=typeof o=="function"?o():o;
if(typeof Y!=="undefined"&&Y){l.className+=" "+(o?"":"no-")+n
}W[n]=o
}return W
};
d("");
h=k=null;
(function(w,y){var s="3.7.0";
var p=w.html5||{};
var t=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i;
var o=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i;
var AC;
var u="_html5shiv";
var m=0;
var AA={};
var q;
(function(){try{var AF=y.createElement("a");
AF.innerHTML="<xyz></xyz>";
AC=("hidden" in AF);
q=AF.childNodes.length==1||(function(){(y.createElement)("a");
var AH=y.createDocumentFragment();
return(typeof AH.cloneNode=="undefined"||typeof AH.createDocumentFragment=="undefined"||typeof AH.createElement=="undefined")
}())
}catch(AG){AC=true;
q=true
}}());
function r(AF,AH){var AI=AF.createElement("p"),AG=AF.getElementsByTagName("head")[0]||AF.documentElement;
AI.innerHTML="x<style>"+AH+"</style>";
return AG.insertBefore(AI.lastChild,AG.firstChild)
}function x(){var AF=v.elements;
return typeof AF=="string"?AF.split(" "):AF
}function AB(AF){var AG=AA[AF[u]];
if(!AG){AG={};
m++;
AF[u]=m;
AA[m]=AG
}return AG
}function z(AI,AF,AH){if(!AF){AF=y
}if(q){return AF.createElement(AI)
}if(!AH){AH=AB(AF)
}var AG;
if(AH.cache[AI]){AG=AH.cache[AI].cloneNode()
}else{if(o.test(AI)){AG=(AH.cache[AI]=AH.createElem(AI)).cloneNode()
}else{AG=AH.createElem(AI)
}}return AG.canHaveChildren&&!t.test(AI)&&!AG.tagUrn?AH.frag.appendChild(AG):AG
}function AD(AH,AJ){if(!AH){AH=y
}if(q){return AH.createDocumentFragment()
}AJ=AJ||AB(AH);
var AK=AJ.frag.cloneNode(),AI=0,AG=x(),AF=AG.length;
for(;
AI<AF;
AI++){AK.createElement(AG[AI])
}return AK
}function AE(AF,AG){if(!AG.cache){AG.cache={};
AG.createElem=AF.createElement;
AG.createFrag=AF.createDocumentFragment;
AG.frag=AG.createFrag()
}AF.createElement=function(AH){if(!v.shivMethods){return AG.createElem(AH)
}return z(AH,AF,AG)
};
AF.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+x().join().replace(/[\w\-]+/g,function(AH){AG.createElem(AH);
AG.frag.createElement(AH);
return'c("'+AH+'")'
})+");return n}")(v,AG.frag)
}function n(AF){if(!AF){AF=y
}var AG=AB(AF);
if(v.shivCSS&&!AC&&!AG.hasCSS){AG.hasCSS=!!r(AF,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")
}if(!q){AE(AF,AG)
}return AF
}var v={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:s,shivCSS:(p.shivCSS!==false),supportsUnknownElements:q,shivMethods:(p.shivMethods!==false),type:"default",shivDocument:n,createElement:z,createDocumentFragment:AD};
w.html5=v;
n(y)
}(this,C));
W._version=i;
W._prefixes=J;
W._domPrefixes=j;
W._cssomPrefixes=f;
W.hasEvent=O;
W.testProp=function(m){return Z([m])
};
W.testAllProps=M;
W.testStyles=N;
W.prefixed=function(o,n,m){if(!n){return M(o,"pfx")
}else{return M(o,n,m)
}};
l.className=l.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(Y?" js "+E.join(" "):"");
return W
})(this,this.document);
(function(AD,AC,AB){function AA(A){return"[object Function]"==P.call(A)
}function Z(A){return"string"==typeof A
}function Y(){}function X(A){return !A||"loaded"==A||"complete"==A||"uninitialized"==A
}function W(){var A=O.shift();
M=1,A?A.t?R(function(){("c"==A.t?L.injectCss:L.injectJs)(A.s,0,A.a,A.x,A.e,1)
},0):(A(),W()):M=0
}function V(t,s,q,p,n,m,h){function g(a){if(!B&&X(b.readyState)&&(v.r=B=1,!M&&W(),b.onload=b.onreadystatechange=null,a)){"img"!=t&&R(function(){I.removeChild(b)
},50);
for(var c in D[s]){D[s].hasOwnProperty(c)&&D[s][c].onload()
}}}var h=h||L.errorTimeout,b=AC.createElement(t),B=0,A=0,v={t:q,s:s,e:n,a:m,x:h};
1===D[s]&&(A=1,D[s]=[]),"object"==t?b.data=s:(b.src=s,b.type=t),b.width=b.height="0",b.onerror=b.onload=b.onreadystatechange=function(){g.call(this,A)
},O.splice(p,0,v),"img"!=t&&(A||2===D[s]?(I.insertBefore(b,J?null:Q),R(g,h)):D[s].push(b))
}function U(B,A,h,g,e){return M=0,A=A||"j",Z(B)?V("c"==A?G:H,B,A,this.i++,h,g,e):(O.splice(this.i++,0,B),1==O.length&&W()),this
}function T(){var A=L;
return A.loader={load:U,i:0},A
}var S=AC.documentElement,R=AD.setTimeout,Q=AC.getElementsByTagName("script")[0],P={}.toString,O=[],M=0,K="MozAppearance" in S.style,J=K&&!!AC.createRange().compareNode,I=J?S:Q.parentNode,S=AD.opera&&"[object Opera]"==P.call(AD.opera),S=!!AC.attachEvent&&!S,H=K?"object":S?"script":"img",G=S?"script":H,F=Array.isArray||function(A){return"[object Array]"==P.call(A)
},E=[],D={},C={timeout:function(B,A){return A.length&&(B.timeout=A[0]),B
}},N,L;
L=function(c){function A(i){var i=i.split("!"),h=E.length,o=i.pop(),n=i.length,o={url:o,origUrl:o,prefixes:i},m,l,j;
for(l=0;
l<n;
l++){j=i[l].split("="),(m=C[j.shift()])&&(o=m(o,j))
}for(l=0;
l<h;
l++){o=E[l](o)
}return o
}function k(b,q,p,o,n){var m=A(b),l=m.autoCallback;
m.url.split(".").pop().split("?").shift(),m.bypass||(q&&(q=AA(q)?q:q[b]||q[o]||q[b.split("/").pop().split("?")[0]]),m.instead?m.instead(b,q,p,o,n):(D[m.url]?m.noexec=!0:D[m.url]=1,p.load(m.url,m.forceCSS||!m.forceJS&&"css"==m.url.split(".").pop().split("?").shift()?"c":AB,m.noexec,m.attrs,m.timeout),(AA(q)||AA(l))&&p.load(function(){T(),q&&q(m.origUrl,n,o),l&&l(m.origUrl,n,o),D[m.url]=2
})))
}function f(w,v){function u(b,h){if(b){if(Z(b)){h||(r=function(){var i=[].slice.call(arguments);
q.apply(this,i),p()
}),k(b,r,v,0,t)
}else{if(Object(b)===b){for(g in o=function(){var a=0,i;
for(i in b){b.hasOwnProperty(i)&&a++
}return a
}(),b){b.hasOwnProperty(g)&&(!h&&!--o&&(AA(r)?r=function(){var i=[].slice.call(arguments);
q.apply(this,i),p()
}:r[g]=function(i){return function(){var a=[].slice.call(arguments);
i&&i.apply(this,a),p()
}
}(q[g])),k(b[g],r,v,g,t))
}}}}else{!h&&p()
}}var t=!!w.test,s=w.load||w.both,r=w.callback||Y,q=r,p=w.complete||Y,o,g;
u(t?w.yep:w.nope,!!s),s&&u(s)
}var e,d,B=this.yepnope.loader;
if(Z(c)){k(c,0,B,0)
}else{if(F(c)){for(e=0;
e<c.length;
e++){d=c[e],Z(d)?k(d,0,B,0):F(d)?L(d):Object(d)===d&&f(d,B)
}}else{Object(c)===c&&f(c,B)
}}},L.addPrefix=function(B,A){C[B]=A
},L.addFilter=function(A){E.push(A)
},L.errorTimeout=10000,null==AC.readyState&&AC.addEventListener&&(AC.readyState="loading",AC.addEventListener("DOMContentLoaded",N=function(){AC.removeEventListener("DOMContentLoaded",N,0),AC.readyState="complete"
},0)),AD.yepnope=T(),AD.yepnope.executeStack=W,AD.yepnope.injectJs=function(p,n,m,h,g,f){var b=AC.createElement("script"),B,A,h=h||L.errorTimeout;
b.src=p;
for(A in m){b.setAttribute(A,m[A])
}n=f?W:n||Y,b.onreadystatechange=b.onload=function(){!B&&X(b.readyState)&&(B=1,n(),b.onload=b.onreadystatechange=null)
},R(function(){B||(B=1,n(1))
},h),g?b.onload():Q.parentNode.insertBefore(b,Q)
},AD.yepnope.injectCss=function(A,l,k,h,f,b){var h=AC.createElement("link"),B,l=b?W:l||Y;
h.href=A,h.rel="stylesheet",h.type="text/css";
for(B in k){h.setAttribute(B,k[B])
}f||(Q.parentNode.insertBefore(h,Q),R(l,0))
}
})(this,document);
Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))
};
(function(){var E;
var D=function(){};
var B=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"];
var C=B.length;
var A=(window.console=window.console||{});
while(C--){E=B[C];
if(!A[E]){A[E]=D
}}}());
jQuery(document).ready(function(B){var A={init:function(){B(".mox-top-navigation-links li > a").on("touchstart",function(C){if(B(this).parent("li").find("ul").length!=0){C.preventDefault();
A.showDropDown(B(this))
}})
},showDropDown:function(D){var C=D;
if(C.hasClass("touched")){var E=C?C.attr("href"):"#";
if(E){B(location).attr("href",E)
}}else{B("mox-top-navigation-links li > a").removeClass("touched");
C.addClass("touched")
}}};
A.init()
});