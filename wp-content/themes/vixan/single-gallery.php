<?php 
/**
 * The template for displaying all single gallery post
 *
 * Template Name: single-gallery 

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vixan
 */

get_header(); 
$vixan_options = get_option('vixan_options');
?>

<?php //get_template_part('template-extras/glsingle', 'breadcrumb'); ?>

<?php 
    if (have_posts()) :
    while (have_posts()) : the_post();
    global $post;
    $gl_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'port_single_img');
    $gallery_categorypst = strip_tags( get_the_term_list($post->ID, 'gallery_category', '', ' , ', '') );

    $gl_clt = get_post_meta($post->ID,'vixan_gl_clt', true);
    $gl_clt_country = get_post_meta($post->ID,'vixan_gl_clt_country', true);
    $gl_duration = get_post_meta($post->ID,'vixan_gl_duration', true);

    $gl_single_banner_bg = '';

    if(isset($vixan_options['vixan_gl_single_banner_bg'])){
        $gl_single_banner_bg = $vixan_options['vixan_gl_single_banner_bg'] ['url'];
    }    
?>


<div class="cs_height_219 cs_height_lg_120"></div>

    <section>
        <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_text">
            <h2 class="cs_section_title anim_text_writting">
                <?php the_title(); ?>
            </h2>
            </div>
            <div class="cs_section_heading_right cs_btn_anim">
            <div class="cs_btn cs_style_2 anim_div_ShowZoom">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="col cs_center"><?php esc_html_e('Facebook', 'vixan'); ?></a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(the_permalink()); ?>" class="col cs_center"><?php esc_html_e('Linkedin', 'vixan'); ?></a>
                <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(the_permalink()); ?>" class="col cs_center"><?php esc_html_e('Pinterest', 'vixan'); ?></a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <div class="cs_height_100 cs_height_lg_60"></div>

<!-- Start show service  client  date -->
    <section>
    <div class="container">
        <div class="anim_blog">
        <div class="cs_portfolio_details">
            <div class="row">
            <div class="col-md-4">
                <div class="cs_text_style_1 cs_text_pd">
                <p class="cs_headed_text"><?php esc_html_e('Client', 'vixan'); ?></p>
                <h6 class="cs_title_text">
                    <?php echo esc_html($gl_clt); ?> <br />
                    <?php echo esc_html($gl_clt_country); ?>
                </h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cs_text_style_1 cs_text_pd">
                <p class="cs_headed_text"><?php esc_html_e('Services', 'vixan'); ?></p>
                <h6 class="cs_title_text">
                    <?php echo esc_html($gallery_categorypst); ?>
                </h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cs_text_style_1 cs_text_pd">
                <p class="cs_headed_text"><?php esc_html_e('Duration', 'vixan'); ?></p>
                <h6 class="cs_title_text">
                    <?php echo esc_html($gl_duration); ?>
                </h6>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <div class="cs_height_75 cs_height_lg_45"></div>
    
    <section>
        <div class="container">
            <div class="cs_portfolio_details">
                <div>
                    <img src="<?php echo esc_url( $gl_img[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </div>
                <div class="cs_height_100 cs_height_lg_60"></div>

                <?php the_content(); ?>
                
            </div>
        </div>
    </section>

    <?php get_template_part('template-extras/post', 'nextprevious'); ?>
    
    <?php get_template_part('template-extras/page', 'contactpart'); ?>

<?php endwhile; ?>
<?php endif; ?>

 <?php get_footer(); ?>  