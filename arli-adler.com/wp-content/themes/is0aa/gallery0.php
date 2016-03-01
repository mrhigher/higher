<?php
$photos=get_field('photos');
if(!empty($photos)) {
?>

<div id="slidx" class="gallery">
	<div class="slides">
		<div class="slides1" style="width:99999px">
			<?php if(have_rows('photos')){while ( have_rows('photos') ) : the_row(); ?>
				<a href="<?php lar('photo'); ?>" class="cboxElement" rel="sld_1">
					<img src="<?php lar('photo'); ?>" />
				</a>
			<?php endwhile;} ?>
		</div>
	</div>
	<div class="arl"><img style="display:block !important;" src="/wp-content/themes/is0aa/i/arl6.png" /></div>
	<div class="slidmin">
		<div class="slidmin1" style="cursor:pointer;width:99999px">
			<?php if(have_rows('photos')){while ( have_rows('photos') ) : the_row(); ?>
				<img src="<?php thu('photo'); ?>" rel="sld_1" />
			<?php endwhile;} ?>
		</div>
	</div>
	<div class="arr"><img style="display:block !important;" src="/wp-content/themes/is0aa/i/arr6.png" /></div>
</div>
<?php } ?>