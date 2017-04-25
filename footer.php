<?php

?>
<footer class="container-fluid">
<div class="row">
  <div class="col-xs-12 col-md-4">
  <?php
     if(is_active_sidebar('footer-menu1')){
     dynamic_sidebar('footer-menu1');
     }
     ?>
  </div> 
  <div class="col-xs-12 col-md-4">
  <?php
     if(is_active_sidebar('footer-menu2')){
     dynamic_sidebar('footer-menu2');
     }
     ?>
  </div>
  <div class="col-xs-12 col-md-4">
  <?php
     if(is_active_sidebar('footer-menu3')){
     dynamic_sidebar('footer-menu3');
     }
     ?>
  </div>
</div>
<div class="row">
 <?php get_template_part('template-parts/footer/copyright', 'info' ); ?>
</div>
</footer>
<?php wp_footer(); ?>
		</div> <!-- end w-wrapper -->
	</body>
</html>