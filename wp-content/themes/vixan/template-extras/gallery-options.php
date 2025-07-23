<?php 
/**
 * The template for displaying the gallery options
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php 
    $gallery_categorypst = strip_tags( get_the_term_list($post->ID, 'gallery_category', '', ' , ', '') );

    $gl_web_url = get_post_meta($post->ID,'vixan_gl_web_url', true);
    $gl_web_btn_txt = get_post_meta($post->ID,'vixan_gl_web_txt', true);
    $gl_proinf = get_post_meta($post->ID,'vixan_gl_proinf', true);

    $gl_clt = get_post_meta($post->ID,'vixan_gl_clt', true);
    $gl_work_url = get_post_meta($post->ID,'vixan_gl_work_url', true);
    $gl_produr = get_post_meta($post->ID, 'vixan_gl_produr', true);
    $gl_produrd = get_post_meta($post->ID, 'vixan_gl_produrd', true);
    $gl_proloct = get_post_meta($post->ID, 'vixan_gl_proloct', true);
    $gl_proloc = get_post_meta($post->ID, 'vixan_gl_proloc', true);
    $gl_proda = get_post_meta($post->ID, 'vixan_gl_proda', true);
    $gl_profile = get_post_meta($post->ID, 'vixan_gl_profile', true);
    $gl_profile2 = get_post_meta($post->ID, 'vixan_gl_profile2', true);
    $gl_prodt = get_post_meta($post->ID, 'vixan_gl_prodt', true);
    $gl_prodt2 = get_post_meta($post->ID, 'vixan_gl_prodt2', true);   
?>

        <div class="widget widget_contact_info">
        <?php if(!empty($gl_proinf)) { ?>    
             <h2 class="widget-title"> <span class="rt-mr-8"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-icon/info.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" draggable="false"></span><?php echo esc_html( $gl_proinf ) ; ?></h2>

        <?php } if(!empty($gl_clt)) { ?>     
             <div class="rt-single-icon-box   plain-list4  rt-mb-20 rt-align-center">
                 <div class="icon-thumb ">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-icon/p-1.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" draggable="false">
                 </div><!-- /.icon-thumb -->
                 <div class="iconbox-content">
                     <h5 class="f-size-16  rt-semiblod body-font-color"><?php echo esc_html( $gl_clt ) ; ?></h5>
                     <p class="f-size-16 rt-mb-10"><?php echo esc_html( $gl_work_url ) ; ?></p>
                 </div><!-- /.iconbox-content -->
             </div><!-- /.rt-single-icon-box   plain-list  wow fade-in-bottom -->

        <?php } if(!empty($gl_produrd)) { ?>     
             <div class="rt-single-icon-box   plain-list4  rt-mb-20 rt-align-center">
                 <div class="icon-thumb ">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-icon/p-2.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" draggable="false">
                 </div><!-- /.icon-thumb -->
                 <div class="iconbox-content">
                     <h5 class="f-size-16  rt-semiblod body-font-color"><?php echo esc_html( $gl_produr ) ; ?></h5>
                     <p class="f-size-16 rt-mb-10"><?php echo esc_html( $gl_produrd ) ; ?></p>
                 </div><!-- /.iconbox-content -->
             </div><!-- /.rt-single-icon-box   plain-list  wow fade-in-bottom -->

        <?php } if(!empty($gallery_categorypst)) { ?>     
             <div class="rt-single-icon-box   plain-list4  rt-mb-20 rt-align-center">
                 <div class="icon-thumb ">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-icon/p-3.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" draggable="false">
                 </div><!-- /.icon-thumb -->
                 <div class="iconbox-content">
                     <h5 class="f-size-16  rt-semiblod body-font-color"><?php esc_html_e('Category', 'vixan'); ?></h5>
                     <p class="f-size-16 rt-mb-10">
                        <?php 
                            echo esc_html($gallery_categorypst);
                        ?>
                     </p>
                 </div><!-- /.iconbox-content -->
             </div><!-- /.rt-single-icon-box   plain-list  wow fade-in-bottom -->

        <?php } if(!empty($gl_proloc)) { ?>     
             <div class="rt-single-icon-box   plain-list4   rt-align-center">
                 <div class="icon-thumb ">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-icon/p-4.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" draggable="false">
                 </div><!-- /.icon-thumb -->
                 <div class="iconbox-content">
                     <h5 class="f-size-16  rt-semiblod body-font-color"><?php echo esc_html( $gl_proloct ) ; ?></h5>
                     <p class="f-size-16 rt-mb-0"><?php echo esc_html( $gl_proloc ) ; ?></p>  
                 </div><!-- /.iconbox-content -->
             </div><!-- /.rt-single-icon-box   plain-list  wow fade-in-bottom -->
        <?php } ?>     

         </div><!-- ./  single widget -->
        <div class="widget widget_text">

        <?php if(!empty($gl_proda)) { ?>
            <h2 class="widget-title"> <span class="rt-mr-15"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/all-icon/info-2.jpg"
                        alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" draggable="false"></span><?php echo esc_html( $gl_proda ) ; ?></h2>

        <?php } if(!empty($gl_profile)) { ?>
            <p>
                <a href="<?php echo esc_url( $gl_profile ) ; ?>" target="_blank" class="rt-btn rt-light3-1 text-uppercase pill rt-Bshadow-6 d-block clearfix">
                    <span class="front-icon rt-mr-7 rt-mr-xs-3"><i class="far fa-file-pdf"></i></span>
                    <?php echo esc_html( $gl_prodt ) ; ?>
                    <span class="back-icon float-right"><i class="fas fa-download"></i></span>
                </a>
            </p>

        <?php } if(!empty($gl_profile2)) { ?>
            <p>
                <a href="<?php echo esc_url( $gl_profile2 ) ; ?>" target="_blank" class="rt-btn rt-light3-1 text-uppercase pill rt-Bshadow-6 d-block clearfix">
                    <span class="front-icon rt-mr-7 rt-mr-xs-3"><i class="far fa-file-archive"></i></span>
                    <?php echo esc_html( $gl_prodt2 ) ; ?>
                    <span class="back-icon float-right"><i class="fas fa-download"></i></span>
                </a>
            </p>
        <?php } ?>    
            
        </div><!-- ./  single widget -->




