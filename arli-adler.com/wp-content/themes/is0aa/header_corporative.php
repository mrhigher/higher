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
<?php if ( is_front_page()) {?>
	<title>Отели Адлера, частные гостиницы в Адлере с бассейном, Адлер цены 2015</title>
<?php }else{
	if (the_field('title') == " ") {?>
		<title><?php wp_title(' | ',true,'right'); ?><?php bloginfo('name'); ?></title>
	<?php }else{?>
		<title><?php the_field('title'); ?></title>
	<?php } ?>
<?php } ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<link rel="stylesheet" href="/wp-content/themes/is0aa/fonts/MyriadPro-Regular/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/is0aa/fonts/MyriadPro-It/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/is0aa/fonts/MyriadPro-Bold/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/is0aa/fonts/Lobster/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/is0aa/css/corporative.css?v=<?php echo $ch; ?>" />
<link rel="stylesheet" href="/wp-content/themes/is0aa/colorbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/is0aa/galleriffic-2.0/css/galleriffic-2.css" type="text/css" />


<!--[if lt IE 9]>
    <script src="/wp-content/themes/is0aa/ie.js?v=<?php echo $ch; ?>"></script>
<![endif]-->
<noindex><script async src="data:text/javascript;charset=utf-8;base64,ZnVuY3Rpb24gbG9hZHNjcmlwdChlLHQpe3ZhciBuPWRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoInNjcmlwdCIpO24uc3JjPSIvL2xwdHJhY2tlci5ydS9hcGkvIitlO24ub25yZWFkeXN0YXRlY2hhbmdlPXQ7bi5vbmxvYWQ9dDtkb2N1bWVudC5oZWFkLmFwcGVuZENoaWxkKG4pO3JldHVybiAxfXZhciBpbml0X2xzdGF0cz1mdW5jdGlvbigpe2xzdGF0cy5zaXRlX2lkPTk1NTk7bHN0YXRzLnJlZmVyZXIoKX07dmFyIGpxdWVyeV9sc3RhdHM9ZnVuY3Rpb24oKXtqUXN0YXQubm9Db25mbGljdCgpO2xvYWRzY3JpcHQoInN0YXRzX2F1dG8uanMiLGluaXRfbHN0YXRzKX07bG9hZHNjcmlwdCgianF1ZXJ5LTEuMTAuMi5taW4uanMiLGpxdWVyeV9sc3RhdHMp"></script></noindex>
</head>
<body data-pid="<?php the_ID(); ?>">
<?php referals(); ?>

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
		<div class="text">
		
		<?php //the_field('license', 6); 
		?>
		
		<p style="color: #000000;"><strong>Пользовательское соглашение</strong></p>
		<p style="color: #000000;">"Интернет-сайт «http://arli-adler.com/» (далее – сайт), в основе содержания которого, информация об Отеле «Арли», а именно описание, отзывы гостей, акции и т.д."</p>
		<noindex>
		<ol style="color: #000000;" type="1">
		<li>Настоящее Соглашение является публичной офертой. Получая доступ к материалам Сайта, Пользователь считается присоединившимся к настоящему Соглашению.</li>
		
		<li>Заполнение полей Имя и Телефон, является обязательным для участия в акции. В процессе регистрации Вам необходимо указать реальный телефон. Он не будет виден другим участникам сайта.</li>
	
		<li>Оставляя на сайте свои данные, пользователь выражает согласие на получение рассылки о новых спецпредложениях, размещаемых на сайте.</li>
		</ol>
			</noindex>
		<p style="color: #000000;">ВАЖНО! Самостоятельно принимать участие в акциях могут только лица, достигшие 18 лет, а также с 14 лет при согласии родителей.</p>
		
		
		</div>
	</div>
</div>


	<div class="top">
		<a href="/" class="top_logo db fll">Адлер<br />г. Сочи Адлерский район,<br />ул. Ленина, 219 Д<br />(Курортный городок)</a>
		<div class="top_hotel fll">Ресторан<br /><span>&laquo;Арли&raquo;</span></div>
		
		<div class="top_right flr">
			<div class="tr_phone"><a href="tel:88003336169">8 (800) 333-61-69</a></div>
			<div class="tr_text">Бесплатная горячая линия</div>
			<a href="#callback" onclick="step('callback-1');return true;" class="tr_callback db inline">Заказать обратный звонок</a>
		</div>
	</div>

<?php // sharebar(); ?>