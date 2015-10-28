jQuery(document).ready(function() {
 
    var slider = $('#wrap_for_bx_1 .bxslider').show().bxSlider({
        mode: 'fade',
        pager: false,
        controls: false,
        auto:true,
    });

    $('.slider-next1').click(function(){
      slider.goToSlide(1);
      return false;
    });
    $('.slider-next2').click(function(){
      slider.goToSlide(2);
      return false;
    });
    $('.slider-next3').click(function(){
      slider.goToSlide(3);
      return false;
    });
    $('.slider-next4').click(function(){
      slider.goToSlide(4);
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
		$('.overlay, .order_btn, .order_window, .buy_click_1').fadeOut(500);
	});
    
    $('.overlay').click(function() {
		$('.overlay, .order_btn, .order_window, .buy_click_1').fadeOut(500);
	});
    
    // popup 2
    $('.show_order_window').click(function(e) {
         e.preventDefault();
        $('.overlay, .order_window').fadeIn(500);
        $('.order_window').center();
	});
    
    // popup 3
    $('.show_buy_click_1').click(function(e) {
        e.preventDefault();
        $('.overlay, .buy_click_1').fadeIn(500);
         $('.buy_click_1').center();
	});
    
   
    
    // slider
    $("#example_id").ionRangeSlider({
        grid: false,
        min: 0,
        max: 24,
        from: 0,
        to: 24,
        type: 'double',
        hide_min_max: true
        
    });
    
    // accordeon
    $('.setting_filtr').css({'display':'none'});
			
    $('.link_filtr').click(function(){
        //$('.link_filtr').not($(this)).removeClass('open');
        $('.setting_filtr').not($(this).next('.setting_filtr')).slideUp(500);
        $(this).next('.setting_filtr').slideToggle(500);
        //$(this).toggleClass('open');
    });
    
});

$(window).load(function() {
  $('.flexgall').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 10,
    controlNav: false,
    prevText: "",           
    nextText: "", 
  });
    
    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 82,
        itemMargin: 5,
        asNavFor: '#slider',
        prevText: "",           
        nextText: ""
    });
 
    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        directionNav: false,
        slideshow: false,
        sync: "#carousel",
        prevText: "",           
        nextText: ""
    });
 
  
});

$(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
        $(".order_btn, .overlay, .order_window").fadeOut(500);
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

function positionTop2() {
    var heightPopup = $('.order_window').outerHeight() / 2;
    $('.order_window').css({'marginTop': '-' +  heightPopup + 'px'});
}

function positionWidth2() {
    var widthPopup = $('.order_window').outerWidth() / 2;
    $('.order_window').css({'marginLeft': '-' +  widthPopup + 'px'});
}

function positionTop3() {
    var heightPopup = $('.buy_click_1').outerHeight() / 2;
    $('.buy_click_1').css({'marginTop': '-' +  heightPopup + 'px'});
}

function positionWidth3() {
    var widthPopup = $('.buy_click_1').outerWidth() / 2;
    $('.buy_click_1').css({'marginLeft': '-' +  widthPopup + 'px'});
}

$('.products_best').on('mouseenter',function() {
    $(this).prev('.menu_best').css('z-index','450')
});
$('.products_best').on('mouseleave',function() {
    $(this).prev('.menu_best').css('z-index','1')
});


jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
                                                $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
}



