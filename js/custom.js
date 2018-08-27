/*====================================
Services
====================================*/
/*When document get ready*/
$(function () {
    /*new animatio on scroll*/
    new WOW().init();
});



/*====================================
Team
======================================*/
$(function () {
    $("#team-members").owlCarousel({
        items: 3,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true
    });

});
/*====================================================
                        TESTIMONIALS
====================================================*/
$(function () {

    $("#customers-testimonials").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true
    });
});


/*==Opt in ===*/
$(function(){
    /*Cache the window object*/
    var $window = $(window);
    // Parallax background effect
    $('section[data-type="background"]').each(function(){
        
        var $bgobj = $(this); //assigning the object
        
        $(window).scroll(function(){
            //scroll the background ar var speed
            //the yPos is a negtive value because we're scrolling it UP!
            
            
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            
            //Put together our final background position
            var coords = '50% '+ yPos + 'px';
            //Move the background
            $bgobj.css({backgroundPosition:coords});
        }); //end window scroll
        
    });
    
    
    
});
/*====================================================
                        NAVIGATION
====================================================*/
// Show/Hide transparent black navigation
$(function () {

    $(window).scroll(function () {

        if ($(this).scrollTop() < 50) {
            // hide nav
            $("nav").removeClass("vesco-top-nav");
            $("#back-to-top").fadeOut();

        } else {
            // show nav
            $("nav").addClass("vesco-top-nav");
            $("#back-to-top").fadeIn();
        }
    });
});
// Smooth scrolling
$(function () {

    $("a.smooth-scroll").click(function (event) {

        event.preventDefault();

        // get/return id like #about, #work, #team and etc
        var section = $(this).attr("href");

        $('html, body').animate({
            scrollTop: $(section).offset().top - 64
        }, 1250, "easeInOutExpo");
    });
});

// Close mobile menu on click
$(function(){
    
    $(".navbar-collapse ul li a").on("click touch", function(){
       
        $(".navbar-toggle").click();
    });
});







