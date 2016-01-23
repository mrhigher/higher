$(document).ready(function(){
	
//	$('#top_slider').slick({
//		autoplay: true,
//		arrows: false,
//		variableWidth: true,
//		slidesToShow: 4,
//		autoplaySpeed: 4500
//		//rows: 3
//	})
	
	
	
	$('.ul_4 li').matchHeight();
	
//	$('.block_news').slick({
//		autoplay: true,
//		arrows: false,
//		variableWidth: true,
//		slidesToShow: 3,
//		autoplaySpeed: 4500
//		//rows: 3
//	})

	
	/*$('.block_news').bxSlider({
		auto: true,
		controls: false,
		speed: 300,
		pager:false,
		slideWidth: 329,
		maxSlides: 6
		//slideWidth: 480
	}); */

   
//                topslider = $('#top_slider').bxSlider({
//		auto: true,
//		controls: false,
//		speed: 300,
//		slideWidth: 480,
//		maxSlides: 6
//		//slideWidth: 480
//	});    
 

                
 

});

/***/


$(document).ready(function () {
		// initiates gallery slider			
		var TSsettings = function() {
			var TSsettings1 = {
                            controls: false,
                            arrows: false,
                  	    variableWidth: true,
                            auto:true,
                            slidesToShow: 3,
                            minSlides: 3,
                            maxSlides: 4,
                            moveSlides: 1,
                            startSlide: 0,
                            mode: 'vertical',
                            
			};
			var TSsettings2 = {
                            controls: false,
                            arrows: false,
                  	    variableWidth: true,
                            auto:true,
                            slidesToShow: 3,
                            maxSlides: 10,
                            moveSlides: 1,
                            startSlide: 0,
                            slideWidth: 480
                           
                 
			};
			return ($(window).width()<530) ? TSsettings1 : TSsettings2;
		}

		var TSSlider;

		function TStourLandingScript() {
			TSSlider.reloadSlider(TSsettings());
		}

		TSSlider = $('#top_slider').bxSlider(TSsettings());
		$(window).resize(TStourLandingScript);

		
	});
        
        
        $(document).ready(function () {
		// initiates news slider			
		var BNsettings = function() {
			var BNsettings1 = {
                            pager:false,
                            controls: false,
                            arrows: false,
                  	    variableWidth: true,
                            auto:true,
                            slidesToShow: 3,
                            minSlides: 3,
                            maxSlides: 4,
                            moveSlides: 1,
                            startSlide: 0,
                            mode: 'vertical',
                            
			};
			var BNsettings2 = {
                            pager:false,
                            controls: false,
                            arrows: false,
                  	    variableWidth: true,
                            auto:true,
                            slidesToShow: 3,
                            maxSlides: 10,
                            moveSlides: 1,
                            startSlide: 0,
                            slideWidth: 329
			};
			return ($(window).width()<530) ? BNsettings1 : BNsettings2;
		}

		var BNSlider;

		function BNtourLandingScript() {
			BNSlider.reloadSlider(BNsettings());
		}

		BNSlider = $('.block_news').bxSlider(BNsettings());
		$(window).resize(BNtourLandingScript);

		
	});
  
 

