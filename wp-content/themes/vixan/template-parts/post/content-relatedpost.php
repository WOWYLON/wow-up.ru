<?php
/**
 * Template part for displaying related posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php
    $relp_title = '';
    $relp_title2 = '';
    $relp_no = '';

    if(isset($vixan_options['vixan_relp_title'])){  
        $relp_title = $vixan_options['vixan_relp_title'];
    } 
    if(isset($vixan_options['vixan_relp_title2'])){  
        $relp_title2 = $vixan_options['vixan_relp_title2'];
    }
	if(isset($vixan_options['vixan_relp_no'])){  
        $relp_no = $vixan_options['vixan_relp_no'];
    }   
?>

<section>
	<div class="container">
		<div class="cs_section_heading cs_style_1 cs_type_1">
			<div class="cs_section_heading_text">
			<h2 class="cs_section_title anim_heading_title">
				<?php echo esc_html($relp_title); ?> <br />
				<?php echo esc_html($relp_title2); ?>
			</h2>
			</div>
		</div>
		<div class="cs_height_100 cs_height_lg_60"></div>
		<div class="cs_slider cs_slider_3 anim_blog">
              <div class="swiper-wrapper">
			<?php
				$post_id = get_the_ID();
				$categories = get_the_category( $post_id );
				$category_ids = array();
				
				foreach ( $categories as $category ) {
					$category_ids[] = $category->term_id;
				}
				if ( ! empty( $category_ids ) ) {
					$related_args = array(
						'post_type' => 'post', // Change this to your custom post type if needed
						'posts_per_page' => $relp_no , // Adjust the number of related posts to show
						'post__not_in' => array( $post_id ), // Exclude the current post
						'category__in' => $category_ids, // Retrieve posts within the same categories
						'orderby' => 'rand', // Display related posts in random order
					);
				
					$related_query = new WP_Query( $related_args );
				
					if ( $related_query->have_posts() ) {
						while ( $related_query->have_posts() ) {
							$related_query->the_post();

				$bl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'blog_thumb');
			?>
				

					<div class="swiper-slide">
					<div class="cs_post cs_style_1">
						<a href="<?php the_permalink(); ?>" class="cs_post_thumb">
							<img src="<?php echo esc_url( $bl_image_port[0] ); ?>" alt="<?php echo get_bloginfo( 'name', 'display' ); ?>" />
						</a>
						<div class="cs_post_info">
						<h2 class="cs_post_title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="cs_m0">
							<?php the_excerpt(); ?>
						</p>
						</div>
					</div>
					</div>
			<?php   
				}
					wp_reset_postdata(); // Reset the query
				} else {
					// If no related posts are found
					echo 'No related posts found.';
				}
			}
			?>	

			</div>
		</div>
	</div>
</section>	

<div class="cs_height_150 cs_height_lg_60"></div>
