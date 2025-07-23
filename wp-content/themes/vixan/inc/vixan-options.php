<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}


// This is your option name where all the Redux data is stored.
$opt_name = "vixan_options";

// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters('vixan_options/opt_name', $opt_name);

/*
 *
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 *
 */

$sampleHTML = '';
if (file_exists(dirname(__FILE__) . '/info-html.html')) {
    Redux_Functions::initWpFilesystem();
    
    global $wp_filesystem;
    
    $sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__) . '/info-html.html');
}

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => esc_html__('Vixan Options', 'vixan'),
    'page_title' => esc_html__('Vixan Options', 'vixan'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-layout',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
    
    // OPTIONAL -> Give you extra features
    'page_priority' => 30,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => 'dashicons-portfolio',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.
    
    'show_options_object' => false,
    // Removes the options_object panel when not used.
    
    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
    
    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
    
    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'red',
            'shadow' => true,
            'rounded' => false,
            'style' => ''
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right'
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover'
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave'
            )
        )
    )
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url' => 'https://github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon' => 'el el-github'
    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
);
$args['share_icons'][] = array(
    'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => 'Like us on Facebook',
    'icon' => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url' => 'http://twitter.com/reduxframework',
    'title' => 'Follow us on Twitter',
    'icon' => 'el el-twitter'
);
$args['share_icons'][] = array(
    'url' => 'http://www.linkedin.com/company/redux-framework',
    'title' => 'Find us on LinkedIn',
    'icon' => 'el el-linkedin'
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(esc_html__(' Customize your website using the vixan theme options panel.', 'vixan'), $v);
} else {
    $args['intro_text'] = esc_html__(' Customize your website using the vixan theme options panel.', 'vixan');
}

// Add content after the form.
$args['footer_text'] = esc_html__('If you like our theme and support, please rate us 5 stars on ThemeForest.', 'vixan');

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => esc_html__('Theme Information 1', 'vixan'),
        'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'vixan')
    ),
    array(
        'id' => 'redux-help-tab-2',
        'title' => esc_html__('Theme Information 2', 'vixan'),
        'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'vixan')
    )
);
Redux::set_help_tab($opt_name, $tabs);

// Set the help sidebar
$content = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'vixan');
Redux::set_help_sidebar($opt_name, $content);


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*
As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
*/

// -> START Panel OPtions

/*
 *
 * --> General Sections Tab
 *
 */

Redux::setSection($opt_name, array(
    'id' => 'general_tab',
    'title' => esc_html__('General', 'vixan'),
    'desc' => esc_html__('All the general settings options are listed here', 'vixan'),
    'icon' => 'el el-globe',
    'fields' => array(
        // -> Image Logo
        array(
            'id' => 'vixan_color_logo',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Dark Page Logo', 'vixan'),
            'compiler' => 'true',
            'subtitle' => esc_html__('Upload a logo from your hard drive or specify an existing url.', 'vixan'),
            'default' => array(
            'url' => ''
            )
        ),

        // -> Cursor color option
        array(
            'id' => 'vixan_cus_cur_dot_outline',
            'type' => 'color_rgba',
            'title' => esc_html__('Custom Cursor Color', 'vixan'),
            'subtitle' => esc_html__('Insert required color', 'vixan'),
            'default' => array(
                'color' => '',
                'alpha' => '1'
            ),
            'transparent' => false,
            'output'   => array(
                'border-color' => '.cs_cursor_1',
                'background-color' => '.cs_cursor_2',
            ),

        ),
        
       // -> Cursor Animation enable or disable option
        array(
            'id' => 'vixan_cursor_animation',
            'type' => 'switch',
            'title' => esc_html__('Cursor Animation', 'vixan'), 
            'subtitle' => esc_html__( 'Enable or Disable Cursor Animation', 'vixan' ),
            'default' => 'false',
            'on' =>'Enabled',
            'off' =>'Disabled',
            ),
        
        // -> Preloader enable or disable option
        array(
            'id' => 'vixan_pageLoader',
            'type' => 'switch',
            'title' => esc_html__('Preloader', 'vixan'), 
            'subtitle' => esc_html__( 'Enable or Disable Preloader', 'vixan' ),
            'default' => 'false',
            'on' =>'Enabled',
            'off' =>'Disabled',
            ),
 
        array(
            'id'       => 'vixan_pred_txt',
            'type'     => 'text',
            'title'    => esc_html__( 'Preloader Text', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a single letter like "A"', 'vixan' ),
            'default'  => ''
        ),
        array(
            'id'       => 'vixan_pred_txt2',
            'type'     => 'text',
            'title'    => esc_html__( 'Preloader Text', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a single letter like "B"', 'vixan' ),
            'default'  => ''
        ),
        array(
            'id'       => 'vixan_pred_txt3',
            'type'     => 'text',
            'title'    => esc_html__( 'Preloader Text', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a single letter like "C"', 'vixan' ),
            'default'  => ''
        ),
        array(
            'id'       => 'vixan_pred_txt4',
            'type'     => 'text',
            'title'    => esc_html__( 'Preloader Text', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a single letter like "D"', 'vixan' ),
            'default'  => ''
        ),
        array(
            'id'       => 'vixan_pred_txt5',
            'type'     => 'text',
            'title'    => esc_html__( 'Preloader Text', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a single letter like "E"', 'vixan' ),
            'default'  => ''
        ),

        // -> Favicon
        array(
            'id' => 'vixan_favicon',    
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Favicon', 'vixan'),
            'compiler' => 'true',
            'subtitle' => esc_html__('Upload a favicon from your hard drive or specify an existing url.', 'vixan'),
            'default' => array(
            'url' => ''
            )
        ),

        // -> Membership enable or disable option
        array(
            'id' => 'member_display',
            'type' => 'switch',
            'title' => esc_html__('User Membership', 'vixan'), 
            'subtitle' => esc_html__( 'Enable or Disable Membership', 'vixan' ),
            'default' => '1',
            'on' =>'Enabled',
            'off' =>'Disabled',
            ),          

        // -> Back to top switch        
        array(
            'id' => 'vixan_back_top',
            'type' => 'switch',
            'title' => esc_html__('Bottom to Top', 'vixan'), 
            'subtitle' => esc_html__( 'Enable or Disable Back to Top', 'vixan' ),
            'default' => '1',
            'on' =>'Enabled',
            'off' =>'Disabled',
            ),          
    )
));

// -> START Side Header Setting
Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Side Header Settings', 'vixan' ),
'id'               => 'vixan_header_options',
'customizer_width' => '400px',
'icon'             => 'el el-opensource',
'fields'           => array(

    array(
        'id'       => 'vixan_sh_addr',
        'type'     => 'text',
        'title'    => esc_html__( 'Address', 'vixan' ),
        'subtitle' => esc_html__( 'Enter Required Address', 'vixan' ),
        'default'  => ''
    ),
    array(
        'id'       => 'vixan_sh_phn',
        'type'     => 'text',
        'title'    => esc_html__( 'Phone Number', 'vixan' ),
        'subtitle' => esc_html__( 'Enter Required Phone Number', 'vixan' ),
        'default'  => ''
    ),
    array(
        'id'       => 'vixan_sh_mail',
        'type'     => 'text',
        'title'    => esc_html__( 'Email Address', 'vixan' ),
        'subtitle' => esc_html__( 'Enter Required Email Address', 'vixan' ),
        'default'  => ''
    ),

)));


// -> START Page Settings
Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Page Settings', 'vixan' ),
'id'               => 'vixan_page_layout',
'customizer_width' => '400px',
'icon'             => 'el el-livejournal',
'fields'           => array(
    array(
        'id'       => 'vixan_page_layout',
        'type'     => 'image_select',
        'title'    => esc_html__('Page Layout', 'vixan'),
        'subtitle' => esc_html__('Page layout content for theme sidebar alignment. Choose from Fullwidth, Left sidebar or Right sidebar layout. (Its only enable for default page settings.)', 'vixan'),
        'options'  => array(
        '1'      => array(
            'alt'   => '1 Column',
            'img'   => ReduxFramework::$_url.'assets/img/1col.png'
        ),
        '2'      => array(
            'alt'   => '2 Column Left',
            'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
        ),
        '3'      => array(
            'alt'   => '2 Column Right',
            'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
        )
    )),
    'default' => '2',
    
    array(
        'id'       => 'vixan_page_comment',
        'type'     => 'switch',
        'title'    => esc_html__('Globally enable or disable page comments', 'vixan'),
        'subtitle' => esc_html__('Enable or Disabled Page Comments. (Its only enable for default page settings.)', 'vixan'),
        'on'       => 'Enabled',
        'off'      => 'Disabled',
        'default'  => true
    ),

)));


 // START -> Blog Settings
 Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Blog Settings', 'vixan' ),
'id'               => 'blog-settings',
'customizer_width' => '400px',
'icon'             => 'el el-edit',
'fields'           => array(

    array(
        'id'       => 'vixan_social_share',
        'type'     => 'switch',
        'title'    => esc_html__('Social Share', 'vixan'),
        'subtitle' => esc_html__('Blog single Social Share.', 'vixan'),
        'on'       => 'show',
        'off'      => 'hide',
        'default'  => false,
    ),
    array(
            'id'       => 'vixan_relp_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Blog Related Post Title', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a Title here', 'vixan' ),
            'default'  => ''
    ),

    array(
            'id'       => 'vixan_relp_title2',
            'type'     => 'text',
            'title'    => esc_html__( 'Blog Related Post Title Two', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a Title here', 'vixan' ),
            'default'  => ''
    ),

    array(
        'id'       => 'vixan_relp_no',
        'type'     => 'text',
        'title'    => esc_html__( 'Blog Related Post Number', 'vixan' ),
        'subtitle' => esc_html__( 'Enter Post Number', 'vixan' ),
        'default'  => ''
    ),

    array(
        'id'       => 'vixan_switch_navigation',
        'type'     => 'switch',
        'title'    => esc_html__('Post navigation', 'vixan'),
        'subtitle' => esc_html__('Blog single post navigation.', 'vixan'),
        'on'       => 'show',
        'off'      => 'hide',
        'default'  => false,
    ),
    array(
        'id'       => 'vixan_author_bio',
        'type'     => 'switch',
        'title'    => esc_html__('Author Information', 'vixan'),
        'subtitle' => esc_html__('Author Information Button.', 'vixan'),
        'on'       => 'show',
        'off'      => 'hide',
        'default'  => false,
    ),
)));


 // START -> Single Contact Settings
 Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Single Contact', 'vixan' ),
'id'               => 'scontact-settings',
'customizer_width' => '400px',
'icon'             => 'el el-laptop',
'fields'           => array(

    array(
            'id'       => 'vixan_cntsec_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Section Title', 'vixan' ),
            'subtitle' => esc_html__( 'Enter a Title here', 'vixan' ),
            'default'  => ''
        ),
    array(
            'id'       => 'vixan_cntbtn_txt',
            'type'     => 'text',
            'title'    => esc_html__( 'Button Text', 'vixan' ),
            'subtitle' => esc_html__( 'Enter Button Text Here', 'vixan' ),
            'default'  => ''
        ),
    array(
        'id'       => 'vixan_cntbtn_url',
        'type'     => 'text',
        'title'    => esc_html__( 'Button URL', 'vixan' ),
        'subtitle' => esc_html__( 'Enter Button URL Here', 'vixan' ),
        'default'  => ''
    ),    

)));


/*
 *
 * --> Social Connections Tab
 *
 */
Redux::setSection($opt_name, array(
    'id' => 'social_tab',
    'title' => esc_html__('Social Connections', 'vixan'),
    'desc' => esc_html__('All the Social Connections related options are listed here', 'vixan'),
    'icon' => 'el el-facebook',
    'fields' => array(
        array(
            'id' => 'vixan_fblink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Facebook', 'vixan'),
            'subtitle' => esc_html__('Enter Facebook Link.', 'vixan'),
            'default' => '#'
        ),      
        array(
            'id' => 'vixan_twlink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Twitter', 'vixan'),
            'subtitle' => esc_html__('Enter Twitter Link', 'vixan'),
            'default' => '#'
        ),
        array(
            'id' => 'vixan_ldlink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Linkedin', 'vixan'),
            'subtitle' => esc_html__('Enter Linkedin Link', 'vixan'),
            'default' => '#'
        ),
        array(
            'id' => 'vixan_gplink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Google Plus', 'vixan'),
            'subtitle' => esc_html__('Enter Google Plus Link', 'vixan'),
            'default' => '#'
        ),
        array(
            'id' => 'vixan_drlink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Dribbble', 'vixan'),
            'subtitle' => esc_html__('Enter Dribbble Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_tumblink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Tumblr', 'vixan'),
            'subtitle' => esc_html__('Tumblr Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_inslink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Instagram', 'vixan'),
            'subtitle' => esc_html__('Enter Instagram Link', 'vixan'),
            'default' => '#'
        ),
        array(
            'id' => 'vixan_behlink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Behance', 'vixan'),
            'subtitle' => esc_html__('Enter Behance Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_youtube',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('You Tube', 'vixan'),
            'subtitle' => esc_html__('Enter You Tube Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_vmlink',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Vimeo Link', 'vixan'),
            'subtitle' => esc_html__('Enter Vimeo Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_git',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('GitHub', 'vixan'),
            'subtitle' => esc_html__('Enter GitHub Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_pt',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Pinterest', 'vixan'),
            'subtitle' => esc_html__('Enter Pinterest Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_flc',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Flickr', 'vixan'),
            'subtitle' => esc_html__('Enter Flickr Link', 'vixan'),
            'default' => ''
        ),
        array(
            'id' => 'vixan_skp',
            'type' => 'text',
            'url' => true,
            'title' => esc_html__('Skype Link', 'vixan'),
            'subtitle' => esc_html__('Enter Skype Link', 'vixan'),
            'default' => ''
        ),

    )
));


/*
 *
 * --> Colors Sections Tab
 *
 */

// -> Section Title
Redux::setSection( $opt_name, array(
    'id' => 'colors',
    'title' => esc_html__('Color Options', 'vixan'),
    'desc' => esc_html__('All the Color options of the theme are listed here', 'vixan'),
    'customizer_width' => '400px',
    'icon' => 'el el-barcode',    
) );

Redux::setSection($opt_name, array(
    'id' => 'menu_colors',
    'title' => esc_html__('Header & Menu', 'vixan'),
    'desc' => esc_html__('All the menu Color options of the theme are listed here', 'vixan'),
    'icon' => '',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields' => array(        
        
        array(
            'id' => 'menu_cl_background',
            'type' => 'color_rgba',
            'title' => esc_html__('Header & Menu Background Color', 'vixan'),
            'subtitle' => esc_html__('Insert your Menu background color', 'vixan'),
            'default' => array(
                'color' => '',
                'alpha' => '1'
            ),
            'validate' => 'colorrgba',
            'output' => array(
                'background' => '.cs_site_header, .cs_sticky_header, .cs_nav .cs_nav_list > li:hover > ul'
            ),
        ),
        array(
            'id' => 'menu_text_link',
            'type' => 'link_color',
            'title' => esc_html__('Menu Text colors', 'vixan'),
            'subtitle' => esc_html__('Insert your text colors for the navigation menu', 'vixan'),
            'default' => array(
                'regular' => '',
            ),
            'validate' => 'color',
            'output' => array( '.cs_nav .cs_nav_list > li > a, .cs_nav .cs_nav_list ul a' )
        ),  
        array(
            'id'       => 'menu_side_btn',
            'type'     => 'color',
            'title'    => esc_html__( 'Side Menu button color', 'vixan' ),
            'subtitle' => esc_html__( 'Choose Menu Menu button color.', 'vixan' ),
            'default'  => '',
            'validate' => 'color',
            'output'   => array( 
                 'color' => '.cs_site_header.cs_style1 .cs_icon_btn'
            ),               
        ),
        
        array(
            'id'       => 'submenu_border',
            'type'     => 'border',
            'title'    => esc_html__( 'Sub-menu Icon Border Color', 'vixan' ),
            'subtitle' => esc_html__( 'Select the border style and color for the navigation submenu icon border.', 'vixan' ),
            'output'   => array( '.cs_nav .cs_nav_list > li.menu-item-has-children > a::after' ),
            'default'  => array(
                'border-color'  => '',
                'border-style'  => '',
                'border-top'    => '',
            )
        ),
        array(
            'id'       => 'submenu_top_border',
            'type'     => 'border',
            'title'    => esc_html__( 'Sub-menu Top Border Color', 'vixan' ),
            'subtitle' => esc_html__( 'Select the border style and color for the navigation submenu top border.', 'vixan' ),
            'output'   => array( '.cs_nav .cs_nav_list > li:hover > ul' ),
            'default'  => array(
                'border-color'  => '',
                'border-style'  => '',
                'border-top'    => '',
            )
        ),
    )
) );

Redux::setSection($opt_name, array(
    'id' => 'content_colors',
    'title' => esc_html__('Content', 'vixan'),
    'desc' => esc_html__('All the Content Color options of the theme are listed here', 'vixan'),
    'icon' => '',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields' => array(        
        array(
            'id' => 'headings_color',
            'type' => 'color',
            'output' => array( '.valign h1, h1, .m-each h2, h2, .title-work-detail h2, .web-detail h3, h3, h4, .ww-content h5, h5, h6, #zoom-fade, .web-detail h3:after, .footer h4, .footer i.fas' ),
            'title' => esc_html__('Headings / Title Text Color', 'vixan'),
            'subtitle' => esc_html__('Choose (h1, h2, h3, h4, h5, h6) text color for all the headings.', 'vixan'),
            'validate' => 'color',
            'default' => '',
        ),
        array(
            'id' => 'page_subtitle_color',
            'type' => 'color',
            'output' => array( '.title h3, .title-personal h1, .title-about h2 span, .cs_hero_subtitle, .cs_hero.cs_style1 .cs_hero_mini_title, .cs_section_heading.cs_style_1 .cs_section_subtitle, .cs_back_to_services_btn .cs_style_1.cs_color_1' ),
            'title' => esc_html__('Second Headings and Sub-title Text Color', 'vixan'),
            'subtitle' => esc_html__('Choose Second Headings and Sub-title Text Color.', 'vixan'),
            'validate' => 'color',
            'default' => ''
        ),
        array(
            'id' => 'vixan_subtitle_bg',
            'type' => 'color_rgba',
            'output'    => array('background-color' => '.cs_section_heading.cs_style_1 .cs_section_subtitle::before'),
            'title' => esc_html__( 'Section Subtitle circle background color', 'vixan' ),
            'subtitle' => esc_html__( 'Choose required section subtitle circle background color.', 'vixan' ),
            'default'   => array(
                'color'     => '',
                'alpha'     => 1
                ),
        ),
        array(
            'id' => 'paragraph_color',
            'type' => 'color',
            'output' => array( 'p, li, .btn-detail, .footer p, .sub, .text, .title-work-detail p, .web-detail p, .title-personal p, footer .widget p, footer .widget li, .footer-widget__title, .cs_card_subtitle, .cs_card.cs_style_1.cs_color_1 .cs_card_subtitle, .cs_blog.cs_style_1 .cs_blog_subtitle, .cs_accordeon .cs_accordion_item .cs_accordion_body' ),
            'title' => esc_html__('Paragraph Text Color ( p, li, button )', 'vixan'),
            'subtitle' => esc_html__('Insert your text color for all the paragraphs.', 'vixan'),
            'validate' => 'color',
            'default' => '',
        ),
        array(
            'id' => 'all_page_link',
            'type' => 'link_color',
            'title' => esc_html__('Link colors', 'vixan'),
            'subtitle' => esc_html__('Insert your link colors for the all page', 'vixan'),
            'default' => '',
            'output' => array( 'ul li a, li a, a, .cn-mail, .copyright a, .cs_primary_font.anim_text_upanddowns, .cs_text_btn' ),
        ),
        array(
            'id' => 'button_bg_color',
            'type' => 'link_color',
            'title' => esc_html__('Button text color', 'vixan'),
            'subtitle' => esc_html__('Choose Button color.', 'vixan'),
            'default' => '',
            'output' => array( '.btn-link, .btn-back a.txt, .btn-detail, .cs_round_btn, .cs_btn.cs_style_1, .cs_btn.cs_style_1.cs_color_1, .cs_learning_project .cs_section_heading.cs_style_1 .cs_section_heading_right .cs_btn.cs_style_1.cs_color_1' ),
        ),                
        array(
            'id' => 'btn_bg',
            'type' => 'color_rgba',
            'output'    => array('background-color' => ' .cs_btn.cs_style_1::before'),
            'title' => esc_html__( 'Button background color', 'vixan' ),
            'subtitle' => esc_html__( 'Choose Menu Button background color.', 'vixan' ),
            'default'   => array(
                'color'     => '',
                'alpha'     => 1
                ),
        ),
        array(
            'id' => 'vixan_cs_stroke_text',
            'type' => 'color',
            'title' => esc_html__('Stroke Text Color', 'vixan'),
            'subtitle' => esc_html__('Insert your text color for all the stroke text.', 'vixan'),
            'validate' => 'color',
            'default' => '',
        ),
        array(
            'id'       => 'vixan_content_border',
            'type'     => 'border',
            'title'    => esc_html__( ' Border color', 'vixan' ),
            'subtitle' => esc_html__( 'Select the border style and color for the navigation submenu top border.', 'vixan' ),
            'output'   => array( '.cs_pagination.cs_style1 .swiper-pagination-bullet, .cs_round_btn' ),
            'default'  => array(
                'border-color'  => '',
                'border-style'  => '',
                'border-top'    => '',
            )
        ),
        array(
            'id'       => 'vixan_social_link_border',
            'type'     => 'border',
            'title'    => esc_html__( 'Social link Border Color', 'vixan' ),
            'subtitle' => esc_html__( 'Select the border style and color for the social link.', 'vixan' ),
            'output'   => array( '.cs_footer_social a, .cs_btn.cs_style_2 a' ),
            'default'  => array(
                'border-color'  => '',
                'border-style'  => '',
                'border-top'    => '',
            )
        ),
        array(
            'id' => 'pagination_txt',
            'type' => 'link_color',
            'title' => esc_html__( 'Pagination text color', 'vixan' ),
            'subtitle' => esc_html__( 'Insert your text colors for the Pagination', 'vixan' ),
            'default' => array(
                'regular' => '', 
                'hover' => '', 
                'active' => '' 
            ),            
            'validate' => 'color',
            'output' => array( 
                'color' => '.pagination > li > span', '.pagination > li a, .cs_pagination.cs_style2, .cs_swiper_navigation_wrap > *, .cs_pagination.cs_style1' ),
        ),
    )
) );

Redux::setSection($opt_name, array(
    'id' => 'footer_colors',
    'title' => esc_html__('Footer', 'vixan'),
    'desc' => esc_html__('All the Footer Color options of the theme are listed here', 'vixan'),
    'icon' => '',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields' => array(                
        array(
            'id' => 'footer_txt',
            'type' => 'color',
            'title' => esc_html__('Footer text color', 'vixan'),
            'subtitle' => esc_html__('Insert your text colors for the Footer paragraphs.', 'vixan'),
            'default' => '', 
            'validate' => 'color',
            'output' => array( '.cn-mail, .copyright, .social ul li a', ),
        ),        
        array(
            'id' => 'footer_links',
            'type' => 'link_color',
            'title' => esc_html__('Footer Link color', 'vixan'),
            'subtitle' => esc_html__('Insert your text colors for the Footer links.', 'vixan'),
            'default'  => array(
                    'regular'  => '', 
                    'hover'    => '', 
                    'active'   => '',  
                    'important'   => 'true',  
                ),
            'validate' => 'color',
            'output' => array( 'footer .widget a, .cs_footer a, .cs_primary_font.anim_text_upanddowns' ),
        ),        
        array(
            'id' => 'vixan_copyright_txt',
            'type' => 'color',
            'title' => esc_html__('Copyright text color', 'vixan'),
            'subtitle' => esc_html__('Insert your text colors for the Copyright paragraphs.', 'vixan'),
            'default' => '',
            'validate' => 'color',
            'output' => array( '.cs_copyright' ),
        ),        
        array(
            'id' => 'copyright_links',
            'type' => 'link_color',
            'title' => esc_html__('Copyright Link color', 'vixan'),
            'subtitle' => esc_html__('Choose your text colors for the Copyright links.', 'vixan'),
            'default'  => array(
                    'regular'  => '',
                    'hover'    => '',
                    'active'   => '',
                ),
            'validate' => 'color',
            'output' => array( '.cs_copyright a' ),
        ),
        array(
            'id' => 'footer_social_links',
            'type' => 'link_color',
            'title' => esc_html__('Footer Social Link color', 'vixan'),
            'subtitle' => esc_html__('Choose your text colors for the Copyright links.', 'vixan'),
            'default'  => array(
                    'regular'  => '',
                    'hover'    => '',
                    'active'   => '',
                ),
            'validate' => 'color',
            'output' => array( '.cs_footer_social a' ),
        ),        
    )
));


/*
 *
 * --> Comming Soon Tab
 *
 */

Redux::setSection( $opt_name, array(
        'id'         => 'comming_soon_tab',
        'title'      => esc_html__( 'Comming Soon Settings', 'vixan' ),
        'desc'       => esc_html__( 'All those Comming Soon related options are listed here ', 'vixan' ),
        'icon'   => 'el el-website',
        'fields'     => array(
        array(
            'id' => 'vixan_cs_title',
            'type' => 'text',
            'title' => esc_html__('Title', 'vixan'), 
            'subtitle' => esc_html__( 'Enter Required Title', 'vixan' ),
            'default' => '',
            ),
            
            array(
            'id' => 'vixan_cs_wlc_desc',
            'type' => 'textarea',
            'title' => esc_html__('Welcome Description', 'vixan'), 
            'subtitle' => esc_html__( 'Enter Welcome Description', 'vixan' ),
            'default' => '',
            ),
            
        array(
            'id'       => 'vixan_cs_sc',
            'type'     => 'editor',
            'title'    => esc_html__( 'Subscribe Form Shortcode', 'vixan' ),
            'subtitle' => esc_html__( 'Enter Subscribe Shortcode from [Contact form 7]', 'vixan' ),
            'default'  => ''
            )

        )
    ) );
    
    
/*
 *
 * --> 404 Tab
 *
 */

Redux::setSection( $opt_name, array(
        'id'         => 'error_tab',
        'title'      => esc_html__( '404 Settings', 'vixan' ),
        'desc'       => esc_html__( 'All those 404 related options are listed here ', 'vixan' ),
        'icon'   => 'el el-website',
        'fields'     => array(

        array(
            'id' => 'vixan_error_title',
            'type' => 'text',
            'title' => esc_html__('Error Title', 'vixan'), 
            'subtitle' => esc_html__( 'Enter Required Title', 'vixan' ),
            'default' => 'Sorry! The page is not found here',
            ),

        array(
            'id' => 'vixan_error_text',
            'type' => 'textarea',
            'title' => esc_html__('Error Text', 'vixan'), 
            'subtitle' => esc_html__( 'Enter Required Text', 'vixan' ),
            'default' => 'Fortunately, since it is mainly a client-side issue, it is relatively easy for website owners to fix the 404 error. This article will explain the possible causes of error 404 and show four effective methods to resolve it.Fortunately, since it is mainly a client-side issue, it is relatively easy for website owners to fix the 404 error.',
            ),    
        
        array(
            'id' => 'vixan_error_btn',
            'type' => 'text',
            'title' => esc_html__('Button Text', 'vixan'), 
            'subtitle' => esc_html__( 'Enter Button Text', 'vixan' ),
            'default' => 'Back to Home',
            ),

        )
    ) );    


/*
 *
 * --> Custom CSS/JS Sections Tab
 *
 */
    Redux::setSection( $opt_name, array(
           'title'  => esc_html__( 'Custom CSS / JS', 'vixan' ),
           'id'     => 'custom-css-js',
           'icon'   => 'el el-css',
           'fields' => array(

             array(
                        'id'        => 'vixan_custom_css',
                        'type'      => 'ace_editor',
                        'title'     => esc_html__('Custom CSS ', 'vixan'),
                        'subtitle'  => esc_html__('Paste your custom CSS code here.', 'vixan'),
                        'mode'      => 'css',
                        'theme'     => 'monokai',
                    ),
                    array(
                        'id'        => 'vixan_custom_js',
                        'type'      => 'ace_editor',
                        'title'     => esc_html__('Custom JS', 'vixan'),
                        'subtitle'  => esc_html__('Paste your JS code here.', 'vixan'),
                        'mode'      => 'javascript',
                        'theme'     => 'chrome',
                    )

           )
           )
    );

/*
 *
 * --> Footer Sections Tab
 *
 */

Redux::setSection( $opt_name, array(
        'id'         => 'footer_tab',
        'title'      => esc_html__( 'Footer', 'vixan' ),
        'desc'       => esc_html__( 'All the footer related options are listed here ', 'vixan' ),
        'icon'   => 'el el-website',
        'fields'     => array(
   
        array(
            'id' => 'vixan_footer_bg',
            'type' => 'background',
            'url' => true,
            'title' => esc_html__('Footer Background Image', 'vixan'),
            'compiler' => 'true',
            'subtitle' => esc_html__('Upload a image from your hard drive or specify an existing url.', 'vixan'),
            'default' => array(
            'url' => ''
            )
        ),
        array(
            'id'       => 'vixan_ft_nsl',
            'type'     => 'editor',
            'title'    => esc_html__( 'Newsletter Shortcode', 'vixan' ),
            'subtitle' => esc_html__( 'Enter Newsletter Shortcode from [Contact form 7]', 'vixan' ),
            'default'  => ''
            ),                                                        
        array(
            'id'       => 'vixan_footercright',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Footer copyright text', 'vixan' ),
            'subtitle' => esc_html__( 'Enter Footer copyright text here', 'vixan' ),
            'default'  => ''
            )                     

        )
    ) );

/*
 * <--- END SECTIONS
 */


/*
 *
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
 *
 */

/*
 *
 * --> Action hook examples
 *
 */

// If Redux is running as a plugin, this will remove the demo notice and links
//add_action( 'redux/loaded', 'remove_demo' );

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if (!function_exists('compiler_action')) {
    function compiler_action($options, $css, $changed_values)
    {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r($changed_values); // Values that have changed since the last save
        echo "</pre>";
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}

/**
 * Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')) {
    function redux_validate_callback_function($field, $value, $existing_value)
    {
        $error   = false;
        $warning = false;
        
        //do your validation
        if ($value == 1) {
            $error = true;
            $value = $existing_value;
        } elseif ($value == 2) {
            $warning = true;
            $value   = $existing_value;
        }
        
        $return['value'] = $value;
        
        if ($error == true) {
            $return['error'] = $field;
            $field['msg']    = 'your custom error message';
        }
        
        if ($warning == true) {
            $return['warning'] = $field;
            $field['msg']      = 'your custom warning message';
        }
        
        return $return;
    }
}

/**
 * Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')) {
    function redux_my_custom_field($field, $value)
    {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 * */
if (!function_exists('dynamic_section')) {
    function dynamic_section($sections)
    {
        //$sections = array();
        $sections[] = array(
            'title' => esc_html__('Section via hook', 'vixan'),
            'desc' => esc_html__('<p class="description"> This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options. </p>', 'vixan'),
            'icon' => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array()
        );
        
        return $sections;
    }
}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
 * */
if (!function_exists('change_arguments')) {
    function change_arguments($args)
    {
        //$args['dev_mode'] = true;
        
        return $args;
    }
}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if (!function_exists('change_defaults')) {
    function change_defaults($defaults)
    {
        $defaults['str_replace'] = 'Testing filter hook!';
        
        return $defaults;
    }
}

function newIconFont() {
    // Uncomment this to remove elusive icon from the panel completely
 
    wp_register_style(
        'redux-font-awesome',  THEMEROOT  . '/fonts/font-awesome/css/font-awesome.min.css',
        array(),
        time(),
        'all'
    );  
    wp_enqueue_style( 'redux-font-awesome' );
}
// This example assumes the opt_name is set to redux_demo.  Please replace it with your opt_name value.
add_action( 'redux/page/redux_demo/enqueue', 'newIconFont' );

