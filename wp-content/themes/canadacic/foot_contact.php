<?php get_template_part( 'midle-form' ); ?>
<div class="container-fluid sud can">
	<div class="container" style="position: relative;">
		<div class="row">
			<div class="tt col-lg-8">
				<p class="">Связь с нами</p>
				<p class="loca pr"><?php echo get_post_meta(504, 'adress', true);?></p>
				<p class="loca"><?php echo get_post_meta(504, 'haifa_adres', true);?></p>
				<ul>
					<li><span>Телефон 1: </span><i class="fa fa-phone"></i><?php echo get_post_meta(504, 'phone', true);?></li>
					<li><span>Телефон 2: </span><i class="fa fa-phone"></i><?php echo get_post_meta(504, 'phone_mobile', true);?>
</li>
					<li><span>E-Mail: </span><i class="fa fa-envelope"></i><?php echo get_post_meta(504, 'mail', true);?></li>
				</ul>
				<div class=" pres">
					<p>Также у нас есть представительства в таких странах:</p>
					<div class="">
						<div class="count">
							<a href="<?php echo get_post_meta(504, 'israel', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flag_israel gic canada immigration.jpg" alt="иммиграция в канаду из израиля"></a>
							<p>Израиль</p>
						</div>
						<div class="count">
							<a href="<?php echo get_post_meta(504, 'ukraine', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flag_ukraine gic canada immigration.jpg" alt="иммиграция в канаду из украины"></a>
							<p>Украина</p>
						</div>
						<div class="count">
							<a href="/gic-canada-georgia/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flag_georgia gic canada immigration.jpg" alt="иммиграция в канаду из грузии"></a>
							<p>Грузия</p>
						</div>
						<div class="count">
							<a href="<?php echo get_post_meta(504, 'rusia', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flag_russia gic canada immigration.jpg" alt="иммиграция в канаду из россии"></a>
							<p>Россия</p>
						</div>
					</div>
				</div>
			</div>
			<div class="formsa hidden-xs">
				<p>Запишитесь на Консультацию</p>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/list.png" alt="" align="left">
				<p class="ent"><B>Хотите оценить свои шансы? Запишитесь на Консультацию.</B></p>
			<!--	<div role="form" class="wpcf7" id="wpcf7-f479-p512-o1" lang="ru-RU" dir="ltr">
					<div class="screen-reader-response"></div>
					<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
						<div style="display: none;">
							<input type="hidden" name="_wpcf7" value="479" />
							<input type="hidden" name="_wpcf7_version" value="4.3.1" />
							<input type="hidden" name="_wpcf7_locale" value="ru_RU" />
							<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f479-p512-o1" />
							<input type="hidden" name="_wpnonce" value="828409188e" />
						</div>
						<input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Ваше имя"/>
						<input type="tel" name="your-tel" value="" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Телефон"/>
						<input type="email" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="E-mail"/>
						<select name="city" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="Выберите город">Выберите город</option><option value="Город">Город</option><option value="Город">Город</option></select>
						<span class="wpcf7-form-control-wrap radio-840"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first last"><input type="radio" name="radio-840" value="Перезвонить вам ?" />&nbsp;<span class="wpcf7-list-item-label">Перезвонить вам ?</span></span></span></span>
						<div class="hr">
							<input type="submit" value="Отправить заявку" class="wpcf7-form-control wpcf7-submit" />
						</div>
						<div class="wpcf7-response-output wpcf7-display-none"></div>
					</form>
				</div>-->
				<?php  echo do_shortcode( '[contact-form-7 id="479" title="header"]' ); ?>
			</div>
		</div>
	</div>
</div>