<?php
/**
 * vixan functions and definitions
  *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vixan
 */


 /**  
  * This theme requires WordPress 5.9 or later.
  * 
  */
if ( version_compare( $GLOBALS['wp_version'], '5.9', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'vixan_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own vixan_theme_setup() function to override in a child theme.
 */
function vixan_theme_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on vixan, use a find and replace
     * to change 'vixan' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'vixan', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'vixan-recent-post-image',80 , 80, array( 'center', 'center' ));
    add_image_size( 'blog_thumb', 413, 389, true);
    add_image_size( 'port_thumb', 410, 536, true);
    add_image_size( 'port_thumb2', 320, 418, true);
    add_image_size( 'port_thumb3', 420, 548, true);

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

    //Register Menus
    register_nav_menus( array(
        'vixan-menu' => esc_html__( 'Primary Menu', 'vixan' ),
        'vixan-footer-menu' => esc_html__( 'Footer Menu', 'vixan' ),
    ) );
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ) );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'status',
        'image',
        'audio',
        'gallery',
        'video',
        'quote',
        'link',
        'chat'
    ) );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
    add_editor_style( 'css/style-editor.css' );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    add_theme_support( 'custom-units' );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'vixan_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );    

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

}
endif;
add_action( 'after_setup_theme', 'vixan_theme_setup' );


/**
 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
 */
if ( ! function_exists( 'wp_body_open' ) ) {

    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vixan_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'vixan_content_width', 640 );
}
add_action( 'after_setup_theme', 'vixan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vixan_widgets_init() {
    
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Main', 'vixan' ),
        'id'            => 'vixan-sidebar-main',
        'description'   => esc_html__( 'Add widgets here.', 'vixan' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s sidebar__single sidebar__%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="sidebar__title cs_blog_title">',
        'after_title'   => '</h6>',       
    ) );    

    register_sidebar(array(
        'name'          =>esc_html__('Footer Widget one','vixan'),
        'id'            =>'vixan-footer-widget-1',
        'description'   =>esc_html__('Add widgets here','vixan'),
        'before_widget' => '<div class="footer-widget__column footer-widget__about %2$s widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="footer-widget__title">',
        'after_title'   => '</h5>',

    ));
    
    register_sidebar(array(
        'name'          =>esc_html__('Footer Widget two','vixan'),
        'id'            =>'vixan-footer-widget-2',
        'description'   =>esc_html__('Add widgets here','vixan'),
        'before_widget' =>'<div class="footer-widget__column footer-widget__links mar-l %2$s widget">',
        'after_widget'  =>'</div>',
        'before_title'  =>'<h5 class="footer-widget__title">',
        'after_title'   =>'</h5>'

    ));   
    
}
add_action( 'widgets_init', 'vixan_widgets_init' );


/**
 * Add preconnect for Google Fonts.
 *
 * @since vixan 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function vixan_enqueue_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700;900&family=Kanit:wght@400;500;600;700&display=swap")', array(), null );
}
add_action( 'wp_enqueue_scripts', 'vixan_enqueue_google_fonts' );


/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 */
function vixan_javascript_detection() {
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'vixan_javascript_detection', 0 );
  

/**
 * Enqueue scripts and styles.
 */
function vixan_load_scripts() {

    global $vixan_options;
    $show_custom_cursor = '';

    if(isset($vixan_options['vixan_custom_cursor'])){  
        $show_custom_cursor = $vixan_options['vixan_custom_cursor'];
    }    

    // Base Style
    wp_enqueue_style('vixan-base-style', get_stylesheet_uri(), array(), null );
    
    // bootstrap Style
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/plugins/bootstrap.min.css');

    // lightgallery style
    wp_enqueue_style('lightgallery', get_template_directory_uri().'/css/plugins/lightgallery.min.css');
   // wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/plugins/fontawesome.min.css');
    
    // swiper Style
    wp_enqueue_style('swiper', get_template_directory_uri().'/css/plugins/swiper.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/plugins/jquery.magnific-popup.css');
    
    //Main Style
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');   
    
    // ex-style
    wp_enqueue_style('vixan-ex-style', get_template_directory_uri().'/css/ex-style.css');




    // Script Load
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/plugins/bootstrap.bundle.min.js', array('jquery'), '1', true);

    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/plugins/isotope.pkg.min.js', array('jquery'), '2', true );

    wp_enqueue_script('swiper', get_template_directory_uri().'/js/plugins/swiper.min.js',array('jquery'), '3', true);

    wp_enqueue_script('lightgallery', get_template_directory_uri().'/js/plugins/lightgallery.min.js',array('jquery'), '4', true);

    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/plugins/gsap.min.js', array('jquery'), '5', true );

    wp_enqueue_script( 'ScrollTrigger', get_template_directory_uri() . '/js/plugins/ScrollTrigger.min.js', array('jquery'), '6', true );

    wp_enqueue_script( 'ScrollToPlugin', get_template_directory_uri() . '/js/plugins/ScrollToPlugin.min.js', array('jquery'), '7', true );

    wp_enqueue_script( 'ScrollSmoother', get_template_directory_uri() . '/js/plugins/ScrollSmoother.min.js', array('jquery'), '8', true );

    wp_enqueue_script( 'SplitText', get_template_directory_uri() . '/js/plugins/SplitText.min.js', array('jquery'), '9', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/plugins/jquery.magnific-popup.min.js', array('jquery'), '10', true );

   
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array('jquery'), '11', true );
  

   
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}

}
add_action( 'wp_enqueue_scripts', 'vixan_load_scripts' );


// Implement the Custom Header feature.
require get_template_directory() . '/css/style.php';

// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

 // Load Jetpack compatibility file.
require get_template_directory() . '/inc/jetpack.php';

// Breadcrumb
require get_template_directory() . '/inc/breadcrumb.php';

// Walker Class
require get_template_directory() . '/inc/nav-walker.php';

//  Plugin setup functionality
require get_template_directory().'/inc/tgmpa/required-plugins-list.php';

//loads wpml functionality to theme
require get_template_directory().'/inc/wpml/wpml.php';

//loads theme update remove functionality to theme
require get_template_directory().'/template-extras/item-update.php';

//loads Redux functionality
require get_template_directory().'/inc/vixan-options.php';

//Demo import functionality
require get_template_directory().'/inc/one-click-demo-import.php';

//Elmentor Widgets functionality
require get_template_directory().'/inc/el-widgets/vixan-widgets.php';

//Include Meta Box Framework
require get_template_directory() . '/inc/metaboxes.php';

//Page Slug Body Class
function vixan_slug_body_class( $classes ) {
global $post;

if ( isset( $post ) ) {
    $classes[] =  $post->post_name;
}
return $classes;
}

add_filter( 'body_class', 'vixan_slug_body_class' );
class Example implements Countable {
    public function count(): int {
        return 42;
    }
}