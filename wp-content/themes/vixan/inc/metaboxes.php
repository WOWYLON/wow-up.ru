<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
 
// Better has an underscore as last sign
$prefix = 'vixan_';

global $vixan_meta_boxes;

$vixan_meta_boxes = array();

global $vixan_smof_data;


/* ----------------------------------------------------- */
// Page Sections Metaboxes
/* ----------------------------------------------------- */


/* Page Section Background Settings */

$grid_array = array('2 Columns','3 Columns','4 Columns');

$pagebg_type_array = array(
	'image' => 'Image',
	'gradient' => 'Gradient',
	'color' => 'Color'
);


/* ----------------------------------------------------- */
// Page Settings
/* ----------------------------------------------------- */

$vixan_meta_boxes[] = array(
	'id' => 'vixan-def-page-opt',
	'title' => 'Default Page Template Settings',
	'pages' => array( 'page'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(

		// SELECT BOX
		array(
			'name'     => esc_html__( 'Select', 'vixan' ),
			'id'   => $prefix . 'default_page_format',
			'desc'  => esc_html__( 'Working only Default Page Template', 'vixan' ),
			'type'     => 'image_select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'gr_page_default' => esc_html__( get_template_directory_uri().'/inc/img/metaboxes/right.png', 'vixan' ),
				'left_sidb' => esc_html__( get_template_directory_uri().'/inc/img/metaboxes/left.png', 'vixan' ),
				'full_width' => esc_html__( get_template_directory_uri().'/inc/img/metaboxes/full.png', 'vixan' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'gr_page_default',
			'placeholder' => esc_html__( 'Select an Option', 'vixan' ),
		),

		array(
			'name' => esc_html__( 'Header Top Bar', 'vixan' ),
			'desc' => esc_html__( 'Enable Header Top Bar', 'vixan' ),
			'id' => $prefix . 'top_bar',
			'type' => 'checkbox',
			'clone'		=> false,
			),

	),
);


/* ----------------------------------------------------- */
// Blog Post Settings
/* ----------------------------------------------------- */

$vixan_meta_boxes[] = array(
	'id' => 'vixan-post-opt',
	'title' => 'Post Options',
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
	
		array(
			'name'		=> esc_html__( 'Post Sub title', 'vixan' ),
			'id'		=> $prefix . 'post_sub_title',
			'desc'		=> esc_html__( 'Enter Here post Sub title.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> 'Nam sollicitudin neque eu nibh pharetra mollis mauris in nisi rhoncus'
		),
		
	)
);


/* ----------------------------------------------------- */
// Gallery Settings
/* ----------------------------------------------------- */

$vixan_meta_boxes[] = array(
	'id' => 'vixan-Gallery-opt3',
	'title' => 'Project / Work Details',
	'pages' => array( 'gallery'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(

		array(
			'name'		=> esc_html__( 'Client Name', 'vixan' ),
			'id'		=> $prefix . 'gl_clt',
			'desc'		=> esc_html__( 'Enter Client Name.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Client Country', 'vixan' ),
			'id'		=> $prefix . 'gl_clt_country',
			'desc'		=> esc_html__( 'Enter Client Country.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Project Duration', 'vixan' ),
			'id'		=> $prefix . 'gl_duration',
			'desc'		=> esc_html__( 'Enter Project Duration.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
	)
);


/* ----------------------------------------------------- */
// Services Settings
/* ----------------------------------------------------- */

$vixan_meta_boxes[] = array(
	'id' => 'vixan-services-optpfda',
	'title' => 'Service Settings',
	'pages' => array( 'services'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		array(
			'name'		=> esc_html__( 'Service Info', 'vixan' ),
			'id'		=> $prefix . 'srv_info',
			'desc'		=> esc_html__( 'Enter Service Info.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Service Info List One', 'vixan' ),
			'id'		=> $prefix . 'srv_info_lst1',
			'desc'		=> esc_html__( 'Enter Service Info.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Service Info List Two', 'vixan' ),
			'id'		=> $prefix . 'srv_info_lst2',
			'desc'		=> esc_html__( 'Enter Service Info.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Service Info List Three', 'vixan' ),
			'id'		=> $prefix . 'srv_info_lst3',
			'desc'		=> esc_html__( 'Enter Service Info.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Service Info List Four', 'vixan' ),
			'id'		=> $prefix . 'srv_info_lst4',
			'desc'		=> esc_html__( 'Enter Service Info.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Service Info List Five', 'vixan' ),
			'id'		=> $prefix . 'srv_info_lst5',
			'desc'		=> esc_html__( 'Enter Service Info.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
	)
);


/* ----------------------------------------------------- */
// Projects Settings
/* ----------------------------------------------------- */

$vixan_meta_boxes[] = array(
	'id' => 'vixan-projects-opt',
	'title' => 'Project Settings Area',
	'pages' => array( 'projects'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		array(
			'name'		=> esc_html__( 'Select Column Style', 'vixan' ),
			'id'		=> $prefix . 'pro_select_clmn',
			'desc'		=> esc_html__( 'Select Required Column Style', 'vixan' ),
			'multiple'  => true,
			'select_all_none' => true,
			'clone'		=> false,
			'type'		=> 'select',
			'options' => [
				'col-xl-4 col-lg-4 col-md-4'  => esc_html__( 'Select Column', 'vixan' ),
				'col-xl-4 col-lg-4 col-md-4'  => esc_html__( 'Four Column', 'vixan' ),
				'col-xl-3 col-lg-3 col-md-3' => esc_html__( 'Three Column', 'vixan' ),
				'col-xl-8 col-lg-8 col-md-8' => esc_html__( 'Eight Column', 'vixan' )
			],
			'default' => 'col-xl-4 col-lg-4 col-md-4',
		),
		array(
			'name'		=> esc_html__( 'Title', 'vixan' ),
			'id'		=> $prefix . 'pr_title',
			'desc'		=> esc_html__( 'Enter Project Details Title.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Welcome Text', 'vixan' ),
			'id'		=> $prefix . 'pr_wlct',
			'desc'		=> esc_html__( 'Enter Project Details Welcome Text.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Client Name', 'vixan' ),
			'id'		=> $prefix . 'pr_clt',
			'desc'		=> esc_html__( 'Enter Project Details Client Name.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Start Date', 'vixan' ),
			'id'		=> $prefix . 'pr_sd',
			'desc'		=> esc_html__( 'Enter Project Details Start Date.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'End Date', 'vixan' ),
			'id'		=> $prefix . 'pr_ed',
			'desc'		=> esc_html__( 'Enter Project Details End Date.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Website URL', 'vixan' ),
			'id'		=> $prefix . 'pr_wu',
			'desc'		=> esc_html__( 'Enter Project Details Website URL.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Select Projet Rating', 'vixan' ),
			'id'		=> $prefix . 'pr_rating',
			'desc'		=> esc_html__( 'Select Required Projet Rating', 'vixan' ),
			'multiple'  => true,
			'select_all_none' => true,
			'clone'		=> false,
			'type'		=> 'select',
			'options' => [
				'5'  => esc_html__( 'Five Star', 'vixan' ),
				'4'  => esc_html__( 'Four Star', 'vixan' ),
				'3' => esc_html__( 'Three Star', 'vixan' ),
				'2' => esc_html__( 'Two Star', 'vixan' ),
				'1' => esc_html__( 'One Star', 'vixan' )
			],
			'default' => '5',
		)


	)
);	


/* ----------------------------------------------------- */
// Team Settings
/* ----------------------------------------------------- */

$vixan_meta_boxes[] = array(
	'id' => 'vixan-testimonials-opt',
	'title' => 'Team Settings Area',
	'pages' => array( 'team'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		array(
			'name'		=> esc_html__( 'Address', 'vixan' ),
			'id'		=> $prefix . 'tm_addr',
			'desc'		=> esc_html__( 'Enter The Address.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Email', 'vixan' ),
			'id'		=> $prefix . 'tm_mail',
			'desc'		=> esc_html__( 'Enter The Email.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Phone Number', 'vixan' ),
			'id'		=> $prefix . 'tm_phn',
			'desc'		=> esc_html__( 'Enter The Phone Number.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Website', 'vixan' ),
			'id'		=> $prefix . 'tm_web',
			'desc'		=> esc_html__( 'Enter The Website URL.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'About Descriptions', 'vixan' ),
			'id'		=> $prefix . 'tm_about',
			'desc'		=> esc_html__( 'Enter The Descriptions.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		)
	)
);



/* ----------------------------------------------------- */
// Team Social Connections
/* ----------------------------------------------------- */

$vixan_meta_boxes[] = array(
	'id' => 'vixan-team-opt2',
	'title' => "Team Member's Social Connections",
	'pages' => array( 'team'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		
		array(
			'name'		=> esc_html__( 'Facebook', 'vixan' ),
			'id'		=> $prefix . 'fblink',
			'desc'		=> esc_html__( 'Enter Here Facebook Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '#'
		),
		array(
			'name'		=> esc_html__( 'Twitter', 'vixan' ),
			'id'		=> $prefix . 'twlink',
			'desc'		=> esc_html__( 'Enter Here Twitter Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '#'
		),
		array(
			'name'		=> esc_html__( 'Linkedin', 'vixan' ),
			'id'		=> $prefix . 'ldlink',
			'desc'		=> esc_html__( 'Enter Here Linkedin Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '#'
		),
		array(
			'name'		=> esc_html__( 'Google Plus', 'vixan' ),
			'id'		=> $prefix . 'gplink',
			'desc'		=> esc_html__( 'Enter Here Google Plus Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '#'
		),
		array(
			'name'		=> esc_html__( 'Dribbble', 'vixan' ),
			'id'		=> $prefix . 'drlink',
			'desc'		=> esc_html__( 'Enter Here Dribbble Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '#'
		),
		array(
			'name'		=> esc_html__( 'You Tube', 'vixan' ),
			'id'		=> $prefix . 'youtube',
			'desc'		=> esc_html__( 'Enter Here You Tube Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Instagram', 'vixan' ),
			'id'		=> $prefix . 'inslink',
			'desc'		=> esc_html__( 'Enter Here Instagram Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Github', 'vixan' ),
			'id'		=> $prefix . 'git',
			'desc'		=> esc_html__( 'Enter Here Github Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Pinterest', 'vixan' ),
			'id'		=> $prefix . 'pt',
			'desc'		=> esc_html__( 'Enter Here Pinterest Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Skype', 'vixan' ),
			'id'		=> $prefix . 'skp',
			'desc'		=> esc_html__( 'Enter Here Skype Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Tumblr', 'vixan' ),
			'id'		=> $prefix . 'tumblink',
			'desc'		=> esc_html__( 'Enter Here Tumblr Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Vimeo', 'vixan' ),
			'id'		=> $prefix . 'vmlink',
			'desc'		=> esc_html__( 'Enter Here Vimeo Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Behance', 'vixan' ),
			'id'		=> $prefix . 'belink',
			'desc'		=> esc_html__( 'Enter Here Behance Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Flickr', 'vixan' ),
			'id'		=> $prefix . 'flc',
			'desc'		=> esc_html__( 'Enter Here Behance Link.', 'vixan' ),
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
	
	)
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function vixan_register_meta_boxes()
{
	global $vixan_meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $vixan_meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'vixan_register_meta_boxes' );