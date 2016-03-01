<?php
/*
Template Name: Стандартный шаблон без сайдбара
*/
?>
<?php get_header(); ?>
<div id="mid" class="mid standart_width">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_title(); ?></h1><br />
		
		<?php require_once 'galleriffic.php'; ?>
		
		<div class="bron_form standart_form">
			<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="12" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
		</div>
		
		<div class="text"><?php the_field('text'); ?></div>
	</div>
</div>

<?php get_footer();?>