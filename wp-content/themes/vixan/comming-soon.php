<?php
/* Template Name:comming-soon */
/**
 * The template for displaying comming-soon pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vixan
 */
get_header(); 
$vixan_options = get_option('vixan_options'); ?>

<?php 
    $vixan_cs_title = '';
    $vixan_cs_wlc_desc = '';
    $vixan_cs_sc = '';
    
    if(isset($vixan_options['vixan_cs_title'])) {
        $vixan_cs_title = $vixan_options['vixan_cs_title'];
    }

    if(isset($vixan_options['vixan_cs_wlc_desc'])) {
        $vixan_cs_wlc_desc = $vixan_options['vixan_cs_wlc_desc'];
    } 

    if(isset($vixan_options['vixan_cs_sc'])) {
        $vixan_cs_sc = $vixan_options['vixan_cs_sc'];
    }
?>

<div class="comming-content rtbgprefix-full comming-soon-height" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-img/cmn.png);">
    <div class="rt-container">
        <div class="row align-items-center comming-soon-height">
            <div class="col-lg-6">
                <div class="comming-soon-content">

                <?php if(!empty($vixan_cs_title)) { ?>    
                    <h2><?php echo esc_html($vixan_cs_title); ?> </h2>

                <?php } if(!empty($vixan_cs_wlc_desc)) { ?>    
                    <p><?php echo esc_html($vixan_cs_wlc_desc); ?></p>
                <?php } ?>    

                    <div class="simply-countdown-one"></div><!-- /.simply-countdown-one -->

                    <div class="input-group rt-mt-30">
                        <?php echo do_shortcode($vixan_options['vixan_cs_sc']); ?>
                    </div>
                    
                </div><!-- /.comming-soon-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.rt-container -->
</div><!-- /.comming-content -->   

<?php get_footer(); 
