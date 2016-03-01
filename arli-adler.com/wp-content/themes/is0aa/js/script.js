$(document).ready(function() {
   $('.phone').inputmask("mask", {"mask": "+7(999) 999-99-99", 'placeholder':'x'});
   $('#menu-item-4025 a').attr("target", "_blank"); 
   
   $('ul.tabs li').css('cursor', 'pointer');

	$('ul.tabs.tabs1 li').click(function(){
		var parent = $(this).parent().parent();
		var thisClass = this.className.slice(0,4);
		parent.find('div.tab1').hide();
		parent.find('div.tab2').hide();
		parent.find('div.' + thisClass).show();
		parent.find('ul.tabs.tabs1 li').removeClass('tab-current');
		$(this).addClass('tab-current');
	});
	
	/* Меню с иконками */
	$('.m1_fg_top_menu li a').each(function(i, element) {
		atr_data = $(element).data('section'); 
		$(element).css({'background-image': 'url(/wp-content/themes/is0aa/i/menu/' + atr_data + '.png)'});
	});
	$('.m1_fg_top_menu li a').mouseover(function(){
		atr_data = $(this).data('section'); 
		$(this).css({'background-image': 'url(/wp-content/themes/is0aa/i/menu/' + atr_data + '_h.png)'});
	})
	.mouseout(function(){
		$(this).css({'background-image': 'url(/wp-content/themes/is0aa/i/menu/' + atr_data + '.png)'});
	});
});

$(function(f){
    var element = f('#scroll_header');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 100 ? 'In': 'Out')](500);           
    });
});

var otype = '';
$(function(){
	$(".cb").colorbox();
	$(".m6_sertif").colorbox({rel:'sertif',reposition:true});

	$("input.j4_valch").each(function(){
		$(this).attr('onfocus',"if(this.value == '"+$(this).attr('value')+"')this.value = ''");
		$(this).attr('onblur',"if(this.value == '')this.value = '"+$(this).attr('value')+"'");
	});

	$('#callback .but1').val('Заказать обратный звонок');
	$('#bron .but1').val('Забронировать этот номер');
	//$('.bron_form input[type=submit]').val('Забронировать номер');
	$( "input.datepick.start" ).datepicker({minDate:0,dateFormat: "dd.mm.yy"});
	$( "input.datepick.end" ).datepicker({minDate:1,dateFormat: "dd.mm.yy"});
	$('.bron_form .ls label span,.bron_form .ls1 label span').html('Я согласен с <a href="#license" class="inline">пользовательским соглашением</a>');
	$(".inline").colorbox({inline:true});
});

$(function(){
	$('a[href*="jpg"]').colorbox();
});

$(function(){
	$('#j4g').j4g({'effects':'slide5'});

	// if(localStorage['j4c']!="1")$('.ml_reviews abbr.dtreviewed').hide();
	$('.ml_reviews abbr.dtreviewed').each(function(){
		var date = new Date($(this).attr('title'));
		// var date2 = date1.format("dd.mm.yyyy");
		date = ('0' + date.getDate()).slice(-2) + '.' + ('0' + (date.getMonth() + 1)).slice(-2) + '.' + date.getFullYear() + ' г.';
		j4c(date);
		$(this).text(date);
	});

	$('.ml_reviews .wpcr_fl.wpcr_sc').hide();
	$('#wpcr_check_confirm small').hide();
	$('.ml_reviews .wpcr_fl.wpcr_rname span:contains(by)').hide();

	$('.ml_reviews p.response strong').text('Ответ руководства:');
	$('#wpcr_postcomment').text('Добавить отзыв:');
	$('label[for$=-fname]').text('Имя: *');
	$('label:contains(Rating:)').text('Рейтинг:');
	$('label[for$=-ftext]').text('Напишите свой отзыв');
	$('label[for^=fconfirm]').text('Поставьте галочку, если вы не робот');
	$('#wpcr_pagination').clone().prependTo('#wpcr_respond_1');
	// if(localStorage['j4c']=="1")
		$('#wpcr_respond_2').show();
	$('#wpcr_respond_1').addClass('wbg').attr('style','padding-top:50px!important');
	
	
	$('.bron_short').click(function(){
			var room = $(this).parents('.short').find('h3').text();
			console.log(room);
			$('#bron1 [name=number]').val(room);
	});
	
	
});

function j4c(v){if(localStorage['j4c']=="1")console.log(v);}
function goal(a){yaCounter24739589.reachGoal(a);yaCounter24739589.reachGoal('anygoal');j4c(a);j4c('anygoal');}
function step(a){yaCounter24739589.reachGoal(a);j4c(a);}

/*BGN Slider*/
var pos = 0;var sheight = 0;ar=setInterval(sec,5500);
function sec(){pos++;if(pos>(quant))pos=0;gmove(pos);}
function gmove(p){
	$(".sq_active").removeClass("sq_active");
	$('#slider1').animate({'margin-top': p*-sheight+'px'},1000);
	if(p>=quant){setTimeout(function () {$('#slider1').css('margin-top','0');},1100);p=0;}
	$("#squares div").slice(p,(p+1)).addClass("sq_active");
	pos=p;
}
$(function(){
	$('#slider').wrapInner('<div id="slider1"></div>');
	quant=$("#slider1 div").size();
	sheight = $('#slider').height();
	$('#slider div').height(sheight);
	$('#slider1').height(999999);
	$("#slider1 div").clone().appendTo("#slider1");
	var q=0;while(q<quant){$('#squares').append('<div></div>');q++;}
	gmove(pos);
	$('#squares div').click(function(){
		gmove($(this).index("#squares div"));
		clearInterval(ar);ar=setInterval(sec,5500);
	});
})
/*END Slider*/

/*BGN Slider-H v44id*/
function gmove_h($s){
	p = parseInt($s.attr('p'));
	swidth = $s.find('.slide:eq(1)').outerWidth(true);
	quant = parseInt($s.attr('q'));
	$s.find(".active").removeClass("active");
	if(p<0){p=quant-1;$s.find('.slider1').css('margin-left',(p+1)*-swidth+'px');}
	$s.find('.slider1').animate({'margin-left': p*-swidth+'px'},1000);
	if(p>=quant){setTimeout(function () {$s.find('.slider1').css('margin-left','0');},1100);p=0;}
	$s.find(".controls div").slice(p,(p+1)).addClass("active");
	$s.attr('p',p);
	pos=p;
}
$(function(){
	$('.slider-h').each(function(){
		$sl = $(this);
		$sl.attr('p',0);
		$sl.attr('q',$sl.find('.slide').size());
		$sl.find(".controls div:first-child").addClass('active');
		$sl.find(".slide").clone().appendTo($sl.find(".slider1"));
	});
	$('.arr0,.arr1,.arr,.arr2,.arr6').on('click', function(){
		$s = $(this).parent();
		$s.attr('p',parseInt($s.attr('p'))+1);
		gmove_h($s);
	});
	$('.arl0,.arl1,.arl,.arl2,.arl6').on('click', function(){
		$s = $(this).parent();
		$s.attr('p',parseInt($s.attr('p'))-1);
		gmove_h($s);
	});
	$('.controls div').on('click', function(){
		$s = $(this).parent().parent();
		$s.attr('p',$(this).index());
		gmove_h($s);
	});
});
/*END Slider-H*/

/*BGN Timer */
$(function(){
setR();
var timr=$("#timer");
var myVar=setInterval(function(){setR()},1000);

function setR(){
var d=new Date();
//var d1=new Date(2014,10,5);
var d1=new Date();
//d1.setDate(d.getDate()+1+(d.getDate()+1)%2);
d1.setDate(d.getDate() + 3);
d1.setHours(0);
d1.setMinutes(0);
d1.setSeconds(0);
// var dateX=new Date(2013,2,8);
var diff=d1-d;
unixdiff=Math.round(diff/1000);
dayR=Math.floor(unixdiff/86400);
hourR=Math.floor((unixdiff-dayR*86400)/3600);
minuteR=Math.floor((unixdiff-dayR*86400-hourR*3600)/60);
secondR=(unixdiff-dayR*86400-hourR*3600-minuteR*60);
update(dayR+" ",hourR+" ",minuteR+" ",secondR+" ");
}

function update(d,h,m,s){
var dc=[];
var hc=[];
var mc=[];
var sc=[];
dc[0]=d[0];dc[1]=d[1];if(d[1]==" "){dc[1]=d[0];dc[0]=0;}
hc[0]=h[0];hc[1]=h[1];if(h[1]==" "){hc[1]=h[0];hc[0]=0;}
mc[0]=m[0];mc[1]=m[1];if(m[1]==" "){mc[1]=m[0];mc[0]=0;}
sc[0]=s[0];sc[1]=s[1];if(s[1]==" "){sc[1]=s[0];sc[0]=0;}
chtime(1,dc[0]);
chtime(2,dc[1]);
chtime(3,hc[0]);
chtime(4,hc[1]);
chtime(5,mc[0]);
chtime(6,mc[1]);
chtime(7,sc[0]);
chtime(8,sc[1]);
$(timr).find(".day").text(GetNoun(d,"день","дня","дней"));
$(timr).find(".hour").text(GetNoun(h,"час","часа","часов"));
$(timr).find(".minute").text(GetNoun(m,"минута","минуты","минут"));
$(timr).find(".second").text(GetNoun(s,"секунда","секунды","секунд"));
}

function GetNoun(number,one,two,five){
number = Math.abs(number);
number %= 100;
if (number >= 5 && number <= 20) {return five}
number %= 10;
if(number == 1){return one}
if(number >= 2 && number <= 4){return two}
return five;
} 

function chtime(p,v){
// $(timr).find(".t"+p+" img").animate({marginTop:"-"+(v*32)+"px"},250);
$(timr).find(".t"+p).text(v);
}

});

//////////////////////

	//year = 2014; month = 12; day = 05; hour= 0; minute= 0; sec= 0;
	/*year = 2016; month = 06; day = 16; hour= 0; minute= 0; sec= 0;
	function CountBox() {
		dateNow = new Date;
		amount = dateFuture.getTime() - dateNow.getTime() + 5;
		delete dateNow;
		if (amount < 0) {
			out = "<div id='countbox-days'><span></span>0<div id='countbox-days-text'></div></div>" + "<div id='countbox-hours'><span></span>0<div id='countbox-hours-text'></div></div>" + "<div id='countbox-mins'><span></span>0<div id='countbox-mins-text'></div></div>" + "<div id='countbox-secs'><span></span>0<div id='countbox-secs-text'></div></div>";
			document.getElementById("countbox").innerHTML = out
		} else {
			days = 0;
			hours = 0;
			mins = 0;
			secs = 0;
			out = "";
			amount = Math.floor(amount / 1e3);
			days = Math.floor(amount / 86400);
			amount = amount % 86400;
			hours = Math.floor(amount / 3600);
			amount = amount % 3600;
			mins = Math.floor(amount / 60);
			amount = amount % 60;
			secs = Math.floor(amount);
			out = "<div id='countbox-days'><span></span>" + days + "<div id='countbox-days-text'></div></div>" + "<div id='countbox-hours'><span></span>" + hours + "<div id='countbox-hours-text'></div></div>" + "<div id='countbox-mins'><span></span>" + mins + "<div id='countbox-mins-text'></div></div>" + "<div id='countbox-secs'><span></span>" + secs + "<div id='countbox-secs-text'></div></div>";
			document.getElementById("countbox").innerHTML = out;
			setTimeout("CountBox()", 1e3)
		}
	}
	month = --month;
	dateFuture = new Date(year, month, day, hour, minute, sec);
	window.onload = function () {
		CountBox()
	}*/


/*jQuery(document).ready(function() {
	jQuery(".eTimer").eTimer({
		etType: 1, 
		etDate: "17.06.2015.0.0", 
		etTitleText: "", 
		etTitleSize: 20, 
		etShowSign: 1, 
		etSep: " ", 
		etFontFamily: "Trebuchet MS", 
		etTextColor: "#a3a3a3", 
		etPaddingTB: 0, 
		etPaddingLR: 0, 
		etBackground: "none", 
		etBorderSize: 0, 
		etBorderRadius: 2, 
		etBorderColor: "white", 
		etShadow: "none", 
		etLastUnit: 4, 
		etNumberFontFamily: "Arial", 
		etNumberSize: 28,
		etNumberColor: "white", 
		etNumberPaddingTB: 5, 
		etNumberPaddingLR: 5, 
		etNumberBackground: "#4c2753", 
		etNumberBorderSize: 0, 
		etNumberBorderRadius: 5, 
		etNumberBorderColor: "white", 
		etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
	});
});*/

/*END Timer */

/*BGN j4Commentary v44e9 - changed*/

function binder(eventObject){
	$dj = $(this).attr("data-j4c");
    $("#data-j4c").html($dj).css({"top" : eventObject.pageY + 5, "left" : eventObject.pageX + 5}).show();
}
function unbinder(){
	$("#data-j4c").hide().text("").css({"top":0, "left":0});
}

$(function(){
	setTimeout(function() {
	$('body').prepend('<div id="data-j4c"></div>');
	$('#data-j4c').css({backgroundColor:'#000',	borderRadius:'5px', color:'white', display:'none', minHeigh:'40px', maxWidth:'300px', left:0, opacity:0.6, padding:'5px 10px 5px 10px', position:'absolute', top:0, zIndex:9999});
	$("[data-j4c]").bind('mousemove', binder).bind('mouseout',unbinder);
	}, 300);
});
/*END j4Commentary*/


/*BGN Gallery */
$(function(){
	function cur7(){return $("#slidx .active_m").index("#slidx .slidmin1 div");}
	function jgl(){if(pos1--<1)pos1=0;galupd();}
	function jgr(){if(pos1++>=max1)pos1=max1;galupd();}
	
	$("#slidx .slidmin1 img").each(function(){
		$('#slidx .slidmin1').append('<div style="background-image:url('+$(this).attr('src')+');"></div>')
		$(this).remove();
	});
	$("#slidx .slidmin1 div:first").addClass("active_m");
	
	var act1=cur7();
	cnc = Math.floor($("#slidx .slidmin").width() / $("#slidx .slidmin1 div:first-child").width());
	var max1=$("#slidx .slidmin1 div").size()-cnc;
	var pos1=-1;
	var step1=$('#slidx .slidmin1 div:first-child').width()+parseInt($('#slidx .slidmin1 div:first-child').css('margin-right'));
	
	jgr();
	// При клике по стрелке влево
	$('#slidx .arl img').click(jgl);
	// При клике по стрелке вправо
	$('#slidx .arr img').click(jgr);
	
	// При клике на маленькой фотке
	$("#slidx .slidmin1 div").click(function(){
	 $("#slidx .active_m").removeClass("active_m");$(this).addClass("active_m");
	 $("#slidx .active_b").removeClass("active_b");
	 $('#slidx .slides1').animate({'margin-left': (cur7()*-$('#slidx .slides1 img:first-child').width())+'px'},500);
	 $("#slidx .slides1 img").eq(cur7()).addClass("active_b");
	});
	
	function galupd(){
	// Убрать/показать стрелку
	if(pos1<1){$("#slidx .arl img").css("display","block");}else{$("#slidx .arl img").css("display","inline");}
	if(pos1>=max1){$("#slidx .arr img").css("display","block");}else{$("#slidx .arr img").css("display","inline");}
	// Переместить к текущей позиции
	$('#slidx .slidmin1').animate({'margin-left': '-'+(pos1)*step1+'px'},500);
	}
});
/*END Gallery */


function crease(a){
	var $tr_quant = $('#hdr_table tr[data-num='+a+']').find('td.hg_quant');
	// 1. Отправляем ajax-запрос к php файлу
	$.ajax({
	  type: "GET",
	  url: "/wp-admin/admin-ajax.php",
	  data: "action=screase&pid="+$('body').attr('data-pid')+"&field=quantity"+"&line="+a
	}).done(function( msg ) {
	  // $tr_quant.text(msg == ($tr_quant.text() - 1) ? msg : 999);
	  if($tr_quant.text()=="1")$('#hdr_table tr[data-num='+a+']').find('.hd_status').text('ПРОДАН');
	  $tr_quant.text($tr_quant.text() - 1);
	  j4c(msg);
	});
	// если вернувшееся значение равно (что было -1) то обновляем значение в ячейке иначе делаем шрифт красным.
	j4c('crease+'+a);
}


$(function(){
	$('.unwrap').unwrap();
	setTimeout(function() {$('#ui-datepicker-div').hide();}, 100);
	$(".cb").colorbox({maxHeight:"80%"});

	$('#mid .ml_num .mkactive').click(function(){
		$number = $(this).parent().parent();
		if($number.hasClass('active')){
			$number.find('.long').slideUp();
			$number.removeClass('active');
		}else{
			$number.find('.long').slideDown();
			$number.addClass('active');
		}
	});
	
	$(".datepick.start").change(function() {
		test = $(this).datepicker('getDate');
		testm = new Date(test.getTime());
		testm.setDate(testm.getDate() + 1);
    $(".datepick.end").datepicker("option", "minDate", testm);
});

	$('#wpcr_button_1').parent().hide();
	// $('#wpcr_respond_2').show();



/* Показать текст подробно */
$(".detail_show").click(function() {
	$('.detail_show').css('display', 'none');
	$('#detail_text').slideDown(500); 
	$('html, body').animate({ scrollTop: $('#detail_text').offset().top - 150 }, 500);
	return false;
});
/*Скрыть текст*/
function detail_hide(element) {
	$('#'+element).slideUp(500);
	$('.detail_show').css('display', 'block');
	$('body,html').animate({scrollTop:0},500);	
	return false;
}

$(".navigation_text a").click(function(){ 
	var element = $(this).attr("href");
	$('html, body').animate({ scrollTop: $(element).offset().top - 140 }, 800); 
});

});