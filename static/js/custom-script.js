//For navigation
		$('nav > ul > li').has('ul').addClass('has_dd');
		 $('nav > ul > li > a').click(function(){
            if($(window).width() < 992)
                {
           $(this).parent().find('.megamenu').slideToggle();
            $(this).parent().siblings().find('.megamenu').slideUp();
            }
			$(this).parent().addClass('active');
			$(this).parent().siblings().removeClass('active')
		})
	// For menu-------------------             
	$('.menu a, span.close').click(function(){
    $('body').toggleClass('menu-open');
	});

		
		

