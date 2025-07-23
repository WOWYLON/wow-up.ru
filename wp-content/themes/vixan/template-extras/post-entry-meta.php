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
    $post_date = get_the_date( 'l F j, Y' );
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
                <h6 class="cs_title_text"><?php echo esc_html($post_date); ?></h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cs_text_style_1">
                <p class="cs_headed_text"><?php esc_html_e('Viewes', 'vixan'); ?></p>
                <h6 class="cs_title_text">2 Min Read</h6>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

    <ul class="meta-info">

        <li>
            <a href="<?php esc_url( the_permalink() ); ?>"><span class="icon-user"></span><?php the_author(); ?></a>
        </li> 

        <li>
            <a href="<?php esc_url( the_permalink() ); ?>"><span class="icon-wall-clock"><?php
        echo esc_html(
            sprintf( 
                _nx( "1 Comment", '%s Comments', get_comments_number(), 'comments title', 'vixan' ), number_format_i18n( get_comments_number() ) 
            )
        ); 
    ?></a>
        </li>
        
    </ul>

        <!-- Post Meta End -->