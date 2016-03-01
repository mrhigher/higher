<?php get_header(); ?>

<?php if(is_front_page()){ ?>
<script>$(function(){$('body').addClass('bodybg').append('<style>.j4debug.bodybg{background:url(/index.jpg) 50% 0 no-repeat!important;height:3990px!important;}</style>');})</script>
<div class="m1 por">
	<div id="slider" class="m1_slider zi10 j4hide">
		<div style="background-image:url(/wp-content/themes/is0aa/i/top-slide01.jpg);"></div>
		<div style="background-image:url(/wp-content/themes/is0aa/i/top-slide02.jpg);"></div>
		<div style="background-image:url(/wp-content/themes/is0aa/i/top-slide03.jpg);"></div>
		<div style="background-image:url(/wp-content/themes/is0aa/i/top-slide04.jpg);"></div>
	</div>
	<div id="j4g" class="m1_slider zi10 j4show" style="display: none;">
		<div class="j4g_big">
			<img src="/wp-content/themes/is0aa/i/top-slide01.jpg" />
			<img src="/wp-content/themes/is0aa/i/top-slide02.jpg" />
			<img src="/wp-content/themes/is0aa/i/top-slide03.jpg" />
			<img src="/wp-content/themes/is0aa/i/top-slide04.jpg" />
		</div>
	</div>
	<div class="m1_fg zi20 j4hide">
		<div class="m1_fg_top">

<div class="m1_action action1 flr">
				<div class="l1" style="margin: 8px 0 3px;">ВНИМАНИЕ! АКЦИЯ!!!</div>
<?php if(0){// Прошлая акция ?>
<!---
				<div class="l2">Забронируйте номер сейчас<br />и получите 5 000 руб. в подарок</div><br>
		--->		
				<img src="/wp-content/themes/is0aa/i/car-top.png" alt="" style="margin: 0;"/>
			
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
				<img width="240" src="/wp-content/themes/is0aa/i/aks.png" alt="" style="margin: 0;"/>
				<div class="l4" style="margin-top:5px;">* Акция действует до 01.05.2015 г.</div>
				
 
				<?php }?>

				<div class="l5">СПЕШИТЕ!</div>
				<div class="l6">до конца акции осталось:</div>
				<div class="l6 temp hide">предложение ограниченно!</div>
				<!---
				<div id="timer" class="l7_timer" style="background:none;">
				<div id="countbox"></div>
				
				<div class="day">дней</div>
				<div class="hour">часов</div>
				<div class="minute">минут</div>
				<div class="second">секунд</div>
				</div>
				--->
				
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
				
			</div>
			<ul class="m1_fg_top_top_menu">
				<li><a href="/">Главная</a></li>
				<li><a href="/услуги/">Услуги</a></li>
				<li class="y-b"><a href="/номера-и-цены/">Номера и цены</a></li>
				
				<li class="y-b"><a href="/баня-на-дровах/">Баня на дровах</a></li>
				
				<!---
				<li style="padding-top:10px">
					<a href="http://arli-adler.com/новогодний-тур/" class="tr_callback" style="background:url(<?php bloginfo('template_url');?>/i/new-year.png); display:block; position:relative;  top:-37px; height:50px; width: 200px;">
						&nbsp;
					</a>
				</li>
				-->
				
<li class="y-b"><a href="/отзывы/">Отзывы</a></li>
				<li><a href="/контакты/">Контакты</a></li>
				
				
			</ul>
			<ul class="m1_fg_top_menu fll">
				<!--li><a href="/">Главная</a></li-->
				<!--li><a href="/отдых-в-адлере/" class="active">О гостинице</a></li-->
				<!--li><a href="/номера-и-цены/">Номера и цены</a></li-->
				
				<!-- <li><a href="/фотогалерея/">Фотогалерея</a></li> -->
				<!--li><a href="/отзывы/">Отзывы</a></li-->
				
                               <li><a href="/отдых-в-адлере/" class="active">О гостинице</a></li> 
								
                                <li><a href="/семейный-отдых/">Семейный отдых</a></li>
				<li><a href="/кафе-бар/">Кафе и бар</a></li>
				<li><a href="/формула/">Формула 1 2015</a></li>
				<!--<li><a href="/корпоративным-клиентам/">Корпоративным клиентам</a></li>-->
				<li><a href="/фотоотчет/">Фотоотчет</a></li>
				
				<!--li><a href="/контакты/">Контакты</a></li-->
				<!-- <li><a href="/юридическим-лицам/">Юридическим лицам</a></li> -->
				<!-- <li><a href="/партнерам/">Партнерам</a></li> -->
				<li><a href="/отдых-на-красной-поляне/">Отдых на Красной поляне</a></li>
<a name="1"></a>
				<!--li style="padding-top:10px"><a href="http://arli-adler.com/gornoliznui-tyr/" class="tr_callback" style="margin-left: -21px;width: 200px;padding: 10px 25px;height: 19px;">Горнолыжные туры</a></li-->
				
				<!--li style="padding-top:10px">
					<a href="http://arli-adler.com/новогодний-тур/" class="tr_callback" style="background:url(<?php bloginfo('template_url');?>/i/new-year.png); display:block; height:50px; margin-left: -14px;width: 200px;">
						&nbsp;
					</a>
				</li-->
				
			</ul>
			
		</div>
		<div class="m1_fg_mid bron_form">
			<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="12" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
		</div>
		<div class="m1_fg_bot">
			<div class="phone fll">+7 (918) 307-47-48</div>
			<div class="text fll">отдел бронирования</div>
		</div>
		
		
	</div>
	<div id="squares" class="zi30"></div>
	<div class="m1_arr zi30"></div>
</div>

<div class="m2">
	<h2>Почему стоит приехать именно в нашу гостиницу?</h2>
	<a class="db cb fll" href="http://arli-adler.com/wp-content/uploads/2014/04/mapb.png">
	<div class="m2_1" style="background-image:url(/wp-content/themes/is0aa/i/reason1.png);">Удобное<br>местоположение</div>
	</a>
	<div class="m2_2" style="background-image:url(/wp-content/themes/is0aa/i/reason2.png);">Развитая<br>инфраструктура</div>
	<div class="m2_3" style="background-image:url(/wp-content/themes/is0aa/i/reason3.png);">Бесплатный wi-fi<br>на всей территории</div>
	<div class="m2_4" style="background-image:url(/wp-content/themes/is0aa/i/reason4.png);">Наличие открытого<br>бассейна<br>(взрослого и детского)</div>
	<a class="animahover" href="http://arli-adler.com/%D1%84%D0%BE%D1%82%D0%BE%D0%BE%D1%82%D1%87%D0%B5%D1%82/">
	<div class="m2_5" style="background-image:url(/wp-content/themes/is0aa/i/reason5.png);">Анимационная летняя<br>программа для детей<br>каждый день</div>
	</a>
	<div class="m2_6" style="background-image:url(/wp-content/themes/is0aa/i/reason6.png);">Экскурсионное бюро<br>и предоставление<br>бизнес услуг</div>
</div>

<div class="m3 navid" style="position:relative;">

	<a href="http://arli-adler.com/%D0%B1%D0%B0%D0%BD%D1%8F-%D0%BD%D0%B0-%D0%B4%D1%80%D0%BE%D0%B2%D0%B0%D1%85/">
		<p style="color:#7a3166; font-weight:bold; font-size:25px; text-align:left; position:absolute; left:344px; z-index:99; top:47px;">
			БАНЯ<br/> НА ДРОВАХ!
		</p>
		<p class="bbss" style="color:#000; text-decoration:underline; font-size:14px; text-align:left; position:absolute; left:344px; z-index:99; top:119px;">
			Узнать подробнее
		</p>
		<img width="508" height="139"  src="<?php bloginfo('template_url');?>/i/ban9.png" onmouseover="this.width=510;this.height=141" onmouseout="this.width=508;this.height=139">
	</a>
	<a href="http://arli-adler.com/gornoliznui-tyr/">
		<img width="248" height="169" style="position:absolute; left:19px; top:157px;" src="<?php bloginfo('template_url');?>/i/ban2.png" onmouseover="this.width=250;this.height=171" onmouseout="this.width=248;this.height=169">
	</a>
	<a class="bbs" href="http://arli-adler.com/%D1%81%D0%B5%D0%BC%D0%B5%D0%B9%D0%BD%D1%8B%D0%B9-%D0%BE%D1%82%D0%B4%D1%8B%D1%85/">
		<p style="color:#000; text-align:right; position:absolute; left:366px; z-index:99; top:167px;">Как отдохнуть всей<br/> семьей в Адлере?</p>
		<img width="260" height="169" style="position:absolute; left:267px; top:157px;" src="<?php bloginfo('template_url');?>/i/ban3.png" onmouseover="this.width=262;this.height=171" onmouseout="this.width=260;this.height=169">
	</a>
	<div class="m3_video" style="position:absolute; right:0px; top:18px;"><iframe  width="469" height="308" src="https://www.youtube.com/embed/aUXIZSvZL_g?rel=0" frameborder="0" allowfullscreen></iframe><?php the_field('m3_video'); ?></div>
	<div style="height:320px;"></div>
	
	<!--a class="new-y-tyr" href="http://arli-adler.com/новогодний-тур/">
		<img style="width:960px;" src="<?php bloginfo('template_url');?>/i/new-tyr.jpg">
	</a-->
	
	<div style="clear:both;"></div>
	<h1><?php the_title(); ?></h1>
	<div class="m3_text"><?php the_field('m3_text'); ?></div>
</div>

<div id="likes" class="likes">
	<link rel="stylesheet" href="/wp-content/themes/is0aa/social-likes_classic.css">
	<script src="/wp-content/themes/is0aa/social-likes.min.js"></script>
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

<div class="m31">
	<a href="http://arli-adler.com/#1"><img src="<?php the_field('hd_main_banner'); ?>" alt=""></a>
</div>
<!-- Отзывы -->
<div class="m7">
	<h2><?php the_field('m7_h2'); ?></h2>
	<h3>Летние видео отзывы</h3>
	<div id="m7_video" class="m7_video">
		<div class="slider-h">
			<div class="arl6"></div>
			<div class="slider0">
			<div class="slider1">
			<?php if(have_rows('reports', 292)){while ( have_rows('reports', 292) ) : the_row();?>
				<div class="slide"><img src="<?php youtube_imgSF('code',0); ?>"/><img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php youtube_idSF('code') ?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });"></div>
			<?php endwhile;}?>
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
	<ul>
		<?php while(have_rows('m7_replies')) : the_row(); ?>
			<li>
				<img src="<?php the_sub_field('img'); ?>" alt="">
				<div class="text">
					<div class="text1"><?php the_sub_field('text1'); ?></div>
					<div class="text2"><?php the_sub_field('text2'); ?></div>
				</div>
			</li>
		<?php endwhile;?>
	</ul>
</div>



<!-- Дипломы, Свидетельства, Сертификаты -->
<div class="m6">
	<h2>ДИПЛОМЫ, СВИДЕТЕЛЬСТВА И СЕРТИФИКАТЫ:</h2>
	<h3>нажмите на фото, чтобы увеличить</h3>
	<a href="/wp-content/themes/is0aa/i/s1.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s1_s.jpg" alt="" /></a>
	<a href="/wp-content/themes/is0aa/i/s2.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s2_s.jpg" alt="" /></a>
	<a href="/wp-content/themes/is0aa/i/s3.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s3_s.jpg" alt="" /></a>
	<a href="/wp-content/themes/is0aa/i/s4.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s4_s.jpg" alt="" /></a>
	<a href="/wp-content/themes/is0aa/i/s5.jpg" class="m6_sertif"><img src="/wp-content/themes/is0aa/i/s5_s.jpg" alt="" /></a>
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

<!-- Нижняя форма бронирования -->
<div id="m8" class="m8">
	<div class="m8_form bron_form">
		<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="14" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
	</div>
	<div class="m8_phone">
		<div class="number">+7 (918) 307-47-48</div>
		<div class="text">отдел бронирования</div>
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
<?php get_footer();?>