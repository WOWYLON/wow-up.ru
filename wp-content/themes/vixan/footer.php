<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vixan
 */

$vixan_options = get_option('vixan_options');
?>

<?php
    $footer_bg = '';
    $footer_top_title = '';
    $footer_top_subtitle = '';
    $footer_bottom_phn = '';
    $footer_bottom_mail = '';
    $footer_bottom_cpr = '';
    $footer_bottom_right = '';
    $footer_bg_img = '';
    $footer_bg_color = '';
    $vixan_footer_style = '';
    
    if(isset($vixan_options['vixan_footer_bg'])) {
        $footer_bg = $vixan_options['vixan_footer_bg'];
    }

    if(isset($vixan_options['vixan_footer_top_title'])) {
        $footer_top_title = $vixan_options['vixan_footer_top_title'];
    } 

    if(isset($vixan_options['vixan_footer_top_btntitle'])) {
        $footer_top_btntitle = $vixan_options['vixan_footer_top_btntitle'];
    } 

    if(isset($vixan_options['vixan_footer_bottom_phn'])) {
        $footer_bottom_phn = $vixan_options['vixan_footer_bottom_phn'];
    }   

    if(isset($vixan_options['vixan_footer_bottom_mail'])) {  
        $footer_bottom_mail = $vixan_options['vixan_footer_bottom_mail'];
    }

    if(isset($vixan_options['vixan_footer_bottom_cpr'])) {  
        $footer_bottom_cpr = $vixan_options['vixan_footer_bottom_cpr'];
    } 

    if(isset($vixan_options['vixan_footer_bottom_right'])) {  
        $footer_bottom_right = $vixan_options['vixan_footer_bottom_right'];
    }

    if(isset($vixan_options['vixan_footer_bg']['background-image'])) {  
        $footer_bg_img = $vixan_options['vixan_footer_bg']['background-image'];
    } 

    if(isset($vixan_options['vixan_footer_bg']['background-color'])) {  
        $footer_bg_color = $vixan_options['vixan_footer_bg']['background-color'];
    } 

    if(isset($vixan_options['vixan_footer_style'])) {  
        $vixan_footer_style = $vixan_options['vixan_footer_style'];
    }
?>

    <?php get_template_part( 'template-parts/footer/footer', 'all' ); ?>


  </div>
</div>

    <!-- Scrollup -->
    <?php get_template_part( 'template-extras/scrollup' ); ?>

    <!-- Video Popup -->
    <?php get_template_part( 'template-extras/video', 'popup' ); ?>

    <?php vixan_cursor_colors(); ?>

<?php wp_footer(); ?>

</body>
</html>
