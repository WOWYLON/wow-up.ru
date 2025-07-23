<?php 
/**
 * The template for support the project functionality
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php 
global $post;

    $pro_select_clmn = get_post_meta($post->ID, 'vixan_pro_select_clmn', true);
  
?>

<?php if(!empty($pro_select_clmn)) { ?>    
    <div class="<?php echo esc_attr($pro_select_clmn); ?> wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
<?php } else { ?>    
    <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
<?php } ?>    




