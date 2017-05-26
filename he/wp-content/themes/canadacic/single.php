<?php get_header(); ?>
<div class="need single_page" style="padding-bottom: 50px;">
	<div class="container">
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			
			the_title( '<h1 class="entry-title">', '</h1>' );
			if ( has_post_thumbnail() ){
		$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), '(517, 345)');
		echo '<img src="'.$thumb[0].'" class="col-md-5 col-sm-12 col-xs-12 img-responsive first_img"/>';
	}
			?>
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.5&appId=535292879814447";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	
<!-- Your like button code -->
<div class="fb-like" data-href="<? get_permalink (); ?>" data-layout="button" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>

<?the_content();endwhile;?>

<div>
<div align="center"><div class="fb-like" data-href="<? get_permalink (); ?>" data-layout="button" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div></div>
<h3 style="text-align: center;"><strong><a href="http://giccanadaimmigration.com/he/contact-us/" target="_blank">לקבל מידע נוסף הנכם מוזמנים ליצור עמנו קשר</a></strong></h3>
<div style="text-align: center;"> <img class="alignnone size-full wp-image-807" src="http://giccanadaimmigration.com/wp-content/uploads/2014/09/Logo_GIC_Canada_immigration_200x120_Opt_JPG_10kb.jpg" alt="GIC Canada immigration company" width="200" height="121" /></div>
<h2 style="text-align: center;">03-6738333, 054-3319797</h2>
<h3 style="text-align: center;"><strong>cicinfocenter@gmail.com</strong></h3>
<hr />
<p><b>צור קשר: <a href="http://giccanadaimmigration.com/he/contact-us/">טופס פניה</a></b></p>
<p><b>מסלולי הגירה: </b> <a href="http://giccanadaimmigration.com/he/category/programs/"> קרא עוד...</a></p>
<p><b>עמוד ראשי: </b><a href="http://giccanadaimmigration.com/he/"> עבור</a></p>
</div>

<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>

	</div>
</div>
<?php get_template_part( 'foot_interesting' ); ?>
<?php get_template_part( 'foot_contact' ); ?>
<?php get_footer(); ?>