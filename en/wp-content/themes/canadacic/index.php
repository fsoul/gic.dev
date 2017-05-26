<?php get_header();?>
<div id="indexinfo">
	<div class="container">
		<div class="row forborder" >
			<div class="col-md-3 col-sm-12">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
			</div>
			<div class="col-md-9">
				<h1>About Us - GIC Canada Immigration</h1>
<p>At GIC Canada, we care about you and your journey. As people, we understand the challenges and difficulties that go along with immigrating to another country. As professionals, we strive to equip you with the knowledge that will help you overcome those challenges.</p>

<p>If you are interested in moving to Canada, whether to visit or live permanently, the knowledgeable immigration professionals here at GIC can become your greatest asset. GIC Canada is more than just a group of educated people - we are an integrated team of experts who provide an wide range of services for anyone who is hoping to make Canada their new home.  <a href="http://giccanadaimmigration.com/en/about-us-2/" target="_blank">Read More...</a></p>

<h2 style="text-align: center;">Phone: 972-54-3319797, +972-3-6738333</h2>
				<a href="<?php echo get_site_url(); ?>/category/immigration-programms/"><button> IMMIGRATION SERVICES</button></a>
			</div>
		</div>
	</div>
	<div class="visible-xs">
		<img  class="clev_xs" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/clev.png" alt="clev">
			<div class="forms_xs">
				<p>CONTACT US</p>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/list.png" alt="gic canada immigration contact us" align="left">
				<p class="ent"><b>Fill in the form below we will send you more information</b></p>
				<?php  echo do_shortcode( '[contact-form-7 id="160" title="header"]' ); ?>
			</div>
	</div>
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="aboutimg">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure1.png">
					</div>
						<h1>Licensed Canadian Immigration Consultants (RCIC) and a Lawyers</h1>
						<p>Our clients are being represented by licensed and qualified Immigration Consultants (RCIC) and Lawyers</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="aboutimg">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure2.png">
					</div>
						<h1>AN INDIVIDUAL APPROACH TO EACH CLIENT</h1>
						<p>Choosing the optimal immigration program based on the client's personal details</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="aboutimg">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure3.png">
					</div>
						<h1>HIGH QUALIFICATION</h1>
						<p>Our employees are professionals and qualified in regards to Immigration Programs to Canada</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="aboutimg">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure5.png">
					</div>
						<h1>HIGH QUALITY GUARANTEED</h1>
						<p>We guarantee reliable and qualitative preparation of your application file for immigration visa or temporary permits.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="uslugi">
		<div class="container">
			<h1>OUR SERVICES FOR IMMIGRATION TO CANADA</h1>
			<div class="col-md-3 col-sm-6 col-xs-9">
				<a href="<?php echo get_the_permalink(152); ?>/contact-us/">
					<img class="uslugiimg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_work_canada_2.jpg">
					<div class="blockoverlay">
					</div>
					<div class="containertext">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure6.png">
						<p>Preliminary Evaluation for Immigration To Canada</p>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-9">
				<a href="<?php echo get_the_permalink(154); ?>/contact-us/">
					<img class="uslugiimg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_visa_canada.jpg">
					<div class="blockoverlay">
					</div>				
					<div class="containertext">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure7.png">
						<p>Application Files - Full Service</p>
					</div>
				</a>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-9">
				<a href="<?php echo get_the_permalink(156); ?>/contact-us/">
				<img class="uslugiimg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/usluga3.png">
				<div class="blockoverlay">
				</div>
				<div class="containertext">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure8.png">
					<p>Job Search for Immigrants and Recruitment service, LMIA, Work Permits</p>
				</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-9">
				<a href="<?php echo get_the_permalink(158); ?>/contact-us/">
				<img class="uslugiimg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_study_canada.jpg">
				<div class="blockoverlay">
				</div>
				<div class="containertext">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/figure9.png">
					<p>Admission to a Canadian Institutes and Study visa services</p>
				</div>
				</a>
			</div>
			<h1 class="hidden-xs">IMMIGRATION PROGRAMS </h1>
			<div class="uslugiprograms hidden-xs">
				<div class="container">
					<div class="row">
						<?php
						global $post;
						$postslist = get_posts( array( 'posts_per_page' => 8, 'order'=> 'ASC', 'orderby' => 'title','category' => 3 ) );
						foreach ( $postslist as $post ){
							setup_postdata($post);
							if ( has_post_thumbnail() ){
								$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), '(370, 265)');
								$thumbnail = $thumb[0];
							}
							?>
							<div class="col-md-3 col-sm-6 col-xs-9">
								<?php echo '<div style="background: url('.$thumbnail.') 50% 50% no-repeat; background-size: cover;   width: 100%; height: 185px;"></div>'; ?>
								<div class="blockoverlay">
									<a href="<?php echo get_the_permalink();?>">Read More...</a>
								</div>
								<div class="littleprogtext">
									<h1><?php the_title(); ?></h1>
								</div>
							</div>
							<?php
						}
						wp_reset_postdata();	
						?>
					</div>
				</div>
			</div>
			
			<div class="col-md-9">
<h2 style="text-align: center;"><a href="http://giccanadaimmigration.com/contacts/"><span style="color: #c72261;"> Immigration to Canada</span></a></h2>
<h3 style="text-align: center;"><a href="http://giccanadaimmigration.com/contacts/"><span style="color: #c72261;">Are you looking to immigrate to Canada?<br>
There are many different categories of Immigration Program which you may qualify.<br> 
For more information, please contact us.</span></a></h3>
<div align="center"><a href="http://giccanadaimmigration.com/en/category/immigration-programms/"><button><strong>Immigration Programs</strong></button></a></div><br>
<div align="center"><a href="http://giccanadaimmigration.com/en/category/pnp/"><button><strong>Provincial Nominees PNP</strong></button></a></div><br>
<div align="center"><a href="http://giccanadaimmigration.com/en/work_and_study_canada/"><button><strong>Work and Study in Canada</strong></button></a></div><br>
<div align="center"><a href="<?php echo get_site_url(); ?>/"><button><strong>Home Page</strong></button></a></div><br>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=328835670658740";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		</div>
	</div>
</div>
<?php get_template_part( 'midle-form' ); ?>
<?php get_template_part( 'foot_contact' ); ?>
<?php get_template_part( 'foot_workcanada' ); ?>
<?php get_footer(); ?>