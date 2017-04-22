<?php
/*
* Displays Theme Slider
*
* @package WordPress
* @subpackage Wonka_Target
* @since 1.0
* @version 1.0
*/
?>

<div class="col-xs-12 text-center">
<?php 
$value = get_theme_mod('slider_check_setting', $default);
  if (($value !== 'checked') && ($value !== true)) {
    $value2 = get_theme_mod('static_header');
    if ($value2 !== true) {
      ?>
        test
      <?php
    } else {
      ?>
      <img src="<?php echo wp_get_attachment_url( $value2 ); ?>" alt="AR500">
      <?php
    }
  } else {
    $slide_count = get_theme_mod('slide_count_setting');
    ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php 
    for ($i=0; $i < $slide_count; $i++) { 
      if ($i !== 0) {
        ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
      <?php
      } else {
      ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
      <?php
      }
    }
    ?>
     </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <?php
    for ($i=0; $i < $slide_count; $i++) { 
      $slider_int = $i + 1;
      $slider_mod = get_theme_mod('theme_slider_'.$slider_int);
      if ($i !== 0) {
        ?>
        <div class="item">
         <img src="<?php echo wp_get_attachment_url( $slider_mod ); ?>" alt="AR500">
        </div>
      <?php
      } else {
      ?>
        <div class="item active">
          <img src="<?php echo wp_get_attachment_url( $slider_mod ); ?>" alt="AR500">
        </div>
      <?php
      }
    }
    ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php
  }
?>