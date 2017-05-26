<div class="container workcanada hidden-xs">
	<div class="row">
		<div class="col-md-2">
			<h2>Требуются</h2>
		</div>
		<div class="col-md-2">
			<a href="<?php echo get_home_url(); ?>/category/work/hot-jobs/"><button style="width: 196px;">ПОСМОТРЕТЬ ВСЕ</button></a>
		</div>
	</div>
	<div class="row">
<?php
	$args = array(  'posts_per_page' => 5,
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
		$thumbnail = '<img src="'.$thumb[0].'" alt="иммиграция в канаду" />';
	}
	?>
	<a href="<?php the_permalink(); ?>"><div class="col-md-3 col-sm-6">
		<?php echo $thumbnail; ?>
		<div class="blockoverlay">
			<p>ПОДРОБНЕЕ</p>
		</div>
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