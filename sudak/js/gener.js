     
      

     $(function () {
      $('.ico_plus').on('click',function(){
        var $qta=$(this).closest('.count').find('.qta');
        var currentVal = parseInt($qta.val());
        if (!isNaN(currentVal)) {
            $qta.val(currentVal + 1);
        }
    });
    $('.ico_minus').on('click',function(){
        var $qta=$(this).closest('.count').find('.qta');
        var currentVal = parseInt($qta.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qta.val(currentVal - 1);
        }
    });
     

  /*detect target and close cs_select*/
    var $out = $("div.out");
    $("body").on("hover", ".citm", function(e){
    var $target = $(e.currentTarget);
   // $out.html($target);
    var container = $('.citm');
    if (container.is($target) // if the target of the click isn't the container...
        && container.has($target).length === 0) // ... nor a descendant of the container
    {
        $('.cs-select').removeClass('cs-active');
    }
        })
          /*detect target and close cs_select*/
          
          
              
           $(document).mouseup(function (e)
    {
        var container = $(".searchinhead, .mobile_menu, .show_menu");
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.result_search').hide();
            mm_close();
          
        }
    });
    $(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
        mm_close(); //close mob menu
       $('.result_search').hide();
    }
        });
                
        $('.searchinhead').on('click',function() {
         $('.result_search').show();   
        });  
           
        
        
        
        /*preload avas on itm hover*/
         $('.open_menu p').find('a').on('hover',function() {
            
             var data = $(this).data('ava');
             var pct = $(this).parent().prev().find('.pct');
             pct.css('background-image', 'url(' + data + ')');

    });
    /*preload avas on itm hover end*/
    
    
    /*mobile menu*/
    var mm_close = function() {
     var width = $('.mobile_menu').outerWidth();     
    $('.mobile_menu').animate({'left':- width +'px'}, function() {
        $(this).removeClass('mini');
        });
    }
    var mm_show = function() {
     $('.mobile_menu').addClass('mini').animate({'left':'0px'});
    }
    $('.show_menu').on('click',function() {
        mm_show();
    });
    $('.close_form').on('click',function() {
         mm_close();
    });
    /*mobile menu end*/
    
    $('body').stPane(); //call stpane plugin
    
         $( ".resizable" ).resizable({
//		handles: {
//			//s: ".ui-resizable-e"
//		},
                 handles: 's',
                 
//                    stop: function(event, ui) {
//                        $(this).css("width", '');
//                    }
                
                
                
                
		//minWidth: 50
	});
        
        
//            $(".resizable")
//      .wrap('<div/>')
//        .css({'overflow':'hidden'})
//          .parent()
//            .css({'display':'inline-block',
//                  'overflow':'hidden',
//                  'height':function(){return $('.resizable',this).height();},
//                  'width':  function(){return $('.resizable',this).width();},
//                  'paddingBottom':'12px',
//                  'paddingRight':'12px'
//                  
//                 }).resizable()
//                    .find('.resizable')
//                      .css({overflow:'auto',
//                            width:'100%',
//                            height:'100%'});
    

        
        



   



    
    

    
      });
      
    
      
     	(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
                        
                        
                        
                        