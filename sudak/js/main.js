jQuery(document).ready(function() {
 
    var slider = $('#wrap_for_bx_1 .bxslider').bxSlider({
        mode: 'fade',
        pager: false,
        controls: false
    });

    $('.slider-next1').click(function(){
      slider.goToNextSlide(1);
      return false;
    });
    $('.slider-next2').click(function(){
      slider.goToNextSlide(2);
      return false;
    });
    $('.slider-next3').click(function(){
      slider.goToNextSlide(3);
      return false;
    });
    $('.slider-next4').click(function(){
      slider.goToNextSlide(4);
      return false;
    });
    
    // popup
    $('.show_popup').click(function(e) {
        e.preventDefault();
        $('.overlay, .order_btn').fadeIn(500);
		positionTop();
        positionWidth();
	});
	
	$('.close_popup').click(function() {
		$('.overlay, .order_btn').fadeOut(500);
	});
    
    $('.overlay').click(function() {
		$('.overlay, .order_btn').fadeOut(500);
	});
    
    // slider
    $("#example_id").ionRangeSlider({
        min: 0,
        max: 10000,
        from: 1000,
        to: 9000,
        type: 'double',
        prefix: "$",
        grid: true,
        grid_num: 10
    });
    
});

$(window).load(function() {
  $('#flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 10,
//      minItems: 3,
//    maxItems: 4
  });
});

$(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
        $(".order_btn, .overlay").fadeOut(500);
    }
});
   
	
function positionTop() {
    var heightPopup = $('.order_btn').outerHeight() / 2;
    $('.order_btn').css({'marginTop': '-' +  heightPopup + 'px'});
}

function positionWidth() {
    var widthPopup = $('.order_btn').outerWidth() / 2;
    $('.order_btn').css({'marginLeft': '-' +  widthPopup + 'px'});
}

