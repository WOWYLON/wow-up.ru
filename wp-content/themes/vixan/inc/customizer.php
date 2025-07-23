<?php
/**
 * Theme Customizer
 *
 * @package vixan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vixan_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->remove_control("header_image");
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'vixan_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'vixan_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'vixan_customize_register' );


/*Customizer: FOOTER LOGO CODE HERE*/

function vixan_footer_logo_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('footer_logo_settings_section', array(
  'title'          => esc_html__('Footer Logo Section', 'vixan'),
 ));

//adding setting for footer logo
$wp_customize->add_setting('footer_logo', array(
    'sanitize_callback'	=> 'esc_attr',
));
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_logo',array(
 'label'      => esc_html__('Footer Logo', 'vixan'),
 'section'    => 'footer_logo_settings_section',
 'settings'   => 'footer_logo',
 )));
}
add_action('customize_register', 'vixan_footer_logo_customizer');
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function vixan_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function vixan_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vixan_customize_preview_js() {
	wp_enqueue_script( 'vixan_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'vixan_customize_preview_js' );
