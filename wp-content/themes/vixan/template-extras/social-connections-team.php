<?php
/**
 * Displays Team Member Social Links
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php
    $tm_fblink = get_post_meta($post->ID,'vixan_fblink', true);
    $tm_twlink = get_post_meta($post->ID,'vixan_twlink', true);
    $tm_drlink = get_post_meta($post->ID,'vixan_drlink', true);
    $tm_inslink = get_post_meta($post->ID,'vixan_inslink', true);
    $tm_pt = get_post_meta($post->ID,'vixan_pt', true);
    $tm_ldlink = get_post_meta($post->ID,'vixan_ldlink', true);
    $tm_behlink = get_post_meta($post->ID,'vixan_belink', true);
    $tm_tumblink = get_post_meta($post->ID,'vixan_tumblink', true);
    $tm_flc = get_post_meta($post->ID,'vixan_flc', true);
    $tm_youtube = get_post_meta($post->ID,'vixan_youtube', true);
    $tm_gplink = get_post_meta($post->ID,'vixan_gplink', true);
    $tm_git = get_post_meta($post->ID,'vixan_git', true);
    $tm_skp = get_post_meta($post->ID,'vixan_skp', true);
?>
	<?php if(!empty($tm_fblink)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_fblink ); ?>"><?php esc_html_e('Facebook', 'vixan');?></a>

    <?php } if(!empty($tm_twlink)) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $tm_twlink ); ?>"><?php esc_html_e('Twitter', 'vixan');?></a>

    <?php } if(!empty($tm_drlink)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_drlink ); ?>"><?php esc_html_e('Dribbble', 'vixan');?></a>

    <?php } if(!empty($tm_inslink)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_inslink ); ?>"><?php esc_html_e('Instagram', 'vixan');?></a>

    <?php } if(!empty($tm_pt)) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $tm_pt ); ?>"><?php esc_html_e('Pinterest', 'vixan');?></a>

    <?php } if(!empty($tm_ldlink)) { ?>
        <a class="cs_center dd" href="<?php echo esc_url( $tm_ldlink ); ?>"><?php esc_html_e('Linkedin', 'vixan');?></a>        

    <?php } if(!empty($tm_behlink)) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $tm_behlink ); ?>"><?php esc_html_e('Behance', 'vixan');?></a>

    <?php } if(!empty($tm_tumblink)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_tumblink ); ?>"><?php esc_html_e('Tumblr', 'vixan');?></a>

    <?php } if(!empty($tm_vmlink)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_vmlink ); ?>"><?php esc_html_e('Vimeo', 'vixan');?></a>
    
    <?php } if(!empty($tm_flc)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_flc ); ?>"><?php esc_html_e('Flickr', 'vixan');?></a>
    
    <?php } if(!empty($tm_youtube)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_youtube ); ?>"><?php esc_html_e('Youtube', 'vixan');?></a>
    
    <?php } if(!empty($tm_gplink)) { ?>
        <a class="cs_center" href="<?php echo esc_url( $tm_gplink ); ?>"><?php esc_html_e('Google-Plus', 'vixan');?></a>

    <?php } if(!empty($tm_git)) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $tm_git ); ?>"><?php esc_html_e('Github', 'vixan');?></a> 
        
    <?php } if(!empty($tm_skp)) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $tm_skp ); ?>"><?php esc_html_e('Skype', 'vixan');?></a>     
        
    <?php } ?>

