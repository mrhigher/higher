$(function(){
        
 var slick = $('.slick_slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	centerMode: true,
	variableWidth: true,
	dots:true
});
	
	/* slick_slider end */           
	$('.phone_mask').mask('+7 (000) 000-00-00');

	/*** menu ***/
	adjustMenu();
		 
});

$(document).mouseup(function (e) {
	var container = $(".flexnav, .close_menu");

	if (!container.is(e.target) // if the target of the click isn't the container...
		&& container.has(e.target).length === 0) // ... nor a descendant of the container
	{
		$('.flexnav-show').removeClass('flexnav-show');

	}
});

$(document).keydown(function(e) {
	 // ESCAPE key pressed
	 if (e.keyCode == 27) {
		 $(".flexnav-show").removeClass("flexnav-show");
	 }
});
    
  
		//$.pixlayout({clip: true, src: "maket.png", show:true, center:true, top:0, left:0, pervious: false});

var adjustMenu = function() {
    $(".flexnav li").each(function() {
        if($(this).find('ul').length) {
            $(this).toggleClass('item-with-ul');
        }
    });
    
$(window).bind('orientationchange', function() {    
	location.reload();
});
        checkSize();   
      $(window).resize(checkSize);
      function checkSize(){
		  var flexnav = $(".flexnav");
		  $('.touch-with').unbind('click').bind('click',function(e) {
			  e.preventDefault();
			  $(this).prev().toggleClass('show_with');
		  })
		  flexnav.removeClass('flexnav-show');
		  if (flexnav.css("z-index") == "2" ){
			  $(".touch-press").unbind('click').bind('click', function(e) {
				  e.preventDefault();
				  $(".flexnav").removeClass('flexnav-show');
			  });
		  } else {
			  $(".touch-press").unbind('click').bind('click', function(e) {
				  e.preventDefault();
				  flexnav.toggleClass('flexnav-show');
			  });
		  }
	  }   
}