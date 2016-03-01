/*BGN j4g v456a  */
(function( $ ){$.fn.j4g = function(options){options = (typeof options === 'undefined')?{'garb' : 1}:options;

// Инициализация значений по-умолчанию
options = $.extend( {
'onIddle' :					0,		// Слайдинг работает только при бездействии пользователя
'slideInterval' :			6500,	// Интервал между сменой слайдов
'transitionInterval' :		1200,	// Длительность перехода
'thumbsVisible' :			6,		// Количество видимых превьюшек
'originalsToFancybox' :		0,		// Большая картинка становится ссылкой для fancyBox'a
'smallStep' :				162,	// Шаг листания маленьких картинок по стрелочке
'nextGalleryDelay' :		0,		// Шаг листания маленьких картинок по стрелочке
'effects':[							// Список эффектов
		'resize9',
		'fade',
		'resize46',
		'resize4',
		'resize1',
		'resize5',
		'sresize3',
		'resize28',
		'sfade7',
	],
'effectsChangeWay' :	'nextEffect',
'elementIndex' :	0,
}, options);
var randomEffect = function(){return options.effects[Math.floor(Math.random() * options.effects.length)];}


var elIndex = options.elementIndex;
console.log('elIndex:'+elIndex);
var j4g_ar = [];

return this.each(function(){

var $ths = $(this);
// console.log('ths:',ths);
var $g = function(el){return typeof el === 'undefined' ? $ths : $ths.find(el);}
console.log('$gbig',$g('.j4g_big'));
console.log('$gbig.width',$('.j4g_big').width());
// console.log('delay',options.nextGalleryDelay);

var current = {
	'effectN' : 0,
	'effect' : randomEffect(),//options.effects[current.effectN],
	'vblocks' : 4,
	'hblocks' : 8,
	'elwidth' : $g('.j4g_big').width(),
	'elheight' : $g('.j4g_big').height(),
};
	current.blockWidth = Math.ceil(current.elwidth / current.hblocks);
	current.blockHeight = Math.ceil(current.elheight / current.vblocks);

setTimeout(function() {

var resetInterval = function(){
	clearInterval(j4g_ar[elIndex]);j4g_ar[elIndex]=setInterval(goNext,options.slideInterval);
}
console.log('logger');
$g('.j4g_big,.j4g_small').wrapInner('<div class="j4g_mover"></div>');
$g('.j4g_big').css('position','relative').append('<div class="j4g_z5" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:5;background-color:#fff;background-position:50%;background-repeat:no-repeat"></div><div class="j4g_z4" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:4;background-color:#fff;background-position:50%;background-repeat:no-repeat"></div>');
$g('.j4g_mover').css({width:'99999px'});
$g('.j4g_big .j4g_mover img:first').addClass('active_b');


/*bgn Активизация опций */
if(options.onIddle){
	$(document).bind('mousemove keydown scroll', resetInterval);
}

if($g('.j4g_small').length){ // Маленькие фотографии снизу
var max1=($g('.j4g_small .j4g_mover img').size()-options.thumbsVisible)/options.thumbsVisible;
var pos1=-1;
var step1=options.smallStep*options.thumbsVisible;
$g('.j4g_small .j4g_mover img').css({cursor:'pointer'});
$g('.j4g_small .j4g_mover img:first').addClass('active_m');

/*BGN Новые назначенные функции */

// При клике по стрелке влево
var jgl = function(){if(pos1--<1)pos1=0;smallUpd();}
// При клике по стрелке вправо
var jgr = function(){if(pos1++>=max1)pos1=max1;smallUpd();}
// Применение изменений для превьюшек
var smallUpd = function(){
// Убрать/показать левую стрелку
$g('.j4g_sprev img').css('display',(pos1<1?'none':'inline'));
// Убрать/показать правую стрелку
$g('.j4g_snext img').css('display',(pos1>=max1?'none':'inline'));
// Переместить к текущей позиции
$g('.j4g_small .j4g_mover').animate({'margin-left': '-'+(pos1)*step1+'px'},500);
}

/*END Новые назначенные функции */


$g('.j4g_sprev img').click(jgl);
$g('.j4g_snext img').click(jgr);
// При клике на маленькой фотке
$g('.j4g_small .j4g_mover img').click(function(){goTo($(this).index())});

jgr();
}

if(options.originalsToFancybox){
var hrefs = new Array();

var rehrefs = function(){
hrefs=[];
$g('.j4g_big').find('a').each(function(){
  hrefs.push($(this).attr('href'));
})
}

rehrefs();
$g('.j4g_big').css('cursor','pointer').click(function(){
	$.fancybox(hrefs, {
	'index'             : pos,
	'padding'           : 0,
	'transitionIn'      : 'none',
	'transitionOut'     : 'none',
	'type'              : 'image',
	'changeFade'        : 0,
	'overlayColor'		: '#000',
	'onClosed'			: rehrefs
	});
});
}
/*end Активизация опций */

var quant=$g('.j4g_big .j4g_mover img').size()-1;
var pos=0;

j4g_ar[elIndex]=setInterval(goNext,options.slideInterval);

var $setBg = function(el){return $g(el).css('background-image','url('+$g('.active_b').attr('src')+')');}
var changeActive = function(i){
	pos=i;
$g('.active_m').removeClass('active_m');
$g('.active_b').removeClass('active_b');
$g('.j4g_small .j4g_mover img').eq(pos).addClass('active_m');
$g('.j4g_big .j4g_mover img').eq(pos).addClass('active_b');
return true;}

var goNext = function(){pos++;if(pos>quant)pos=0;goTo(pos);}

var goTo = function(i){
	// options.transitionInterval = 10000;
	//Добавление кусочков фотографий:
	$g('.j4g_z5').append('<div class="fixed" style="position:relative;background-color:#fff;background-position:50%;background-repeat:no-repeat"></div>');
	current.photoOffset = Math.floor((current.elwidth - $g('.j4g_big .j4g_mover img').eq(i).width())/2);
	current.photoOffset = (current.photoOffset > 1) ? current.photoOffset+1 : current.photoOffset;
	for(y=0;y<(current.vblocks);y++){
		for(x=0;x<(current.hblocks);x++){
			$g('.fixed').append('<div class="ch'+x+' cv'+y+'" style="left:'+(x*current.blockWidth)+'px;top:'+y*current.blockHeight+'px;background:url('+$g('.active_b').attr('src')+') '+(x*-current.blockWidth+current.photoOffset)+'px '+y*-current.blockHeight+'px no-repeat #fff"></div>');
		}
	}
	$g('.j4g_z5 div div').css({width: current.blockWidth+'px',height: current.blockHeight+'px',position:'absolute'});
	// $g('.ch7').css({width:'99px'});
	
	current.hideBlock={width:0,height:0,opacity:0};
	current.showBlock={opacity:'1', width: current.blockWidth+'px', height: current.blockHeight+'px'};
	current.showFixed={opacity:'1', height: current.elheight, width: current.elwidth, top: 0, left: 0};
	
	/*BGN Рабочая область*/
	// $g('.j4g_z5').css('background','none');										// Нижний слайд изменяем на новый
	$g('.fixed div').css(current.hideBlock).show();
	changeActive(i);										// Изменяем индексы активности
	resetInterval();										// Сбрасываем интервал
	$setBg('.j4g_z5 div div');										// Верхний слайд в исходную позицию.
	current.effect=randomEffect();
	console.log('current.effect',current.effect);
	
	/*END Рабочая область*/
	

	if(current.effect == 'fade'){		// 2fix = Проявление новой фотографии
		// $g('.j4g_z5').fadeOut(options.transitionInterval);
		$g('.j4g_z5 div div').fadeIn(options.transitionInterval);
	}

	if(current.effect == 'resize5'){	// Рабочий = Увеличение новой фотографии из центра во все стороны
		$g('.fixed').html('');
		$setBg('.fixed');
		$g('.fixed').css({
			position: 'absolute',
			width:0,
			height:0,
			top:($g('.j4g_big').height()/2)+'px',
			left:($g('.j4g_big').width()/2)+'px',
		})
			.animate(current.showFixed,options.transitionInterval);
	}

	if(current.effect == 'resize28'){	// 2fix = Увеличение новой фотографии из центра ввех и вниз
		$g('.fixed').html('');
		$setBg('.fixed');
		$g('.fixed').css({
			position: 'absolute',
			height:0,
			width: current.elwidth,
			top:($g('.j4g_big').height()/2)+'px',
		})
			.animate(current.showFixed,options.transitionInterval);
	}
	
	if(current.effect == 'resize46'){	// 2fix = Увеличение новой фотографии из центра влево и вправо
		$g('.fixed').html('');
		$setBg('.fixed');
		$g('.fixed').css({
			position: 'absolute',
			height: current.elheight,
			width: 0,
			left:($g('.j4g_big').width()/2)+'px',
		})
			.animate(current.showFixed,options.transitionInterval);
	}
	
	if(current.effect == 'resize4'){	// 2fix = Разворачивание новой фотографии справа налево
		$g('.fixed').html('');
		$setBg('.fixed');
		$g('.fixed').css({
			position: 'absolute',
			height: current.elheight,
			width: 0,
			top: 0,
			left: 0,
		})
			.animate(current.showFixed,options.transitionInterval);
	}

	if(current.effect == 'resize9'){	// 2fix = Увеличение новой фотографии в правый верхний угол
		$g('.fixed div').animate({width:0,height:0,left:'100%'},options.transitionInterval);
	}
	
	if(current.effect == 'sresize3'){	// Рабочий = Увеличение блоков вправо вниз
		var ddr=1;var ddv=1;
		$g('.fixed div').each(function(){
			ddr++;
			if(ddr>8){ddr=1;ddv++;}
			cl=(options.transitionInterval/Math.max(ddr,ddv/2))+800;
			$(this).animate(current.showBlock,cl)
		});
	}

	if(current.effect == 'resize1'){	// 2fix = Увеличение блоков новой фотографии влево верх
		$g('.fixed').html('');
		$setBg('.fixed');
		$g('.fixed').css({
			position: 'absolute',
			height: 0,
			width: 0,
			top: 0,
			left: current.elwidth,
		})
			.animate(current.showFixed,options.transitionInterval);
	}

	if(current.effect == 'sfade7'){		// Рабочий = Проявление блоков
		var ddr=1;var ddv=1;
		$g('.fixed div').each(function(){
			ddr++;
			if(ddr>8){ddr=1;ddv++;}
			cl=(options.transitionInterval/Math.max(ddr,ddv/2))+800;
			$(this).css(current.showBlock,cl).css({opacity:0});
			$(this).animate(current.showBlock,cl);
		});
	}
	
	setTimeout(function() {	
		$('.fixed').css({
			background:'none',
			position: 'relative',
		});
		$setBg('.j4g_z5');
		$g('.j4g_z5').html('');
	},options.transitionInterval+100);
}

// Инициализация главной картинки
$setBg('.j4g_z5');
	changeActive(0);										// Изменяем индексы активности
	resetInterval();										// Сбрасываем интервал

},options.nextGalleryDelay);
});
}})( jQuery );
/*END LAB J4G slider */