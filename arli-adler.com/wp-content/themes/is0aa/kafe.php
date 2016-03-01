<?php
/*
Template Name: Кафе, бар
*/
get_header(); ?>

<script type="text/javascript">
	document.write('<style>.noscript { display: none; }</style>');
</script>
		
<div id="mid" class="mid cafe">
	<div class="ml ml_kafe">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1>
		<?php if(have_rows('links')): ?>
			<ul class="navigation_text clearfix">
				<?php while ( have_rows('links') ) : the_row();?>
					<li><?php the_sub_field('link'); ?></li>
				<?php endwhile; ?>
			</ul>
		<?php endif ?>
		<div style="clear:both;"></div>
		
		<?php if(have_rows('photos')): ?>
			<?php require_once 'galleriffic.php'; ?>
		<?php endif ?>
		
		<div style="clear:both;"></div>
		<div class="text"><?php the_field('text'); ?></div>
		<div class="banner_banket">
			<object type=application/x-shockwave-flash data=/wp-content/themes/is0aa/i/banner_banket.swf width=957 height=233><param name=movie value=/wp-content/themes/is0aa/i/banner_banket.swf></object>
		</div>
	</div>
</div>


<?php get_footer();?>