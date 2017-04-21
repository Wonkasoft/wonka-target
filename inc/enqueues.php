<?php
/*
* Wonka-Target Theme Enqueues
*
* @package WordPress
* @subpackage Wonka_Target
* @since 1.0
* @version 1.0
*/
 function wonka_target_enqueues() {
 	wp_enqueue_style( 'style', get_stylesheet_uri());
 }
add_action( 'wp_enqueue_scripts', 'wonka_target_enqueues' );
?>