<?php
/**
 * Mia Theme Customizer.
 *
 * @package Mia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mia_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'mia_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mia_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'mia' ),
        'section'  => 'title_tagline',
        'settings' => 'mia_logo',
    ) ) );
    // Add image slider
    $wp_customize->add_section( 'slides', array(
    'title'          => 'Slides',
    'priority'       => 25,
    ) );

    $wp_customize->add_setting( 'first_slide', array(
    'default'        => '',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'first_slide', array(
    'label'   => 'First Slide',
    'section' => 'slides',
    'settings'   => 'first_slide',
    ) ) );

    $wp_customize->add_setting( 'second_slide', array(
    'default'        => '',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'second_slide', array(
    'label'   => 'Second Slide',
    'section' => 'slides',
    'settings'   => 'second_slide',
    ) ) );

    $wp_customize->add_setting( 'third_slide', array(
    'default'        => '',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'third_slide', array(
    'label'   => 'Third Slide',
    'section' => 'slides',
    'settings'   => 'third_slide',
    ) ) );
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'mia_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mia_customize_preview_js() {
	wp_enqueue_script( 'mia_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mia_customize_preview_js' );