<?php
/*
Template Name: Отзывы1
*/

get_header(); ?>

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
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		
		<h3>Летние видео отзывы</h3>
		<div id="m7_video" class="m7_video" style="margin-bottom:20px;">
			<div class="slider-h" style="margin:0 0 0 0 !important;">
				<div class="arl6"></div>
				<div class="slider0" style="width:583px !important;">
					<div class="slider1">
						<?php if(have_rows('reports', 2523))
						{
							$arLink = array();
							while ( have_rows('reports', 2523) ) : the_row();
								$arLink[] .= get_sub_field('code');
							endwhile;

							for($i=count($arLink)-1; $i>=0; $i--){
							?>
								<div class="slide">
									<img src="<?php echo "http://img.youtube.com/vi/".preg_replace('/.*(\.be\/)(.*)$/', "$2", $arLink[$i])."/0.jpg";?>"/>
									
									<img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php echo preg_replace('/.*(\.be\/)(.*)$/', "$2", $arLink[$i])?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });">
								</div>
							<?
							}
						}?>
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
						<?php if(have_rows('reports', 2345))
						{
							while ( have_rows('reports', 2345) ) : the_row();?>
								<div class="slide">
									<img src="<?php youtube_imgSF('code',0); ?>"/>
									<img src="/wp-content/themes/is0aa/i/ytplay1.png" id="ytplay" onclick="$.colorbox({ href: 'http://www.youtube.com/embed/<?php youtube_idSF('code') ?>', maxWidth: '80%', maxHeight: '80%', width: '640', height: '480', iframe: true });">
								</div>
							<?php endwhile;
						}?>
					</div>
				</div>
				<div class="arr6"></div>
			</div>
		</div>
		
		<div class="reviews">
			<?php 
				query_posts( array( 'cat' => 4, 'paged' => get_query_var( 'paged' ) ) );
				while ( have_posts() ) : the_post();?>
					<div class="hreview">
						<div class="wpcr_photo">
							<?php 
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
							?>
							<a class="cboxElement" href="<?php echo $thumb_url[0]; ?>"><?php the_post_thumbnail(); ?></a>
							<div class="wpcr_fl wpcr_rname">
								<p class="fn"><?php the_title(); ?></p>
							</div>
						</div>
						<div class="wpcr_content">
							<blockquote class="description">
								<?php the_content();?>
								<p class="wpcr_date"><?php the_date(); ?></p>
							</blockquote>
							<p class="response">
								<strong>Ответ руководства:</strong>
								<?php the_field('otvet'); ?>
							</p>
						</div>
						<div class="wpcr_clear"></div>
						<div class="wpcr_clear wpcr_spacing1"></div>
					</div>
				<?php endwhile; ?> 

				<?php wp_pagenavi();?>
		</div>
		<div id="wpcr_postcomment">Добавить отзыв:</div>
		<?php echo do_shortcode('[contact-form-7 id="2522" title="Оставить отзыв" html_class="use-floating-validation-tip"]'); ?>
	</div><!-- #ml_reviews -->
	<?php get_sidebar(); ?>
</div><!-- #primary -->
<?php get_footer(); ?>