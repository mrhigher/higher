     
      

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
          
          
    /*result search popup boxes*/          
           $(document).mouseup(function (e)
    {
        var container = $(".searchinhead");
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.result_search').hide();
        }
    });
    $(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
       $('.result_search').hide();
    }
        });
                
        $('.searchinhead').on('click',function() {
         $('.result_search').show();   
        });  
        /*result search boxes end*/ 
        
        
         $('.open_menu p').find('a').on('hover',function() {
            
             var data = $(this).data('ava');
             var zpick = $(this).parent().prev().find('img');
             var img = zpick.attr('src', data)
    .on('load', function() {
        if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            alert('Что то не то');
        } else {
            $(this).width('63').height('63');
            //$("#something").append(img);
        }
    }); 
    });
        
        



   



    
    

    
      });
      
    
      
     	(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
                        
                        
                        
                        