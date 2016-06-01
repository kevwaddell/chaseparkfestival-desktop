jQuery(document).ready(function( $ ) {
	//console.log("Ready to go");
	
	/* MAIN NAVIGATION BUTTON ACTIONS */
	
	$('body').on('click', 'button#main-nav-btn' ,function(){
		
		var nav_h = $('#main-nav').find('.nav-wrapper').outerHeight();
		
		console.log(nav_h);
			
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

});