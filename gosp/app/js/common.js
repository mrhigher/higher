$(document).ready(function(){
	
//	$('#top_slider').slick({
//		autoplay: true,
//		arrows: false,
//		variableWidth: true,
//		slidesToShow: 4,
//		autoplaySpeed: 4500
//		//rows: 3
//	})
	
//	var width_thank_you = $('.thank_you').innerWidth();
//	var height_thank_you = $('.thank_you').innerHeight();
//	
//	$('.show_popup_thank_you').click(function() {
//		var elem_popup = $('.thank_you').show();
//		elem_popup.css({
//			marginLeft: '-' + width_thank_you/2 + 'px',
//			marginTop: '-' + height_thank_you/2 + 'px'
//		});
//		
//	});
	
	// popup 2
    $('.show_search').click(function(e) {
         e.preventDefault();
        $('.overlay, .search').fadeIn(500);
        $('.search').center();
	});
	
	// popup 2
    $('.show_visit').click(function(e) {
         e.preventDefault();
        $('.overlay, .visit').fadeIn(500);
        $('.visit').center();
	});
	
	// popup 2
    $('.show_enter').click(function(e) {
         e.preventDefault();
        $('.overlay, .enter').fadeIn(500);
        $('.enter').center();
	});
	
	// popup 2
    $('.show_thank_you').click(function(e) {
         e.preventDefault();
        $('.overlay, .thank_you').fadeIn(500);
        $('.thank_you').center();
	});
	
	$('.close_popup').click(function() {
		$('.overlay, .popup').fadeOut(500);
	});
	
	
	
	
	
	$('.ul_4 li').matchHeight();
        
	 $('.for_mask').mask('+7 (000) 000-00-00');
	
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
 
 
 
function autoPlayVideo(vcode, width, height){
   "use strict";
   $("#videoContainer").html('<iframe width="'+width+'" height="'+height+'" src="https://www.youtube.com/embed/'+vcode+'?autoplay=1&loop=1&rel=0&wmode=transparent" frameborder="0" allowfullscreen wmode="Opaque"></iframe>');
}

jQuery('.vid_treiler ._face, .vid_treiler .play_ic').click(function(){
    $('.vid_treiler .resp_video').show();
    $('.vid_treiler ._face').hide();
   autoPlayVideo('kDyJN7qQETA','100%','100%');
   return false;
});


                
 

});

/***/


$(document).ready(function () {
		// initiates gallery slider			
		var TSsettings = function() {
			var TSsettings1 = {
                            infiniteLoop: true,
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
                            infiniteLoop: true,
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

$(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
        $(".popup, .overlay").fadeOut(500);
    }
});

 $(document).mouseup(function (e)
    {
        var container = $(".popup");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $(".popup, .overlay").fadeOut(500);
        }
    });
        

jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
                                                $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
}

  
 

