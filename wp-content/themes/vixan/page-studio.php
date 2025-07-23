<?php get_header(); 
/* Template Name: Design-Studio */
?>
	
<?php while ( have_posts() ) : the_post(); ?>	
	<div id="page-<?php the_ID(); ?>" class="<?php echo esc_attr( $post->post_name );?> page-content-area">

		<?php global $more; $more = 0; the_content('');?>
					
		<?php wp_link_pages( array(
				'before'      => '<div class="line-paginator"><span class="page-links-title">' . esc_html__( 'Pages:  ', 'vixan' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span class="current">',
				'link_after'  => '</span>',
			) );
		?>

	</div>
<?php endwhile; // end of the loop. ?>
	
<?php get_footer(); ?>