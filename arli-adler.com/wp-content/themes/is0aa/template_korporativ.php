<?php
/*
Template Name: Банкеты и корпоративы
*/
?>
<?php require_once 'header_corporative.php'; ?>
<h1>Проведение банкетов и корпоративов</h1>
<div class="corporativ">
	<div class="action">
		<div class="action_banner">
			<?php $image = get_field('action_banner');?>
			<img class="banner" src="<?php echo $image['url']; ?>">
		</div>
		<div class="action_text">
			<h2>Акция!</h2>
			<div class="action_title"><?php the_field('action_text');?></div>
			<div class="action_phone"><?php the_field('action_phone');?></div>
		</div>
		<div class="action_form">
			<h3><?php the_field('action_form');?></h3>
			<?php echo do_shortcode('[contact-form-7 id="4081" title="Проведение корпоративов - оставить заявку"]'); ?>
		</div>
	</div>
	
	<?php if(have_rows('events')): ?>
		<div class="events">
			<h2>У нас вы можете провести:</h2>
			<ul class="clearfix">
				<?php while ( have_rows('events') ) : the_row();?>
					<li style="background-image: url(<?php lar('event_img'); ?>)">
						<a class="inline" href="#order_event" title="Заказать мероприятие" onclick="step('callback-1');return true;"><span><?php the_sub_field('event'); ?></span></a>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif ?>
	
	<?php if(have_rows('bron')): ?>
		<div class="bron">
			<h2>Забрунируйте раньше - получите скидку больше</h2>
			<ul class="clearfix">
				<?php while ( have_rows('bron') ) : the_row();?>
					<li>
						<div class="bron_days">Бронирование за <?php the_sub_field('bron_days'); ?></div>
						<div class="bron_price">
							<span>
								<?php if(get_sub_field('bron_sale') == '')
									echo 'Средний<br />чек';?>
							</span>
							&nbsp;&asymp;&nbsp;<?php the_sub_field('bron_price'); ?> руб<small>/чел.</small>
						</div>
						<?php if(get_sub_field('bron_sale') != ''):?>
							<div class="bron_sale">
								Скидка<br />
								<span><?php the_sub_field('bron_sale'); ?>&nbsp;%</span>
							</div>
						<?php endif ?>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif ?>
	
	<?php if(have_rows('reason')): ?>
		<div class="reason">
			<div class="left">
				<h2>5 причин, чтобы провести ваш праздник именно у нас:</h2>
				<ul>
					<?php while ( have_rows('reason') ) : the_row();?>
						<li>
							<div class="reason_img"><img src="<?php lar('reason_img'); ?>"></div>
							<div class="reason_text"><?php the_sub_field('reason_text'); ?></div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="reason_women"></div>
			<div class="reason_form">
				<h4>Заказать<br />банкет:</h4>
				<h3>Акция!</h3>
				<div class="clear"></div>
				<div class="reason_form_text">Оставьте заявку сейчас и при<br />заказе получите торт в подарок</div>
				<?php echo do_shortcode('[contact-form-7 id="4082" title="Проведение корпоративов - заказ банкета"]'); ?>
			</div>
		</div>
	<?php endif ?>
	
	<?php if(have_rows('photos')): ?>
		<div class="slider_photo">
			<?php require_once 'galleriffic_horizontal.php'; ?>
		</div>
	<?php endif ?>
	
	<?php if(have_rows('step')): ?>
		<div class="steps">
			<h2>Как мы работаем?</h2>
			<?php $image = get_field('steps_img');?>
			<img src="<?php echo $image['url']; ?>">
			<ul class="clearfix">
				<?php while ( have_rows('step') ) : the_row();?>
					<li>
						<span><?php the_sub_field('step_text'); ?></span>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif ?>
	
	<?php $image = get_field('question_img');?>
	<div class="questions" style="background-image: url(<?php echo $image['url']; ?>)">
		<div class="questions_text">
			<h2>Все еще остались вопросы?</h2>
			<h3>Звони по телефону:</h3>
			<span class="questions_phone"><?php the_field('question_phone')?></span>
		</div>
		<div class="questions_form">
			<h3>Оставьте заявку</h3>
			<p>Наш менеджер свяжется с вами в ближайшее время!</p>
			<?php echo do_shortcode('[contact-form-7 id="4083" title="Проведение корпоративов - остались вопросы"]'); ?>
		</div>
	</div>
	
	<div class="characters_cafe">
		<?php if(have_rows('other_characters')): ?>
			<div class="other_characters">
				<h3>С чем вы можете столкнуться<br />в других кафе</h2>
				<ul>
					<?php while ( have_rows('other_characters') ) : the_row();?>
						<li><?php the_sub_field('other_character'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif ?>
		<?php if(have_rows('arli_characters')): ?>
			<div class="arli_characters">
				<h3>Что предлагает ресторан<br />"Арли"</h2>
				<ul>
					<?php while ( have_rows('arli_characters') ) : the_row();?>
						<li><?php the_sub_field('arli_character'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif ?>
		<div class="clear"></div>
	</div>
	
	<?php $image = get_field('order_event_bg');?>
	<div class="order_event" style="background-image: url(<?php echo $image['url']; ?>)">
		<h2><?php the_field('order_event_title')?></h2>
		<span class="order_event_phone"><?php the_field('order_event_phone')?></span>
		<div class="order_event_form">
			<?php echo do_shortcode('[contact-form-7 id="4086" title="Проведение корпоративов - заказать мероприятие"]'); ?>
		</div>
	</div>
	
	<?php if(have_rows('about_arli')): ?>
			<div class="about_arli">
				<h2>Гостинично-ресторанный комплекс "Арли" это:</h2>
				<ul class="clearfix">
					<?php while ( have_rows('about_arli') ) : the_row();?>
						<li style="background-image: url(<?php lar('about_arli_img'); ?>)"><?php the_sub_field('about_arli_text'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
	<?php endif ?>
	
	<?php $image = get_field('bg_menu');?>
	<div class="menu" style="background-image: url(<?php echo $image['url']; ?>)">
		<div class="menu_text_top">Расчет стоимости банкета на 5 человек</div>
		<a class="menu_btn inline" href="#menu_download" onclick="step('callback-1');return true;">Скачать расчет</a>
		<div class="menu_text_bot"><?php the_field('menu_text')?></div>
	</div>
	
	<div class="menu_banket">
		<?php $image = get_field('menu_img');?>
		<img src="<?php echo $image['url']; ?>">
	</div>
	
	
	<div class="footer">
		<div class="map"><?php the_field('map')?></div>
		<div class="footer_action">
			<h2>Акция!</h2>
			<h3><?php the_field('footer_action_text')?></h3>
			<div class="footer_action_phone">
				<?php the_field('footer_action_phone')?><br />
				<span>отдел бронирования</span>
			</div>
			<a class="btn_call inline" href="#callback" onclick="step('callback-1');return true;">Заказать обратный звонок</a>
			<?php $image = get_field('footer_action_img');?>
			<img class="footer_women" src="<?php echo $image['url']; ?>" />
		</div>
	</div>
	
	<div style="display:none">
		<div id="order_event" class="popup phone">
			<div class="test">
				<div class="text1">Чтобы заказать мероприятие, заполните поля.</div>
				<div class="text2">Мы свяжемся с вами в ближайшее время!</div>
				<?php echo do_shortcode('[contact-form-7 id="4087" title="Проведение корпоративов - заказать мероприятие (всплывашка)"]'); ?>
				<div class="text3">Данные никогда не будут переданы третьим лицам!</div>
			</div>
		</div>
		
		<div id="menu_download" class="popup phone">
			<div class="test">
				<div class="text1">Чтобы получить ссылку на скачивание, заполните поля, пожалуйста.</div>
				<div class="text2"></div>
				<?php echo do_shortcode('[contact-form-7 id="4088" title="Проведение корпоративов - скачать меню"]'); ?>
				<div class="text3">Данные никогда не будут переданы третьим лицам!</div>
			</div>
		</div>
		
		<div id="menu_link" class="popup ok">
			<div class="text1">Спасибо!</div>
			<div class="text2"><a href="<?php the_field('menu_link')?>" target="_blank">Нажмите, чтобы просмотреть</a></div>
		</div>
	</div>
</div>

<?php require_once 'footer_corporative.php'; ?>