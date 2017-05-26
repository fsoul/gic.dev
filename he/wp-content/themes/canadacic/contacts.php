<?php
/*
Template Name: Шаблон контактов
*/
?>
<?php get_header(); ?>
<div class="contacts">
	<div class="container"><br>
		<center><img src="http://giccanadaimmigration.com/wp-content/themes/canadacic/img/logo.png" width="250" alt="GIC Canada Immigration Company הגירה לקנדה"></center><br>
		<center><h1><STRONG>הגירה לקנדה</STRONG></h1>
		
		<h3>הנכם מוזמנים לפנות אלינו בכל שאלה</h3>
		</center>
		<div class="row">
			<div class="col-md-6">
				
				<div class="worktime">
					<br><br>

					<p><h3> <b> טלפון: </b>03-6738333, 054-3319797</h3></p>
					<p><h3> <b> פקס: </b>03-6738288</h3></p>	
					<p><h3> <b> דוא"ל </b>cicinfocenter@gmail.com</h3></p>				
					<br>
					<strong>שעות פעילות:</strong>
					<p> <b> ימים א-ה: </b> 9:00 עד 19:30</p>
					<p> <b> יום שישי: </b>9:00 עד 16:00</p><br>
					
				</div>
				<div class="contactinfo">
					
				</div>
			</div>

			<div class="col-md-6">
				<div class="contactform">
<p style="color:#ffffff; font-size:180%;"><b>צור קשר</b></p>
<p style="color:#ffffff; font-size:140%;">מלאו את הפרטים ואנו ניצור עמכם קשר בהקדם האפשרי</p>
					<!--<div role="form" class="wpcf7" id="wpcf7-f138-p136-o1" lang="he_IL" dir="ltr">
						<div class="screen-reader-response"></div>
						<form action="/he/contacts/#wpcf7-f138-p136-o1" method="post" class="wpcf7-form" novalidate="novalidate">
							<div style="display: none;">
								<input type="hidden" name="_wpcf7" value="138" />
								<input type="hidden" name="_wpcf7_version" value="4.4" />
								<input type="hidden" name="_wpcf7_locale" value="he_IL" />
								<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f138-p136-o1" />
								<input type="hidden" name="_wpnonce" value="1544c9ff09" />
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
					<?php  echo do_shortcode( '[contact-form-7 id="138" title="header"]' ); ?>
				</div>
			</div>
		</div>
		<div class="maps">
			<h3> <b>סניף תל-אביב: </b>רח' נירים 3 (בית קנדה ), קומה 3</h3><br>
								<strong>שעות פעילות:</strong>
					<p> <b> ימים א-ה: </b> 9:00 עד 19:30</p>
					<p> <b> יום שישי: </b>9:00 עד 16:00</p><br>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/map gic canada immigration tel aviv.png">
		</div>
		<div class="row">
			<div class="otherconsuls">

			</div>
		</div>
		<div class="maps">
			<p><h3><b>סניף חיפה: </b> רח' שער פלמר 1, קומה 5, משרד 521</h3></p><br>
								<strong>שעות פעילות:</strong>
					<p> <b> יום רביעי </b>15:00 עד 20:00</p><br>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/map gic canada immigration haifa.png">
		</div>
		
		
				<div class="col-md-5">
					<h4>Other offices:</h4>
					<div class="countries">

						<div class="israel">
							<a href="<?php echo get_post_meta(131, 'israel', true);?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/israel.png" alt=""></a>
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
<?php get_footer(); ?>