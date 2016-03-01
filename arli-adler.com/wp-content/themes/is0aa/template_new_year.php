<?php
/*
Template Name: Новый год
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/is0aa/fonts/Tahoma/styles.css" type="text/css" media="screen" />

<div class="new_year">
		<?php $image = get_field('banner');?>
		<img class="banner" src="<?php echo $image['url']; ?>">
		<h2 class="green">Программа веселого отдыха</h2>
		
		<div class="numbers">
			<?php if(have_rows('table')): ?>
				<div class="table_numbers">
					<table cellpadding="0" cellspacing="0" border="0">
					<?php while ( have_rows('table') ) : the_row();?>
						<tr>
							<td><?php the_sub_field('cell_1'); ?></td>
							<td><?php the_sub_field('cell_2'); ?></td>
							<td><?php the_sub_field('cell_3'); ?></td>
							<td><?php the_sub_field('cell_4'); ?></td>
							<td><?php the_sub_field('cell_5'); ?></td>
							<td><?php the_sub_field('cell_6'); ?></td>
						</tr>
					<?php endwhile; ?>
					</table>
					<?php the_field('text_table');?>
				</div>
			<?php endif ?>
		</div>
		
		<div class="form_new_year bron_form">
			<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="12" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
		</div>
		
		<div class="new_year_moning">
			<?php the_field('moning_text');?>
		</div>
		
		<div class="new_year_programm">
			<div class="left">
				<?php the_field('time_banket');?>
				<?php if(have_rows('programm')): ?>
					<h3>Новая новогодняя программа</h3>
					<ul>
						<?php while ( have_rows('programm') ) : the_row();?>
							<li><?php the_sub_field('item_programm'); ?></li>
						<?php endwhile; ?>
					</ul>
				<?php endif ?>
			</div>
			<div class="right">
				<?php the_field('video');?>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="new_year_photo">
			<?php if(have_rows('photos_2015')): ?>
				<h3>Смотреть фотографии</h3>
				<div class="slider-h">
					<div class="arl6"></div>
					<div class="slider0">
						<div class="slider1">
							<?php while(have_rows('photos')) : the_row(); ?>
								<div class="slide">
									<a href="<?php lar('photo'); ?>" rel="album"><img src="<?php thu('photo'); ?>"></a>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
					<div class="arr6"></div>
				</div>
			<?php endif ?>
			<?php the_field('jun_text');?>
		</div>
		
		<hr />
		
		<?php if(have_rows('photos_2015')): ?>
			<div class="new_year_photo_2015">
				<div class="sblock">
					<h3>Как мы встречали 2015-й новый год</h3>
					<div class="slider-h">
						<div class="arl6"></div>
						<div class="slider0">
							<div class="slider1">
								<?php while(have_rows('photos_2015')) : the_row(); ?>
									<div class="slide">
										<a href="<?php lar('photo_2015'); ?>" rel="album"><img src="<?php thu('photo_2015'); ?>"></a>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
						<div class="arr6"></div>
					</div>
				</div>
			</div>
		<?php endif ?>
		
		<img src="/wp-content/themes/is0aa/i/banner_ng_2016.jpg" style="float: none; margin: 20px 0;" />
		
		<div class="new_year_question">
			<div class="string">
				<div class="str1">Все еще остались вопросы?</div>
				<div class="str2">Звони по телефону</div>
				<div class="str3">8 (800) 333-61-69</div>
			</div>
			<div class="question_form">
				<h2>Оставляй заявку</h2>
				<h3>Наш менеджер свяжется<br />с вами в ближайшее время!</h3>
				<?php echo do_shortcode('[contact-form-7 id="8" title="Форма обратного звонка"]'); ?>
			</div>
		</div>
		
		<div class="about_hotel">
			<h2>Немного<br />об отеле "Арли"</h2>
			<?php if(have_rows('characters')): ?>
				<div class="characters_hotel">
					<ul>
						<?php while ( have_rows('characters') ) : the_row();?>
							<li><?php the_sub_field('character'); ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif ?>
			<div class="clear"></div>
			<div class="about_hotel_text"><?php the_field('about_hotel');?></div>
		</div>
		
		<div class="winter_reviews">
			<h2>Смотрите зимние отзывы о нашем отеле:</h2>
			<div class="m7_video">
				<div class="slider-h" style="margin:0 0 0 0 !important;">
					<div class="arl6"></div>
					<div class="slider0">
						<div class="slider1">
							<?php if(have_rows('reports', 2345)):
								while ( have_rows('reports', 2345) ) : the_row();?>
									<div class="slide">
										<img src="<?php youtube_imgSF('code',0); ?>"/>
										<img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php youtube_idSF('code') ?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });">
									</div>
								<?php endwhile;
							endif?>
						</div>
					</div>
					<div class="arr6"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="elka"></div>
		<div class="form_new_year bron_form" style="margin-bottom: 30px;">
			<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="14" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
		</div>
</div>

<?php get_footer();?>