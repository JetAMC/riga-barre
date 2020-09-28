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
 $(".question-form").click( function() {
    $(".bg").fadeIn(500);
    $(".pop-up-question").fadeIn(500);
 });
 $(".bg, .close").click( function() {
    $(".bg").fadeOut(400);
    $(".pop-up").fadeOut(400);
    $(".pop-up-question").fadeOut(400);
 });

 
/************** Header mobile menu **************/
function openNav() {
  document.getElementById("header__menu").style.width = "100%";
}
  
function closeNav() {
  document.getElementById("header__menu").style.width = "0%";
} 
