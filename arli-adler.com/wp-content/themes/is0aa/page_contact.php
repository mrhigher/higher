<?php
/*
Template Name: Контакты
*/
?>
<?php //get_header(); 
include('header_page.php');?>
<style>
.text p{
text-indent:0px;
}
</style>
<div id="mid" class="mid">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="text"><?php the_content(); ?></div>
		<? endwhile; endif;?>
<div style="border: 1px solid #757474; box-shadow: 0 1px 3px #767272; -moz-box-shadow: 0 1px 3px #767272; -webkit-box-shadow: 0 1px 3px #767272; margin-bottom: 10px; width: 508px;">
	<a href="http://arli-adler.com/wp-content/uploads/2014/04/mapb.png" class="m3_map db cb fll" style="background: url(http://arli-adler.com/wp-content/uploads/2014/04/map-small.jpg) 0 0 no-repeat;"><?php the_field('map_text'); ?></a>
</div>	
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer();?>