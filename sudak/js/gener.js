
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
             var pct1 = $(this).parent().prev().find('.pct');
             var pct2 = $(this).parent().parent().prev().find('.pct');
             $(pct1).add(pct2).css('background-image', 'url(' + data + ')');

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
    
    
        
        

    
 $(window).scroll(function(){
  var sticky = $('.header'),
      scroll = $(window).scrollTop();
      var stickh = sticky.outerHeight();
  if (scroll >= stickh) 
  {
      sticky.addClass('fixed'); 
      $('.block_1').css('margin-top',stickh+'px');
  }  
  else {
      sticky.removeClass('fixed');
      $('.block_1').css('margin-top',0+'px');
  }
});

    
    	$('.phone_mask').mask('+7 (000) 000-00-00');


    /* range slider */
         $('.catrange').each(function(key, value) {
             
        var  $range_id = $("input[class*='_filtr']").eq(key),
             $input_from = $("input[class*='_input_from']").eq(key),
             $input_to = $("input[class*='_input_to']").eq(key),
             $instance = true,
             $min_val = $input_from.attr('placeholder').replace(/\s+/g, ''),
             $max_val = $input_to.attr('placeholder').replace(/\s+/g, ''),
             $range_step = $range_id.attr("data-step").replace(/\s+/g, '');

             $range_id.ionRangeSlider({
                min: $min_val,
                max: $max_val,
                from: $min_val,
                to: $max_val,
                step: $range_step,
                type: 'double',
                hide_min_max: true,
               //prefix: "",
               //  input_values_separator: ':',
                grid: false
        });
        
        $range_id.on("change", function () {
        var $this = $(this);
        
        $input_from.val($this.data("from"));
        $input_to.val($this.data("to"));
        });
         $instance = $range_id.data("ionRangeSlider");
         $input_from.on("change", function (e) {
    var val = $(this).prop("value");
    
    $instance.update({
        from: val
    });
    });
         $input_to.on("change", function (e) {
    var val = $(this).prop("value");
    $instance.update({
        to:val
    });
    });
       
     }); 
     /*range slider end*/
        
        



    $("ul#tabs li").click(function(e){
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum+1;
            $("ul#tabs li.active").removeClass("active");
            $(this).addClass("active");
            $("ul#tab li.active").removeClass("active");
            $("ul#tab li:nth-child("+nthChild+")").addClass("active");
        }
    });
    



    $('.close_result_search').on('click',function(e) {
        $('.for_input input').val('');
    })



/*bullet position*/
        $('.filtr_input').focus(function()  {
         var el = $(this).parent().find('.vybor');
        el.fadeIn(300);
        }).blur( function() {
         var el = $(this).parent().find('.vybor');
         el.fadeOut(300); 
        });
        
        $('.catrange').find('.irs').on('click', function() {
             var el = $(this).parent().find('.vybor');
             el.fadeIn(300); 
        })
        
                     $(document).mouseup(function (e)
     {
        var container = $('.catrange .irs, .filtr_input'); 
        if (!container.is(e.target) 
            && container.has(e.target).length === 0 
             ) 
        {
            var el = $('.catrange').find('.irs').parent().find('.vybor');
             el.fadeOut(300); 
            
        }
            });
   
        
 
        var each_opts = function() {
            var n = 0;
        $('.optlist').find('input[type=checkbox]').each(function(i, val) {
         $(val).on('click', function() {
          
         var el = $(val).parent().parent().find('.vybor');    
        if($(val).is(':checked')) {
         el.fadeIn(300);   
           n = n + 1;
           console.log(n)
        } else {
            n = n - 1;
           console.log(n)
            if (n == 0) {
            el.fadeOut(300); 
                        
            }
        
        }
         
        }); 
            
        })
        }
        
        each_opts() //run each chckboxes
        
       var fo_vyb =  function() {
           $('.vybor').fadeOut()
       }
     
    
   /*bullet position end */



   



    
    

    
      });
      
    
      
     	(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
                        
                        
                        
                        