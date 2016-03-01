<?php
/*
Template Name: Акция 1 рубль
*/
?>
<?php get_header(); ?>

<script>$(function(){$('body').addClass('bodybg').append('<style>.j4debug.bodybg{background:url(/index.jpg) 50% 0 no-repeat!important;height:3990px!important;}</style>');})</script>
<div class="" style="text-align: center; font-size: 37px; font-weight: bold; margin-bottom: 3px;">
ОТЕЛЬ «АРЛИ» - ОТДЫХ ЕВРОПЕЙСКОГО УРОВНЯ!
</div>
<div class="m1 por akciya">
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
				<div class="l1" style="margin: 8px 0 10px;">ВНИМАНИЕ! АКЦИЯ!!!</div>
				<div class="l2">Забронируй номер<br />за <span>1 рубль!</span></div>
				<img src="/wp-content/themes/is0aa/i/key-top.png" /><br />
				<small>*Минимальный срок бронирования - 5 дней.</small>

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
		<div class="m1_fg_mid bron_form">
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
	<a class="db cb fll" href="http://arli-adler.com/wp-content/uploads/2014/04/mapb.png">
	<div class="m2_1" style="background-image:url(/wp-content/themes/is0aa/i/reason1.png);">Удобное<br>местоположение</div>
	</a>
	<div class="m2_2" style="background-image:url(/wp-content/themes/is0aa/i/reason2.png);">Развитая<br>инфраструктура</div>
	<div class="m2_3" style="background-image:url(/wp-content/themes/is0aa/i/reason3.png);">Бесплатный wi-fi<br>на всей территории</div>
	<div class="m2_4" style="background-image:url(/wp-content/themes/is0aa/i/reason4.png);">Наличие открытого<br>бассейна<br>(взрослого и детского)</div>
	<a class="animahover" href="http://arli-adler.com/%D1%84%D0%BE%D1%82%D0%BE%D0%BE%D1%82%D1%87%D0%B5%D1%82/">
	<div class="m2_5" style="background-image:url(/wp-content/themes/is0aa/i/reason5.png);">Анимационная летняя<br>программа для детей<br>каждый день и детская<br>игровая комната</div>
	</a>
	<div class="m2_6" style="background-image:url(/wp-content/themes/is0aa/i/reason6.png);">Экскурсионное бюро<br>и предоставление<br>бизнес услуг</div>
</div>

<div class="m3 navid akciya" style="position:relative;">
	<div style="height:320px; width: 447px;margin: 0 auto;">
		<img style="margin-top: 2px;height: 306px;width: 447px;" src="<?php bloginfo('template_url');?>/i/stat.png">
	</div>	
	<div style="clear:both;"></div>

	<div class="m3_text">
		<a name="2"></a>
		<?php 
		$page_id = 3497; 
		$page_data = get_page( $page_id ); 
		print apply_filters('the_content', $page_data->post_content);
		?>
	</div>
</div>

<div class="m3 navid" style="position:relative; margin:0;">
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
	<div style="clear:both;"></div>
	<div style="text-align: center;margin-bottom: 10px;">
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

<div class="m9">
	<div class="preview_text">
		<?php the_field('preview_text') ?>
		<p align="right"><a class="detail_show">подробнее</a></p>
	</div>
	<div class="detail_text" id="detail_text">
		<?php the_field('detail_text') ?>
	</div>
</div>

<?php include('footer_akciya.php'); ?>