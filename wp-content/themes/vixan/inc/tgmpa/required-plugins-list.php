<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once (get_template_directory().'/inc/tgmpa/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'vixan_theme_register_required_plugins' );

function vixan_theme_register_required_plugins() {

    $plugins = array(

        // Redux Framework
        array(
            'name'              => esc_html__('Redux Framework', 'vixan'),
            'slug'              => 'redux-framework',
            'required'          => true,
            'force_activation'  => false,
            'force_deactivation'=> false, 
        ),

        // Meta Box
        array(
            'name'               => esc_html__('Meta Box', 'vixan'),
            'slug'               => 'meta-box',
            'source'             => 'http://3jon.com/demo/nwp/plugins/meta-box.zip',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),

        // Custom Post Type
        array(
            'name'               => esc_html__('Custom Post Type', 'vixan'), 
            'slug'               => 'custom-post-type', 
            'source'             => 'http://3jon.com/demo/pro/plugins/vixan/custom-post-type.zip', 
            'required'           => true,
            'version'            => '', 
            'force_activation'   => false,
            'force_deactivation' => false, 
        ),

        //  Recent Post
        array(
            'name'               => esc_html__('Contact Info Widget', 'vixan'), 
            'slug'               => 'contact-info-widget', 
            'source'             => 'http://3jon.com/demo/pro/plugins/vixan/contact-info-widget.zip', 
            'required'           => true,
            'version'            => '',
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        
        // Elementor Page Builder
        array(
            'name'      => esc_html__('Elementor Page Builder', 'vixan'),
            'slug'      => 'elementor',
            'required'  => true,
        ),
        
        // Unlimited Elements for Elementor
        array(
            'name'      => esc_html__('Unlimited Elements for Elementor', 'vixan'),
            'slug'      => 'unlimited-elements-for-elementor',
            'required'  => true,
        ),
        
        // Contact Form 7
        array(
            'name'      => esc_html__('Contact Form 7', 'vixan'),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),      

        // One Click Demo Import
        array(
            'name'               => esc_html__('One Click Demo Import', 'vixan'), 
            'slug'               => 'one-click-demo-import',
            'required'           => false, 
        ),       

        // Classic Editor
        array(
            'name'               => esc_html__('Classic Editor', 'vixan'), 
            'slug'               => 'classic-editor',
            'required'           => false, 
        ),

        // Classic Widget
        array(
            'name'               => esc_html__('Classic Widgets', 'vixan'), 
            'slug'               => 'classic-widgets',
            'required'           => false, 
        ),

        // WordPress Importer
        array(
            'name'               => esc_html__('WordPress Importer', 'vixan'), 
            'slug'               => 'wordpress-importer', 
            'required'           => false, 
        ),

        // Widget Importer & Exporter
        array(
            'name'               => esc_html__('Widget Importer & Exporter', 'vixan'), 
            'slug'               => 'widget-importer-exporter', 
            'required'           => false, 
        ),
        
        // Customizer Importer & Exporter
        array(
            'name'               => esc_html__('Customizer Export/Import', 'vixan'), 
            'slug'               => 'customizer-export-import', 
            'required'           => false, 
        ),

        // MailChimp for WordPress
        array(
            'name'               => esc_html__('MailChimp for WordPress', 'vixan'), 
            'slug'               => 'mailchimp-for-wp', 
            'required'           => false, 
        ),   

        // Google Map
        array(
            'name'               => esc_html__('WP Go Maps (Google Maps, Map Block, and more!)', 'vixan'), 
            'slug'               => 'wp-google-maps', 
            'required'           => false, 
        ),        
    );


    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        
    );

    tgmpa( $plugins, $config );

}