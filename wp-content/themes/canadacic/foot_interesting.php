<div class="interesting">
	<div class="container">
		<div class="row">
			
				<h2>ВАМ ТАКЖЕ БУДЕТ ИНТЕРЕСНО</h2>
			
			<div class="col-md-8">
			<?php
						global $post;
						$postslist = get_posts( array( 'posts_per_page' => 8, 'order'=> 'DESC', 'orderby' => 'rand','category' => 3));
						foreach ( $postslist as $post ){
							setup_postdata($post);
							if ( has_post_thumbnail() ){
								$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), '(370, 265)');
								$thumbnail = '<img src="'.$thumb[0].'" alt=""  width="82%"/>';
							}
							?>
							<a href="<?php echo get_the_permalink();?>">
							<div class="col-md-3 col-sm-6 col-xs-9">
								<?php echo $thumbnail ?>
								
								<div class="littleprogtext">
									<h3><?php the_title(); ?></h3>
								</div>
							</div></a>
							<?php
						}
						wp_reset_postdata();	
						?>
			</div>	
		</div>
	</div>
</div>