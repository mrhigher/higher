<?php
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
$ch = 7;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php wp_title(); ?></title>
<?php wp_head(); ?>

<!--<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
<script src="<?php bloginfo('template_url');?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/is0aa/style.css?v=<?php echo $ch; ?>" />
<link rel="stylesheet" href="/wp-content/themes/is0aa/colorbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/is0aa/galleriffic-2.0/css/galleriffic-2.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/is0aa/carousel/css/styles-carousel.css">


<!--[if lt IE 9]>
    <script src="/wp-content/themes/is0aa/ie.js?v=<?php echo $ch; ?>"></script>
<![endif]-->

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

<div class="header">

<div class="top">
	<a href="/" class="top_logo db fll">Адлер<br />Курортный городок</a>
	<div class="top_hotel fll">ОТЕЛЬ</div>
	
	<div class="top_right flr">
		<div class="top_colli"></div><!---->
		<div class="tr_phone"><a href="tel:88003336169">8 (800) 333-61-69</a></div>
		<div class="tr_text">Бесплатная горячая линия</div>
		<a href="#callback" onclick="step('callback-1');return true;" class="tr_callback db inline">Заказать обратный звонок</a>
	</div>
	<div class="top_arli flr">&laquo;АРЛИ&raquo;</div>
	
	<!--
	<div class="top_arli1">
	СЕАНС БАНИ<br/>
	в подарок!<br/>
	<span>* при бронировании номера от 3-х дней</span>
	</div>
	-->
</div>
	<?php if($_SERVER['REQUEST_URI'] != '/'):?>
		<div class="m1_fg_top_top_menu top_menu_page">
			<?php //wp_nav_menu('menu=main'); ?>
			<ul class="top_menu_page_1 clearfix">
				<li><a href="/">Главная</a></li>
				<li><a href="/отдых-в-адлере/">О гостинице</a></li>
				<li><a href="/номера-и-цены/">Номера и цены</a></li>
				<li><a href="/услуги/">Услуги</a></li>
				<li><a href="/gornoliznui-tyr/">Горнолыжный тур</a></li>
				<li><a href="/кафе-бар/">Кафе, бар</a></li>
				<li><a href="/проведение-банкетов-и-корпоративов/">Банкеты и корпоративы</a></li>
			</ul>
			<ul class="top_menu_page_2 clearfix">
				<li><a href="/баня-на-дровах/">Баня</a></li>
				<li><a href="/семейный-отдых/">Семейный отдых</a></li>
				<li><a href="/экскурсии/">Экскурсии</a></li>
				<li><a href="/отдых-на-красной-поляне/">Отдых на Красной поляне</a></li>
				<li><a href="/романтическое-путешествие/">Романтическое путешествие</a></li>
				<li><a href="/формула/">Формула 1 2016</a></li>
			</ul>
			<ul class="top_menu_page_3 clearfix">
				<li><a href="/tury-na-prazdniki/">Туры на праздники</a></li>
				<li><a href="/об-адлере/">Об Адлере</a></li>
				<li><a href="/отзывы/">Отзывы</a></li>
				<li><a href="/контакты/">Контакты</a></li>
			</ul>
		</div>
	<?php endif;?>
</div>

<div style="display: none; height:135px;"></div>

<?php // sharebar(); ?>