<div class="container workcanada hidden-xs">
	<div class="row">
		<div class="col-md-2">
			<h1>Hot Jobs</h1>
		</div>
		<div class="col-md-2">
			<a href="<?php echo get_home_url(); ?>/category/work/hot-jobs/"><button>SEE ALL</button></a>
		</div>
	</div>
	<div class="row">
<?php
	$args = array(  'posts_per_page' => 4,
				'category' => 7,
				'meta_query' => array(
		array(
				'key' => 'hot', 
				'value' => 'hott',
				'compare' => 'LIKE'
			)
		)
	);
	$lastposts = get_posts( $args );
	foreach( $lastposts as $post ){ setup_postdata($post);
	if ( has_post_thumbnail() ){
		$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), '(370, 265)');
		$thumbnail = $thumb[0];
	}
	?>
	<a href="<?php the_permalink(); ?>"><div class="col-md-3 col-sm-6">
		<?php echo '<div style="background: url('.$thumbnail.') 50% 50% no-repeat; background-size: cover;   width: 100%; height: 165px;"></div>'; ?>
		<div class="blockoverlay">
			<p>READ MORE</p>
		</div>
		<div class="littleprogtext">
			<h1><?php the_title(); ?></h1>
		</div>
	</div></a>
	<?php 
}
wp_reset_postdata();		
	?>	
	</div>
</div>