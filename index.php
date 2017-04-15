<?php get_header(); ?>
<body>
  <div id="w-wrapper">
    <header id="w-header" class="container-fluid">
        <div class="row-fluid w-head-space">
          <div class="col-xs-12">
            <div class="row justify-content-between">
              <div class="col-xs-3 center">
                <?php the_custom_logo();
                if (!has_custom_logo()) {
                  ?><a href="<?php esc_url(home_url('/')); ?>">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/black-sight-logo.png'; ?>" />
                  <?php 
                } ?>
              </div>
                <?php wp_nav_menu( array( 
                  'menu_class' => 'w-sub-menu', 
                  'container_class' => 'col-xs-3',
                  'theme_location' => 'sub', 
                  'fallback_cb' => false,
                  ) ); ?>
            </div>
          </div>
        </div> 
            <?php wp_nav_menu( array( 
                  'menu_class' => 'w-primary-menu', 
                  'container_class' => 'col-xs-12 text-center w-nav-bar',
                  'theme_location' => 'top', 
                  'fallback_cb' => false,
                  ) ); ?>
      </header>
      <main>


      </main>
      <?php get_footer(); ?>