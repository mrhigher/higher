
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

    
})

var adjustMenu = function() {
    
    
$(window).bind('orientationchange', function() {
	ww = document.body.clientWidth;
        alert(2)
	//location.reload();
});

    
       /*reload at once*/
    var i = 0;
$(function () {
   $(window).on("resize", function () {
       var windowsize = $(window).width();
       //console.log(windowsize);
       if (windowsize < 1022 && i === 0) {
           i = 1;
       } else if (windowsize >= 1022 && i == 1) {
          location.reload();
           i = 0;
       }
   });
});
    /*reload at once end*/
    
    
	
    if (ww < 1022) {
              
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
      
		

	} 
	else  if (ww >= 1) {
		
		$(".catalogmenu li").removeClass("hover");
		$(".catalogmenu li a").unbind('click');
		$(".catalogmenu li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
                    $(this).toggleClass('hover');
		});
	}
        
        
        
        
        
      
}

