<?php
/*
Template Name: Туры на праздники
*/
get_header(); 

function echo_number($id){
		?><div id="num<?php echo $id; ?>" class="number holiday">
			<div class="short">
				<div class="holiday_preview">
					<?php echo get_the_post_thumbnail($id, 'thumbnail'); ?>
					<?php the_field('holiday_preview', $id); ?>
				</div>
				<div class="caption">
					<h3><?php echo get_the_title($id); ?></h3>
				</div>
				<?php if(have_rows('holiday_services', $id)): ?>
					<div class="holiday_services_icon">
						<ul class="clearfix">
							<?php while ( have_rows('holiday_services', $id) ) : the_row();?>
								<li style="background-image: url(<?php the_sub_field('holiday_service_icon', $id); ?>)"><a title="<?php the_sub_field('holiday_service', $id); ?>"></a></li>
							<?php endwhile;?>
						</ul>
					</div>
				<?php endif; ?>
				<div class="holiday_preview_price"><?php the_field('holiday_preview_price', $id); ?></div>
				<div class="but mkactive"><div class="bb">Подробнее</div><div class="arrow"></div></div>
			</div>
			<div class="long">
				<?php if(have_rows('holiday_photos', $id)): ?>
					<div class="margin-m">
						<h4 class="move">Фотографии тура</h4> <div class="text2">нажмите на фото, чтобы увеличить</div>
						<script>$(function(){$('#num<?php echo $id; ?> a[href*="jpg"]').colorbox({maxHeight:"80%",rel:"gal<?php echo $id; ?>"});});</script>
						<div class="slider-h">
							<div class="arl6"></div>
							<div class="slider0">
							<div class="slider1">
							<?php while ( have_rows('holiday_photos', $id) ) : the_row();?>
								<div class="slide"><a href="<?php lar('holiday_photo'); ?>"><img src="<?php thu('holiday_photo'); ?>"></a></div>
							<?php endwhile;?>
							</div>
							</div>
							<div class="arr6"></div>
						</div>
					</div>
				<?php endif; ?>
				<div class="text">
					<?php the_field('holiday_desc', $id); ?>
				</div>
				<ul class="things holiday_services">
					<li><b>Даты проведения тура:</b> <?php the_field('holiday_date', $id); ?></li>
					<?php if(have_rows('holiday_services', $id)): ?>
						<li><b>В стоимость тура входит:</b>
							<ul class="disc">
								<?php while ( have_rows('holiday_services', $id) ) : the_row();?>
									<li><?php the_sub_field('holiday_service', $id); ?></li>
								<?php endwhile;?>
							</ul>
						</li>
					<?php endif; ?>
					<li><b>Стоимость тура:</b> <?php the_field('holiday_price', $id); ?></li>
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

<div id="mid" class="mid holidays">
	<div class="ml ml_num">
		<?php //wp_nav_menu('menu=main'); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php if(have_rows('holidays_photos')): ?>
				<div class="long">
					<div class="margin-m">
						<script>$(function(){$('#num<?php echo $id; ?> a[href*="jpg"]').colorbox({maxHeight:"80%",rel:"gal<?php echo $id; ?>"});});</script>
						<div class="slider-h">
							<div class="arl6"></div>
							<div class="slider0">
								<div class="slider1">
									<?php while ( have_rows('holidays_photos') ) : the_row();?>
										<div class="slide"><a href="<?php lar('holidays_photo'); ?>"><img src="<?php thu('holidays_photo'); ?>"></a></div>
									<?php endwhile;?>
								</div>
							</div>
							<div class="arr6"></div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="holidays_text"><?php the_field('holidays_text'); ?></div>
			<div class="holidays_action">
				<div class="holidays_action_text"><?php the_field('holidays_action_text'); ?></div>
				<div class="holidays_action_img"><img src="<?php the_field('holidays_action_img'); ?>"></div>
				<div class="clear"></div>
			</div>
		<? endwhile; endif;?>
		
		<?php $args = array( 
			'post_parent' => 4781,
			'post_type'   => 'page', 
			'numberposts' => -1,
			'order'=> 'ASC',
			'post_status' => 'any'
		);

		$childrens = get_children( $args );
		if( $childrens ){
			foreach( $childrens as $children ){
				echo_number($children->ID);
			}
		} ?>
		<div class="holidays_text"><?php the_field('holidays_text_bottom'); ?></div>
	</div>
	<?php //get_sidebar(); ?>

</div>
<img style="width: 999px;margin-left: -2px;" src="<?php bloginfo('template_url');?>/i/howwework.jpg">
<div style="clear:both;"></div>
<?php get_footer(); ?>