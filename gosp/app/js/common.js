$(document).ready(function(){
	
	
	// popup 2
    $('.show_search').click(function(e) {
         e.preventDefault();
        $('.overlay, .search').fadeIn(150);
        $('.search').center();
	});
	
	// popup 2
    $('.show_visit').click(function(e) {
         e.preventDefault();
        $('.overlay, .visit').fadeIn(150);
        $('.visit').center();
	});
	
	// popup 2
    $('.show_enter').click(function(e) {
         e.preventDefault();
        $('.overlay, .enter').fadeIn(150);
        $('.enter').center();
	});
	
	// popup 2
    $('.show_thank_you').click(function(e) {
         e.preventDefault();
        $('.overlay, .thank_you').fadeIn(150);
        $('.thank_you').center();
	});
	
	$('.close_popup').click(function() {
		$('.overlay, .popup').fadeOut(150);
	});
	
	
        
        $('#header').fixedHeader()
        $(window).on('scroll resize', function(){
		$('#header').fixedHeader()
	});
	
	
	
	$('.ul_4 li').matchHeight();
        
	 $('.for_mask').mask('+7 (000) 000-00-00');
	

 
 
 
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

jQuery.fn.fixedHeader = function () {
      var window_width = $(window).width();
        if ($(window).scrollTop() >= 5 && window_width > 699) {
               this.addClass('bg_header');
            }
            else {
               this.removeClass('bg_header');
     } 
    return this;
}


  




  
 

