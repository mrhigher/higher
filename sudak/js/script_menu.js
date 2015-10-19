
var ww = document.body.clientWidth;

$(document).ready(function() {
    
    $(".catalogmenu li").each(function() {
        if($(this).find('ul').length) {
          $(this).toggleClass('hasDD');
        }
    });
    
	$(".catalogmenu li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
        
        $(".catalogmenu li ul li").on('hover',function() {
             //$(this).find('.block_menu_1').css('background','red');
        })
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".catalogmenu").toggle();
	});
	adjustMenu();
    
    /*******************************************************/

    
})

var adjustMenu = function() {
    
    
$(window).bind('orientationchange', function() {
     
	location.reload();
});

        checkSize();
    
      $(window).resize(checkSize);
      function checkSize(){
        if ($(".catalogmenu").css("z-index") == "2" ){
            
            $(".catalogmenucolumn").unbind('click').bind('click', function(e) {
			e.preventDefault();
                        $(".catalogmenu").toggle();
            });
            
        }   else {
            $('.catalogmenu').show();
            $(".catalogmenu li").removeClass("hover");
//		$(".catalogmenu li a").unbind('click');
//		$(".catalogmenu li").unbind('mouseleave').bind('mouseenter mouseleave', function() {
//                    $(this).toggleClass('hover');
//		});
        
          
            }
        }
    
          
}

