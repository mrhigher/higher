
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
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".catalogmenu").toggle();
	});
	adjustMenu();
    
    /*******************************************************/
    if(ww < 1022) {
//        $('.menu_left h3').mouseenter(function() {
//        //    $('.catalogmenu').css('display', 'block');
//        });
//         $('.menu_left').mouseenter(function() {
//            $('.catalogmenu').css('display', 'block');
//        });
//        $('.menu_left').mouseleave(function() {
//            $('.catalogmenu').css('display', 'none');
//        });
//        $('.catalogmenu').mouseleave(function() {
//           // $(this).hide();
//        });
    }
    
})
/*
$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});*/

var adjustMenu = function() {
	
    if (ww < 1022) {
        /*        $('.menu_left h3').mouseenter(function() {
            $('.catalogmenu').css('display', 'block');
        });*/
         $('.menu_left').mouseenter(function() {
          //remove comment  $('.catalogmenu').css('display', 'block');
        });
        $('.menu_left').mouseleave(function() {
       //remove comment    $('.catalogmenu').css('display', 'none');
        });
        $(".catalogmenucolumn").unbind('click').bind('click', function(e) {
			e.preventDefault();
                        $(".catalogmenu").toggle();
	});
        
        
         $(document).mouseup(function (e)
    {
        var container = $('.catalogmenu, .catalogmenucolumn');
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.catalogmenu').hide();
        }
    });
    
    $(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
        $('.catalogmenu').hide();
    }
    });
       /* $('.catalogmenu').mouseleave(function() {
            $(this).hide();
        }); */
		//$(".toggleMenu").css("display", "inline-block");
		/*if (!$(".toggleMenu").hasClass("active")) {
                /*    if (ww < 768) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".catalogmenu").hide();
		} else {
			$(".catalogmenu").show();
		}*/
		$(".catalogmenu li").unbind('mouseenter mouseleave');
		$(".catalogmenu li a.parent").unbind('click').bind('click', function(e) {
			// Необходимоо привязать к элементу ссылки для предотвращения "всплывания"
			e.preventDefault();
			$(this).parent("li").toggleClass("hover"); 
                                       
		});
	} 
	else  if (ww >= 1) {
		//$(".toggleMenu").css("display", "none");
		//$(".catalogmenu").show();
		$(".catalogmenu li").removeClass("hover");
		$(".catalogmenu li a").unbind('click');
		$(".catalogmenu li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// Необходимо привязать к элементу li для предотвращения запуска события mouseleave при перемещении курсора мыши над подменю
                        
                    $(this).toggleClass('hover');
                    /*detect if ul exists*/
//                        if($(this).find('ul').length) {
//                            $(this).toggleClass('hasDD');
//                        }
                         /*_flag detect if ul exists end*/
                        
		});
                
                
                                   
                                    
                
                
	}
        
      
}

