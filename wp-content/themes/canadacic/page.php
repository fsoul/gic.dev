<?php get_header(); ?>
<div class="federal">
	<div class="container">
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			the_title( '<h1 class="entry-title">', '</h1>' );
			the_content();
		endwhile;
?>
	</div>
</div>
<?php get_template_part( 'foot_contact' ); ?>
<?php get_footer(); ?>