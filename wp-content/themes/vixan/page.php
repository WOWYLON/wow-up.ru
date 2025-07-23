<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 * @version 1.0
 */
get_header();
$vixan_options = get_option('vixan_options'); ?>

<?php
    $layout_choice = '';
    $comments_switch = '';
    
    if(isset($vixan_options['vixan_page_layout'])){
        $layout_choice = $vixan_options['vixan_page_layout'];
    }   
    if(isset($vixan_options['vixan_page_comment'])){    
        $comments_switch = $vixan_options['vixan_page_comment'];
    }   
?>
<div class="cs_height_219 cs_height_lg_120"></div>
<?php //get_template_part('template-extras/page', 'breadcrumb'); ?>

<section class="blog-content-area blog-standard">
    <div class="container">
        <div class="row">
                    
            <div class="col-xl-8 col-lg-7">
                <div class="all-blog-post blog-standard__left">
                    
                    <div class="page-header__content">
                    <?php if ( is_singular() ) :
                        the_title( '<h2 class="page-title-main title">', '</h2>' );
                        else :
                        the_title( '<h2 class="page-title-main title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );    
                        endif; 
                    ?> 
                    </div>
                            
                    <?php
                        if (have_posts()) :

                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part('template-parts/page/content', 'page');

                            endwhile; 
                    ?>
                    
                    <div class="cs_height_40 cs_height_lg_30"></div>

                    <?php if (comments_open() || get_comments_number()) { ?>    

                        <?php comments_template(); ?>

                    <?php } ?>
                            <div class="posts-pagination">
                                <?php
                                     if ( function_exists("vixan_posts_pagination") ) {   
                                            vixan_posts_pagination();
                                    }        
                                ?>
                            </div>

                        <?php
                            else :

                                get_template_part('template-parts/post/content', 'none');

                            endif; 
                        ?>

                </div>
            </div>

            <?php  get_sidebar(); ?>

        </div>
    </div>
</section>

<div class="cs_height_100 cs_height_lg_60"></div>

<?php get_footer(); ?>