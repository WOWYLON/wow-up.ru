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
    $single_title = ''; 

    if(isset($vixan_options['vixan_single_bg'])){  
        $single_bg = $vixan_options['vixan_single_bg']['url'];
    }

    if(isset($vixan_options['vixan_single_title'])){  
        $single_title = do_shortcode($vixan_options['vixan_single_title']);
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
                    <?php if(!empty($single_title)) { ?>
                        <h2> <?php echo esc_attr($single_title); ?></h2>    
                    <?php } else { ?>    
                        <h2> <?php esc_html_e('Blog Single Posts', 'vixan'); ?></h2>
                    <?php } ?>
                        <div class="page-header__menu">
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home', 'vixan'); ?></a></li>
                                <li><?php the_title(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




