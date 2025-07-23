<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options'); ?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php
    $pred_img = '';
    $header_layout = '';
    $header_top = '';
    $header_top_button = '';
    $cursor_animation = '';
    $show_preloader = '';
    $head_top_left_btn = '';
    $vixan_trbtn_text = '';
    $vixan_trbtn_url = '';
    $show_pagebutton_next = '';
    $show_pagebutton_next_url = '';
    
    if(isset($vixan_options['vixan_cursor_animation'])){
        $cursor_animation = $vixan_options['vixan_cursor_animation'];
    }

    if(isset($vixan_options['vixan_pageLoader'])){
        $show_preloader = $vixan_options['vixan_pageLoader'];
    }

    if(isset($vixan_options['vixan_header_top'])){
        $header_top = $vixan_options['vixan_header_top'];
    }

    if(isset($vixan_options['vixan_header_top_button'])){
        $header_top_button = $vixan_options['vixan_header_top_button'];
    }

    if(isset($vixan_options['vixan_header_layout'])){
        $header_layout = $vixan_options['vixan_header_layout'];
    }

    if(isset($vixan_options['vixan_pred_logo'])){
        $pred_img = $vixan_options['vixan_pred_logo'] ['url'];
    }    

    if(isset($vixan_options['head_top_left_btn_url'])){
        $head_top_left_btn = $vixan_options['head_top_left_btn_url'];
    }

    if(isset($vixan_options['vixan_pagebutton'])){
        $show_pagebutton = $vixan_options['vixan_pagebutton'];
    }

    if(isset($vixan_options['vixan_trbtn_text'])){
        $vixan_trbtn_text = $vixan_options['vixan_trbtn_text'];
    }

    if(isset($vixan_options['vixan_trbtn_url'])){
        $vixan_trbtn_url = $vixan_options['vixan_trbtn_url'];
    }
?>
    <!-- Cursor Animation -->
    <?php if ( $cursor_animation == 1 ): ?>
        
        <?php get_template_part( 'template-extras/cursor', 'animation' ); ?>

    <?php endif; ?>
    <!-- Cursor Animation -->

    <!-- Preloader start -->
    <?php if ( $show_preloader == 1 ): ?>
        
        <?php get_template_part( 'template-extras/preloader' ); ?>

    <?php endif; ?>
    <!-- Preloader end -->
  

    <!-- Hesder Style start -->
    <?php if( ($header_layout == '1') || (is_page_template('page-templates/page-home1.php')) ) { ?>    
        <header class="rt-site-header default-header rt-fixed-top white-menu">

    <?php } elseif( ($header_layout == '2') || (is_page_template('page-templates/page-home2.php')) ) { ?>
        <header class="rt-site-header home-three rt-fixed-top white-menu style-two">    

    <?php } elseif( ($header_layout == '3') || (is_page_template('page-templates/page-home3.php')) ) { ?>
        <header class="rt-site-header home-four rt-fixed-top ">    

    <?php } elseif( ($header_layout == '4') || (is_page_template('page-templates/page-home4.php')) ) { ?>
        <header class="rt-site-header home-four rt-fixed-top">
            
    <?php } else { ?>        
        <header class="cs_site_header cs_style1 cs_sticky_header cs_site_header_full_width">    
    <?php } ?>        

            <div class="cs_main_header">
                <div class="container">
                    <div class="cs_main_header_in">
                        
                        <div class="cs_main_header_left">
                             <?php vixan_the_custom_logo(); ?>
                        </div>
                    
                        <div class="cs_main_header_right">
                            <div class="cs_nav cs_medium">
                                <?php get_template_part('template-parts/header/menu'); ?>
                            </div>

                            <div class="cs_toolbox">
                                <span class="cs_icon_btn">
                                <span class="cs_icon_btn_in">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>   
    <!-- End Header Section -->
    
    <?php get_template_part('template-parts/header/side', 'header'); ?>

    <div id="smooth-wrapper">
      <div id="smooth-content">

