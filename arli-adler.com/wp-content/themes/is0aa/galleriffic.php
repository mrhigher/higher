<?php
$photos=get_field('photos');
if(!empty($photos)):
?>

<div id="gallery" class="content">
	<div id="controls" class="controls"></div>
	<div class="slideshow-container">
		<div id="loading" class="loader"></div>
		<div id="slideshow" class="slideshow"></div>
	</div>
</div>

<div id="thumbs" class="navigation">
	<ul class="thumbs noscript">
		<?php $arLink = array();
		while ( have_rows('photos') ) : the_row();
			$arLink[] .= get_sub_field('photo');
		endwhile;

		for($i=count($arLink)-1; $i>=0; $i--) {?>
			<li>
				<a class="thumb" href="<?php echo $arLink[$i]; ?>" class="cboxElement" rel="sld_1" title="кафе-отель Арли">
					<img src="<?php echo $arLink[$i]; ?>" />
				</a>
			</li>
		<?php } ?>		
	</ul>
</div>
<?php endif ?>
<div style="clear: both;"></div>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '300px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Слайдшоу',
					pauseLinkText:             'Пауза',
					prevLinkText:              '&lsaquo; Предыдущее фото',
					nextLinkText:              'Следующее фото &rsaquo;',
					nextPageLinkText:          'Вперед &rsaquo;',
					prevPageLinkText:          '&lsaquo; Назад',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>