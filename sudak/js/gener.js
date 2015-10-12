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
      });
      
     	(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();