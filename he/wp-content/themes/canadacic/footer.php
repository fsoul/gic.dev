<footer class="container-fluid"> 
	<div class="container">
		<div class="row">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="הגירה לקנדה GIC Canada immigration" class="log col-lg-1">
  			<ul class="nav navbar-nav col-lg-9">
		       <?php wp_nav_menu(array(
					'theme_location' => 'footer_menu',
					'depth' => 1, 
					'container' => false,
					'items_wrap' => '%3$s',
					'walker' => new Bootstrap_Walker_Nav_Menu,
					)); 
				?>
			</ul>
			<div class="col-lg-9">
				<div class="see">	
			 		<p>Follow us:</p>
			 		<div>
				 	<a href="https://www.facebook.com/giccanadaimmigration/"><i class="fa fa-twitter"></i></a>
				 	<a href="https://www.facebook.com/giccanadaimmigration/"><i class="fa fa-facebook"></i></a>
			 		</div>
			 		
				</div>
				<div class="numb">
					<p><i class="fa fa-phone"></i><?php echo get_post_meta(131, 'phone', true);?></p>
				</div>
				<div class="email">
					<p><?php echo get_post_meta(131, 'email', true);?></p>
				</div>
				<div class="copyr">
					<p><?php echo date("o"); ?> All rights reserved</p>
				</div>
			</div>
		</div>	
	</div>
</footer>
<!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ouibounce.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!--<script>
$(document).ready(function(){
    $.fn.equivalent = function (){
        var $blocks = $(this),
            maxH    = $blocks.eq(0).height(); 
        $blocks.each(function(){
            maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
        });
        $blocks.height(maxH); 
    }
    $('.canadaprograms').equivalent(); 
});
</script> -->
<script>
$(document).ready(function(){
    $.fn.equivalent = function (){
        var $blocks = $(this),
            maxH    = $blocks.eq(0).height(); 
        $blocks.each(function(){
            maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
        });
        $blocks.height(maxH); 
    }
    $('.littleprogtext').equivalent(); 
});
</script>
<script>
$('ul.nav li').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
<?php wp_footer(); // необходимо для работы плагинов и функционала ?>
  <!-- Ouibounce Modal -->
    <div id="ouibounce-modal">
      <div class="underlay"></div>
      <div class="modal">	  
	  <img  class="clev_xs" style="left: 20px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/clev.png" alt="clev">
	  <span class="glyphicon glyphicon-remove" style="float:right; padding:6px;margin:3px;cursor:pointer;"></span>
	<div class="forms_xs">
		<p>צור קשר</p>
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/list.png" alt="gic canada immigration contact us" align="left">
		<p class="ent"><b>מלאו את הפרטים<br>
				ואנו ניצור עמכם קשר בהקדם האפשרי</b></p>
		<?php  echo do_shortcode( '[contact-form-7 id="135" title="header"]' ); ?>
	</div>
      </div>
    </div>
    <script>

      // if you want to use the 'fire' or 'disable' fn,
      // you need to save OuiBounce to an object
      var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
        aggressive: true,
        timer: 0,
        callback: function() { console.log('ouibounce fired!'); }
      });

      $('body').on('click', function() {
        $('#ouibounce-modal').hide();
      });

      $('#ouibounce-modal .glyphicon-remove').on('click', function() {
        $('#ouibounce-modal').hide();
      });

      $('#ouibounce-modal .modal').on('click', function(e) {
        e.stopPropagation();
      });
    </script>
</body>
</html>