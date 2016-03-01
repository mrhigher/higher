<?php get_header(); ?>

<?php if(is_front_page()){ ?>
<script>$(function(){$('body').addClass('bodybg').append('<style>.j4debug.bodybg{background:url(/index.jpg) 50% 0 no-repeat!important;height:3990px!important;}</style>');})</script>
<div class="" style="
    text-align: center;
    font-size: 37px;
    font-weight: bold;
    margin-bottom: 3px;
">
ОТЕЛЬ «АРЛИ» - ОТДЫХ ЕВРОПЕЙСКОГО УРОВНЯ!
</div>
<div class="top_main">
	<?php wp_nav_menu('menu=top_main'); ?>
</div>

<div class="m1 por">
	<div id="slider" class="m1_slider zi10 j4hide">
		<div style="background-image:url(/wp-content/themes/is0aa/i/slider/top-slide04.jpg);"></div>
		<div style="background-image:url(/wp-content/themes/is0aa/i/slider/top-slide05.jpg);"></div>
		<div style="background-image:url(/wp-content/themes/is0aa/i/slider/arli.jpg);"></div>
		<div style="background-image:url(/wp-content/themes/is0aa/i/slider/arli-cafe.jpg);"></div>
		<div style="background-image:url(/wp-content/themes/is0aa/i/slider/arli-animator.jpg);"></div>
		
	</div>
	<div id="j4g" class="m1_slider zi10 j4show" style="display: none;">
		<div class="j4g_big">
			<img src="/wp-content/themes/is0aa/i/slider/top-slide04.jpg" />
			<img src="/wp-content/themes/is0aa/i/slider/top-slide05.jpg" />
			<img src="/wp-content/themes/is0aa/i/slider/arli.jpg" />
			<img src="/wp-content/themes/is0aa/i/slider/arli-cafe.jpg" />
			<img src="/wp-content/themes/is0aa/i/slider/arli-animator.jpg" />
			
		</div>
	</div>
	<div class="m1_fg zi20 j4hide">
		<div class="m1_fg_top">

<div class="m1_action action1 flr">
				<div class="l1" style="margin: 10px 0 10px;">ВНИМАНИЕ! АКЦИЯ!!!</div>
				<div class="l2">Забронируй номер сейчас и получи сутки проживания в подарок!</div>
				<img src="/wp-content/themes/is0aa/i/key-top.png" /><br />
				<small>*Мин. срок бронирования 10 дней.</small><br />
<?/*php if(0){// Прошлая акция ?>

				
				
				<!--<img src="/wp-content/themes/is0aa/i/car-top.png" alt="" style="margin: 0;"/>
			
				<div class="l4" style="font-size:20px;">Забронируйте номер сейчас<br/>
				и мы встретим Вас <br/>
				(аэропорт, жд вокзал) <br/>
				бесплатно <br/>
				<span style="font-size:14px;">* Акция действует до 01.05.2015 г.</span></div>
<?php }?>
<?php if(0){// Акция от 26.06.2014 ?>
				<img src="/wp-content/themes/is0aa/i/aks.png" alt="" style="margin: 8px 0 6px 3px;"/>
<?php }?>
<?php if(1){// Акция от 11.07.2014 ?>
<!---
				<div class="l2">Забронируйте номер сейчас<br />и получите 5 000 руб. в подарок</div><br>
	--->			
				<!--<img width="240" src="/wp-content/themes/is0aa/i/aks.png" alt="" style="margin: 0;"/>
				<div class="l4" style="margin-top:5px;">* Акция действует до 01.05.2015 г.</div>
				
 
				<?php }*/?>

				<div class="l5">СПЕШИТЕ!</div>
				<div class="l6">до конца акции осталось:</div>
				<div class="l6 temp hide">предложение ограниченно!</div>
				
				<div id="timer" class="l7_timer">
					<div class="t1">0</div>
					<div class="t2">0</div>
					<div class="t3">0</div>
					<div class="t4">0</div>
					<div class="t5">0</div>
					<div class="t6">0</div>
					<div class="t7">0</div>
					<div class="t8">0</div>
					<div class="day">ДНЯ</div>
					<div class="hour">ЧАСОВ</div>
					<div class="minute">МИНУТ</div>
					<div class="second">СЕКУНД</div>
				</div>
				
				<!--<div class="eTimer"></div>-->
			</div>	
		</div>
		<div class="m1_fg_top_menu">
			<ul>
				<!--<li><a href="/новый-год/">Новый год 2016</a></li>-->
				
				<li><a href="/gornoliznui-tyr/" data-section="lyzhy">Горнолыжный тур</a></li>
				
				<li><a href="/кафе-бар/" data-section="cafe_bar">Кафе и бар</a></li>
				
				<li><a href="/проведение-банкетов-и-корпоративов/" data-section="banket" >Банкеты</a></li>
				
				<li><a href="/баня-на-дровах/" data-section="banya" >Баня на дровах</a></li>
				
				<li><a href="/экскурсии/" data-section="ekskursii" >Экскурсии</a></li>
				
				<li><a href="/отдых-на-красной-поляне/" data-section="polyana" >Отдых на Красной поляне</a></li>
				
				<li><a href="/семейный-отдых/" data-section="otdyh" >Семейный отдых</a></li>
				
				<li><a href="/формула/" data-section="formula" >Формула 1 2016</a></li>
				
				<li><a href="/фотоотчет/" data-section="fotootchet" >Фотоотчет</a></li>
				<a name="1"></a>				
			</ul>
		</div>
		<div class="m1_fg_mid bron_form main">
			<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="12" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
		</div>
		<div class="m1_fg_bot">
			<div class="phone fll"><a href="tel:+79183074748">+7 (918) 307-47-48</a></div>
			<div class="text fll">отдел бронирования</div>
		</div>
		
		
	</div>
	<div id="squares" class="zi30"></div>
	<div class="m1_arr zi30"></div>
</div>

<div class="m2">
	<h2>Почему стоит приехать именно в нашу гостиницу?</h2>
	<? if(have_rows('pluses')): ?>
		<ul class="adventures clearfix">
			<?php while ( have_rows('pluses') ) : the_row();?>
				<li>
					<?php if(get_sub_field('pluses_link')) echo '<a href="'.get_sub_field('pluses_link').'">'?>
					<div class="adventure_img"><img src="<?php lar('pluses_img'); ?>" /></div>
					<div class="adventure_text">
						<b><?php the_sub_field('pluses_title'); ?></b>
						<?php the_sub_field('pluses_text'); ?>
					</div>
					<?php if(get_sub_field('pluses_link')) echo '</a>'?>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif ?>
	
	<!--<a class="db cb fll" href="http://arli-adler.com/wp-content/uploads/2014/04/mapb.png">
	<div class="m2_1" style="background-image:url(/wp-content/themes/is0aa/i/reason1.png);">Удобное<br>местоположение</div>
	</a>
	<div class="m2_2" style="background-image:url(/wp-content/themes/is0aa/i/reason2.png);">Развитая<br>инфраструктура</div>
	<div class="m2_3" style="background-image:url(/wp-content/themes/is0aa/i/reason3.png);">Бесплатный wi-fi<br>на всей территории</div>
	<div class="m2_4" style="background-image:url(/wp-content/themes/is0aa/i/reason4.png);">Наличие открытого<br>бассейна<br>(взрослого и детского)</div>
	<a class="db fll" href="/отдых-на-красной-поляне/">
	<div class="m2_5" style="background-image:url(/wp-content/themes/is0aa/i/reason7.png);">В наличии имеется<br> сушилка для лыж</div>
	</a>
	<a class="db fll" href="/экскурсии/"><div class="m2_6" style="background-image:url(/wp-content/themes/is0aa/i/reason6.png);">Экскурсионное бюро<br>и предоставление<br>бизнес услуг</div></a>-->
</div>

<div class="m3 navid" style="position:relative;">

	<a class="bbs" href="/романтическое-путешествие/" target="_blank">
		<p style="color:#000; text-align:right; position:absolute; left:430px; z-index:99; top:30px;">Подробнее</p>
		<img width="505" height="139"  src="<?php bloginfo('template_url');?>/i/ban10.jpg">
	</a>

	<a class="bbs" href="http://arli-adler.com/баня-на-дровах/" target="_blank" style="margin-top: 2px">
		<?/*<p style="color:#000; text-align:right; position:absolute; left:280px; z-index:99; top:167px;">Подробнее</p>*/?>
		<img width="505" height="139" src="<?php bloginfo('template_url');?>/i/ban9.jpg">
	</a>
	
	<? if(have_rows('statistic', 6)): ?>
		<div class="statistic">
			<ul>
				<?php while ( have_rows('statistic', 6) ) : the_row();?>
					<li style="background-image: url(<?php lar('statistic_img'); ?>)">
						<?php the_sub_field('statistic_text'); ?>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif ?>
	
	<div style="clear:both;"></div>
	<div class="banner_banket">
		<a href="/gornoliznui-tyr/" target="_blank"><img src="<?php bloginfo('template_url');?>/i/gor_tur.jpg"></a>
		<?php /*<object border="0" width="957" height="233" type="application/x-shockwave-flash" data="<?php bloginfo('template_url');?>/i/gor_tur_957x233.swf">
			<param name="movie" value="<?php bloginfo('template_url');?>/i/gor_tur_957x233.swf">
		</object>*/ ?>
	</div>
	<h1><?php the_title(); ?></h1>
	<div class="m3_text">
		<a name="2"></a>
		<?php the_field('m3_text'); ?>
	</div>
</div>

<div id="likes" class="likes">
	<link rel="stylesheet" href="/wp-content/themes/is0aa/social-likes_classic.css">
	<script src="/wp-content/themes/is0aa/js/social-likes.min.js"></script>
<div class="social-likes">
		<div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
		<div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
		<div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
		<div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
		<div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
	</div>
		
	<style>
		.likes{
			background: #DBD6DA;
			padding: 20px 0;
		}
		.social-likes>div{
			margin-left: 56px;
		}
		.social-links{

		}
		.social-links>a{
			color: #000;
			float: left;
			display: block;
			text-decoration: none;
		}
		.social-links>a img{
			display: block;
			float: left;
		}
		.social-links>a i{
			display: block;
			float: left;
			font-size: 15px;
			padding: 3px 0 0 5px;
		}
		.social-links>a i:hover{
			text-decoration: underline;
		}
		
	</style>

</div>

<div class="m3 navid" style="position:relative; margin:0;">
	<!--<div class="m3_video" style="position:absolute; right:0px; top:18px;"></div>-->
	<iframe width="490" height="303" src="https://www.youtube.com/embed/aUXIZSvZL_g?rel=0" frameborder="0" allowfullscreen="" style="float: left;"></iframe>
	<img style="margin-left: 18px;" src="<?php bloginfo('template_url');?>/i/reit.png">
	<div style="clear:both;"></div>
</div>
<img style="width: 999px;margin-left: -2px;" src="<?php bloginfo('template_url');?>/i/howwework.png">


<!-- Отзывы -->
<div class="m7">
	<h2><?php the_field('m7_h2'); ?></h2>
	<h3>Летние видео отзывы</h3>
	<div id="m7_video" class="m7_video">
		<div class="slider-h">
			<div class="arl6"></div>
			<div class="slider0">
			<div class="slider1">
				<?php if(have_rows('reports', 2523))
				{
					$arLink = array();
					while ( have_rows('reports', 2523) ) : the_row();
						$arLink[] .= get_sub_field('code');
					endwhile;

					for($i=count($arLink)-1; $i>=0; $i--)
					{?>
						<div class="slide">
							<img src="<?php echo "http://img.youtube.com/vi/".preg_replace('/.*(\.be\/)(.*)$/', "$2", $arLink[$i])."/0.jpg";?>"/>
									
							<img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php echo preg_replace('/.*(\.be\/)(.*)$/', "$2", $arLink[$i])?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });">
						</div>
					<?}
				}?>
			
			<?php/* if(have_rows('reports', 292)){while ( have_rows('reports', 292) ) : the_row();?>
				<div class="slide"><img src="<?php youtube_imgSF('code',0); ?>"/><img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php youtube_idSF('code') ?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });"></div>
			<?php endwhile;}*/?>
			</div>
			</div>
			<div class="arr6"></div>
		</div>
	</div>
	<h3>Зимние видео отзывы</h3>
	<div id="m7_video" class="m7_video">
		<div class="slider-h">
			<div class="arl6"></div>
			<div class="slider0">
			<div class="slider1">
			<?php if(have_rows('reports', 2345)){while ( have_rows('reports', 2345) ) : the_row();?>
				<div class="slide"><img src="<?php youtube_imgSF('code',0); ?>"/><img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php youtube_idSF('code') ?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });"></div>
			<?php endwhile;}?>
			</div>
			</div>
			<div class="arr6"></div>
		</div>
	</div>
	<?php /*<ul>
		<?php while(have_rows('m7_replies')) : the_row(); ?>
			<li>
				<img src="<?php the_sub_field('img'); ?>" alt="">
				<div class="text">
					<div class="text1"><?php the_sub_field('text1'); ?></div>
					<div class="text2"><?php the_sub_field('text2'); ?></div>
				</div>
			</li>
		<?php endwhile;?>
	</ul>*/?>
	<div style="clear:both;"></div>
	<div style="text-align: center;margin-bottom: 10px;">
		<a href="/отзывы/" class="tr_callback" style="display: inline-block;">Смотреть все отзывы</a>
	</div>
</div>

<div class="subscrib">
	<?php echo do_shortcode('[contact-form-7 id="2416" title="Подписка на горячие туры"]'); ?>
</div>

<!-- Дипломы, Свидетельства, Сертификаты -->
<div class="m6">
	<h2>ДИПЛОМЫ, СВИДЕТЕЛЬСТВА И СЕРТИФИКАТЫ:</h2>
	<h3>нажмите на фото, чтобы увеличить</h3>
	<div class="carousel"> 
	<div class="carousel-button-left"><a href="#"></a></div> 
    <div class="carousel-button-right"><a href="#"></a></div>
	
	<div class="carousel-wrapper"> 
		<div class="carousel-items"> 
			<div class="carousel-block">
				<a href="/wp-content/themes/is0aa/i/s1.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s1_s.jpg" alt="" /></a>
			</div>
			<div class="carousel-block">
				<a href="/wp-content/themes/is0aa/i/s2.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s2_s.jpg" alt="" /></a>
			</div>
			<div class="carousel-block">
				<a href="/wp-content/themes/is0aa/i/s6.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s6_s.jpg" alt="" /></a>
			</div>
			<div class="carousel-block">
				<a href="/wp-content/themes/is0aa/i/s3.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s3_s.jpg" alt="" /></a>
			</div>
			<div class="carousel-block">
				<a href="/wp-content/themes/is0aa/i/s4.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s4_s.jpg" alt="" /></a>
			</div>
			<div class="carousel-block">
				<a href="/wp-content/themes/is0aa/i/s5.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s5_s.jpg" alt="" /></a>
			</div>
			<div class="carousel-block">
				<a href="/wp-content/themes/is0aa/i/s7.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s7_s.jpg" alt="" /></a>
			</div>
		</div>
	</div>
	</div>
</div>


<div class="m4">
	<h2>Наши гости:</h2>
	<div class="m4_caption">На период проведения XXII Олимпийских зимних игр в г. Сочи, отель &laquo;Арли&raquo; рад был принять высоких гостей и олимпийских представителей Чехии</div>
	<div class="man1">
		<img src="/wp-content/themes/is0aa/i/man1.jpg" alt="" />
		<h3>Милош Земан</h3>
		<div class="text">Президент<br />Чешской Республики</div>
	</div>
	<div class="man2">
		<img src="/wp-content/themes/is0aa/i/man2.jpg" alt="" />
		<h3>Дука Доминик</h3>
		<div class="text">Чешский кардинал</div>
	</div>
	<div class="man3">
		<img src="/wp-content/themes/is0aa/i/man3.jpg" alt="" />
		<h3>Владимир Ремек</h3>
		<div class="text">Посол Чехии в РФ</div>
	</div>
	<div class="man4">
		<img src="/wp-content/themes/is0aa/i/man4.jpg" alt="" />
		<h3>Йири Кинос</h3>
		<div class="text">Чешский &nbsp;спортсмен, чемпион  &nbsp;Летних Олимпийских Игр 1972 г.</div>
	</div>
	<div class="man5">
		<img src="/wp-content/themes/is0aa/i/man5.jpg" alt="" />
		<h3>Алоиз Гадамчик</h3>
		<div class="text">Главный тренер мужской сборной Чехии по &nbsp;хоккею</div>
	</div>
</div>

<!--
<div id="slidx" class="m5 g1">
	<div class="slides">
		<div class="slides1" style="width:99999px">
			<a href="/wp-content/themes/is0aa/i/01.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/01.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/02.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/02.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/03.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/03.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/04.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/04.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/05.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/05.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/06.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/06.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/07.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/07.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/09.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/09.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/11.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/11.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/12.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/12.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/13.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/13.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/14.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/14.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/15.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/15.jpg" /></a>
			<a href="/wp-content/themes/is0aa/i/16.jpg" class="cboxElement" rel="ms"><img src="/wp-content/themes/is0aa/i/16.jpg" /></a>
		</div>
	</div>
	<div class="arl"><img src="/wp-content/themes/is0aa/i/arl.png" /></div>
	<div class="slidmin">
		<div class="slidmin1" style="cursor:pointer;width:99999px">
			<img src="/wp-content/themes/is0aa/i/01.jpg" />
			<img src="/wp-content/themes/is0aa/i/02.jpg" />
			<img src="/wp-content/themes/is0aa/i/03.jpg" />
			<img src="/wp-content/themes/is0aa/i/04.jpg" />
			<img src="/wp-content/themes/is0aa/i/05.jpg" />
			<img src="/wp-content/themes/is0aa/i/06.jpg" />
			<img src="/wp-content/themes/is0aa/i/07.jpg" />
			<img src="/wp-content/themes/is0aa/i/09.jpg" />
			<img src="/wp-content/themes/is0aa/i/11.jpg" />
			<img src="/wp-content/themes/is0aa/i/12.jpg" />
			<img src="/wp-content/themes/is0aa/i/13.jpg" />
			<img src="/wp-content/themes/is0aa/i/14.jpg" />
			<img src="/wp-content/themes/is0aa/i/15.jpg" />
			<img src="/wp-content/themes/is0aa/i/16.jpg" />
		</div>
	</div>
	<div class="arr"><img src="/wp-content/themes/is0aa/i/arr.png" /></div>
</div>
-->
<!-- Нижняя форма бронирования -->
<div id="m8" class="m8">
	<div class="m8_form bron_form main" style="padding-top:0">
		<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="14" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
	</div>
	<div class="m8_phone">
		<div class="number">+7 (918) 307-47-48</div>
		<div class="text">отдел бронирования</div>
	</div>
</div>

<div class="m9">
	<div class="preview_text">
		<?php the_field('preview_text') ?>
		<p align="right"><a class="detail_show">подробнее</a></p>
	</div>
	<div class="detail_text" id="detail_text">
		<?php the_field('detail_text') ?>
	</div>
</div>
<?php  } else { ?>
<div id="mid" class="mid">
	<div class="ml">
		<?php wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		<?php require_once 'gallery0.php'; ?>
		<div class="text"><?php the_field('text'); ?></div>

	

	</div>
	<?php get_sidebar(); ?>
</div>
<?php } ?>

<div id="scroll_header" class="header">
	<div class="top">
		<a href="/" class="top_logo db fll"></a>
		<div class="top_hotel fll">ОТЕЛЬ</div>		
		<div class="top_right flr">
			<div class="top_colli"></div>
			<div class="tr_phone"><a href="tel:88003336169">8 (800) 333-61-69</a></div>
			<div class="tr_text">Бесплатная горячая линия</div>
			<a href="#callback" onclick="step('callback-1');return true;" class="tr_callback db inline">Заказать обратный звонок</a>
		</div>
		<div class="top_arli flr">&laquo;АРЛИ&raquo;</div>
	</div>
	<div class="top_main"><?php wp_nav_menu('menu=top_main'); ?></div>
</div>
<?php get_footer();?>