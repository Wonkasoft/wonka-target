<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php get_the_title(); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	   	<meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<?php wp_head(); ?>
	</head>
<body>
  <div id="w-wrapper">
    <header id="w-header">
      <div class="container-fluid">
        <div class="row w-head-space">
              <div class="col-xs-3 center">
                <?php the_custom_logo();
                if (!has_custom_logo()) {
                  ?><a href="<?php esc_url(home_url('/')); ?>">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/black-sight-logo.png'; ?>" /></a>
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
          <div class="row">
            <?php get_template_part('template-parts/navigation/nav', 'main' ); ?>
            </div>
          </header>