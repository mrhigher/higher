$(document).ready(function(){
	
//	$('#top_slider').slick({
//		autoplay: true,
//		arrows: false,
//		variableWidth: true,
//		slidesToShow: 4,
//		autoplaySpeed: 4500
//		//rows: 3
//	})
	
	$('#top_slider').bxSlider({
		auto: true,
		controls: false,
		speed: 300,
		slideWidth: 480,
		maxSlides: 6
		//slideWidth: 480
	});
	
	$('.ul_4 li').matchHeight();
	
//	$('.block_news').slick({
//		autoplay: true,
//		arrows: false,
//		variableWidth: true,
//		slidesToShow: 3,
//		autoplaySpeed: 4500
//		//rows: 3
//	})

	
	$('.block_news').bxSlider({
		auto: true,
		controls: false,
		speed: 300,
		pager:false,
		slideWidth: 329,
		maxSlides: 6
		//slideWidth: 480
	});

});
