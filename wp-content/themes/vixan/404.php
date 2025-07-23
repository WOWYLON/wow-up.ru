<?php
/* Template Name: page-404 */
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vixan
 */
get_header(); 
$vixan_options = get_option('vixan_options'); ?>

<?php 
    $error_title = '';
    $error_text = '';
    $error_btn = '';  
    
    if(isset($vixan_options['vixan_error_title'])) {
        $error_title = $vixan_options['vixan_error_title'];
    }

    if(isset($vixan_options['vixan_error_text'])) {
        $error_text = $vixan_options['vixan_error_text'];
    }

    if(isset($vixan_options['vixan_error_btn'])) {
        $error_btn = $vixan_options['vixan_error_btn'];
    } 
?>


<div class="cs_height_219 cs_height_lg_120"></div>

    <section>
        <div class="container">
            <div class="cs_center">
                <div class="row col-md-8 col-12">
                    <div class="cs_stroke_number cs_type_1">
                        <span><?php esc_html_e('404', 'vixan'); ?></span>
                    </div>
                    <div class="cs_height_30 cs_height_lg_0"></div>
                <?php if(!empty($error_title)) { ?>    
                    <h3 class="cs_line_height_54 text-center cs_font_20_sm">
                        <?php echo esc_html( $error_title ); ?>
                    </h3>
                <?php } else { ?>    
                    <h3 class="cs_line_height_54 text-center cs_font_20_sm">
                        <?php esc_html_e('Sorry! The page is not found here', 'vixan'); ?>
                    </h3>
                <?php } ?>    
                    <div class="cs_height_10 cs_height_lg_10"></div>
                <?php if(!empty($error_text)) { ?>    
                    <p class="cs_font_16 text-center cs_m0">
                        <?php echo esc_html( $error_text ); ?>
                    </p>
                <?php } else { ?>     
                    <p class="cs_font_16 text-center cs_m0">
                        <?php esc_html_e('Fortunately, since it is mainly a client-side issue, it is relatively easy for website owners to fix the 404 error. This article will explain the possible causes of error 404 and show four effective methods to resolve it.Fortunately, since it is mainly
                        a client-side issue, it is relatively easy for website owners to fix the 404 error.', 'vixan'); ?>
                    </p>
                <?php } ?>    
                    <div class="cs_height_50 cs_height_lg_50"></div>
                    <div class="cs_center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cs_btn cs_style_1">
                        <?php if(!empty($error_btn)) { ?>    
                            <span><?php echo esc_html( $error_btn ); ?></span>
                        <?php } else { ?>    
                            <span><?php esc_html_e('Back To Home', 'vixan'); ?></span>
                        <?php } ?>    
                            <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                  fill="currentColor"></path>
              </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cs_height_150 cs_height_lg_60"></div>

<?php get_footer(); 
