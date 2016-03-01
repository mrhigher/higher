<?php
/*
Template Name: Отзывы
*/
get_header(); 

?>
<script>$(function(){$('body').addClass('bodybg').append('<style>.j4debug.bodybg{background:url(/numbers.jpg) 50% 0 no-repeat!important;height:2918px!important;}</style>');})</script>
<style>
.m7_video .slider-h .slide {
width:196px;
}
.m7_video .slider-h .slide img{
width:188px;
}
</style>

<div id="mid" class="mid">
	<div class="ml ml_reviews">
		<?php wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		<h3>Летние видео отзывы</h3>
		<div id="m7_video" class="m7_video" style="margin-bottom:20px;">
		<div class="slider-h" style="margin:0 0 0 0 !important;">
			<div class="arl6"></div>
			<div class="slider0" style="width:583px !important;">
			<div class="slider1">
			<?php if(have_rows('reports', 292)){while ( have_rows('reports', 292) ) : the_row();?>
				<div class="slide">
					<img src="<?php youtube_imgSF('code',0); ?>"/>
					<img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php youtube_idSF('code') ?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });">
				</div>
			<?php endwhile;}?>
			</div>
			</div>
			<div class="arr6"></div>
		</div>
		</div>
		<h3>Зимние видео отзывы</h3>
		<div id="m7_video" class="m7_video" style="margin-bottom:20px;">
		<div class="slider-h" style="margin:0 0 0 0 !important;">
			<div class="arl6"></div>
			<div class="slider0" style="width:583px !important;">
			<div class="slider1">
			<?php if(have_rows('reports', 2345)){while ( have_rows('reports', 2345) ) : the_row();?>
				<div class="slide">
					<img src="<?php youtube_imgSF('code',0); ?>"/>
					<img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php youtube_idSF('code') ?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });">
				</div>
			<?php endwhile;}?>
			</div>
			</div>
			<div class="arr6"></div>
		</div>
		</div>
		
		<?php the_content(); ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>