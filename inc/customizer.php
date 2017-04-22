<?php
/*
* Wonka-Target Customizer
*
* @package WordPress
* @subpackage Wonka_Target
* @since 1.0
* @version 1.0
*/
function wonka_target_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

          //Slider Options   
            $wp_customize->add_section(  'slider_options' , array(
            'title'      => __( 'Slider Options', 'wonka-target' ),
            'description' => 'Slider Options: <br/>Slide count can be up to 5 slides. <br/><i>Recommended size <strong>1920x770</strong></i>',
            'priority' => 101,
            ) );

            //Slider Enabled by default.
              $wp_customize->add_setting('slider_check_setting', array(
                'default' => 'checked',
                ));

              $wp_customize->add_control('slider_check_control', array(
                'label' => __('Enable Slider', 'wonka-target'),
                'type' => 'checkbox',
                'section' => 'slider_options',
                'settings' => 'slider_check_setting',
               ));

              //Slider Count
              $wp_customize->add_setting('slide_count_setting', array(
              	'default' => '1',
              	));

              $wp_customize->add_control('slide_count_control', array(
              	'label' => __('Slide Count:', 'wonka-target'),
               'type' => 'select',
               'choices' => array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                ),
              	'section' => 'slider_options',
              	'settings' => 'slide_count_setting',
              	));

              //Slider Build
              for ($i=1; $i < get_theme_mod('slide_count_setting')+1; $i++) { 
                //Slider Controls
                $wp_customize->add_setting('theme_slider_'.$i, array(
                'default'        => '',
                ));
                
                $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'theme_slider_'.$i, array(
                'label'      => __('Slider Image '. $i, 'wonka-target'),
                'section'    => 'slider_options',
                'settings'   => 'theme_slider_'.$i,
                'mime_type' => 'image',
                ) ));
              }

              


}
add_action( 'customize_register', 'wonka_target_customize_register' );

 /**
 * Customizer CSS.
 */
require get_parent_theme_file_path( '/inc/customizer-css.php' );
?>