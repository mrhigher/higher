<?php
/*
Template Name: Услуги
*/
get_header(); 
?>
<script>$(function(){$('body').addClass('bodybg').append('<style>.j4debug.bodybg{background:url(/numbers.jpg) 50% 0 no-repeat!important;height:2918px!important;}</style>');})</script>
<style>
.g2{
display:none;
}
</style>
<div id="mid" class="mid">
	<div class="ml ml_services">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		
		<h2 class="free"><?php the_field('free_title'); ?></h2>
		<div class="free_list">
			<?php if(have_rows('free_list', $id)){while ( have_rows('free_list', $id) ) : the_row(); ?>
				<div style="background-image:url('<?php lar('img'); ?>')"><?php the_sub_field('text'); ?></div>
			<?php endwhile;} ?>
		</div>
		<h2 class="additional_title"><?php the_field('additional_title'); ?></h2>
		<ul class="stars">
			<?php if(have_rows('additional_list', $id)){while ( have_rows('additional_list', $id) ) : the_row(); ?>
				<li><?php the_sub_field('text'); ?></li>
			<?php endwhile;} ?>
		</ul>
		<h2 class="additional_title"><?php the_field('area_title'); ?></h2>
		<ul class="stars">
			<?php if(have_rows('area_list', $id)){while ( have_rows('area_list', $id) ) : the_row(); ?>
				<li><?php the_sub_field('text'); ?></li>
			<?php endwhile;} ?>
		</ul>

		<?php if(have_rows('detailed', $id)){while ( have_rows('detailed', $id) ) : the_row(); ?>
			<h3 class="pic" style="background-image:url('<?php lar('img'); ?>')"><?php the_sub_field('title'); ?></h3>
			<div class="text"><?php the_sub_field('text'); ?></div>
			<?php require_once 'gallery.php'; ?>
		<?php endwhile;} ?>
		<div class="text"><?php the_field('text'); ?></div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>