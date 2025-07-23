<?php 
/**
 * The template for displaying all single service post
 *
 * Template Name: single-service 

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vixan
 */

get_header(); 
$vixan_options = get_option('vixan_options');
?>

<?php 
    if (have_posts()) :
    while (have_posts()) : the_post();
    global $post;
    $srv_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');

    $srv_info = get_post_meta($post->ID,'vixan_srv_info', true);
    $srv_info_lst1 = get_post_meta($post->ID,'vixan_srv_info_lst1', true);
    $srv_info_lst2 = get_post_meta($post->ID,'vixan_srv_info_lst2', true);
    $srv_info_lst3 = get_post_meta($post->ID,'vixan_srv_info_lst3', true);
    $srv_info_lst4 = get_post_meta($post->ID,'vixan_srv_info_lst4', true);
    $srv_info_lst5 = get_post_meta($post->ID,'vixan_srv_info_lst5', true);

    $srv_single_banner_bg = '';

    if(isset($vixan_options['vixan_srv_single_banner_bg'])){
        $srv_single_banner_bg = $vixan_options['vixan_srv_single_banner_bg'] ['url'];
    }    
?>

<div class="cs_height_219 cs_height_lg_120"></div>

    <section class="service-details">
        <div class="container">
            
            <div class="cs_section_heading cs_style_1 cs_type_1">
              <div class="cs_section_heading_text">
                <h2 class="cs_section_title anim_text_writting">
                    <?php the_title(); ?>
                </h2>
              </div>
            </div>

            <div class="cs_height_100 cs_height_lg_60"></div>

            <div class="cs_service_details">
              <div class="cs_service_details_img">
                <div class="cs_style_img">
                  <img src="<?php echo esc_url( $srv_img[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </div>
              </div>
              <div class="cs_service_details_text">
                <div class="cs_service_details_p">
                    <p class="anim_text">
                        <?php echo esc_html($srv_info); ?>
                    </p>
                    <ul class="anim_div_ShowDowns">
                      <?php if(!empty($srv_info_lst1)){ ?>
                        <li><?php echo esc_html($srv_info_lst1); ?></li>
                        
                      <?php } if(!empty($srv_info_lst2)){ ?>  
                        <li><?php echo esc_html($srv_info_lst2); ?></li>

                      <?php } if(!empty($srv_info_lst3)){ ?> 
                        <li><?php echo esc_html($srv_info_lst3); ?></li>

                      <?php } if(!empty($srv_info_lst4)){ ?>   
                        <li><?php echo esc_html($srv_info_lst4); ?></li>

                      <?php } if(!empty($srv_info_lst5)){ ?> 
                        <li><?php echo esc_html($srv_info_lst5); ?></li>
                      <?php }  ?>  
                    </ul>
                </div>
              </div>
            </div>
        </div>
    </section>

    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('template-extras/page', 'contactpart'); ?>

    <?php get_footer(); ?>  