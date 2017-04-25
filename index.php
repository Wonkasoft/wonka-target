<?php 
/*
*
* Wonka Targets Default Front Page.
*
* @package WordPress
* @subpackage Wonka_Target
* @since 1.0
* @version 1.0
*
*/
get_header(); ?>
          <main class="container-fluid">
          <div class="row w-slider">
            <?php get_template_part('template-parts/slider/theme', 'slider' ); ?>
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
            <div class="col-xs-12 col-md-6 text-center">
              <div class="col-xs-12 col-md-offset-2">
                <img class="img-responsive" src="//wonkasoft.com/ar500-targets/wp-content/uploads/2017/04/Monthly-Specials-1.jpg">
              </div>
            </div>
            <div class="col-xs-12 col-md-6 text-center">
              <div class="col-xs-12 col-md-offset-2">
                <img class="img-responsive" src="//wonkasoft.com/ar500-targets/wp-content/uploads/2017/04/New-Arrivals-1.jpg">
              </div>
            </div>
          </div>  
          </main>
          <?php get_footer(); ?>