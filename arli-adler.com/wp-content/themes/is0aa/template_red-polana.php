<?php
/*
Template Name: Отдых на красной поляне
*/
?>
<?php get_header(); ?>			

<div id="mid" class="mid">
	<div class="ml ml_num">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1 style="margin-bottom:20px;"><?php the_title();?></h1>
			<center>
				<object border="1" id="myId" width="100%"  type="application/x-shockwave-flash" data="<?php bloginfo('template_url');?>/i/gor_tur.swf">
					<param name="movie" value="<?php bloginfo('template_url');?>/i/gor_tur.swf">
				</object>
			</center>
			
			<?php require_once 'gallery0.php'; ?>
			<div class="text"><?php the_field('text'); ?></div>
		
	</div>
	<?php get_sidebar(); ?>
	
</div>
<?php get_footer(); ?>