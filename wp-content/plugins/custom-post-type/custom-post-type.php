<?php
/*
Plugin Name: Custom Post Type
Plugin URI: https://themeforest.net/user/thememarch
Description: Declares a plugin that will create a custom post type
Version: 5.0
Author: thememarch
Author URI: http://www.themeforest.net/user/thememarch
Text Domain: custom-post-type
License: GPLv2
*/

// Gallery post type
if( ! function_exists( 'cpt_gallery_post_types' ) ) {
    function cpt_gallery_post_types() {

        register_post_type(
            'gallery',
            array(
                'labels' => array(
                    'name'          => esc_html__( 'Gallery ', 'cpt' ),
                    'singular_name' => esc_html__( 'Gallery', 'cpt' ),
                    'add_new'       => esc_html__( 'Add New', 'cpt' ),
                    'add_new_item'  => esc_html__( 'Add New Post', 'cpt' ),
                    'edit'          => esc_html__( 'Edit', 'cpt' ),
                    'edit_item'     => esc_html__( 'Edit Post', 'cpt' ),
                    'new_item'      => esc_html__( 'New Post', 'cpt' ),
                    'view'          => esc_html__( 'View Post', 'cpt' ),
                    'view_item'     => esc_html__( 'View Post', 'cpt' ),
                    'search_items'  => esc_html__( 'Search Post', 'cpt' ),
                    'not_found'     => esc_html__( 'No Post found', 'cpt' ),
                    'not_found_in_trash' => esc_html__( 'No Post found in Trash', 'cpt' ),
                    'parent'        => esc_html__( 'Parent Post', 'cpt' ),
                ),
                
                'description'       => esc_html__( 'Create a Post.', 'cpt' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 26,
                'hierarchical'      => true,
                'query_var'         => true,
                'menu_icon' => 'dashicons-format-gallery',
                'supports'  => array (
                        'title', 
                        'editor', 
                        'excerpt', 
                        'thumbnail', 
                        'custom-fields'

                )
            )
        );
register_taxonomy('gallery_category', 'gallery', array('hierarchical' => true, 'label' => 'Gallery Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'cpt_gallery_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');


// Projects
if( ! function_exists( 'cpt_project_post_types' ) ) {
    function cpt_project_post_types() {

        register_post_type(
            'projects',
            array(
                'labels' => array(
                    'name'          => esc_html__( 'Projects ', 'cpt' ),
                    'singular_name' => esc_html__( 'Project', 'cpt' ),
                    'add_new'       => esc_html__( 'Add New', 'cpt' ),
                    'add_new_item'  => esc_html__( 'Add New Post', 'cpt' ),
                    'edit'          => esc_html__( 'Edit', 'cpt' ),
                    'edit_item'     => esc_html__( 'Edit Post', 'cpt' ),
                    'new_item'      => esc_html__( 'New Post', 'cpt' ),
                    'view'          => esc_html__( 'View Post', 'cpt' ),
                    'view_item'     => esc_html__( 'View Post', 'cpt' ),
                    'search_items'  => esc_html__( 'Search Post', 'cpt' ),
                    'not_found'     => esc_html__( 'No Post found', 'cpt' ),
                    'not_found_in_trash' => esc_html__( 'No Post found in Trash', 'cpt' ),
                    'parent'        => esc_html__( 'Parent Post', 'cpt' ),
                ),
                
                'description'       => esc_html__( 'Create a Post.', 'cpt' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 27,
                'hierarchical'      => true,
                'query_var'         => true,
                'menu_icon' => 'dashicons-format-gallery',
                'supports'  => array (
                        'title', 
                        'editor', 
                        'excerpt', 
                        'thumbnail', 
                        'custom-fields'

                )
            )
        );
register_taxonomy('projects_category', 'projects', array('hierarchical' => true, 'label' => 'Project Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'cpt_project_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



// Services post type
if( ! function_exists( 'cpt_services_post_types' ) ) {
    function cpt_services_post_types() {

        register_post_type(
            'services',
            array(
                'labels' => array(
                    'name'          => esc_html__( 'Services ', 'cpt' ),
                    'singular_name' => esc_html__( 'Services', 'cpt' ),
                    'add_new'       => esc_html__( 'Add New', 'cpt' ),
                    'add_new_item'  => esc_html__( 'Add New Post', 'cpt' ),
                    'edit'          => esc_html__( 'Edit', 'cpt' ),
                    'edit_item'     => esc_html__( 'Edit Post', 'cpt' ),
                    'new_item'      => esc_html__( 'New Post', 'cpt' ),
                    'view'          => esc_html__( 'View Post', 'cpt' ),
                    'view_item'     => esc_html__( 'View Post', 'cpt' ),
                    'search_items'  => esc_html__( 'Search Post', 'cpt' ),
                    'not_found'     => esc_html__( 'No Post found', 'cpt' ),
                    'not_found_in_trash' => esc_html__( 'No Post found in Trash', 'cpt' ),
                    'parent'        => esc_html__( 'Parent Post', 'cpt' ),
                ),
                
                'description'       => esc_html__( 'Create a Post.', 'cpt' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 28,
                'hierarchical'      => true,
                'query_var'         => true,
                'menu_icon' => 'dashicons-format-aside',
                'supports'  => array (
                        'title', 
                        'editor', 
                        'excerpt', 
                        'thumbnail', 
                        'custom-fields'

                )
            )
        );
register_taxonomy('services_category', 'services', array('hierarchical' => true, 'label' => 'Service Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));

    }
}

add_action( 'init', 'cpt_services_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



// Team post type
if( ! function_exists( 'cpt_team_post_types' ) ) {
    function cpt_team_post_types() {

        register_post_type(
            'team',
            array(
                'labels' => array(
                    'name'          => esc_html__( 'Team ', 'cpt' ),
                    'singular_name' => esc_html__( 'Team', 'cpt' ),
                    'add_new'       => esc_html__( 'Add New', 'cpt' ),
                    'add_new_item'  => esc_html__( 'Add New Post', 'cpt' ),
                    'edit'          => esc_html__( 'Edit', 'cpt' ),
                    'edit_item'     => esc_html__( 'Edit Post', 'cpt' ),
                    'new_item'      => esc_html__( 'New Post', 'cpt' ),
                    'view'          => esc_html__( 'View Post', 'cpt' ),
                    'view_item'     => esc_html__( 'View Post', 'cpt' ),
                    'search_items'  => esc_html__( 'Search Post', 'cpt' ),
                    'not_found'     => esc_html__( 'No Post found', 'cpt' ),
                    'not_found_in_trash' => esc_html__( 'No Post found in Trash', 'cpt' ),
                    'parent'        => esc_html__( 'Parent Post', 'cpt' ),
                ),
                
                'description'       => esc_html__( 'Create a Post.', 'cpt' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 29,
                'hierarchical'      => true,
                'query_var'         => true,
                'menu_icon' => 'dashicons-groups',
                'supports'  => array (
                        'title', 
                        'editor', 
                        'excerpt', 
                        'thumbnail', 
                        'custom-fields'

                )
            )
        );
        register_taxonomy('team_category', 'team', array('hierarchical' => true, 'label' => 'Team Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
    }
}

add_action( 'init', 'cpt_team_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



// Testimonials post type
if( ! function_exists( 'cpt_testimonial_post_types' ) ) {
    function cpt_testimonial_post_types() {

        register_post_type(
            'testimonials',
            array(
                'labels' => array(
                    'name'          => esc_html__( 'Testimonials ', 'cpt' ),
                    'singular_name' => esc_html__( 'Testimonials', 'cpt' ),
                    'add_new'       => esc_html__( 'Add New', 'cpt' ),
                    'add_new_item'  => esc_html__( 'Add New Post', 'cpt' ),
                    'edit'          => esc_html__( 'Edit', 'cpt' ),
                    'edit_item'     => esc_html__( 'Edit Post', 'cpt' ),
                    'new_item'      => esc_html__( 'New Post', 'cpt' ),
                    'view'          => esc_html__( 'View Post', 'cpt' ),
                    'view_item'     => esc_html__( 'View Post', 'cpt' ),
                    'search_items'  => esc_html__( 'Search Post', 'cpt' ),
                    'not_found'     => esc_html__( 'No Post found', 'cpt' ),
                    'not_found_in_trash' => esc_html__( 'No Post found in Trash', 'cpt' ),
                    'parent'        => esc_html__( 'Parent Post', 'cpt' ),
                ),
                
                'description'       => esc_html__( 'Create a Post.', 'cpt' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 40,
                'hierarchical'      => true,
                'query_var'         => true,
                'menu_icon' => 'dashicons-testimonial',
                'supports'  => array (
                        'title', 
                        'editor', 
                        'excerpt', 
                        'thumbnail', 
                        'custom-fields'

                )
            )
        );

    }
}

add_action( 'init', 'cpt_testimonial_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');