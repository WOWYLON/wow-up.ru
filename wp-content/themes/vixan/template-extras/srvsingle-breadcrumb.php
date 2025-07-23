<?php 
/**
 * The template for displaying the top 7
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php
    $srvsingle_bg = ''; 
    $srvsingle_title = ''; 
    $srvsingle_subtitle = ''; 

    if(isset($vixan_options['vixan_srvsingle_bg'])){  
        $srvsingle_bg = $vixan_options['vixan_srvsingle_bg']['url'];
    }

    if(isset($vixan_options['vixan_srvsingle_title'])){  
        $srvsingle_title = do_shortcode($vixan_options['vixan_srvsingle_title']);
    } 

    if(isset($vixan_options['vixan_srvsingle_subtitle'])){  
        $srvsingle_subtitle = do_shortcode($vixan_options['vixan_srvsingle_subtitle']);
    }    
?>

<div class="rt-breadcump rt-breadcump-height default-breadcump">
<?php if(!empty($srvsingle_bg)) { ?>    
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(<?php echo esc_url($srvsingle_bg); ?>);"></div>
<?php } else { ?>    
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-img/bredcump-1.png);"></div>
<?php } ?>    
    <!-- /.rt-page-bg -->
    <div class="rt-container">
        <div class="row rt-breadcump-height align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="inner-content">

                <?php if(!empty($srvsingle_title)) { ?>
                    <h3> <?php echo esc_attr($srvsingle_title); ?></h3>    
                <?php } else { ?>    
                    <h3> <?php esc_html_e('Service Single Post', 'vixan'); ?></h3>
                <?php } ?> 
                   
                    <div class="breadcrumbs">
                        <div class="breadcrumbs-content">
                        <?php if(!empty($srvsingle_subtitle)) { ?>
                            <p class="f-size-18">
                                <?php echo esc_attr($srvsingle_subtitle); ?>
                            </p>
                        <?php } else { ?>        
                            <p class="f-size-18">
                                <?php esc_html_e('Easy control panel drag drop and website bulde One clicksWith friendy account Shopping
                                carts sell aren your product 30 day money back gurantee', 'vixan'); ?>
                            </p>
                        <?php } ?>    
                        </div><!-- /.breadcrumbs-content -->
                    </div><!-- /.breadcrumbs -->

                </div><!-- /.inner-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>




