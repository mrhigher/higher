    $(document).ready(function(){
    var $arrows = $('.arrows');
    var $next = $arrows.children(".slick-next");    
    var $prev = $arrows.children(".slick-prev");  
     var slick = $('.slick_slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
        slickGoTo:2,
    /*    appendArrows: $arrows,
        centerMode: true,
        infinite: true,
        centerPadding: '60px',
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: true */
                 /* responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ] */
    });
      $('.slick-next').on('click', function (e) {
        var i = $next.index( this )
       // slick.eq(i).slickNext();
        $('.slick_slider').eq(i).slick('slickNext');
    });
    $('.slick-prev').on('click', function (e) {
        var i = $prev.index( this )
     //    $('.slick_slider').eq(i).slick('slickPrev');
        // slick.eq(i).slickPrev();
         slick.slick('slickPrev');
    });
 
     
    });