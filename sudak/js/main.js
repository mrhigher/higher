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
    
    // bx card
    
    $('#bx_for_card .bxslider').bxSlider({
      pagerCustom: '#bx-pager'
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
        grid: false,
        min: 0,
        max: 24,
        from: 0,
        to: 24,
        type: 'double',
        hide_min_max: true
        
    });
    
    //range_price*****************
    var $range_price = $('#price_filtr'),
    $input = $('#price_input_from'),
    instance_price,
    min_price = 0,
    max_price = 20000;
    $range_price.ionRangeSlider({
        min: 100,
        max: 20000,
        from: 100,
        to: 10500,
        step: 100,
        type: 'double',
        hide_min_max: true,
       //prefix: "",
       //  input_values_separator: ':',
        grid: false
    });
    
    $range_price.on("change", function () {
        var $this = $(this);
        $('#price_input_from').val($this.data("from"));
        $('#price_input_to').val($this.data("to"));
    });
    instance_price = $range_price.data("ionRangeSlider");

    $input.on("change keyup", function () {
    var val = $(this).prop("value");
    
    // validate
    if (val < min_price) {
        val = min_price;
    } else if (val > max_price) {
        val = max_price;
    }
    instance_price.update({
        from: val
    });
});
     //range_price***************** end
   
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

$('.products_best').on('mouseenter',function() {
    $(this).prev('.menu_best').css('z-index','450')
});
$('.products_best').on('mouseleave',function() {
    $(this).prev('.menu_best').css('z-index','1')
});






