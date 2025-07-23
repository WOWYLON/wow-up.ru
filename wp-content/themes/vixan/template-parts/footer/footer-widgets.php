<?php
/**
 * Displays footer widgets if assigned
 *
 * @package vixan
 */

?>
                        

    <?php if ( is_active_sidebar( 'vixan-footer-widget-1' ) ) { ?>

        <div class="col-lg-5">
            <?php dynamic_sidebar( 'vixan-footer-widget-1' ); ?>
        </div>

    <?php } ?>

        <div class="col-lg-6 offset-lg-1">
            <div class="cs_footer_social">
                <?php get_template_part('./template-extras/social', 'connections'); ?>
            </div>

            <div class="cs_height_60 cs_height_lg_30"></div>

        <?php if ( is_active_sidebar( 'vixan-footer-widget-2' ) ) { ?>
            <?php dynamic_sidebar( 'vixan-footer-widget-2' ); } ?> 

        </div>



