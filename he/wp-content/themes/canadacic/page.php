<?php get_header(); ?>
<div class="federal" style="padding-bottom: 50px;">
	<div class="container">
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			the_title( '<h1 class="entry-title">', '</h1>' );
			the_content();
		endwhile;
?>
	</div>
<div>
<h3 style="text-align: center;"><strong><a href="http://giccanadaimmigration.com/he/contact-us/" target="_blank">לקבל מידע נוסף הנכם מוזמנים ליצור עמנו קשר</a></strong></h3>
<p style="text-align: center;"> <img class="alignnone size-full wp-image-807" src="http://giccanadaimmigration.com/wp-content/uploads/2014/09/Logo_GIC_Canada_immigration_200x120_Opt_JPG_10kb.jpg" alt="GIC Canada immigration company" width="200" height="121" /></p>
<h2 style="text-align: center;">03-6738333, 054-3319797</h2>
<p style="text-align: center;"><strong>cicinfocenter@gmail.com</strong></p>
<hr />
<p><b>צור קשר<a href="http://giccanadaimmigration.com/he/contact-us/">טופס פניה</a></b></p>
<p><b>:מסלולי הגירה </b> <a href="http://giccanadaimmigration.com/he/category/types/">קרא עוד...</a></p>
<p><b>:עמוד ראשי</b><a href="http://giccanadaimmigration.com/he/">עבור</a></p>
</div>
</div>
<?php get_template_part( 'foot_contact' ); ?>
<?php get_footer(); ?>