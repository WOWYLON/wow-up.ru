<?php
/*
Plugin Name: Meta Box
Plugin URI: http://metabox.io
Description: Create meta box for editing pages in WordPress. Compatible with custom post types since WP 3.0
Version: 6.0.0
Author: Rilwis
Author URI: http://www.deluxeblogtips.com
Text Domain: meta-box
License: GPL2+
*/

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

// Script version, used to add version for scripts and styles
define( 'RWMB_VER', '4.5.2' );

// Define plugin URLs, for fast enqueuing scripts and styles
if ( ! defined( 'RWMB_URL' ) )
	define( 'RWMB_URL', plugin_dir_url( __FILE__ ) );
define( 'RWMB_JS_URL', trailingslashit( RWMB_URL . 'js' ) );
define( 'RWMB_CSS_URL', trailingslashit( RWMB_URL . 'css' ) );

// Plugin paths, for including files
if ( ! defined( 'RWMB_DIR' ) )
	define( 'RWMB_DIR', plugin_dir_path( __FILE__ ) );
define( 'RWMB_INC_DIR', trailingslashit( RWMB_DIR . 'inc' ) );
define( 'RWMB_FIELDS_DIR', trailingslashit( RWMB_INC_DIR . 'fields' ) );


require_once RWMB_INC_DIR . 'common.php';
require_once RWMB_INC_DIR . 'field.php';
require_once RWMB_INC_DIR . 'field-multiple-values.php';

// Field classes
foreach ( glob( RWMB_FIELDS_DIR . '*.php' ) as $file )
{
	require_once $file;
}

// Meta box class
require_once RWMB_INC_DIR . 'meta-box.php';

// Helper function to retrieve meta value
require_once RWMB_INC_DIR . 'helpers.php';

// Main file
require_once RWMB_INC_DIR . 'init.php';
