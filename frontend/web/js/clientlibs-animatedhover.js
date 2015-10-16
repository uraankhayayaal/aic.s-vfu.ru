jQuery(document).ready(function(B){var A={init:function(){var C=A;
C.evt_handlers()
},evt_handlers:function(){B(".mox-animated-pods a").on("touchstart",A.showPodDetail)
},showPodDetail:function(E){E.preventDefault();
var C=B(this);
var F=C.find("figure");
if(F.hasClass("touched")){var D=C?C.attr("href"):"#";
if(D){A.goToLink(D)
}}else{A.removeTouchedClass();
F.addClass("touched")
}},goToLink:function(C){B(location).attr("href",C)
},removeTouchedClass:function(){B(".mox-animated-pods a figure").removeClass("touched")
}};
A.init()
});