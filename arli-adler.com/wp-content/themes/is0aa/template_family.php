<?php
/*
Template Name: Семейный отдых
*/
?>
<?php get_header(); ?>
<style>
.m7_video .slider-h .slide {
width:196px!important;
}
.m7_video .slider-h .slide img{
width:188px!important;
}
</style>

<div id="mid" class="mid">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		<br />
		<?php if(have_rows('photos', 879)):?>
		<div class="m7_video" style="margin-bottom:20px;">
			<div class="slider-h" style="margin:0 0 0 0 !important;">
				<div class="arl6"></div>
				<div class="slider0" style="width:583px !important;">
					<div class="slider1">
							<?php 
							$arLink = array();
							while ( have_rows('photos', 879) ) : the_row();
								$image = get_sub_field('photo');
								$arLink[] .= $image['url'];
								
							endwhile;
							for($i=count($arLink)-1; $i>=0; $i--){
							?>
								<div class="slide">
									<a href="<?php echo $arLink[$i];?>" rel="group" class="cboxElement"><img src="<?php echo $arLink[$i];?>"/></a>
								</div>
							<?
							}
							?>
					</div>
				</div>
				<div class="arr6"></div>
			</div>
		</div>
		<?php endif ?>
		
		<?php if(have_rows('videorolik', 879)):?>
		<div class="m7_video" style="margin-bottom:20px;">
			<div class="slider-h" style="margin:0 0 0 0 !important;">
				<div class="arl6"></div>
				<div class="slider0" style="width:583px !important;">
					<div class="slider1">
							<?php 
							$arLink = array();
							while ( have_rows('videorolik', 879) ) : the_row();
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
							?>
					</div>
				</div>
				<div class="arr6"></div>
			</div>
		</div>
		<?php endif ?>
		<div class="text"><?php the_field('text'); ?></div>

	

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer();?>