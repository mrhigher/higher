//http://kenwheeler.github.io/slick/
$(function(){
	//$('.wrap_slider').addClass('loading');//лучше в самом html прописать это

	var images = $('.slick_slider .item_photo').find('img');
	var images_count=images.length;
	//console.log(images.length);
	//$('.slick_slider .item_photo img').each(function(i,elm){
		//console.log($(elm).attr('src'));
	//});
	
	var slick = $('.slick_slider')
		.on('init',function() {
			$('button.slick-prev').before('<span class="prevb mbbefore"></span>');
			$('button.slick-next').before('<span class="nextb mbbefore"></span>');

			var setbw = function() {
				var  w = $(document).outerWidth();
				var mid = $('.center').outerWidth();
				var wWrap =  parseInt($('.wrapper').css('max-width'));
				if (w >= wWrap) {
					w = 1920
				}

				var psize = (w - mid) / 2;
				$('button.slick-prev, button.slick-next').width(psize + 'px');
				$('.prevb.mbafter, .nextb.mbafter').width(psize + 'px');

				$('.prevb.mbbefore').css('left', psize - 28 + 'px');
				$('.nextb.mbbefore').css('right', psize - 28 +'px')
			};
			setbw()

			$(window).on('resize orientationchange', function() {
				setbw();
			})
			
			$('.slick_slider,.slick_slider button,.slick_slider .mbbefore').on({
				mouseenter: function () {
					$('.slick_slider').slick('slickPause');
				},
				mouseleave: function () {
				}
			});
			$('.slick_slider').on({
				mouseenter: function () {
				},
				mouseleave: function () {
					$('.slick_slider').slick('slickPlay');
				}
			});
		})
		.on('beforeChange',function(a,b,c){
		})
		.on('afterChange',function(){
			//alert('change');
			//$('.slick_slider').slick('slickSetOption', 'autoplay', false);
		})
		.slick({
			//infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: true,
			//lazyLoad: 'progressive',
			speed:400,
			cssEase: 'linear',
			easing:'easeOutCirc',
			autoplay: true,
			autoplaySpeed: 5000,
		});

	$('.prevb.mbbefore').click(function(){
		$('.slick_slider').slick('slickPrev');
	});
	$('.nextb.mbbefore').click(function() {
		$('.slick_slider').slick('slickNext');
	});
	
	function imageLoaded() {
		images_count--; // уменьшаем значение счетчика
		if( images_count === 0 ) {
			//alert('d');
			//setTimeout(function(){
				//$('.prevb.mbafter, .nextb.mbafter').addClass('vis');
			//}, 300);
			//$('.prevb.mbafter, .nextb.mbafter').addClass('vis');
			//$('.slick_slider').css('opacity','1');
			setTimeout(function(){
				$('.wrap_slider').removeClass('loading');
				$('.wrap_slider').addClass('loaded');
			},500);
		}
	}
	images.each(function() {
		if( this.complete ) {
			imageLoaded.call( this );
		} else {
			$(this).one('load', imageLoaded);
		}
	});
	
	/*
	var loadedImgNum = 0;
	images.on('load', function(){
		console.log('x');
		loadedImgNum += 1;
		if (loadedImgNum == images.length) {
			setTimeout(function(){
				$('.prevb.mbafter, .nextb.mbafter').addClass('vis');
			}, 300);
			$('.slick_slider').css('opacity','1');
		}
	});
	*/
});