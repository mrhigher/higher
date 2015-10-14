     
      

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


   



    
    

    
      });
      
    
      
     	(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
                        
                        
                        
                        