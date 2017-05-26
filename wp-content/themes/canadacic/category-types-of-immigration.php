<?php get_header(); ?>
<div class="imigrationtext">
	<div class="imtextcontainer">
		<h3 class="archive-title"><?php printf(single_cat_title( '', false ) ); ?></h3>
		<?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
				printf( '<p>%s</p>', $term_description );
			endif;
		?>
	</div>
</div>
	<div class="container">
		<h1>ИММИГРАЦИОННЫЕ ПРОГРАММЫ КАНАДЫ</h1>
		<div class="row">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'loop_grid' );
					endwhile;
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'none' );
				endif;
			?>			
		</div>
	</div>
<?php get_template_part( 'foot_contact' ); ?>
<?php get_template_part( 'foot_workcanada' ); ?>
<?php get_footer(); ?>