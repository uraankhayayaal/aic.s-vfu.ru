$(document).ready(function(){
    var obj = $('.mox-side-navigation-links');
    var scrollcontent = $('.scrollcontent');
    var offset = obj.offset();
    var topOffset = offset.top;
    var leftOffset = offset.left;
    var rightOffset = offset.right;
    var widthOffset = offset.width;
    var marginTop = obj.css("marginTop");
    var marginLeft = obj.css("marginLeft");

    $(window).scroll(function() {
    var scrollTop = $(window).scrollTop();

        if (scrollTop >= topOffset){
            obj.css({
                left: leftOffset - $(window).scrollLeft(),
                //width: '33.33333333%',
            });
            obj.css({
                marginTop: 0,
                top: 50,
                //marginLeft: leftOffset,
                position: 'fixed',                
            });
            scrollcontent.css({
                marginLeft: '25%',
            });
        }

        if (scrollTop < topOffset){

            obj.css({
                marginTop: marginTop,
                marginLeft: marginLeft,
                position: 'relative',
                left: 0,
                top: 0,
                //width: widthOffset,
            });
            scrollcontent.css({
                marginLeft: '0%',
            });
        }
    });
});