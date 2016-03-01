<?php
/*
Template Name: Новогодный тур
*/
?>
<?php get_header(); ?>
<style>
.ml .top_menu, .ml #menu-main, .mw100p #menu-main {
margin: 0 0 10px;
}
</style>
<div id="mid" class="mid" style="position:relative;">
<img style="position:absolute; bottom:10px; right:10px;" src="<?php bloginfo('template_url');?>/i/tree.png">
	<div class="ml">
		<?php wp_nav_menu('menu=main'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!--<h1><?php the_title(); ?></h1>-->
			
		<? endwhile; endif;?>
	<div class="text">
		<img src="<?php the_field('y-banner'); ?>">
		<div style="clear:both;"></div>
		<p style="text-indent:0px; margin-bottom:0px !important; margin-top:20px; line-height:1.5em; color: #333333;">
		Детям до 4-х лет бесплатно.<br/>
		Детям с 5 до 15 лет скидка 50% (3.000 р.)
		</p>
		<div style="clear:both;"></div>
		<span style="display:block; text-indent:0px; margin-top:40px; font-size:33px; font-family:Tahoma; color:#501758;"><?php the_field('y-tit'); ?></span>
		<div class="kal-30">	
			<p>
			<?php the_field('y-min-text'); ?>
			</p>
		</div>
		<div class="tablisa" style="border-bottom:0px; border-radius:10px 10px 0px 0px;">
				
					<div class="tablisa-row row1">
							<div class="tablisa-cell cell-20 cell-1">
								<img src="<?php bloginfo('template_url');?>/i/tab-logo.png">
							</div>
						<div class="tablisa-cell cell-13">
							Стандарт
						</div>
						<div class="tablisa-cell cell-20">
							Стандарт <br/>
							с видом на море
						</div>
						<div class="tablisa-cell cell-20">
							ЕвроСтандарт
						</div>
						<div class="tablisa-cell cell-13">
							Люкс
						</div>
						<div class="tablisa-cell cell-13">
							Премиум<br/>
							Люкс
						</div>
					</div>
					
					
					<div class="tablisa-row row3">
						<div class="tablisa-cell cell-20 cell-color cell-b cell-1 cells-1">
							Двухместное<br/>
							размещение
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							2 500 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del> 
						</div>
						<div class="tablisa-cell cell-20 cell-b cell-color">
							2 700 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del> 
						</div>
						<div class="tablisa-cell cell-20 cell-b cell-color">
							2 700 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del> 
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							4 000 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del> 
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							4 700 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del> 
						</div>
					</div>	
			</div>
			
		
		<div class="tablisa" style="margin-top:0px; border-bottom:0px; border-top:1px solid #d3bdcb; border-radius:0px;">
			<div class="tablisa-row row2">
						<div class="tablisa-cell cell-20 cell-color cell-b cell-1 cells-1">
							<b>Дополнительное место</b>
						</div>
						
			</div>
		</div>
		<div class="tablisa" style="margin-top:0px; border-bottom:0px; border-top:1px solid #d3bdcb; border-radius:0px;">
			<div class="tablisa-row row3">
						<div class="tablisa-cell cell-20 cell-color cell-b cell-1 cells-1">
							Кресло
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							800 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>   
						</div>
						<div class="tablisa-cell cell-20 cell-b cell-color">
							800 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>   
						</div>
						<div class="tablisa-cell cell-20 cell-b cell-color">
							800 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>   
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							800 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>   
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							800 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>   
						</div>
					</div>
			<div class="tablisa-row row2">
						<div class="tablisa-cell cell-20 cell-color cell-b cell-1 cells-1">
							Диван
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							1 100 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>  
						</div>
						<div class="tablisa-cell cell-20 cell-b cell-color">
							1 100 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>     
						</div>
						<div class="tablisa-cell cell-20 cell-b cell-color">
							 1 100 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>    
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							 1 100 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>     
						</div>
						<div class="tablisa-cell cell-13 cell-b cell-color">
							 1 100 <del><span style="font-family: Arial; font-size: 9pt;">P</span></del>   
						</div>
					</div>			
		</div>
		<div class="tablisa" style="margin-top:0px; border-radius:0px 0px 10px 10px; border-top:1px solid #d3bdcb;">
			<div class="tablisa-row row3">
						<div class="tablisa-cell cell-20 cell-color cell-b cell-1 cells-1">
							<b>В стоимость включен завтрак «шведский стол»</b>
						</div>
						
			</div>
		</div>
	</div><!---#00---->	
		<div style="margin-top:10px; color:#000; font-size:14px;"><?php the_field('text-down-table');?></div>
		<div class="kal-31">
			<div class="kal-31-img">
				<img src="<? bloginfo('template_url');?>/i/cal-31.png">
			</div>
			<div class="kal-31-text">
				<div class="kal-31-tit">
					<?php the_field('n-s-t');?>
					
				</div>
				<span>
					<?php the_field('n-s-t-1');?>
					<a target="_blank" style="color:#8e34c5" href="<?bloginfo('template_url');?>/menu.pdf">(с меню можно ознакомиться здесь);</a>
				</span>
				<span>
					<?php the_field('n-s-t-2');?>
				</span>
				
			</div>
		</div>
		<div class="new-foto">
			<a href="<?php the_field('n-foto-1');?>" class="cboxElement fancybox" rel="gg"><img style="width:150px; height:120px;" src="<?php the_field('n-foto-1');?>"></a>
			<a href="<?php the_field('n-foto-2');?>" class="cboxElement fancybox" rel="gg"><img style="margin-left:14px; width:150px; height:120px;" src="<?php the_field('n-foto-2');?>"></a>
			<a href="<?php the_field('n-foto-3');?>" class="cboxElement fancybox" rel="gg"><img style="margin-left:14px; width:150px; height:120px;" src="<?php the_field('n-foto-3');?>"></a>
			<a href="<?php the_field('n-foto-4');?>" class="cboxElement fancybox" rel="gg"><img style="margin-left:14px; width:150px; height:120px;" src="<?php the_field('n-foto-4');?>"></a>
		</div>
		<div class="new-video">
			<div style="width:312px; float:left; height:221px;">
			<?php the_field('n-video');?>
			</div>
			<div style="width:312px; height:221px; float:right;">
			<a href="<?php the_field('n-video-1');?>" class="cboxElement fancybox" rel="gg"><img style="width:312px; height:221px;" src="<?php the_field('n-video-1');?>"></a>
			
			</div>
		</div>
		<div class="kal-31" style="position:relative;">
			<img style="position:absolute; top:-10px; right:125px;" src="<?php bloginfo('template_url');?>/i/vino.png">
			<div class="kal-31-img">
				<img src="<?php the_field('n-01');?>">
			</div>
			<div class="kal-31-text">
				<div class="kal-31-tit kal-31-tit-new" style="margin-top:44px;">
					<?php the_field('n-001');?>
				</div>
			</div>
		</div>
		<!----
		<div class="kal-31">
			<div class="kal-31-img">
				<img src="<?php the_field('n-02');?>">
			</div>
			<div class="kal-31-text">
				<div class="kal-31-tit kal-31-tit-new" style="margin-top:21px;">
					<?php the_field('n-002');?>
				</div>
			</div>
		</div>
		<div class="kal-31">
			<div class="kal-31-img">
				<img src="<?php the_field('n-03');?>">
			</div>
			<div class="kal-31-text">
				<div class="kal-31-tit kal-31-tit-new">
					<?php the_field('n-003');?>
				</div>
			</div>
		</div>
		----->
		<div style="height:30px;"></div>
		<div style="position:relative;">
			<div style="font-size:22px; color:#e507ae; text-transform: uppercase; position:absolute; top:0px; left:53px;">
				Встреть новогоднюю ночь в отеле «Арли»!
			</div>
			<div style="font-size:14px; font-weight:bold; color:#45040a; position:absolute; top:67px; left:163px;">	
				Банкет +  
			</div>	
			<div style="font-size:14px; font-weight:bold; color:#45040a; position:absolute; top:67px; left:266px;">	
				Фуршет + 
			</div>		
			<div style="font-size:14px; font-weight:bold; color:#45040a;  position:absolute; top:67px; left:377px;">
				Новогодняя программа
			</div>
			<div style="font-size:20px; color:#e507ae; position:absolute; top:102px; left:129px;">
				Всего за<br/>
				<span style="font-size:40px; font-weight:bold;">5 990</span><br/>
				с человека!
			</div>
			<div style="font-size:18px; text-transform: uppercase; font-weight:bold; color:#680f7f; position:absolute; top:114px; left:298px;">
				<span style="font-size:21px;">Внимание!</span><br/>
				предложение<br/>
				ограничено!
			</div>	
			<img src="<?php bloginfo('template_url');?>/i/11111.png">
		</div>
		<div style="clear:both; height:10px;"></div>
	</div>
	
		<div class="mr">
		<div class="mrt j4nobg">
			<div class="action1">
				<div class="l1" style="margin: 8px 0 3px;">ВНИМАНИЕ! АКЦИЯ!!!</div>
<?php if(0){// Прошлая акция ?>

				<div class="l2">Забронируйте номер сейчас<br />и получите 5 000 руб. в подарок</div><br>
				<img src="/wp-content/themes/is0aa/i/number11.png" alt="" style="margin: 0;"/>
				<div class="l4">* при бронировании номера от 6-ти дней<br />с 09.09 по 05.10</div>
<?php }?>
<?php if(0){// Акция от 26.06.2014 ?>
				<img src="/wp-content/themes/is0aa/i/banner46qb.png" alt="" style="margin: 8px 0 6px 3px;"/>
<?php }?>
<?php if(1){// Акция от 11.07.2014 ?>
			
			
				<img style="width:85px;" src="/wp-content/themes/is0aa/i/trees.gif" alt="" style="margin: 0;"/>
				<div class="l4" style="margin-top:5px; font-size:34px;">
				Встреть<br/> новогоднюю ночь<br/> в отеле "Арли"!<br/>
				<span style="font-size:37px;">
				Всего за <span style="color:red;">5 990 <del><span style="font-family: Arial; font-size: 20pt;">P</span></del></span>
				<br/>
				<span style="position:relative; top:-10px; font-size:13px;">с человека (банкет, фуршет, опохмел party)</span>
				</span>
				</div>
<?php }?>
			<!----
				<div class="l5">СПЕШИТЕ!</div>
				<div class="l6">до конца акции осталось:</div>
				<div class="l6 temp hide">предложение ограниченно!</div>
				
				<div id="timer" class="l7_timer" style="background:none;">
				<div id="countbox"></div>
				
				<div class="day">дней</div>
				<div class="hour">часов</div>
				<div class="minute">минут</div>
				<div class="second">секунд</div>
				</div>
				
				<div id="timer" class="l7_timer">
					<div class="t1">0</div>
					<div class="t2">0</div>
					<div class="t3">0</div>
					<div class="t4">0</div>
					<div class="t5">0</div>
					<div class="t6">0</div>
					<div class="t7">0</div>
					<div class="t8">0</div>
					<div class="day">ДНЯ</div>
					<div class="hour">ЧАСОВ</div>
					<div class="minute">МИНУТ</div>
					<div class="second">СЕКУНД</div>
				</div>
				--->
			</div>
			<!-- 			<div class="action1">
				<div class="l1">ВНИМАНИЕ! АКЦИЯ!!!</div>
				<div class="l2">Забронируйте номер сейчас<br />и мы встретим Вас<br/> из аэропорта или вокзала</div>
				<div class="l3">БЕСПЛАТНО!*</div>
				<img src="/wp-content/themes/is0aa/i/car-top.png" alt="" />
				<div class="l4">* при бронировании номера от 3-х дней</div>
				<div class="l5">СПЕШИТЕ!</div>
				<div class="l6">до конца акции осталось:</div>
				<div class="l6 temp hide">предложение ограниченно!</div>
				<div id="timer" class="l7_timer">
					<div class="t1">0</div>
					<div class="t2">0</div>
					<div class="t3">0</div>
					<div class="t4">0</div>
					<div class="t5">0</div>
					<div class="t6">0</div>
					<div class="t7">0</div>
					<div class="t8">0</div>
					<div class="day">ДНЯ</div>
					<div class="hour">ЧАСОВ</div>
					<div class="minute">МИНУТ</div>
					<div class="second">СЕКУНД</div>
				</div>
			</div> -->
			
			<div id="poplavok" style=" background: url(<?php bloginfo('template_url'); ?>/i/mrt_bg.png) 0 0;" class="mrb bron_form">
				<h2>Забронировать номер сейчас:</h2>
				<?php echo do_shortcode('[contact-form-7 id="1808" title="Бронирование новый год" html_class="use-floating-validation-tip"]'); ?>
				<div class="mrtb">
					<div class="phone">+7 (918) 307-47-48</div>
					<div class="text">отдел бронирования</div>
				</div>
			</div>
			
		</div>
		<div class="mrb"></div>
	</div>
</div>

<?php get_footer();?>