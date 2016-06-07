jQuery(document).ready(function( $ ) {
	//console.log("Ready to go");
	
	/* MAIN NAVIGATION BUTTON ACTIONS */
	
	$('body').on('click', 'button#main-nav-btn' ,function(){
		
		var nav_h = $('#main-nav').find('.nav-wrapper').outerHeight();
		
		//console.log(nav_h);
			
		if ($('#main-nav').hasClass('nav-closed')) {
			
			$('#main-nav').animate({height: nav_h+"px"}, 500, function(){
				$('#main-nav').removeClass('nav-closed').addClass('nav-open').removeAttr('style');	
			});
			
		} else {
				
			$('#main-nav').animate({height: "0px"}, 500, function(){
				$('#main-nav').removeClass('nav-open').addClass('nav-closed').removeAttr('style');	
			});
			
		}
		
		return false;	
	});

	
	$('body').on('click', 'button#close-nav-btn' ,function(){
		
		if ($('#main-nav').hasClass('nav-open')) {
			$('#main-nav').animate({height: "0px"}, 500, function(){
				$('#main-nav').removeClass('nav-open').addClass('nav-closed').removeAttr('style');	
			});
		}
			
		return false;	
	});
	
	$('body').on('click', '.slider-nav-btns button' ,function(){
		
		var direct = $(this).data().direction;
		var this_btn = $(this);
		var slider_outer_w = $('.artists-slider-outer').outerWidth();
		var slider_w = $('.artists-slider-inner').outerWidth();
		var slider_pos = parseInt($('.artists-slider-inner').css('left'));
		//console.log("Calculation = "+ (slider_w - slider_outer_w) );
		
		if (direct == "right") {
			
			$('.artists-slider-inner').animate({left: -(slider_w - slider_outer_w) + 'px'}, 500, function(){
				$(this_btn).removeClass('show').addClass('hidden');
				$(this_btn).siblings().removeClass('hidden').addClass('show');
			});	
				
		}
		
		if (direct == "left") {
			
			$('.artists-slider-inner').animate({left: '0px'}, 500, function(){
				$(this_btn).removeClass('show').addClass('hidden');	
				$(this_btn).siblings().removeClass('hidden').addClass('show');
			});	
		}
				
		return false;	
	});

});