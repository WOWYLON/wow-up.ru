<?php
/**
 * Template part for displaying image posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-blog-post blog-standard__single'); ?> >

<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>	
	<div class="blog-standard__single-img">
		<a href="<?php esc_url( the_permalink() ); ?>" class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</a>
	</div>
<?php endif; ?>


	<div class="entry-content blog-standard__single-content">
		<header class="entry-header">

		<?php if(is_sticky(get_the_ID())): ?>
			<span class="sticky-tag"><?php esc_html_e( 'Featured', 'vixan' ) ?></span>
		<?php endif; ?>

		<?php if ( is_singular() ) :
			the_title( '<h6 class="entry-title cs_blog_title">', '</h6>' );
		else :
			the_title( '<h6 class="entry-title cs_blog_title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h6>' );
		endif; ?>
		
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

		<div class="btn-box">
    		<button class="cs_btn cs_style_1 cs_type_btn">
    			<a href="<?php esc_url( the_permalink() ); ?>"><?php esc_html_e('read more', 'vixan'); ?> <span class="icon-plus"></span></a>
    			<svg
    				width="19"
    				height="13"
    				viewBox="0 0 19 13"
    				fill="none"
    				xmlns="http://www.w3.org/2000/svg"
    			>
    				<path
    				d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
    				fill="currentColor"
    				></path>
    			</svg>
    		</button>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post -->
