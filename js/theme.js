/************** Back to top button **************/

$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('#buttonTop').fadeIn();
        $(".header").css({"position": "fixed", "opacity": "0.9"});
    } else {
        $('#buttonTop').fadeOut();
        $(".header").css({"position": "relative", "opacity": "1"});
    }
});