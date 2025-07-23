<?php
/**
 * Displays Social Links
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php
    global $post;
    $tm_fb_link = get_post_meta($post->ID,'vixan_tm_fb_link', true);
    $tm_tw_link = get_post_meta($post->ID,'vixan_tm_tw_link', true);
    $tm_ld_link = get_post_meta($post->ID,'vixan_tm_ld_link', true);
    $tm_gp_link = get_post_meta($post->ID,'vixan_tm_gp_link', true);
    $tm_drb_link = get_post_meta($post->ID,'vixan_tm_drb_link', true);
    $tm_yt_link = get_post_meta($post->ID,'vixan_tm_yt_link', true);
    $tm_inst_link = get_post_meta($post->ID,'vixan_tm_inst_link', true);
    $tm_git_link = get_post_meta($post->ID,'vixan_tm_git_link', true);
    $tm_pt_link = get_post_meta($post->ID,'vixan_tm_pt_link', true);
    $tm_skp_link = get_post_meta($post->ID,'vixan_tm_skp_link', true);
    $tm_tmb_link = get_post_meta($post->ID,'vixan_tm_tmb_link', true);
    $tm_vm_link = get_post_meta($post->ID,'vixan_tm_vm_link', true);
    $tm_be_link = get_post_meta($post->ID,'vixan_tm_be_link', true);
    $tm_flk_link = get_post_meta($post->ID,'vixan_tm_flk_link', true);
?>
        
	<?php if(!empty($tm_fb_link)) { ?>
        <a href="<?php echo esc_url( $tm_fb_link ); ?>"><i class="fab fa-facebook"></i></a>

    <?php } if(!empty($tm_tw_link)) { ?>    
        <a href="<?php echo esc_url( $tm_tw_link ); ?>"><i class="fab fa-twitter"></i></a>

    <?php } if(!empty($tm_drb_link)) { ?>
        <a href="<?php echo esc_url( $tm_drb_link ); ?>"><i class="fab fa-dribbble"></i></a>

    <?php } if(!empty($tm_inst_link)) { ?>
        <a href="<?php echo esc_url( $tm_inst_link ); ?>"><i class="fab fa-instagram"></i></a>

    <?php } if(!empty($tm_pt_link)) { ?>    
        <a href="<?php echo esc_url( $tm_pt_link ); ?>"><i class="fab fa-pinterest-p"></i></a>

    <?php } if(!empty($tm_ld_link)) { ?>
        <a href="<?php echo esc_url( $tm_ld_link ); ?>"><i class="fab fa-linkedin"></i></a>

    <?php } if(!empty($tm_be_link)) { ?>    
        <a href="<?php echo esc_url( $tm_be_link ); ?>"><i class="fab fa-behance"></i></a>

    <?php } if(!empty($tm_tmb_link)) { ?>
        <a href="<?php echo esc_url( $tm_tmb_link ); ?>"><i class="fab fa-tumblr"></i></a>

    <?php } if(!empty($tm_vm_link)) { ?>
        <a href="<?php echo esc_url( $tm_vm_link ); ?>"><i class="fab fa-vimeo"></i></a>
    
    <?php } if(!empty($tm_flk_link)) { ?>
        <a href="<?php echo esc_url( $tm_flk_link ); ?>"><i class="fab fa-flickr"></i></a>
    
    <?php } if(!empty($tm_yt_link)) { ?>
        <a href="<?php echo esc_url( $tm_yt_link ); ?>"><i class="fab fa-youtube"></i></a>
    
    <?php } if(!empty($tm_gp_link)) { ?>
        <a href="<?php echo esc_url( $tm_gp_link ); ?>"><i class="fab fa-google-plus"></i></a>

    <?php } if(!empty($tm_git_link)) { ?>    
        <a href="<?php echo esc_url( $tm_git_link ); ?>"><i class="fab fa-github"></i></a> 
        
    <?php } if(!empty($tm_skp_link)) { ?>    
        <a href="<?php echo esc_url( $tm_skp_link ); ?>"><i class="fab fa-skype"></i></a>     
        
    <?php } ?>

