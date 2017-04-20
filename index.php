<?php get_header(); ?>
<body>
  <div id="w-wrapper">
    <header id="w-header">
      <div class="container-fluid">
        <div class="row w-head-space">
          <div class="col-xs-12">
            <div class="row">
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
                'container_class' => 'col-xs-3 col-md-offset-6',
                'theme_location' => 'sub', 
                'fallback_cb' => false,
                ) ); ?>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-xs-12 w-nav-bar">

              <?php wp_nav_menu( array( 
                'menu_class' => 'w-primary-menu', 
                'container_class' => 'col-xs-10 text-center',
                'theme_location' => 'top', 
                'fallback_cb' => false,
                ) ); ?>
                <div class="col-xs-2 col-md-pull-1 text-center">
                  <div class="input-group w-search-form">
                    <input type="search" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn w-search-button" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                      </span></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <main class="container-fluid">
          <div class="row w-slider">
            <div class="col-xs-12">
            </div>
          </div>
          <div class="row w-dealer-logos">
           <div class="col-xs-12 text-center">
             <div class="col-xs-2 col-md-offset-1">
               <div>LOGO</div>
             </div>
             <div class="col-xs-2">
               <div>LOGO</div>
             </div>
             <div class="col-xs-2">
               <div>LOGO</div>
             </div>
             <div class="col-xs-2">
               <div>LOGO</div>
             </div>
             <div class="col-xs-2">
               <div>LOGO</div>
             </div>
           </div>
          </div>

          <div class="row w-quick-select">
            <div class="col-xs-6 text-center">
              <div class="col-xs-8 col-md-offset-2">
                
              </div>
            </div>
            <div class="col-xs-6 text-center">
              <div class="col-xs-8 col-md-offset-2">
                
              </div>
            </div>
          </div>  
          </main>
          <?php get_footer(); ?>