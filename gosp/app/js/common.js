$(document).ready(function(){
	$('.bxslider').bxSlider({
		controls: false,
		slideWidth: 480,
		minSlides: 2,
		maxSlides: 3,
		mode: 'horizontal'
	});
	
	$('.ul_4 li').matchHeight();
	
	$('.block_news').slick({
		autoplay: true,
		arrows: false,
		variableWidth: true
		//rows: 3
	})
});