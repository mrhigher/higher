(function($) {

    $.fn.stPane = function(obj) {

       
        var obj = $.extend({
            box         : $('.basket_wrap'),
            rine : $('.basket_wrap').find('.rine'),
            header : $('header'),
            compare_out:$('.compare_out'),
            fav_out:$('.fav_out'),
            bask_out:$('.bask_out'),
            ul_pane:$('.ul_1 li.opp')
            
        }, obj);

        return this.each( function() {
         
         

           setCartpos = function(el) {
        var srt = $(window).scrollTop();
        var bwh = obj.box.outerHeight();
        //$('.backfade').removeClass('show');
        obj.ul_pane.removeClass('act');
        obj.box.animate({top:'-' + bwh  +'px'}, 500, function() {

        });
        }
          if($.isFunction(setCartpos)) {
        //  setCartpos();
            }
            
            
                 var compare = obj.compare_out.find('.resizable').resizable({
                 handles: {
                     's':obj.compare_out.find('.sudak_resizable')
                 },
                 resize: function( event, ui ) {
                    
                    var res_h = ui.size.height;
                    var res_st = obj.compare_out.find('.resizable').scrollTop();
                    obj.compare_out.find('.sudak_resizable').css({'bottom':'auto', 'top':res_h + res_st +'px'});
                     
                           
                     obj.compare_out.find('.resizable').scroll(function(){
            var height = $(this).height();
            var st = $(this).scrollTop();
            obj.compare_out.find('.sudak_resizable').css({'bottom':'auto', 'top':height + st +'px'});
                });
                 }
  
                    });
                    
                     var fav = obj.fav_out.find('.resizable').resizable({
                 handles: {
                     's':obj.fav_out.find('.sudak_resizable')
                 },
                 resize: function( event, ui ) {
                     
                    var res_h = ui.size.height;
                    var res_st = obj.fav_out.find('.resizable').scrollTop();
                    obj.fav_out.find('.sudak_resizable').css({'bottom':'auto', 'top':res_h + res_st +'px'});
                     
                           
                      obj.fav_out.find('.resizable').scroll(function(){
            var height = $(this).height();
            var st = $(this).scrollTop();
            obj.fav_out.find('.sudak_resizable').css({'bottom':'auto', 'top':height + st +'px'});
                });
                 }
  
                    });
                    
                 var bask = obj.bask_out.find('.resizable').resizable({
                 handles: {
                     's':obj.bask_out.find('.sudak_resizable')
                 },
                 resize: function( event, ui ) {
                     
                     var res_h = ui.size.height;
                    var res_st = obj.bask_out.find('.resizable').scrollTop();
                    obj.bask_out.find('.sudak_resizable').css({'bottom':'auto', 'top':res_h + res_st +'px'});

                    
                      obj.bask_out.find('.resizable').scroll(function(){
            var height = $(this).height();
            var st = $(this).scrollTop();
            obj.bask_out.find('.sudak_resizable').css({'bottom':'auto', 'top':height + st +'px'});
                });
                 }
  
                    });
        
        
         var show_cart = function(el, th) {
          var bwh = obj.box.outerHeight();  
          var head  = obj.header.outerHeight();

        obj.rine.hide();
        obj.rine.filter(el).show();
        obj.ul_pane.removeClass('act');
        obj.ul_pane.filter(th).addClass('act');
       
        /*$('.backfade').addClass('show');*/
        obj.box.css({top:'-'+ bwh +'px' })
        .animate({top: head +'px'}, 500, function() {

        });
    }
   
     $('.compare_lnk').on('click',function() {
          if($(this).hasClass('act')) {
             setCartpos()
         } else {
          show_cart('.compare_out', '.compare_lnk');
         }
    });
     
     $('.fav_lnk').on('click',function() {
          if($(this).hasClass('act')) {
            setCartpos()
         } else {
          show_cart('.fav_out', '.fav_lnk');
         }
    });
    
//    $('.bask_lnk').on('click',function() {
//        show_cart('.bask_out');
//    });
        
              $(document).mouseup(function (e)
    {
        var container = obj.box; 
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0 
            && (e.target != $('html').get(0)) && (!obj.ul_pane.is(e.target))) 
            
        {
  
           
             if($.isFunction(setCartpos)) {
                 setCartpos();
                }
          
        }
    });
    
    
    $('.rsec_close').on('click',function() {
          setCartpos();
    });
    
    $(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
         setCartpos();
    }
        });
     
            
   
   
          
        });

    }

}(jQuery));