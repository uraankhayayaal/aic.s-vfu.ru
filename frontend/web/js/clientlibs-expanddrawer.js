jQuery(document).ready(function(A){A(".caratoggle").on("click",function(B){B.preventDefault();
A(".top-drawer").toggleClass("is-visible");
A(".icon-arrows-gt").removeClass("icon-arrows-gt").addClass("icon-arrows-lt");
if(A(".top-drawer").is(".is-visible")){A(".icon-arrows-lt").removeClass("icon-arrows-lt").addClass("icon-arrows-gt")
}})
});