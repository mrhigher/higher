<?php
/*
Template Name: Корпоративным клиентам
*/
get_header(); 
?>			

<div id="mid" class="mid">
	<div class="ml ml_num">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title();?></h1>
		<img style="margin-top:20px;" src="<?php the_field('k-img');?>">
		<div style="clear:both;"></div>
		<div class="kor-tit">
			<?php the_field('k-tit');?>
		</div>
		<p class="k-text">
			<?php the_field('k-text');?>
		</p>
		<div class="k-tit-f">
			<img style="margin-top:20px;" src="<?php the_field('k-f-1');?>">
			<p class="k-text-1">
				<?php the_field('k-tit-1');?>
			</p>
			<div class="k-text-2">
				<?php the_field('k-t-1');?>		
				<!--
				<p>Мы предлагаем вам уникальную возможность провести корпоративный отдых в отеле «Арли» (Адлер). Наши условия:
				<br/>
				<div style="margin-left:20px; line-height:1.5em; margin-top:20px;">
					• 35%-ная скидка на проживание в двухместных номерах классов «Стандарт» и «Евростандарт». Предложение действительно до 15 декабря 2014 года.
					<br/>
					• В стоимость номера включается завтрак на 2 персоны (система «шведский стол»). 
					<br/>
					• К вашим услугам будет ресторан и конференц-холл. Стоимость обеда в ресторане составляет 1200 рублей на одного человека. С меню можно ознакомиться подробнее. 
					<br/>
					Оно находится в прикрепленном файле.</p>
				</div>	
				-->
					<div class="k-but">
					<img src="<?php bloginfo('template_url');?>/i/arrr.png">
					<a href="<?php the_field('k-menu');?>" class="k-menu">
						Скачать меню ресторана
					</a>
					</div>
				<?php the_field('k-t-2');?>		
				<!--	
				<div style="margin-left:20px; line-height:1.5em; margin-top:20px;">	
					•	При заключении договора мы предоставим 20% скидку на проживание всех ваших сотрудников
					<br/>
					•	А, если вы решите провести в отеле новогодний корпоратив, то также получите 20% скидку.
				</div>
				<br/>
				Не правда ли, заманчивое предложение накануне Нового года? Как тут не поверить в чудеса?!
				-->
			</div>	
		</div>	
		<div class="k-tit-f">
			<img style="margin-top:20px;" src="<?php the_field('k-f-2');?>">
			<p class="k-text-1" style="line-height:11.3em;">
				<?php the_field('k-tit-2');?>
			</p>
			<div class="k-norm">
				<?php the_field('K2-mini');?>
			</div>	
		</div>
		<?php if(have_rows('k-list')){while ( have_rows('k-list') ) : the_row();?>
			<div class="k-list" style="background:url(<?php echo get_sub_field('k-list-img'); ?>) no-repeat;">
				<?php echo get_sub_field('k-list-text'); ?>
			</div>
		<?php endwhile;}?>
		<div class="k-list" style="padding-left:0px; min-height:20px;  text-indent:20px;" >
			В Адлере вас ожидает отличный отдых. А, если вы воспользуетесь нашим предложением, он станет привлекательней в несколько раз. 
		</div>
		
		<div class="dogovor">
			<a href="<?php the_field('k-d');?>" class="k-menu" style="width:200px;">
				Скачать договор
			</a>
		</div>
		
	</div>
	<?php get_sidebar(); ?>
	
</div>
<?php get_footer(); ?>