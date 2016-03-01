<?php
/*
Template Name: Номера и цены
*/
get_header(); 

function echo_number($id){
		?><div id="num<?php echo $id; ?>" class="number">
			<div class="short">
				<img src="<?php thumbn(get_field('main_photo',$id),'thumbnail'); ?>" class="img" />
				<div class="caption">
					<h3><?php echo get_the_title($id); ?></h3>
					<div class="text"><?php the_field('rooms',$id); ?></div>
					<div class="sale"> <big>-<?php the_field('sale',$id); ?>%</big> от сезона</div>
					<div class="prices">
						<span class="old_price"><?php the_field('old_price',$id); ?> р.</span>
						<span class="new_price"><?php the_field('new_price',$id); ?> р.</span>
					</div>
				</div>
				<div class="but mkactive"><div class="bb">Смотреть цены и фотографии</div><div class="arrow"></div></div>
				<div class="but_bronn">
				<a href="#bron1" onclick="step('callback-1');return true;" class="tr_callback db inline bron_short">Забронировать номер</a>
				</div>
				
			</div>
			<div class="long">
				<div class="margin-m">
					<h4 class="move">Фотографии номера</h4> <div class="text2">нажмите на фото, чтобы увеличить</div>
					<script>$(function(){$('#num<?php echo $id; ?> a[href*="jpg"]').colorbox({maxHeight:"80%",rel:"gal<?php echo $id; ?>"});});</script>
					<div class="slider-h">
						<div class="arl6"></div>
						<div class="slider0">
						<div class="slider1">
						<?php if(have_rows('photos', $id)){while ( have_rows('photos', $id) ) : the_row();?>
							<div class="slide"><a href="<?php lar('photo'); ?>"><img src="<?php thu('photo'); ?>"></a></div>
						<?php endwhile;}?>
						</div>
						</div>
						<div class="arr6"></div>
					</div>
				
					<div class="text">
						<?php the_field('description', $id); ?>
					</div>
					<ul class="things">
						<?php if(have_rows('characters', $id)){while ( have_rows('characters', $id) ) : the_row(); ?>
							<li><?php the_sub_field('text'); ?></li>
						<?php endwhile;} ?>
					</ul>
					<br />
					<div class="block_tabs">
						<ul class="tabs tabs1">
							<li class="tab1 tab-current"><a>Тариф "Завтрак"</a></li>
							<li class="tab2"><a>Тариф "Полупансион"</a></li>
						</ul>
						<div class="tab1">
							<?php if(have_rows('prices', $id)):?>
								<h4>Цены на одноместное размещение, руб./сут.</h4>
								<table>
									<tr>
										<?php while ( have_rows('prices', $id) ) : the_row(); ?>
											<td><?php the_sub_field('month'); ?></td>
										<?php endwhile; ?>
									</tr>
									<tr>
										<?php while ( have_rows('prices', $id) ) : the_row(); ?>
											<td><?php the_sub_field('price'); ?></td>
										<?php endwhile; ?>
									</tr>
								</table>
							<?php endif ?>
							<?php if(have_rows('prices2', $id)):?>
								<h4>Цены на двухместное размещение, руб./сут.</h4>
								<table>
									<tr>
										<?php while ( have_rows('prices2', $id) ) : the_row(); ?>
											<td><?php the_sub_field('month2'); ?></td>
										<?php endwhile; ?>
									</tr>
									<tr>
										<?php while ( have_rows('prices2', $id) ) : the_row(); ?>
											<td><?php the_sub_field('price2'); ?></td>
										<?php endwhile; ?>
									</tr>
								</table>
							<?php endif ?>
							<div class="text1 dop_mesto">
								Дополнительное место:
								<ul>
									<li>Кресло - 800 руб.</li>
									<li>Диван - 1200 руб.</li>
									<?php /* if(have_rows('dop_mesto2', $id)){while ( have_rows('dop_mesto2', $id) ) : the_row(); ?>
										<li><?php the_sub_field('mesto_name2'); ?> - <?php the_sub_field('mesto_price2'); ?> руб./сут.</li>
									<?php endwhile;} */?>
								</ul>
							</div>
						</div>
						<div class="tab2">
							<?php if(have_rows('prices3', $id)):?>
								<h4>Цены на одноместное размещение, руб./сут.</h4>
								<table>
									<tr>
										<?php while ( have_rows('prices3', $id) ) : the_row(); ?>
											<td><?php the_sub_field('month3'); ?></td>
										<?php endwhile; ?>
									</tr>
									<tr>
										<?php while ( have_rows('prices3', $id) ) : the_row(); ?>
											<td><?php the_sub_field('price3'); ?></td>
										<?php endwhile; ?>
									</tr>
								</table>
							<?php endif ?>
							<?php if(have_rows('prices4', $id)):?>
								<h4>Цены на двухместное размещение, руб./сут.</h4>
								<table>
									<tr>
										<?php while ( have_rows('prices4', $id) ) : the_row(); ?>
											<td><?php the_sub_field('month4'); ?></td>
										<?php endwhile; ?>
									</tr>
									<tr>
										<?php while ( have_rows('prices4', $id) ) : the_row(); ?>
											<td><?php the_sub_field('price4'); ?></td>
										<?php endwhile; ?>
									</tr>
								</table>
							<?php endif ?>
							
							<div class="text1 dop_mesto">
								Дополнительное место:
								<ul>
									<li>Кресло - 1150 руб.</li>
									<li>Диван - 1550 руб.</li>
									<?php /* if(have_rows('dop_mesto2', $id)){while ( have_rows('dop_mesto2', $id) ) : the_row(); ?>
										<li><?php the_sub_field('mesto_name2'); ?> - <?php the_sub_field('mesto_price2'); ?> руб./сут.</li>
									<?php endwhile;} */ ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="text1">Дети до 6-и лет без предоставления доп. места проживают БЕСПЛАТНО (завтрак - 220 руб.); если детей 2-е, необходимо оформлять доп. место; круглогодично</div>
					<div class="text1">Предоставление детской кроватки: 500 руб./сут. (требуется предварительный заказ)</div>
				</div>
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
		
		<h1><?php the_title(); ?></h1>
		<div class="text">*Ранний заезд до 6 часов – бесплатно (до 01.04.2016 г.)!</div>
		<h2 id="text-1"><?php echo get_the_title(17); ?></h2>
		<div class="text"><?php the_field('text',17); ?></div>
		<?php echo_number(23); ?>
		<?php echo_number(61); ?>
		<?php echo_number(394); ?>
		<?php echo_number(75); ?>
		<?php echo_number(91); ?>

		<h2 id="text-2"><?php echo get_the_title(45); ?></h2>
		<div class="text"><?php the_field('text',45); ?></div>
		<?php echo_number(51); ?>
		<?php echo_number(111); ?>
		<?php echo_number(126); ?>
		<?php echo_number(165); ?>

	</div>
	<?php get_sidebar(); ?>
	<div class="mb">
		<div class="text4"><?php the_field('bot_text'); ?></div>
		<div class="buttons clearfix">
			<a href="<?php the_field('price_file'); ?>" class="but5" target="_blank"><?php the_field('price_text'); ?></a>
			<a href="<?php the_field('price_file2'); ?>" class="but5" target="_blank"><?php the_field('price_text2'); ?></a>
		</div>
	</div>
</div>
<img style="width: 999px;margin-left: -2px;" src="<?php bloginfo('template_url');?>/i/howwework.jpg">
<div style="clear:both;"></div>
<?php get_footer(); ?>