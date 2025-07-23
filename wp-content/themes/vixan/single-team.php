a<?php 
/**
 * The template for displaying all single project post
 *
 * Template Name: single-team 

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vixan
 */

get_header(); 
$vixan_options = get_option('vixan_options');
?>

<?php //get_template_part('template-extras/page', 'breadcrumb'); ?>

<?php 
    if (have_posts()) :
    while (have_posts()) : the_post();
    global $post;
    $tm_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'team');
    $project_categorypst = strip_tags( get_the_term_list($post->ID, 'team_category', '', ' , ', '') );

    $srv_single_banner_bg = '';

    if(isset($vixan_options['vixan_srv_single_banner_bg'])){
        $srv_single_banner_bg = $vixan_options['vixan_srv_single_banner_bg'] ['url'];
    }
    
    $tm_addr = get_post_meta($post->ID,'vixan_tm_addr', true);
    $tm_mail = get_post_meta($post->ID,'vixan_tm_mail', true);
    $tm_phn = get_post_meta($post->ID,'vixan_tm_phn', true);
    $tm_web = get_post_meta($post->ID,'vixan_tm_web', true);
    $tm_about = get_post_meta($post->ID,'vixan_tm_about', true);
    $tm_wu = get_post_meta($post->ID,'vixan_tm_wu', true);
    $tm_rating = get_post_meta($post->ID,'vixan_tm_rating', true);
?>

    <div class="cs_height_219 cs_height_lg_120"></div>

    <section>
        <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_text anim_text_writting">
            <h2 class="cs_section_title">
                <?php the_title(); ?> . <?php echo esc_html($project_categorypst); ?>
            </h2>
            </div>
        </div>
        </div>
    </section>

    <div class="cs_height_100 cs_height_lg_60"></div>

    <!-- Start team About -->
    <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5">
                <img src="<?php echo esc_url( $tm_img[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
              <div class="cs_height_lg_30"></div>
            </div>
            <div class="col-md-7">
              <div class="cs_team_details">
                <div class="cs_team_details_text">
                <?php if(!empty($tm_about)) { ?>    
                  <p>
                    <?php echo esc_html($tm_about); ?>
                  </p>
                <?php } ?>  
                  <div class="cs_height_50 cs_height_lg_50"></div>
                <?php if(!empty($tm_addr)) { ?>   
                  <div class="d-flex">
                    <p class="col-md-2 col-4 cs_medium cs_primary_color">
                    <?php esc_html_e('Address: ', 'vixan'); ?>
                    </p>
                    <p class="col-md-4 col-10"><?php echo esc_html($tm_addr); ?></p>
                  </div>
                <?php } if(!empty($tm_mail)) { ?>   
                  <div class="d-flex">
                    <p class="col-md-2 col-4 cs_medium cs_primary_color">
                    <?php esc_html_e('Email: ', 'vixan'); ?>
                    </p>
                    <p class="col-md-4 col-10"><a href = "mailto: <?php echo esc_html($tm_mail); ?>"><?php echo esc_html($tm_mail); ?></a></p>
                  </div>
                <?php } if(!empty($tm_phn)) { ?>   
                  <div class="d-flex">
                    <p class="col-md-2 col-4 cs_medium cs_primary_color">
                    <?php esc_html_e('Phone: ', 'vixan'); ?>
                    </p>
                    <p class="col-md-4 col-10"><a href="tel: <?php echo esc_html($tm_phn); ?>"><?php echo esc_html($tm_phn); ?></a></p>
                  </div>
                <?php } if(!empty($tm_web)) { ?>   
                  <div class="d-flex">
                    <p class="col-md-2 col-4 cs_medium cs_primary_color">
                      <?php esc_html_e('website: ', 'vixan'); ?>
                    </p>
                    <p class="col-md-4 col-10"><a href="<?php echo esc_html($tm_web); ?>"><?php echo esc_html($tm_web); ?></a></p>
                  </div>
                <?php } ?>  
                </div>
                <div class="cs_height_50 cs_height_lg_50"></div>

                <div class="cs_btn cs_style_2">
                  <?php get_template_part('template-extras/social-connections', 'team'); ?>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="cs_height_150 cs_height_lg_60"></div>

        <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('template-extras/page', 'contactpart'); ?>

    <?php get_footer(); ?>  