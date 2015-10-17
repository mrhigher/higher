(function($) {

    $.fn.stPane = function(obj) {

        // Establish our default settings
        var obj = $.extend({
            box         : $(".basket_wrap"),
            rine : $('.basket_wrap').find('.rine'),
            header : $('header'),
        }, obj);

        return this.each( function() {
         
          var bwh = obj.box.outerHeight();
         var h  = obj.header.outerHeight();

           setCartpos = function() {
        obj.rine.removeClass('active'); 
        $('.backfade').removeClass('show');
        obj.box.css({top:'-' + bwh +'px' })  
        }
          if($.isFunction(setCartpos)) {
          setCartpos();
            }
        
        
         var show_cart = function(el) {
    $('.basket_wrap .rine').removeClass('active');         
    $(el).addClass('active');       
    $('.backfade').addClass('show');
    obj.box.css({top:'-'+ bwh+'px' })
    .animate({top: 30 +'%'}, 800, function() {
    });
    }
   
     $('.compare_lnk').on('click',function() {
        show_cart('.compare_out');
    });
    
     $('.fav_lnk').on('click',function() {
        show_cart('.fav_out');
    });
    
    $('.bask_lnk').on('click',function() {
        show_cart('.bask_out');
        
    });
        
              $(document).mouseup(function (e)
    {
        var container = $(".basket_wrap");
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
           
             if($.isFunction(setCartpos)) {
                 setCartpos();
                }
          
        }
    });
    
    $(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
         setCartpos();
    }
        });
   
   
            // We'll get back to this in a moment
        });

    }

}(jQuery));