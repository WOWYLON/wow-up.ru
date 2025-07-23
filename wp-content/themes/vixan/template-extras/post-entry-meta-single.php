<?php
/**
 * Displays Post Meta
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php 
    $year  = get_the_time( 'Y' ); 
    $month = get_the_time( 'm' ); 
    $day   = get_the_time( 'd' ); 
    $vixan_post_date = get_the_date( 'F - j - Y' );
?>

<section>
    <div class="container">
    <div class="anim_div_ShowZoom">
        <div class="cs_portfolio_details">
        <div class="col-lg-6">
            <div class="row">
            <div class="col-md-4">
                <div class="cs_text_style_1">
                <p class="cs_headed_text"><?php esc_html_e('Posted By', 'vixan'); ?></p>
                <h6 class="cs_title_text"><?php the_author(); ?></h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cs_text_style_1">
                <p class="cs_headed_text"><?php esc_html_e('Published Date', 'vixan'); ?></p>
                <h6 class="cs_title_text"><?php echo esc_html($vixan_post_date); ?></h6>
                </div>
            </div>
            
        <?php
            $vixan_post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true );
            
            if ( ! empty( $vixan_post_views_count ) ) {
        ?>    
            <div class="col-md-4">
                <div class="cs_text_style_1">
                    <p class="cs_headed_text"><?php esc_html_e('Viewes', 'vixan'); ?></p>
                    
                    <h6 class="cs_title_text">
                        <?php echo esc_html($vixan_post_views_count); ?> <?php esc_html_e('Times Read', 'vixan'); ?>
                    </h6>
                    
                </div>
            </div>
            
        <?php } ?>    
        
            </div>
        </div>
        </div>
    </div>
    </div>
</section>


        <!-- Post Meta End -->