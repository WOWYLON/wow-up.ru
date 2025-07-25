<?php


	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( FALSE, '', TRUE );
	$next     = get_adjacent_post( FALSE, '', FALSE );

	if ( ! $next && ! $previous ) :
		return;
	endif;

	$author_meta = trim( get_the_author_meta( 'description' ) );

	$has_author_meta_class = ( empty( $author_meta ) ) ? 'no-author-meta' : 'has-author-meta';

?>
<div class="pagination-wrap clearfix">

		<?php if ( $previous ) : ?>
			<div class="previous-post">
				<?php previous_post_link( '<div class="previous">%link</div>', esc_html__( 'Previous Article', 'vixan' ) ); ?>
				<div class="entry-title">
					<h3>
						<a href="<?php echo esc_url( get_permalink( $previous->ID ) ); ?>"><?php echo wp_kses( get_the_title( $previous->ID ), array() ); ?></a>
					</h3>
				</div>
			</div> <!-- /.previous-post -->
		<?php endif; ?>

		<?php if ( $next ) : ?>
			<div class="next-post">
				<?php next_post_link( '<div class="next">%link</div>', esc_html__( 'Next Article', 'vixan' )); ?>
				<div class="entry-title">
					<h3>
						<a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>"><?php echo wp_kses( get_the_title( $next->ID ), array() ); ?></a>
					</h3>
				</div>
			</div> <!-- /.next-post -->
		<?php endif; ?>
	<!-- .next-previous-post -->
</div>