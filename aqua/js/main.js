    $(document).ready(function(){
    var $arrows = $('.arrows');
    var $next = $arrows.children(".slick-next");    
    var $prev = $arrows.children(".slick-prev");  
     var slick = $('.slick_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
    });
      $('.slick-next').on('click', function (e) {
       slick.slick('slickNext');
    });
    $('.slick-prev').on('click', function (e) {
        slick.slick('slickPrev');
    });
 
     
    });