<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-blog-detials blog-standard__single' ); ?>>

        <!-- .post-thumbnail -->
    <div class="wp_content single blog-standard__single-content">

        <?php if ( '' !== get_the_post_thumbnail() &&  is_single() ) : ?>
            <div class="blog-standard__single-img">
                <?php the_post_thumbnail('post-thumbnail', ['class'=>'img-responsive post-thumbnail']); ?>
            </div>  
        <?php endif; ?>

        <!-- .post-content -->
        <?php
            the_content( sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                            esc_html__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'vixan' ),
                            array(
                                    'span' => array(
                                            'class' => array(),
                                    ),
                            )
                    ),
                    get_the_title()
            ) );            
            
            wp_link_pages( array(
                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'vixan' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ) );
        ?>

    </div><!-- .post-content -->   

</article>
