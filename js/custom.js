/*====================================
Services
====================================*/
/*When document get ready*/
$(function () {
    /*new animatio on scroll*/
    new WOW().init();
});

/*====================================
packages
====================================*/
/*activation code for magnific popup*/
$(function () {
    $("#packages").magnificPopup({
        delegate: 'a', //child items selector, by clicking on it popup will open
        type: 'image',
        // other options
        /*Gallary object*/
        gallery: {
            enabled: true
        }

    });

});

/*====================================
Activites
======================================*/
$(".filter-button").click(function () {
    var value = $(this).attr('data-filter');

    if (value == "all") {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    } else {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.' + value).hide('3000');
        $('.filter').filter('.' + value).show('3000');

    }
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
