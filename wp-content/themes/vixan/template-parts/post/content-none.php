<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 * @version 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-blog-post' ); ?> >
	<div class="blog-standard__single">

		<div class="blog-details__content">
			<h2 class="search-title__title search"><?php esc_html_e( 'Nothing Found', 'vixan' ); ?></h2>
		

			<div class="search-content">

			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'vixan' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php else : ?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'vixan' ); ?></p>

				<div class="search-query">

			<?php
				get_search_form();
			endif; ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="thm-btn main-header__btn">
				<span><?php esc_html_e( 'Back to Home', 'vixan' ); ?></span>
				<div class="liquid"></div></a>

				</div>
			</div>
		</div><!-- .page-content -->
	</div><!-- .no-results -->
</article>
