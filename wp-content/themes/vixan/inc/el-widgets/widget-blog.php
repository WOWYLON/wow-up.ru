<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}

class vixan_widget_blog extends Widget_Base {
	
	public function get_name() {
		return 'blog-post';
	}
	
	public function get_title() {
		return 'Blog Post';
	}
	
	public function get_icon() {
		return 'eicon-post';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Post Content', 'vixan' ),
			]
		);
		
		$this->add_control(
			'bl_style',
			[
				'label' => esc_html__( 'Blog Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'bl_stl_1'  => esc_html__( 'Blog Style One', 'vixan' ),
					'bl_stl_2' => esc_html__( 'Blog Style Two', 'vixan' ),
					'bl_stl_3' => esc_html__( 'Blog Style Three', 'vixan' ),
					'bl_stl_4' => esc_html__( 'Blog Grid-2', 'vixan' ),
				],
				'default' => 'bl_stl_1',
			]
		);
		
		$this->add_control(
			'bl_tagline',
			[
				'label' => esc_html__( 'Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Blog', 'vixan' ),
				'placeholder' => esc_html__( 'Enter Section Tagline', 'vixan' ),
			]
		);

		$this->add_control(
			'bl_title',
			[
				'label' => esc_html__( 'Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'New Day New Inspiration', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Section Title', 'vixan' ),
			]
		);

		$this->add_control(
			'bl_btn_txt',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'View All Blogs', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Section Button Text', 'vixan' ),
			]
		);

		$this->add_control(
			'bl_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Section Button URL', 'vixan' ),
			]
		);

		$this->add_control(
			'bl_pocat',
			[
				'label' => esc_html__( 'Post Category Name', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your required post category', 'vixan' ),
			]
		);

		$this->add_control(
			'bl_pono',
			[
				'label' => esc_html__( 'Post Number', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::NUMBER,
                'placeholder' => esc_html__( 'Enter your required post number', 'vixan' ),
			]
		);

		$this->add_control(
			'ex_class',
			[
				'label' => esc_html__( 'Extra Class', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter required Extra Class', 'vixan' ),
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {

	$settings = $this->get_settings_for_display();
	$bl_title = $settings['bl_title'];

if($settings['bl_style'] == 'bl_stl_1') {    
	echo'<h2 class="disp">Section Heading</h2><section class="' . $settings['ex_class'] . '">
			<div class="container">
			<div class="cs_section_heading cs_style_1 cs_type_1">';
if(!empty($bl_title)) {				
	echo'		<div class="cs_section_heading_text">
					<div class="cs_section_subtitle anim_div_ShowZoom">
					'. $settings['bl_tagline'] .'
					</div>
					<h2 class="cs_section_title anim_heading_title">
					'. $settings['bl_title'] .'
					</h2>
				</div>';
}				
	echo'		<div class="cs_section_heading_right cs_btn_anim">
					<a href="'. $settings['bl_btn_url'] .'" class="cs_btn cs_style_1">
						<span>'. $settings['bl_btn_txt'] .'</span>
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
					</a>
				</div>
			</div>
			<div class="cs_height_100 cs_height_lg_60"></div>
			<div class="cs_slider cs_slider_3 anim_blog">
				<div class="swiper-wrapper">';

	global $post;	
	$args=array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'DESC', 'category_name'=> $settings['bl_pocat'], 'showposts' => $settings['bl_pono']);
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post(); 	        

	$bl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'blog_thumb');
	$comment = '';
	$year  = get_the_time( 'Y' ); 
	$month = get_the_time( 'm' ); 
	$day   = get_the_time( 'd' );

	echo '<div class="swiper-slide">
			<div class="cs_post cs_style_1">';
if(!empty($bl_image_port)) {			
	echo'		<a href="'. get_the_permalink() .'" class="cs_post_thumb">
					<img src="'. esc_url( $bl_image_port[0] ) .'" alt="'. get_bloginfo( 'name', 'display' ) .'" />
				</a>';
}				
	echo'		<div class="cs_post_info">
				<h2 class="cs_post_title">
				<a href="'. get_the_permalink() .'">'. get_the_title() .'</a>
				</h2>
				<p class="cs_m0">
				'. get_the_excerpt() .'
				</p>
			</div>
			</div>
		</div>';

	endwhile;
	wp_reset_postdata();		

	echo ' </div>
		</div>
		</div>
		</section>
		
		<div class="cs_height_150 cs_height_lg_60"></div>';		

} elseif($settings['bl_style'] == 'bl_stl_2') {    
	echo'<h2 class="disp">Section Heading</h2><section ' . $settings['ex_class'] . '>
	<div class="container">
	<div class="cs_section_heading cs_style_1 cs_type_1">';
if(!empty($bl_title)) {				
echo'		<div class="cs_section_heading_text">
			<div class="cs_section_subtitle anim_div_ShowZoom">
			'. $settings['bl_tagline'] .'
			</div>
			<h2 class="cs_section_title anim_heading_title">
			'. $settings['bl_title'] .'
			</h2>
		</div>';
}				
echo'		<div class="cs_section_heading_right cs_btn_anim">
			<a href="'. $settings['bl_btn_url'] .'" class="cs_btn cs_style_1">
				<span>'. $settings['bl_btn_txt'] .'</span>
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
			</a>
		</div>
	</div>
	<div class="cs_height_100 cs_height_lg_60"></div>
	<div class="cs_slider cs_slider_3 cs_row_slider cs_vw_none anim_blog">
		<div class="swiper-wrapper">';

global $post;	
$args=array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'DESC', 'category_name'=> $settings['bl_pocat'], 'showposts' => $settings['bl_pono']);
$query=new \WP_Query($args);
while($query->have_posts()) : $query->the_post(); 	        

$bl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'blog_thumb');
$comment = '';
$year  = get_the_time( 'Y' ); 
$month = get_the_time( 'm' ); 
$day   = get_the_time( 'd' );

echo '<div class="swiper-slide">
	<div class="cs_post cs_style_1">';
if(!empty($bl_image_port)) {			
echo'		<a href="'. get_the_permalink() .'" class="cs_post_thumb">
			<img src="'. esc_url( $bl_image_port[0] ) .'" alt="'. get_bloginfo( 'name', 'display' ) .'" />
		</a>';
}				
echo'		<div class="cs_post_info">
		<h2 class="cs_post_title">
		<a href="'. get_the_permalink() .'">'. get_the_title() .'</a>
		</h2>
		<p class="cs_m0">
		'. get_the_excerpt() .'
		</p>
	</div>
	</div>
</div>';

endwhile;
wp_reset_postdata();		

echo ' </div>
</div>
</div>
</section>

<div class="cs_height_150 cs_height_lg_60"></div>';	

} elseif($settings['bl_style'] == 'bl_stl_3') {    
	echo'<h2 class="disp">Section Heading</h2><div class="cs_height_219 cs_height_lg_120"></div>

		<section>
		<div>
			<div class="container">
			<div class="cs_section_heading cs_style_1 cs_type_1">
				<div class="cs_section_heading_text">
				<h2 class="cs_section_title anim_heading_title">
					'. $settings['bl_title'] .'
				</h2>
				</div>
			</div>
			</div>
		</div>
		</section>

		<div class="cs_height_100 cs_height_lg_60"></div>

		<section class="blog-main">
		<div class="container">
			<div class="row">';

	global $post;
	$bl_mn = 0;	
	while ($bl_mn <= 9){
	$args=array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'DESC', 'category_name'=> $settings['bl_pocat'], 'showposts' => $settings['bl_pono']);
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();
	$bl_mn++;
	        
	$bl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'blog_thumb');

	echo '<div class="col-md-4 bmt-';

	echo''. $bl_mn .'';
	
	echo' ">';
	echo'		<div class="anim_div_ShowDowns cs_cntmarg50">
			<a href="'. get_the_permalink() .'" class="cs_blog cs_style_1">';
if(!empty($bl_image_port)) {			
	echo '		<div>
					<img src="'. esc_url( $bl_image_port[0] ) .'" alt="'.get_bloginfo( 'name', 'display' ).'" />
				</div>';
}				
	echo '		<div class="cs_blog_info">
					<h6 class="cs_blog_title">
						'. get_the_title() .'
					</h6>
					<p class="cs_blog_subtitle">
						'. get_the_excerpt() .'
					</p>
					</div>
				</a>
				</div>
			</div>';
	
	endwhile;
	wp_reset_postdata();
	}
	echo ' </div>
		</section>';
		
} elseif($settings['bl_style'] == 'bl_stl_4') {    
	echo'<h2 class="disp">Section Heading</h2><section class="blog-one blog-one--two pd-120-0-120">
	<div class="container">';

if(!empty($bl_title)) {	
	echo '<div class="section-title__style2">
			<div class="section-title">
				<span class="section-title__tagline">' . $settings['bl_tagline'] . '</span>
				<h2 class="section-title__title">' . $settings['bl_title'] . '</h2>
			</div>
			<div class="text-box">
				<p>' . $settings['bl_wlc_text'] . '</p>
			</div>
		</div>';
}				
	echo '	<div class="row">';

	global $post;	
	$args=array('post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'DESC', 'category_name'=> $settings['bl_pocat'], 'showposts' => $settings['bl_pono']);
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post(); 	        

	$bl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post_ID), 'blog_thumb');
	$comment = '';
	$year  = get_the_time( 'Y' ); 
	$month = get_the_time( 'm' ); 
	$day   = get_the_time( 'd' );

	echo '<div class="col-xl-4 col-lg-4 wow fadeInUp">
	<div class="blog-one__single">';

if(!empty($bl_image_port)) {
	echo '<div class="blog-one__single-img">
			<img src="'. esc_url( $bl_image_port[0] ) .'" alt="'.get_bloginfo( 'name', 'display' ).'" />
			<div class="overlay-icon">
				<a href="'. get_the_permalink() .'"><span class="icon-plus"></span></a>
			</div>
		</div>';
}	
	echo '<div class="blog-one__content">
			<ul class="meta-info">
				<li><span class="icon-user"></span><a href="'. get_the_permalink() .'">'. get_the_author().'</a></li>
				<li><span class="icon-wall-clock"></span><a href="#">'. get_comments_number() .'</a></li>
			</ul>
			<h2><a href="'. get_the_permalink() .'">'. get_the_title() .'</a>
			</h2>
			<p>'. get_the_excerpt() .'</p>
			<div class="btn-box">
				<a href="'. get_the_permalink() .'">Read More <span class="icon-plus"></span></a>
			</div>
		</div>
	</div>
</div>';

endwhile;
wp_reset_postdata();		

echo ' </div>
	</div>
	</section>';		
}		 

}
	
	protected function _content_template() {

    }
	
	
}