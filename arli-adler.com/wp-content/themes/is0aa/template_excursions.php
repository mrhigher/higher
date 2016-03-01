<?php
/*
Template Name: Экскурсии
*/
get_header(); 

function echo_number($id){
		?><div id="num<?php echo $id; ?>" class="number excursion">
			<div class="short">
				<?php echo get_the_post_thumbnail($id, 'thumbnail'); ?>
				<div class="caption">
					<h3><?php echo get_the_title($id); ?></h3>
					<div class="prices"></div>
				</div>
				<div class="but mkactive"><div class="bb">Смотреть цены и фотографии</div><div class="arrow"></div></div>
			</div>
			<div class="long">
				<div class="margin-m">
					<h4 class="move">Фотографии с экскурсий</h4> <div class="text2">нажмите на фото, чтобы увеличить</div>
					<script>$(function(){$('#num<?php echo $id; ?> a[href*="jpg"]').colorbox({maxHeight:"80%",rel:"gal<?php echo $id; ?>"});});</script>
					<div class="slider-h">
						<div class="arl6"></div>
						<div class="slider0">
						<div class="slider1">
						<?php if(have_rows('excursion_photos', $id)){while ( have_rows('excursion_photos', $id) ) : the_row();?>
							<div class="slide"><a href="<?php lar('excursion_photo'); ?>"><img src="<?php thu('excursion_photo'); ?>"></a></div>
						<?php endwhile;}?>
						</div>
						</div>
						<div class="arr6"></div>
					</div>
				</div>
				<div class="text">
					<?php the_field('excursion_text', $id); ?>
				</div>
				<ul class="things">
					<li><b>Место проведения:</b> <?php the_field('excursion_place', $id); ?></li>
					<li><b>Дни недели:</b> <?php the_field('excursion_days', $id); ?></li>
					<li><b>Время отправления:</b> <?php the_field('excursion_time', $id); ?></li>
					<li><b>Стоимость:</b> <?php the_field('excursion_price', $id); ?></li>
					<?php if (get_field('excursion_price_more', $id)):?>
						<li><b>Дополнительные расходы (по желанию):</b> <?php the_field('excursion_price_more', $id); ?></li>
					<?php endif ?>
				</ul>
			</div>
		</div><?
}

?>

<div style="display:none">
	<div id="bron1" class="popup bron1">
		<div class="m1_fg_mid bron_form">
			<h2>Забронировать номер в отеле сейчас:</h2>
			<?php echo do_shortcode('[contact-form-7 id="2438" title="Бронирование" html_class="use-floating-validation-tip"]'); ?>
		</div>
	</div>
</div>

<div id="mid" class="mid">
	<div class="ml ml_num">
		<?php //wp_nav_menu('menu=main'); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="excursion_text"><?php the_content(); ?></div>
		<? endwhile; endif;?>
		
		<?php $args = array( 
			'post_parent' => 4142,
			'post_type'   => 'page', 
			'numberposts' => -1,
			'post_status' => 'any'
		);

		$childrens = get_children( $args );
		if( $childrens ){
			foreach( $childrens as $children ){
				echo_number($children->ID);
			}
		} ?>
		
		<div class="excursion_text"><?php the_field('excursion_text_bottom'); ?></div>
	</div>
	<?php get_sidebar(); ?>

</div>
<img style="width: 999px;margin-left: -2px;" src="<?php bloginfo('template_url');?>/i/howwework.jpg">
<div style="clear:both;"></div>
<?php get_footer(); ?>