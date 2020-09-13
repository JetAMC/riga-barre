/************** Back to top button **************/

$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('#buttonTop').fadeIn();
        // $(".header").css({"position": "fixed", "opacity": "0.9"});
    } else {
        $('#buttonTop').fadeOut();
        // $(".header").css({"position": "relative", "opacity": "1"});
    }
});



// const singleTraining = document.getElementById("single");
// const fourTraining = document.getElementById("four");
// const eightTraining = document.getElementById("eight");
// const twelveTraining = document.getElementById("twelve");
// const privateTraining = document.getElementById("private");

// const trainingArray = [singleTraining, fourTraining, eightTraining, twelveTraining, privateTraining];

// function myFunction() {
//     eightTraining.classList.toggle("active");

//     for (const element of trainingArray) {
//         if (element.classList.contains("active")) {
//             console.log(true);
//         }
//     }
// }




$('#single, #four, #eight, #twelve, #private').click(function(event){
    $('.active').removeClass('active');
    $(this).addClass('active');     
    if ($("#single").hasClass("active")) {
        $("#four-form, #eight-form, #twelve-form, #private-form").hide();
        $("#single-form").fadeIn();
    }
    if ($("#four").hasClass("active")) {
        $("#single-form, #eight-form, #twelve-form, #private-form").hide();
        $("#four-form").fadeIn();
    }
    if ($("#eight").hasClass("active")) {
        $("#single-form, #four-form, #twelve-form, #private-form").hide();
        $("#eight-form").fadeIn();
    }
    if ($("#twelve").hasClass("active")) {
        $("#single-form, #four-forme, #eight-form, #private-form").hide();
        $("#twelve-form").fadeIn();
    }
    if ($("#private").hasClass("active")) {
        $("#single-form, #four-form, #eight-form, #twelve-form").hide();
        $("#private-form").fadeIn();
    }
});