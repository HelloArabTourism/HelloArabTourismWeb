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





/*=== table ===*/
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="number" class="form-control" name="price" id="price"></td>'+
            '<td><input type="text" class="form-control" name="discount" id="discount"></td>'+
            '<td><input type="text" class="form-control" name="includes" id="includes"></td>'+
            '<td><input type="text" class="form-control" name="picture" id="picture"></td>'+
            '<td><textarea type="text" class="form-control" name="phone" rows="3"></textarea></td>' +
            '<td><input type="date" class="form-control" name="startDate" id="startDate"></td>' +
            '<td><input type="number" class="form-control" name="packageStatus" id="packageStatus"></td>'+
                        '<td><input type="text" class="form-control" name="addby" id="addby"></td>'+

			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});

