<?php
/**
 * Displays footer all styles
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>
                        
<?php
$footer_bg = '';
$vixan_footercright = '';
$footer_bg_img = '';
$footer_bg_color = '';

if(isset($vixan_options['vixan_footer_bg'])) {
    $footer_bg = $vixan_options['vixan_footer_bg'];
}

if(isset($vixan_options['vixan_footercright'])) {  
    $vixan_footercright = $vixan_options['vixan_footercright'];
} 

if(isset($vixan_options['vixan_footer_bg']['background-image'])) {  
    $footer_bg_img = $vixan_options['vixan_footer_bg']['background-image'];
} 

if(isset($vixan_options['vixan_footer_bg']['background-color'])) {  
    $footer_bg_color = $vixan_options['vixan_footer_bg']['background-color'];
} ?>

<?php if( !empty( ($footer_bg_img) || ($footer_bg_color) ) ) { ?>
    <footer class="cs_footer" style="
        <?php if( !empty( $vixan_options['vixan_footer_bg']['background-color'] ) ) { ?>     
        background-color: <?php echo '' . esc_attr($vixan_options['vixan_footer_bg']['background-color']) ?>;

<?php } if( !empty( $vixan_options['vixan_footer_bg']['background-image'] ) ) { ?>
    background-image: url(<?php echo '' . esc_url($vixan_options['vixan_footer_bg']['background-image']) ?>
    );

<?php } if( !empty( $vixan_options['vixan_footer_bg']['background-repeat'] ) ) { ?>     
    background-repeat: <?php echo '' . esc_attr($vixan_options['vixan_footer_bg']['background-repeat']) ?>;

<?php } if( !empty( $vixan_options['vixan_footer_bg']['background-position'] ) ) { ?>     
    background-position: <?php echo '' . esc_attr($vixan_options['vixan_footer_bg']['background-position']) ?>; 

<?php } if( !empty( $vixan_options['vixan_footer_bg']['background-size'] ) ) { ?>     
    background-size: <?php echo '' . esc_attr($vixan_options['vixan_footer_bg']['background-size']) ?>;

<?php } if( !empty( $vixan_options['vixan_footer_bg']['background-attachment'] ) ) { ?>     
    background-attachment: <?php echo '' . esc_attr($vixan_options['vixan_footer_bg']['background-attachment']) ?>;
<?php } ?>

">

<?php } else { ?>
    <footer class="cs_footer cs_primary_bg">
<?php } ?>

        <?php if ( ( is_active_sidebar( 'vixan-footer-widget-1' ) ) || ( is_active_sidebar( 'vixan-footer-widget-2' ) ) ) { ?>

          <div class="cs_height_150 cs_height_lg_60"></div>
          <div class="container">

            <div class="row">
                <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
            </div>

            <div class="cs_height_60 cs_height_lg_60"></div>

            <?php if ( has_nav_menu( 'vixan-footer-menu' ) ) {

                 get_template_part('template-parts/footer/footer', 'menu'); 

             } ?>    

          </div>

                <?php get_template_part('template-parts/footer/site', 'info'); ?>
                
        <?php } ?>        

        </footer>
