<?php
/**
 * Template part for displaying image posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-blg-post'); ?> >

<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>	
	<div class="rt-post-thumbnail">
		<a href="<?php esc_url( the_permalink() ); ?>" class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</a>
	</div>
<?php endif; ?>


	<div class="entry-content">
		<header class="entry-header">

		<?php 
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<?php get_template_part('template-extras/post-entry-meta-grid'); ?>
		<?php endif; ?>

		</header>

		<?php
			the_excerpt( sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
						esc_html__( 'Read More <span class="screen-reader-text"> "%s"</span>', 'vixan' ),
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

        <div class="entry-footer d-flex justify-content-between align-items-center">
            <a href="<?php esc_url( the_permalink() ); ?>"><?php esc_html_e('read more', 'vixan'); ?><i class="fas fa-angle-double-right"></i></a>
            <a href="#"><i class="flaticon-chat-2"></i></a>
        </div>

	</div><!-- .entry-content -->

</article><!-- #post -->
