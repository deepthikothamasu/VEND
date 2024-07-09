/*-----------------------------------------------------------------------------------
/*
/* Custom JS
/*
-----------------------------------------------------------------------------------*/
	  
/* Start Document */
jQuery(document).ready(function() {

        // Sticky-navigation
        $(document).ready(function () {
            $('.sticky-navigation').waypoint('sticky');
        });

			// Camera slider			
			jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: false,
				pagination: false,
				fx: 'mosaicSpiral',
				height: '38%'
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
		

		
		
		
	 // Testimonials	
     $('.testimonials-slider').bxSlider({
			slideWidth: 940,
			minSlides: 1,
			maxSlides: 1,
			slideMargin: 32,
			auto: true,
			autoControls: true
		  });
		  
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
	
    //Ajax/PHP Contact Form	
    $(document).ready(function(){
        $("#submit").click(function(){
            var data = $("#contact").serialize();
            $.ajax({
                type	: "POST",
                url 	: "ajax/sendemail.php",
                data 	: data,
                success : function(q)
					{
                    $("#ContactFormDiv").html(q);
					}
            	});
            return false;
        });
    });
		
		// Button Up
		var btnUp = $('<div/>', {'class':'btntoTop'});
		btnUp.appendTo('body');
		$(document)
			.on('click', '.btntoTop', function() {
				$('html, body').animate({
					scrollTop: 0
				}, 700);
			});
			
		$(window)
			.on('scroll', function() {
				if ($(this).scrollTop() > 200)
					$('.btntoTop').addClass('active');
				else
					$('.btntoTop').removeClass('active');
			});		

/* End Document */
});