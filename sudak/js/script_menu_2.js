
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
       
	//location.reload();
});

    
   
    
      $(window).resize(checkSize);
      function checkSize(){
        if ($(".catalogmenu").css("z-index") == "2" ){
            
           // $('.catalogmenu').hide();
            
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
    
    
          function myHandler(e) {
          if($('.catalogmenu').is(':visible')) {
                if (e.keyCode == 27) {
                     $('.catalogmenu').hide();
                }
            }
               
        }
     $(document).keydown(myHandler);
            
        }   else {
                    

          
//              if($('.catalogmenu').is(':visible')) {
//                   $(document).unbind('keydown', myHandler);
//              }
       
            $('.catalogmenu').show();
            $(".catalogmenu li").removeClass("hover");
		$(".catalogmenu li a").unbind('click');
		$(".catalogmenu li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
                    $(this).toggleClass('hover');
		});
        
          
            }
        }
    
    
	

        
        
        
        
        
      
}

