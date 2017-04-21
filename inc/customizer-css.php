<?php
/*
* Wonka Target Customizer CSS
*
* @package WordPress
* @subpackage Wonka_Target
* @since 1.0
* @version 1.0
*/
//Added CSS for customizer.
function wonka_target_customizer_css() {
?>
    <style type="text/css">
      #customize-control-theme_slide_count > label > input {
        width: 10%;
      }
    </style>

<?php
}
add_action('customize_controls_print_styles', 'wonka_target_customizer_css');
?>