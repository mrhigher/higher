<?php
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
$ch = 7;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php wp_head(); ?>

	<title>Отели, гостиницы, частный сектор в Адлере с бассейном на берегу моря</title>
	<meta name="description" content="Одна из лучших гостиниц Адлера с бассейном, идеально подходит для семейного отдыха с детьми. Отель «Арли» расположен на берегу моря по соседству с частными мини отелями.">

<link rel="stylesheet" type="text/css" href="/wp-content/themes/is0aa/style.css?v=<?php echo $ch; ?>" />
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/is0aa/script.js?v=<?php echo $ch; ?>" /></script>
<script type="text/javascript" src="/wp-content/themes/is0aa/j4g.js?v=<?php echo $ch; ?>" /></script>
<script type="text/javascript" src="/wp-content/themes/is0aa/jquery.colorbox-min.js" /></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.13.3/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="http://rawgithub.com/joequery/Stupid-Table-Plugin/master/stupidtable.min.js"></script>
<link rel="stylesheet" href="/wp-content/themes/is0aa/colorbox.css" type="text/css" media="screen" />



<!--[if lt IE 9]>
    <script src="/wp-content/themes/is0aa/ie.js?v=<?php echo $ch; ?>"></script>
<![endif]-->

</head>
<body data-pid="<?php the_ID(); ?>">
<?php referals(); ?>
<script>
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
	$('.bron_form input[type=submit]').val('Забронировать номер');
	$( "input.datepick.start" ).datepicker({minDate:0,dateFormat: "dd.mm.yy"});
	$( "input.datepick.end" ).datepicker({minDate:1,dateFormat: "dd.mm.yy"});
	$('.bron_form .ls label span,.bron_form .ls1 label span').html('Я согласен с <a href="#license" class="inline">пользовательским соглашением</a>');
	$(".inline").colorbox({inline:true});
});
</script>
<div id="all" class="all w1000">

<div style="display:none">
	<div id="callback" class="popup phone">
		<div class="test">
		<div class="text1">Чтобы заказать обратный звонок, заполните поля.</div>
		<div class="text2">Мы свяжемся с вами в ближайшее время!</div>
		<?php echo do_shortcode('[contact-form-7 id="8" title="Форма обратного звонка" html_class="use-floating-validation-tip"]'); ?>
		<div class="text3">Данные никогда не будут переданы третьим лицам!</div>
		</div>
	</div>
	<div id="bron" class="popup phone">
		<div class="test">
		<div class="text1">Чтобы забронировать номер, заполните поля, пожалуйста.</div>
		<div class="text2">Мы свяжемся с вами в ближайшее время!</div>
		<?php echo do_shortcode('[contact-form-7 id="392" title="Форма бронирования" html_class="use-floating-validation-tip"]'); ?>
		<div class="text3">Данные никогда не будут переданы третьим лицам!</div>
		</div>
	</div>
	<div id="callback1" class="popup ok">
		<div class="text1">Спасибо! Ваша заявка принята.</div>
		<div class="text2">Мы перезвоним вам в ближайшее время.</div>
	</div>
	<div id="license" class="popupl license">
		<div class="text"><?php the_field('license', 6); ?></div>
	</div>
</div>

<div class="top">
	<a href="/" class="top_logo db fll">Адлер<br />Курортный городок</a>
	<div class="top_hotel fll">ОТЕЛЬ</div>
	
	<div class="top_right flr">
		<div class="tr_phone">8 (800) 333-61-69</div>
		<div class="tr_text">Бесплатная горячая линия</div>
		<a href="#callback" onclick="step('callback-1');return true;" class="tr_callback db inline">Заказать обратный звонок</a>
	</div>
	<div class="top_arli flr">&laquo;АРЛИ&raquo;</div>
</div>

<style>
.text p{
text-indent:0px;
}
</style>
<div id="mid" class="mid">
	<div class="ml">
		<?php wp_nav_menu('menu=main'); ?>
		<h1>Ошибка 404 - Страницы не существует.</h1>
		<img width="100%" src="<?php bloginfo('template_url');?>/i/404.png">
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer();?>