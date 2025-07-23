<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package vixan
 */

if ( ! function_exists( 'vixan_posts_pagination' ) ) :
    /**
     * Blog Pagination
     */
    function vixan_posts_pagination() {

        if ( $GLOBALS[ 'wp_query' ]->max_num_pages > 1 ) {
            $big   = 999999999; // need an unlikely integer
            $items = paginate_links( apply_filters( 'vixan_posts_pagination_paginate_links', array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'    => '?paged=%#%',
                'prev_next' => TRUE,
                'current'   => max( 1, get_query_var( 'paged' ) ),
                'total'     => $GLOBALS[ 'wp_query' ]->max_num_pages,
                'type'      => 'array',
                'prev_text' => '<span class="fas fa-angle-double-left">Prev</span>',
                'next_text' => '<span class="fas fa-angle-double-right">Next</span>',
                'end_size'  => 1,
                'mid_size'  => 1
            ) ) );

            $pagination = "<div class=\"pagination-wrap\"><ul class=\"pagination  styled-pagination clearfix\"><li>";
            $pagination .= join( "</li><li>", (array) $items );
            $pagination .= "</li></ul></div>";

            echo apply_filters( 'vixan_posts_pagination', $pagination, $items, $GLOBALS[ 'wp_query' ] );
        }
    }
endif;


/**
 * change wordpress custom logo and logo link class
 */
 
function vixan_change_logo_class($html)
{
    $html = str_replace('custom-logo-link', 'navbar-brand logo', $html);
    return $html;
}

if ( ! function_exists( 'vixan_get_default_logo' ) ) :
    /**
     * Get Default Custom Logo
     */
    function vixan_get_default_logo( $html = '' ) {


    if ( empty( $html ) ) :
        global $template;

            $html = sprintf( '<a href="%1$s" class="navbar-brand logo cs_site_branding" rel="home">%2$s</a>',
                esc_url( home_url( '/' ) ),

                '<img class="custom-logo"
                            src="' . esc_url( get_template_directory_uri() . '/images/logo.png' ) . '"
                            alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">'                        
            );

    endif;    

        return $html;

    }

    add_filter( 'get_custom_logo', 'vixan_get_default_logo' );

endif;

if ( ! function_exists( 'vixan_the_custom_logo' ) ) :
    /**
     * Custom Logo Option
     */
    function vixan_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) :
            the_custom_logo();
        else:
            echo vixan_get_default_logo();
        endif;
    }
 add_filter('get_custom_logo','vixan_change_logo_class');   
endif;


/**
 * change wordpress custom logo-2 and logo link class
 */
 
 function vixan_change_logo2_class($html)
 {
     $html = str_replace('custom-logo-link', 'navbar-brand logo', $html);
     return $html;
 }
 
 if ( ! function_exists( 'vixan_get_default_logo2' ) ) :
     /**
      * Get Default Custom Logo
      */
     function vixan_get_default_logo2( $html = '' ) {
 
 
     if ( empty( $html ) ) :
         global $template;
 
             $html = sprintf( '<a href="%1$s" class="navbar-brand logo cs_site_branding" rel="home">%2$s</a>',
                 esc_url( home_url( '/' ) ),
 
                 '<img class="custom-logo"
                             src="' . esc_url( get_template_directory_uri() . '/images/Logo_white.png' ) . '"
                             alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">'                        
             );
 
     endif;    
 
         return $html;
 
     }
 
     add_filter( 'get_custom_logo2', 'vixan_get_default_logo2' );
 
 endif;
 
 if ( ! function_exists( 'vixan_the_custom_logo2' ) ) :
     /**
      * Custom Logo Option
      */
     function vixan_the_custom_logo2() {
         if ( function_exists( 'the_custom_logo2' ) ) :
             the_custom_logo2();
         else:
             echo vixan_get_default_logo2();
         endif;
     }
  add_filter('get_custom_logo2','vixan_change_logo2_class');   
 endif;



/*
 * story_post_navigation
 *
 * */


if ( ! function_exists( 'vixan_posts_navigation' ) ) :
    function vixan_posts_navigation() {
        get_template_part('template-parts/navigation/post', 'navigation');
    }

endif;