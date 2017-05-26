<?php
/*
Template Name: Шаблон контактов
*/
?>
<?php get_header(); ?>
<div class="contacts">
	<div class="container">
		<h1>Contact Us</h1>
		<p>If you have a question or you want to get information about immigration to Canada, please contact us filling out the contact form below. Contacting us does not impose any obligations</p>
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
				<div class="worktime">
					<h5>Opening hours:</h5>
					<p>Sunday - Thursday:<span> 10:00 - 20:00</span></p>
					<p>Friday:<span> 9:00 - 16:00</span></p>
					<p>Saturday:<span> 19:00 - 22:00</span></p>
				</div>
				<div class="contactinfo">
					<br><br>
					<p><span>Adress: </span><?php echo get_post_meta(131, 'adress', true);?></p>
					<p><span>Phone: </span><?php echo get_post_meta(131, 'phone', true);?></p>
					<p><span>Fax: </span><?php echo get_post_meta(131, 'fax', true);?></p>
					<p><span>Email: </span> <a href="mailto:<?php echo get_post_meta(131, 'email', true);?>"><?php echo get_post_meta(131, 'email', true);?></a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contactform">
					<!--<div role="form" class="wpcf7" id="wpcf7-f134-o1" lang="ru-RU" dir="ltr">
						<div class="screen-reader-response"></div>
						<form action="/en/contact-us/#wpcf7-f134-o1" method="post" class="wpcf7-form" novalidate="novalidate">
							<div style="display: none;">
								<input type="hidden" name="_wpcf7" value="134" />
								<input type="hidden" name="_wpcf7_version" value="4.4" />
								<input type="hidden" name="_wpcf7_locale" value="ru_RU" />
								<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f134-o11" />
								<input type="hidden" name="_wpnonce" value="c134d008df" />
							</div>
							<span class="wpcf7-form-control-wrap formcontact your-name"><input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" /></span>
							<span class="wpcf7-form-control-wrap formcontact your-city"><input type="text" name="your-city" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="City" /></span>
							<span class="wpcf7-form-control-wrap formcontact your-tel"><input type="tel" name="your-tel" value="" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone" /></span>
							<span class="wpcf7-form-control-wrap formcontact your-email"><input type="email" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span>
							<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" rows="4" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your question"></textarea></span>
							<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
							<div class="wpcf7-response-output wpcf7-display-none"></div>
						</form>
					</div> -->
					<?php  echo do_shortcode( '[contact-form-7 id="134" title="header"]' ); ?>
				</div>
			</div>
		</div>
		<div class="maps">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/map gic canada immigration tel aviv.png">
		</div>
		<div class="row">
			<div class="otherconsuls">
				<div class="col-md-4">
					<div class="contactinfo">
						<h2>Haifa</h2>
						<p><span>Adress: </span><?php echo get_post_meta(131, 'haifa_adres', true);?></p>
						<p><span>Phone: </span><?php echo get_post_meta(131, 'haifa_phone', true);?></p>
						<p><span>Fax: </span><?php echo get_post_meta(131, 'haifa_fax', true);?></p>
						<p><span>Email:</span> <a href="<?php echo get_post_meta(131, 'haifa_mail', true);?>"><?php echo get_post_meta(131, 'mail', true);?></a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="worktime">
						<p>Opening hours:</p>
						<p>Wednesday:<span> 14:00 - 20:00</span></p>
						<p>Calls are accepted Sunday - Thursday:<span> 10:00 - 19:00</span></p>
					</div>
				</div>
				<div class="col-md-5">
					<h4>Other offices:</h4>
					<div class="countries">

						<div class="israel">
							<a href="<?php echo get_post_meta(131, 'israel', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/israel.png" alt="GIC Canada Immigration"></a>
							<p>ISRAEL</p>
						</div>
						<div class="ukraine">
							<a href="<?php echo get_post_meta(131, 'ukraine', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ukraine.png" alt=""></a>
							<p>UKRAINE</p>
						</div>
						<div class="georgia">
							<a href="<?php echo get_post_meta(131, 'georgia', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/georgia.png" alt=""></a>
							<p>GEORGIA</p>
						</div>
						<div class="russia">
							<a href="<?php echo get_post_meta(131, 'rusia', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/russia.png" alt=""></a>
							<p>RUSSIA</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="maps">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/map gic canada immigration haifa.png">
		</div>
	</div>
</div>
<?php get_footer(); ?>