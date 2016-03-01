<?php
/*
Template Name: Фотоотчет
*/
get_header(); 
$report = 1;
?>
<style>
.mw100p #menu-main {
width: 996px;
}
</style>
<div id="mid" class="mid nomr hdeal">
	<div class="mw100p">
		<?php //wp_nav_menu('menu=main'); ?>

		<?php while(have_rows('album')) : the_row(); ?>
		<div id="report<?php echo $report; ?>" class="sblock">
			<h2><?php the_sub_field('h2'); ?></h2>
			<script>$(function(){$('#report<?php echo $report; ?> a[href*="jpg"]').colorbox({maxHeight:"80%",rel:"gal<?php echo $id; ?>"});});</script>
			<div class="slider-h">
				<div class="arl6"></div>
				<div class="slider0">
				<div class="slider1">
			<?php if(have_rows('photos')){while ( have_rows('photos') ) : the_row();?>
				<div class="slide"><a href="<?php lar('photo'); ?>"><img src="<?php thu('photo'); ?>"></a></div>
			<?php endwhile;}?>
				</div>
				</div>
				<div class="arr6"></div>
			</div>
		</div>
		<?php 
			$report++;
			endwhile;
		?>
		<?php the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>