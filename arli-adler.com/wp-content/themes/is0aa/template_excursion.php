<?php
/*
Template Name: Экскурсия
*/
?>
<?php get_header(); ?>
<div id="mid" class="mid">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="text"><?php the_content(); ?></div>
		<? endwhile; endif;?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer();?>