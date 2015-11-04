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
			
    $('.link_filtr').click(function(){
        //$('.link_filtr').not($(this)).removeClass('open');
        $('.setting_filtr').not($(this).next('.setting_filtr')).slideDown(500);
        $(this).next('.setting_filtr').slideToggle(500);
        //$(this).toggleClass('open');
    });
    
    // перемотка
        $('.top_menu a').click(function(event) {
            event.preventDefault();
        });
    
    //появление кнопки "Добавить отзыв"
    $('#add_reviews_tab').css('display', 'none');
    $('.add_reviews').on('click', function(e) {
        e.preventDefault();
        $('#tabs li').removeClass('active');
        $('#tab li').removeClass('active');
        $('#add_reviews_tab').css('display', 'block').addClass('active');
        $('#tab li').eq(2).addClass('active');
    });
    
    // видео
    jQuery('.video').click(function(){
        var _this = $(this);
        var vcode = $(this).attr('data-tube');
        var width = '100%';
        var height = '100%';
        
        $('.wrap_mini_img').find('li') .removeClass('active')
        _this.parent('li').addClass('active');

        //$(this).css('opacity', '0');
        $(this).parent().parent().parent().find('.placeholder').css('opacity', '0');
        $(this).parent().parent().parent().find('.resp_vid_hold').show();

    _this.parent().parent().parent().find('.resp_video').html('<iframe width="'+ width + '"height="' + height + '"src="https://www.youtube.com/embed/' + vcode + '?autoplay=1&loop=1&rel=0&wmode=transparent" frameborder="0" allowfullscreen wmode="Opaque"></iframe>');

        return false;

    });
    
    // активный таб в  шапке слайдера
    $('.menu_slider a').on('click', function(){
        $('.menu_slider a').removeClass('active');
        $(this).addClass('active');
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

function gotocoord(val){
    $("html,body").stop(true, true).animate({'scrollTop': val-40}, 500);
}

function gotoblock(id){
    var obj = $('#'+id);
    var destination = obj.offset().top;
    $("html,body").stop(true, true).animate({'scrollTop': destination-60}, 500);
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



