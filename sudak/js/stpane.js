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
            
            
                 var compare = $( ".compare_out .resizable" ).resizable({
                 handles: {
                     's':$('.compare_out .sudak_resizable')
                 },
                 resize: function( event, ui ) {
                           
                      $('.compare_out .resizable').scroll(function(){
            var height = $(this).height();
            var st = $(this).scrollTop();
            $('compare_out  .sudak_resizable').css({'bottom':'auto', 'top':height + st +'px'});
                });
                 }
  
                    });
                    
                     var fav = $( ".fav_out .resizable" ).resizable({
                 handles: {
                     's':$('.fav_out .sudak_resizable')
                 },
                 resize: function( event, ui ) {
                           
                      $('.fav_out  .resizable').scroll(function(){
            var height = $(this).height();
            var st = $(this).scrollTop();
            $('.fav_out .sudak_resizable').css({'bottom':'auto', 'top':height + st +'px'});
                });
                 }
  
                    });
                    
                 var bask = $( ".bask_out .resizable" ).resizable({
                 handles: {
                     's':$('.bask_out .sudak_resizable')
                 },
                 resize: function( event, ui ) {
                    
                      $('.bask_out .resizable').scroll(function(){
            var height = $(this).height();
            var st = $(this).scrollTop();
            $('.bask_out .sudak_resizable').css({'bottom':'auto', 'top':height + st +'px'});
                });
                 }
  
                    });
        
        
         var show_cart = function(el) {
    $('.basket_wrap .rine').removeClass('active');         
    $(el).addClass('active');       
    $('.backfade').addClass('show');
    obj.box.css({top:'-'+ bwh+'px' })
    .animate({top: 30 +'%'}, 500, function() {
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
        var container = obj.box;
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0 
            && (e.target != $('html').get(0)))
            
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
     
            
   
   
            // We'll get back to this in a moment
        });

    }

}(jQuery));