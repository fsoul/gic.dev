<?php get_header(); ?>
<div class="need single_page">
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
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=535292879814447";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your like button code -->
<div class="fb-like" data-href="<? get_permalink (); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
			
			<?
			the_content();
		endwhile;
?>
<div>
<h2 style="text-align: center; color: #c72261;">Иммиграция в Канаду</h2>
<h3 style="text-align: center;"><strong><a style="color: #c72261;" href="http://giccanadaimmigration.com/contacts/" target="_blank">Для получения подробной информации обратитесь к представителю GIC Canada Immigration.</a></strong></h3>
<div align="center"><a href="<?php echo get_site_url(); ?>/contacts/"><button><strong>Запишитесь на Консультацию</strong></button></a></div><br>
<p style="text-align: center;"> <img class="alignnone size-full wp-image-807" src="http://giccanadaimmigration.com/wp-content/uploads/2014/09/Logo_GIC_Canada_immigration_200x120_Opt_JPG_10kb.jpg" alt="GIC Canada immigration company" width="200" height="121" /></p>
<h3 style="text-align: center;">03-6738333, 054-3319797</h3>
<p style="text-align: center;"><strong>cicinfocenter@gmail.com</strong></p>
<hr/>

<div align="center"><a href="<?php echo get_site_url(); ?>/category/types-of-immigration/"><button><strong>Виды Иммиграционных Программ</strong></button></a></div><br>
<div align="center"><a href="<?php echo get_site_url(); ?>/category/pnp/"><button><strong>Провинциальные Программы PNP</strong></button></a></div><br>
<div align="center"><a href="<?php echo get_site_url(); ?>/category/news/"><button><strong>Новости Канады</strong></button></a></div><br>
<div align="center"><a href="<?php echo get_site_url(); ?>/"><button><strong>Вернутся на Главную страницу</strong></button></a></div><br>

</div>
<div class="visible-xs">
		<img  class="clev_xs" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/clev.png" alt="clev">
	
			<div class="forms_xs">
				<p>СВЯЗАТЬСЯ С НАМИ</p>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/list.png" alt="gic canada immigration contact us" align="left">
				<p class="ent"><b>Запишитесь на<br> Консультацию</b></p>
				<?php  echo do_shortcode( '[contact-form-7 id="479" title="header"]' ); ?>
			</div>
	</div>
<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>
	</div>
</div>



<?php get_template_part( 'foot_interesting' ); ?>
<?php get_template_part( 'foot_contact' ); ?>
<?php get_footer(); ?>