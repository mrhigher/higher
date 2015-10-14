     
        var  mouse_is_outside = false;

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
    
  
    var closedropdown = function(){
    $('.cs-options').css('opacity','0');
        }
        
    $('.products_wrap > div').on('hover', function(){ //remove the #dropdown2
      mouse_is_outside = true; 
    }, function() {
         mouse_is_outside = false; 
    });
   
   
      $('.cs-select').on('click',function() {
       // $(this).find('.cs-options').css('opacity','1')
    });
    
    
    $(document).on('mouseenter',function (e)
    {
    var container = $(".products_wrap > div");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $('.cs-options').css('background','red');
        $('.cs-select').removeClass('cs-active');
    }
});
    
    
     $('.form_content').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });
    
      });
      
     	(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
                        
                        
                        
                        