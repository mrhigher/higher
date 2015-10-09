jQuery(document).ready(function() {
    // меню

    var ww = document.body.clientWidth;

    $(document).ready(function() {
        $(".nav li a").each(function() {
            if ($(this).next().length > 0) {
                $(this).addClass("parent");
            };
        })

        $(".toggleMenu").click(function(e) {
            e.preventDefault();
            $(this).toggleClass("active");
            $(".nav").toggle();
        });
        adjustMenu();
    })

    $(window).bind('resize orientationchange', function() {
        ww = document.body.clientWidth;
        adjustMenu();
    });

    var adjustMenu = function() {
        if (ww < 734) {
            $(".toggleMenu").css("display", "inline-block");
            if (!$(".toggleMenu").hasClass("active")) {
                $(".nav").hide();
            } else {
                $(".nav").show();
            }
            $(".nav li").unbind('mouseenter mouseleave');
            $(".nav li a.parent").unbind('click').bind('click', function(e) {
                // must be attached to anchor element to prevent bubbling
                e.preventDefault();
                $('.hover').not($(this).parent("li")).removeClass('hover ico_top');
                $(this).parent("li").toggleClass("hover ico_top");
            });
        } 
        else if (ww >= 734) {
            $(".toggleMenu").css("display", "none");
            $(".nav").show();
            $(".nav li").removeClass("hover");
            $(".nav li a").unbind('click');
            $(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
                // must be attached to li so that mouseleave is not triggered when hover over submenu
                $(this).toggleClass('hover');
            });
        }
    }
    
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
    
    $('#bx_2 .bxslider').bxSlider({
        minSlides: 3,
        maxSlides: 5,
//        slideMargin: 60
        pager: false
    });
    
});

