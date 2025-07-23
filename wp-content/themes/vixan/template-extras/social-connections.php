<?php
/**
 * Displays Social Links
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php
    $vixan_fblink = ''; 
    $vixan_twlink = ''; 
    $vixan_drlink = ''; 
    $vixan_inslink = ''; 
    $vixan_pt = ''; 
    $vixan_ldlink = ''; 
    $vixan_gplink = ''; 
    $vixan_tumblink = ''; 
    $vixan_behlink = ''; 
    $vixan_youtube = ''; 
    $vixan_vmlink = ''; 
    $vixan_git = ''; 
    $vixan_flc = ''; 
    $vixan_skp = ''; 

    if(isset($vixan_options['vixan_fblink'])){  
        $vixan_fblink = $vixan_options['vixan_fblink'];
    }

    if(isset($vixan_options['vixan_twlink'])){  
        $vixan_twlink = $vixan_options['vixan_twlink'];
    }
    if(isset($vixan_options['vixan_drlink'])){  
        $vixan_drlink = $vixan_options['vixan_drlink'];
    }
    if(isset($vixan_options['vixan_inslink'])){  
        $vixan_inslink = $vixan_options['vixan_inslink'];
    }
    if(isset($vixan_options['vixan_pt'])){  
        $vixan_pt = $vixan_options['vixan_pt'];
    }
    if(isset($vixan_options['vixan_ldlink'])){  
        $vixan_ldlink = $vixan_options['vixan_ldlink'];
    }
    if(isset($vixan_options['vixan_gplink'])){  
        $vixan_gplink = $vixan_options['vixan_gplink'];
    }
    if(isset($vixan_options['vixan_tumblink'])){  
        $vixan_tumblink = $vixan_options['vixan_tumblink'];
    }
    if(isset($vixan_options['vixan_behlink'])){  
        $vixan_behlink = $vixan_options['vixan_behlink'];
    }
    if(isset($vixan_options['vixan_youtube'])){  
        $vixan_youtube = $vixan_options['vixan_youtube'];
    }
    if(isset($vixan_options['vixan_vmlink'])){  
        $vixan_vmlink = $vixan_options['vixan_vmlink'];
    }
    if(isset($vixan_options['vixan_git'])){  
        $vixan_git = $vixan_options['vixan_git'];
    }
    if(isset($vixan_options['vixan_flc'])){  
        $vixan_flc = $vixan_options['vixan_flc'];
    }
    if(isset($vixan_options['vixan_skp'])){  
        $vixan_skp = $vixan_options['vixan_skp'];
    }
?>
        
	<?php if(!empty($vixan_options['vixan_fblink'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_fblink'] ); ?>"><?php esc_html_e('Facebook', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_twlink'])) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_twlink'] ); ?>"><?php esc_html_e('Twitter', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_drlink'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_drlink'] ); ?>"><?php esc_html_e('Dribbble', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_inslink'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_inslink'] ); ?>"><?php esc_html_e('Instagram', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_pt'])) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_pt'] ); ?>"><?php esc_html_e('Pinterest', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_ldlink'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_ldlink'] ); ?>"><?php esc_html_e('Linkedin', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_behlink'])) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_behlink'] ); ?>"><?php esc_html_e('Behance', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_tumblink'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_tumblink'] ); ?>"><?php esc_html_e('Tumblr', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_vmlink'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_vmlink'] ); ?>"><?php esc_html_e('Vimeo', 'vixan');?></a>
    
    <?php } if(!empty($vixan_options['vixan_flc'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_flc'] ); ?>"><?php esc_html_e('Flickr', 'vixan');?></a>
    
    <?php } if(!empty($vixan_options['vixan_youtube'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_youtube'] ); ?>"><?php esc_html_e('Youtube', 'vixan');?></a>
    
    <?php } if(!empty($vixan_options['vixan_gplink'])) { ?>
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_gplink'] ); ?>"><?php esc_html_e('Google-Plus', 'vixan');?></a>

    <?php } if(!empty($vixan_options['vixan_git'])) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_git'] ); ?>"><?php esc_html_e('Github', 'vixan');?></a> 
        
    <?php } if(!empty($vixan_options['vixan_skp'])) { ?>    
        <a class="cs_center" href="<?php echo esc_url( $vixan_options['vixan_skp'] ); ?>"><?php esc_html_e('Skype', 'vixan');?></a>     
        
    <?php } ?>

