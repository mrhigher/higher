$(document).ready(function(){
	
	$('#top_slider').slick({
		autoplay: true,
		arrows: false,
		variableWidth: true,
		slidesToShow: 3,
		autoplaySpeed: 4500
		//rows: 3
	})
	
	$('.ul_4 li').matchHeight();
	
	$('.block_news').slick({
		autoplay: true,
		arrows: false,
		variableWidth: true,
		slidesToShow: 3,
		autoplaySpeed: 4500
		//rows: 3
	})
});