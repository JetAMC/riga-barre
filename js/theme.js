/************** Back to top button **************/

$(window).scroll(function(){
    if ($(this).scrollTop() > 1) {
        $('#buttonTop').fadeIn();
        $(".header").css({"position": "fixed", "opacity": "0.9"});
        $(".header__logo img").css({"width": "150px"});
    } else {
        $('#buttonTop').fadeOut();
        $(".header").css({"position": "relative", "opacity": "1"});
        $(".header__logo img").css({"width": "200px"});
    }
});

/************** Pop up **************/
$(".default-form").click( function() {
    $(".bg").fadeIn(500);
    $(".pop-up").fadeIn(500);
 });
 $(".bg, .close").click( function() {
    $(".bg").fadeOut(400);
    $(".pop-up").fadeOut(400);
 });






// $('#single, #four, #eight, #twelve, #private').click(function(event){
//     $('.schedule__active').removeClass('schedule__active');
//     $(this).addClass('schedule__active');     
//     if ($("#single").hasClass("schedule__active")) {
//         $("#four-form, #eight-form, #twelve-form, #private-form").hide();
//         $("#single-form").fadeIn();
//     }
//     if ($("#four").hasClass("schedule__active")) {
//         $("#single-form, #eight-form, #twelve-form, #private-form").hide();
//         $("#four-form").fadeIn();
//     }
//     if ($("#eight").hasClass("schedule__active")) {
//         $("#single-form, #four-form, #twelve-form, #private-form").hide();
//         $("#eight-form").fadeIn();
//     }
//     if ($("#twelve").hasClass("schedule__active")) {
//         $("#single-form, #four-form, #eight-form, #private-form").hide();
//         $("#twelve-form").fadeIn();
//     }
//     if ($("#private").hasClass("schedule__active")) {
//         $("#single-form, #four-form, #eight-form, #twelve-form").hide();
//         $("#private-form").fadeIn();
//     }
// });