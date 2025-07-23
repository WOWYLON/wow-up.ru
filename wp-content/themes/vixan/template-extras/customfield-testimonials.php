<?php 
/**
 * The template for displaying the top Custom Fields in Testimonials
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php get_template_part('template-extras/single', 'breadcrumb'); 


$gl_clt = get_post_meta($post->ID,'vixan_tst_desig', true);
?>



