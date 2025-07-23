<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php 
     $vixan_social_share = '';
    
	 if(isset($vixan_options['vixan_social_share'])) {
		 $vixan_social_share = $vixan_options['vixan_social_share'];
	 }
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-blog-post' ); ?>>

	<div class="container">
		<div class="cs_section_heading cs_style_1">
			<div class="cs_section_heading_text">

				<header class="entry-header">
						<!-- .post-title -->
				<?php if ( is_singular() ) :
					the_title( '<h2 class="ecs_section_title anim_text_writting">', '</h2>' );
				else :
					the_title( '<h2 class="cs_section_title anim_text_writting"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
				</header><!-- .entry header -->

			</div>
		</div>
	</div>

	<div class="cs_height_65 cs_height_lg_60"></div>

	<!-- .post-meta -->
	<?php if ( 'post' === get_post_type() ) : ?>
		<?php get_template_part('template-extras/post-entry-meta-single'); ?>
	<?php endif; ?>

	<div class="cs_height_65 cs_height_lg_60"></div>

        <!-- .post-thumbnail -->
    <?php if ( '' !== get_the_post_thumbnail() &&  is_single() ) : ?>    
	    <div class="cs_portfolio_details blog-details__img">
			<?php the_post_thumbnail('post-thumbnail', ['class'=>'post-thumbnail']); ?>
	    </div>
	<div class="cs_height_100 cs_height_lg_60"></div>	    
	<?php endif; ?>



	<div class="entry-content cs_portfolio_details">
		<div class="blog-details__content">	

	    <!-- .post-content -->
		<?php
			the_content( sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'vixan' ),
							array(
									'span' => array(
											'class' => array(),
									),
							)
					),
					get_the_title()
			) );
			
			
			// Get the categories associated with the post
			$categories = get_the_category(); 

            if ($categories) {
                foreach ($categories as $category) {
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="category-tooltip" data-tooltip="' . esc_attr($category->name) . '">' . esc_html($category->name . ', ') . '</a>';
                }
            }
            
			
			// Get the tags associated with the post
			$tags = get_the_tags(); 

            if ($tags) {
                foreach ($tags as $tag) {
                    echo '<a href="' . esc_url(get_tag_link($tag)) . '" class="tag-tooltip" data-tooltip="' . esc_attr($tag->name) . '">' . esc_html($tag->name . ', ') . '</a>';
                }
            }
            
			
			//Link paginations
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'vixan' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>
		</div>	

        <!-- Start SHARE POST: -->
		<?php if( $vixan_social_share == 1 ) { ?>

			<div class="cs_height_100 cs_height_lg_50"></div>
			<?php vixan_social_share_buttons(); ?>
	
		 <?php } ?>

	</div><!-- .post-content -->

</article>
