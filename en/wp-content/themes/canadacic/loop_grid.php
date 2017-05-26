<?php
/**
 * Шаблон отдельной записи (loop_grid.php)
 */
 ?>
<?php
	if ( has_post_thumbnail() ){
		$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), '(370, 265)');
		$thumbnail = $thumb[0];
	}
	echo '
	<div class="col-md-4 col-sm-6">
		<a href="'.get_the_permalink().'" class="a_grid"><div class="canadaprograms" style="height: 600px;">
			<div style="background: url('.$thumbnail.') 50% 50% no-repeat; background-size: cover;   width: 100%; height: 270px;"></div>
			<h1>'.get_the_title().'</h1>
			<p>'.do_excerpt(get_the_excerpt(), 45).'</p>
			<a href="'.get_the_permalink().'">Read more...</a>
		</div></a>
	</div>';
?>