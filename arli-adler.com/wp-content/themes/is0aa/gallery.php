<div class="g2">
	<script>$(function(){$('.g2 a[href*="jpg"]').colorbox({maxHeight:"80%",rel:"g2"});});</script>
	<div class="slidmin">
		<?php if(have_rows('photos')){ while ( have_rows('photos') ) : the_row(); ?>
			<div>
				<a href="<?php lar('photo'); ?>">
					<img src="<?php thu('photo'); ?>" />
				</a>
			</div>
		<?php endwhile;} ?>
	</div>
</div>