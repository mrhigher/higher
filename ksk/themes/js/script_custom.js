$(function(){

	var bxgall =  $('.bx_gall').bxSlider({
		controls:false,
		pager:false,
		auto: true
	});
	$('.g_slide').find('.prev').click(function(event){
		event.preventDefault();
		bxgall.goToPrevSlide();
	}	);
	$('.g_slide').find('.next').click(function(event){
		event.preventDefault();
		bxgall.goToNextSlide();
	}	);


	var bxpromo  = $('.bx_promo').bxSlider({
		controls:false,
		pager:false,
		auto: true
	});
	$('.p_slide').find('.prev').click(function(event){
		event.preventDefault();
		bxpromo.goToPrevSlide();
	});
	$('.p_slide').find('.next').click(function(event){
		event.preventDefault();
		bxpromo.goToNextSlide();
		});

	$(function(){
		$('.menus').slicknav({
			'label': '',
		});
	});


	$('.pane_blog .col').matchHeight({
		byRow: true,
		property: 'height',
		target: null,
		remove: false
	});
});


