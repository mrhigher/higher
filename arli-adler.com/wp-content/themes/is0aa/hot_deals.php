<?php
/*
Template Name: Горячие предложения
*/
get_header(); 
?>
<script>	
	$(document).ready(function(){
		console.log('tsorter')
		$("#hdr_table").stupidtable();
		
		console.log('tsorter')
		$("#head_fixed").stupidtable();
	});
	
	$(window).on("scroll", function() {
		if ($(window).scrollTop() > 900) 
			$('.head').addClass('fixed');
		else $('.head').removeClass('fixed');
    });
</script>
<div id="mid" class="mid nomr hdeal">
	<div class="ml">
		<?php //wp_nav_menu('menu=main'); ?>
		<h1><?php the_field('H1') //the_title(); ?></h1>
		<div class="preview_text">
			<?php the_field('preview_text') ?>
			<p align="right"><a class="detail_show">подробнее >></a></p>
		</div>
		<img src="<?php the_field('hdl_topbanner'); ?>" class="hdl_topbanner" alt="">
		<br>
		<div class="hdl_notes">
		<span style="color:#000;"><?php the_field('text_baner'); ?></span><br/><br/>
		
		<?php the_field('hdl_notes'); ?>
		</div>
		
		<table id="hdr_table" class="hdr_table">
			<thead class="head">
				<tr>
					<th data-sort="string" class="hd_cat str"  style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Категория номера
					</th>
					<th data-sort="int" class="hg_quant intr" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Кол-во номеров
					</th>
					<th data-sort="int" class="hd_date1 intr" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Дата заезда
					</th>
					<th data-sort="int" class="hd_date2 intr" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Дата выезда
					</th>
					<th data-sort="int"  class="hd_days intr" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Кол-во дней
					</th>
					<th data-sort="int" class="hd_sale intr" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Скидка
					</th>
					<th data-sort="int" class="hd_result intr" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Итоговая стоимость
					</th>
					<th data-sort="int" class="hd_econom intr" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Экономия
					</th>
					<th data-sort="string" class="hd_status str" style="position:relative;">
					<img style="position:absolute; top:4px; left:5px;" src="<?php bloginfo('template_url')?>/i/up.png">
					<img style="position:absolute; right:9px; bottom:4px;" src="<?php bloginfo('template_url')?>/i/down.png">
					Статус
					</th>
				</tr>
			</thead>
		<?php $hdr = 1;?>
		<?php while(have_rows('hdr_table')) : the_row(); ?>
				<tr data-num="<?php echo $hdr; ?>">
					<?php 
					$hfield = get_sub_field_object('category');
					$hvalue = get_sub_field('category');
					$hlabel = $hfield['choices'][ $hvalue ];

					?>
					<td class="hd_cat" data-sort-value="<?php the_sub_field('category'); ?>"><?php echo $hlabel; ?></td>
					<td class="hg_quant"><?php the_sub_field('quantity'); ?></td>
					<td class="hd_date1" data-sort-value="<?php echo date('Ymd', strtotime(get_sub_field('date1'))); ?>"><?php echo date('d.m.y', strtotime(get_sub_field('date1'))); ?></td>
					<td class="hd_date2" data-sort-value="<?php echo date('Ymd', strtotime(get_sub_field('date2'))); ?>"><?php echo date('d.m.y', strtotime(get_sub_field('date2'))); ?></td>
					<td class="hd_days"><?php the_sub_field('days'); ?></td>
					<td class="hd_sale"><?php the_sub_field('discount'); ?></td>
					<td class="hd_result"><?php the_sub_field('total_price'); ?></td>
					<td class="hd_econom"><?php the_sub_field('economy'); ?></td>
					<td class="hd_status">
						<?php 
							$link = "Активен<br/><a href=\"#bron\" onclick=\"var \$tr=$(this).closest('tr');otype=\$tr.attr('data-num');$('#bron input[name=var-iant]').val(\$tr.find('td.hd_cat').text()+' c '+\$tr.find('td.hd_date1').text()+' по '+\$tr.find('td.hd_date2').text());step('hdbron-1+'+$hdr);return true;\" class=\"inline\"><img src=\"/wp-content/themes/is0aa/i/hdl_bron_btn.png\" class=\"hd_bron_btn\"></a>";
							if(get_sub_field('quantity')){
								echo $link;
							}else{
								echo 'ПРОДАН';
							}
						?>
						
					</td>
				</tr>
		<?php $hdr++;?>
		<?php endwhile;?>
				
			</table>

			<div class="detail_text" id="detail_text">
				<?php the_field('detail_text') ?>
				<p align="right"><a onclick="detail_hide('detail_text')">скрыть>></a></p>
			</div>

		<?php the_content(); ?>
	</div>
		<div class="mr" style="background-image:url(<?php the_field('hdr_img'); ?>);"></div>
</div>
<?php get_footer(); ?>