<?php get_header(); ?>
<body>
  <div id="w-wrapper">
    <header id="w-header">
      <div class="container">
        <div class="row-fluid">
          <div class="col-xs-12">
            <div class="row justify-content-between">
              <div class="col-xs-3 col-md-3 center">
                <?php the_custom_logo();
                if (!has_custom_logo()) {
                  ?><a href="<?php esc_url(home_url('/')); ?>">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/black-sight-logo.png'; ?>" />
                  <?php 
                } ?>
              </div>
              <div class="col-xs-3 col-md-3">
                <ul class="w-cart-menu">
                  <li class="w-menu-item">
                    <a href="#" class="w-links"><span class="w-cart-icon"></span> CART</a>
                  </li>
                  <li class="w-menu-item">
                    <a href="#" class="w-links"><span class="w-menu-option">ACCOUNT</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main>


      </main>
      <?php get_footer(); ?>