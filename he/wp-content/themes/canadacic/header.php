<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="5zDsw51J1Ztj_h_6VFpY2qSVIInVRyKNc8PaP8o4hS8" />
	<meta http-equiv="Cache-control" content="max-age=2592000, public">
	<link rel="alternate" hreflang="he" href="http://giccanadaimmigration.com/he" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styleK.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
	<!--<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ouibounce.css">-->
	<title><?php typical_title(); // выводи тайтл, функция лежит в function.php ?></title>
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
	<!--<style>
img.ajax-loader{margin: 0 auto;width: 16px;margin: 0 auto;display: block;height: 16px;}div.wpcf7-validation-errors, div.wpcf7-mail-sent-ok{margin: -20px 7px 5px 7px;background-color: white;}.contactform .wpcf7-not-valid-tip, .forms .wpcf7-not-valid-tip, .formsa .wpcf7-not-valid-tip, .forms_xs .wpcf7-not-valid-tip, .forms_xs .wpcf7-not-valid-tip{margin-top: -19px;padding-bottom: 5px;font-size: 10px;}.contactform .wpcf7-not-valid-tip{margin-top: 0;}.lang a img{margin-left: 10px; padding-top: 7px;}.forms .hr, .forms_xs .hr{background-color: transparent;}#ouibounce-modal .modal{display: block;}
</style>-->
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TN286C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TN286C');</script>
<!-- END Google Tag Manager -->

<!-- Google Analyst -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77565755-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- END Google Analyst -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36231495 = new Ya.Metrika({
                    id:36231495,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36231495" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /END Yandex.Metrika counter -->
<header>
	<div class="container head">
		<div class="row">
			<div class="col-md-4 col-sm-12 hidden-xs hidden-sm">
			 <div class="follow">
			 	<p>Follow us:</p>			 	
				 	<a href="https://www.facebook.com/giccanadaimmigration/"><i class="fa fa-vk"></i></a>
				 	<a href="https://www.facebook.com/giccanadaimmigration/"><i class="fa fa-twitter"></i></a>
				 	<a href="https://www.facebook.com/giccanadaimmigration/"><i class="fa fa-facebook"></i></a>			 
			 </div>
			 <div class="number">
					<p> <i class="fa fa-phone"></i><?php echo get_post_meta(131, 'phone', true);?>
					&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i><?php echo get_post_meta(131, 'phone_mobile', true);?></p>
					<p class="location"><i class="fa fa-map-marker"></i>סניף תל-אביב: רח' נירים 3 (בית קנדה), אגף ימני, קומה 3</p>
					<p class="location"><i class="fa fa-map-marker"></i><?php echo get_post_meta(131, 'haifa_adres', true);?></p>
				</div>
				
			</div>
			<div class="col-md-4 logo col-sm-12 col-xs-12">
				<div>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="">
				</div>	
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 ">
				<div class="lang hidden-xs" style="padding-top: 0;height: auto; background-color: rgba(255, 255, 255, 0);">
				 <p><i class="fa fa-flag"></i>שָׂפָה:</p>
				<!-- <style type="text/css">
				  .drop-lang {
				   position: absolute;
				  }

				  .drop-lang  button {
				   margin: 0 0 0 90px;
				   height: 20px;
				   line-height: 26px;
				   outline: none;
				  }

				  .drop-lang  ul {
				   margin: 0;
				   min-width: 175px;
				  }
				 </style>
				 <div class="dropdown drop-lang">
					<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   עברי
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dLabel">
					  <li><a href="/eng">English</a></li>
					  <li><a href="/">Русский</a></li>
					 </ul>
				 </div> -->
				 <style>.lang a img{margin-left: 10px; padding-top: 7px;}</style>

					<a href="/"><img src="/ru.png" alt=""></a>
				 	<a href="/en"><img src="/en.png" alt=""></a>
				 	<a href="/he"><img src="/he.png" alt=""></a>
				</div>
				
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default container-fluid">
  		<div class="container">
    		<!-- Brand and toggle get grouped for better mobile display -->
   			<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
    		</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
					<?php wp_nav_menu(array(
						'theme_location' => 'header_menu',
						'container' => false,
						'items_wrap' => '%3$s',
						'walker' => new Bootstrap_Walker_Nav_Menu,
						)); 
					?>
			    </ul>
			</div>
			<img  class="clev hidden-xs" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/clev.png" alt="canada">
			<div class="forms hidden-xs">
				<p><b>צור קשר </b></p>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/list.png" alt="" align="right">
				<p class="ent"  style="padding-bottom:30px;">אנא מלאו את הטופס ואנו נחזור אליכם בהקדם האפשר</p>
				<?php  echo do_shortcode( '[contact-form-7 id="135" title="header"]' ); ?>
			</div>
		</div>
	</nav>
	<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
		<?php	
			$args = array('post_type'    => 'slider');
			$query = new WP_Query( $args );
		?>
		<!-- Indicators -->
  		<ol class="carousel-indicators">
		<?php
			$i = 0;
			$j = 0;
			while ( $query->have_posts() ) {
				$query->the_post(); 
				if($i == 0) $class = 'class="active"';
				echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" '.$class.'></li>';
				$i++;
				$class = '';
			}
		?>
  		</ol>
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
			<?php	
				while ( $query->have_posts() ) {
					$query->the_post(); 
					$slide_url = get_post_meta( get_the_ID(), 'slide_url', true );
					if ( has_post_thumbnail() ){
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
						$thumbnail = '<img src="'.$thumb[0].'" alt="..." />';
					}
			?>
				<div class="item <?php if($j == 0) echo 'active'; $j++ ?>">
					<?php echo $thumbnail; ?>
					<div class="carousel-caption container">
						<div class="jumb-text">
							
						</div>
					</div>
				</div>
			<?php }	?>	
  		</div>
	</div>
</header>