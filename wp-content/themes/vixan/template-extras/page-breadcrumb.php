<?php 
/**
 * The template for displaying the top breadcrumb
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php
    $single_bg = '';

    if(isset($vixan_options['vixan_single_bg'])){  
        $single_bg = $vixan_options['vixan_single_bg']['url'];
    }   
?>

<section class="page-header">

<?php if(!empty($single_bg)) { ?>    
    <div class="page-header__bg" style="background-image: url(<?php echo esc_url($single_bg); ?>);"></div>
<?php } else { ?>    
    <div class="page-header__bg" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/backgrounds/page-header-img1.jpg);"></div>
<?php } ?> 

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header__wrapper">
                    <div class="page-header__content">
                    <?php if ( is_singular() ) :
                        the_title( '<h2 class="page-title-main title">', '</h2>' );
                        else :
                        the_title( '<h2 class="page-title-main title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );    
                        endif; 
                    ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




