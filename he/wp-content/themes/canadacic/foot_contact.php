<div class="container-fluid sud can">
	<div class="container" style="position: relative;">
		<div class="row">
			<div class="tt col-lg-8">
				<p class="">צור קשר</p>
								<p class="loca pr"><?php echo get_post_meta(131, 'adress', true);?></p>
				<p class="loca"><?php echo get_post_meta(131, 'haifa_adres', true);?></p>
				<ul>
					<li><i class="fa fa-phone"></i><?php echo get_post_meta(131, 'phone', true);?></li>
					<li><i class="fa fa-phone"></i><?php echo get_post_meta(131, 'fax', true);?></li>
					<li><i class="fa fa-envelope"></i><?php echo get_post_meta(131, 'email', true);?></li>
				</ul>
				<div class=" pres">
					<p>משרדינו פועלים במדינות הבאות:</p>
					<div class="">
						<div class="count">
							<a href="http://giccanadaimmigration.com/he/contact-us/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/israel.png" alt=""></a>
							<p>Israel</p>
						</div>
						<div class="count">
							<a href="http://giccanadaimmigration.com/contacts/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ukraine.png" alt=""></a>
							<p>Ukraine</p>
						</div>
						<div class="count">
							<a href="http://giccanadaimmigration.com/gic-canada-georgia"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/georgia.png" alt=""></a>
							<p>Georgia</p>
						</div>
						<div class="count">
							<a href="http://giccanadaimmigration.com/contacts/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/russia.png" alt=""></a>
							<p>Russia</p>
						</div>
					</div>
				</div>
			</div>
			<div class="formsa hidden-xs">
				<p>Contact Us Today</p>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/list.png" alt="" align="left">
				<p class="ent">We are pleased to offer you the whole range of our services</p>
				<!--<div role="form" class="wpcf7" id="wpcf7-f135-p136-o1" lang="he_IL" dir="ltr">
					<div class="screen-reader-response"></div>
					<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
						<div style="display: none;">
							<input type="hidden" name="_wpcf7" value="135" />
							<input type="hidden" name="_wpcf7_version" value="4.3.1" />
							<input type="hidden" name="_wpcf7_locale" value="he_IL" />
							<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f135-p136-o1" />
							<input type="hidden" name="_wpnonce" value="eec36b8422" />
						</div>
						<input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Name"/>
						<input type="tel" name="your-tel" value="" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone"/>
						<input type="email" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="E-mail"/>
						<select name="city" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="Выберите город">Select a city</option><option value="Город">City</option><option value="Город">City</option></select>
						<span class="wpcf7-form-control-wrap radio-840"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first last"><input type="radio" name="radio-840" value="Перезвонить вам ?" />&nbsp;<span class="wpcf7-list-item-label">Call you?</span></span></span></span>
						<div class="hr">
							<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
						</div>
						<div class="wpcf7-response-output wpcf7-display-none"></div>
					</form>
				</div> -->

				<?php  echo do_shortcode( '[contact-form-7 id="160" title="header"]' ); ?>

			</div>
		</div>
	</div>
</div>