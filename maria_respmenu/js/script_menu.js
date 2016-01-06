

$(document).ready(function() {
    


	adjustMenu();
    
    /*******************************************************/

    
})

var adjustMenu = function() {


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
              $(this).prev().toggleClass('show_with');
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

