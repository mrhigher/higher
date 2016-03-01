<?php
/*
Template Name: Формула 1
*/
?>
<?php get_header(); ?>
<div id="mid" class="mid">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		<?php require_once 'gallery0.php'; ?>
		<div class="text"><?php the_field('text'); ?></div>
	</div>
	<?php include('sidebar.php'); ?>
</div>

<?php get_footer();?>