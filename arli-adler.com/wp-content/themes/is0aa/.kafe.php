<?php
/*
Template Name: Кафе, бар
*/
get_header(); ?>
<div id="mid" class="mid">
	<div class="ml ml_kafe">
		<?php wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		<div style="clear:both;"></div>
		<?php require_once 'gallery0.php'; ?>
		<div style="clear:both;"></div>
		<div class="text"><?php the_field('text'); ?></div>

	

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();?>