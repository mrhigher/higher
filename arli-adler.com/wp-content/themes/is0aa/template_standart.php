<?php
/*
Template Name: Стандартный шаблон
*/
?>
<?php get_header(); ?>
<div id="mid" class="mid">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		<?php if ( have_rows('photos') ) require_once 'galleriffic_standart.php'; ?>
		<div class="text"><?php the_field('text'); ?></div>
	</div>
	<?php include('sidebar.php'); ?>
</div>

<?php get_footer();?>