<?php
/*
Template Name: Баня
*/
?>
<?php get_header(); ?>

<div id="mid" class="mid">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1><br />
		<div class="text"><?php the_field('text'); ?></div>
		<?php if ( have_rows('photos') ) require_once 'galleriffic_standart.php'; ?>
	</div>
	<?php include('sidebar_banya.php'); ?>
</div>

<?php get_footer();?>