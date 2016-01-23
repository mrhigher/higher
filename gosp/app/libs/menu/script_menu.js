
$(document).ready(function() {
	adjustMenu();
})

var adjustMenu = function() {
    
    $(document).mouseup(function (e)
	{
		var container = $(".main_menu");

		if (!container.is(e.target) // if the target of the click isn't the container...
			&& container.has(e.target).length === 0) // ... nor a descendant of the container
		{
			$('.flexnav').removeClass('flexnav-show');

		}
	});

	$(document).keydown(function(e) {
		// ESCAPE key pressed
		if (e.keyCode == 27) {
			$('.flexnav').removeClass('flexnav-show');
		}
	});
    
    $(".flexnav li").each(function() {
        if($(this).find('ul').length) {
            $(this).toggleClass('item-with-ul');
        }
    });
    
$(window).bind('orientationchange', function() {
     
	location.reload();
});

		checkSize();
    
      $(window).resize(checkSize);
      function checkSize(){
          var flexnav = $(".flexnav");

          $('.touch-with').unbind('click').bind('click',function(e) {
              e.preventDefault();

            /// $('.item-with-ul').find('ul').removeClass('show_with');
              if($(this).next().hasClass('show_with')) {
                //  $(this).next().removeClass('show_with');
              }
              if($(this).next().not('[show_with]')) {
                  //$(this).next().toggleClass('show_with');
              } 
              $(".item-with-ul ul").each(function(b, a) {
            $(a).prev().click(function() {
            $(a).toggleClass("show_with")
            })

             });
              
          })
          
          

          flexnav.removeClass('flexnav-show');
          if (flexnav.css("z-index") == "2" ){

              $(".touch-press").unbind('click').bind('click', function(e) {
                  e.preventDefault();
                  $(".flexnav").removeClass('flexnav-show');

              });

          } else {

              $(".touch-press").unbind('click').bind('click', function(e) {
                  e.preventDefault();
                  flexnav.toggleClass('flexnav-show');

              });

          }

      }
         
}

