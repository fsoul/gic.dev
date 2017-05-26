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
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=328835670658740";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your like button code -->
<div class="fb-like" data-href="<? get_permalink (); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
			
			<?
			the_content();
		endwhile;
?>
<div>
<h2 style="text-align: center; color: #c72261;">Immigration to Canada</h2>
<h3 style="text-align: center;"><strong><a style="color: #c72261;" href="http://giccanadaimmigration.com/en/contact-us/" target="_blank">Are you looking to immigrate to Canada?<br>
There are many different categories of Immigration Program which you may qualify.<br> 
For more information, please contact us.</a></strong></h3>
<div align="center"><a href="http://giccanadaimmigration.com/en/contact-us/"><button><strong>Contact Us</strong></button></a></div><br>
<p style="text-align: center;"> <img class="alignnone size-full wp-image-807" src="http://giccanadaimmigration.com/wp-content/uploads/2014/09/Logo_GIC_Canada_immigration_200x120_Opt_JPG_10kb.jpg" alt="GIC Canada immigration company" width="200" height="121" /></p>
<h3 style="text-align: center;">03-6738333, 054-3319797</h3>
<p style="text-align: center;"><strong>cicinfocenter@gmail.com</strong></p>
<!-- Your like button code -->
<div align="center"><div class="fb-like" data-href="<? get_permalink (); ?>" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div></div><br>
<div align="center"><a href="http://giccanadaimmigration.com/en/category/immigration-programms/"><button><strong>Immigration Programs</strong></button></a></div><br>
<div align="center"><a href="http://giccanadaimmigration.com/en/category/pnp/"><button><strong>Provincial Nominees PNP</strong></button></a></div><br>
<div align="center"><a href="http://giccanadaimmigration.com/en/work_and_study_canada/"><button><strong>Work and Study in Canada</strong></button></a></div><br>
<div align="center"><a href="<?php echo get_site_url(); ?>/"><button><strong>Home Page</strong></button></a></div><br>

</div>
<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>

	</div>
</div>
<?php get_template_part( 'foot_interesting' ); ?>
<?php get_template_part( 'foot_contact' ); ?>
<?php get_footer(); ?>