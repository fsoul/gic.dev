<div class="interesting">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>YOU WILL ALSO INTERESTING</h1>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="">
			</div>
			<div class="col-md-8">
			<?php
				$args = array(  
						'posts_per_page' => 5,
						'meta_query' => array
						(
					array(
						'key' => 'view_interest', 
						'value' => 'view',
						'compare' => 'LIKE'
						)
					)
				);
				$lastposts = get_posts( $args );
				?><ul><?php
					foreach( $lastposts as $post ){ setup_postdata($post);
					?><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li><?php 
					}
				?></ul><?php
				wp_reset_postdata();		
				?>
			</div>
		</div>
	</div>
</div>