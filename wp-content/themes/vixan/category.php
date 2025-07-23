<?php
/**
 * The main template file
 *
 * The template for displaying tag pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 */

get_header(); 
$vixan_options = get_option('vixan_options'); ?>

<div class="cs_height_219 cs_height_lg_120"></div>

<section class="blog-content-area blog-standard">
    <div class="container">
        <div class="row">
                    
            <div class="col-xl-8 col-lg-7">
                <div class="all-blog-post blog-standard__left">
                    <?php
                        if (have_posts()) :

                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part('template-parts/post/content', get_post_format());

                            endwhile; 
                    ?>

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

            <?php get_template_part('template-extras/blog', 'sidebar'); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
