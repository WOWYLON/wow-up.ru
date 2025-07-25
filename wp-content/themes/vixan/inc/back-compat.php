<?php
/**
 * vixan back compat functionality
 *
 * Prevents vixan from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package vixan
 */

/**
 * Prevent switching to vixan on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 */
function vixan_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'vixan_upgrade_notice' );
}
add_action( 'after_switch_theme', 'vixan_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * vixan on WordPress versions prior to 4.7.
 *
 * @since vixan 1.0
 *
 * @global string $wp_version WordPress version.
 */
function vixan_upgrade_notice() {
	$message = sprintf( esc_html__( 'vixan requires at least WordPress version 4.6. You are running version %s. Please upgrade and try again.', 'vixan' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since vixan 1.0
 *
 * @global string $wp_version WordPress version.
 */
function vixan_customize() {
	wp_die( sprintf( esc_html__( 'vixan requires at least WordPress version 5.9. You are running version %s. Please upgrade and try again.', 'vixan' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'vixan_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since vixan 1.0
 *
 * @global string $wp_version WordPress version.
 */
function vixan_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( esc_html__( 'vixan requires at least WordPress version 5.9. You are running version %s. Please upgrade and try again.', 'vixan' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'vixan_preview' );
