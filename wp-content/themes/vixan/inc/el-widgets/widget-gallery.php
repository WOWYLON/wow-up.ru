<?php
namespace Elementor;

class vixan_widget_gallery extends Widget_Base {
	
	public function get_name() {
		return 'title-subtitle2';
	}
	
	public function get_title() {
		return 'Portfolio';
	}
	
	public function get_icon() {
		return 'eicon-gallery-grid';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Portfolio Content', 'vixan' ),
			]
		);

		$this->add_control(
			'gl_style',
			[
				'label' => esc_html__( 'Choose Portfolio Style', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'gl_stl_1',
				'options' => [
					'gl_stl'  => esc_html__( 'Select Portfolio Style', 'vixan' ),
					'gl_stl_1'  => esc_html__( 'Portfolio Style One', 'vixan' ),
					'gl_stl_2' => esc_html__( 'Portfolio Style Two', 'vixan' ),
					'gl_stl_3' => esc_html__( 'Portfolio Style Three', 'vixan' ),
					'gl_stl_4' => esc_html__( 'Portfolio Style Four', 'vixan' ),
					'gl_stl_5' => esc_html__( 'Portfolio Style Five', 'vixan' )
				],
				'default' => 'gl_stl_1',
			]
		);

		$this->add_control(
			'gl_tagline',
			[
				'label' => esc_html__( 'Section Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your required Tagline', 'vixan' ),
			]
		);

		$this->add_control(
			'gl_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your required Title', 'vixan' ),
			]
		);

		$this->add_control(
			'gl_btn_txt',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'View All Projects', 'vixan' ),
                'placeholder' => esc_html__( 'Enter your required Button Text', 'vixan' ),
			]
		);

		$this->add_control(
			'gl_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
                'placeholder' => esc_html__( 'Enter your required Button URL', 'vixan' ),
			]
		);

		$this->add_control(
			'gl_pocat',
			[
				'label' => esc_html__( 'Post Category Name', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your required post category', 'vixan' ),
			]
		);

		$this->add_control(
			'gl_pono',
			[
				'label' => esc_html__( 'Post Number', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your required post number', 'vixan' ),
			]
		);

		$this->add_control(
			'ex_class',
			[
				'label' => esc_html__( 'Extra Class', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your require class', 'vixan' ),
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();

    if($settings['gl_style'] == 'gl_stl_1') {	    
        echo '<section class="sec-hd"><h2 class="disp">Section Heading</h2>
				<div class="container">
				<div class="cs_section_heading cs_style_1 cs_type_1">
					<div class="cs_section_heading_text">
					<h2 class="cs_section_title anim_text_writting">
						'. $settings['gl_title'] .'
					</h2>
					</div>
				</div>
				</div>
			</section>

			<div class="cs_height_50 cs_height_lg_25"></div>

			<section class="cs_ui_design ' . $settings['ex_class'] . '">
				<div class="container">
				<div class="overflow-hidden">
					<div class="row">
					<div class="cs_isotop_item_menu col-md-12">
						<ul class="anim_div_ShowZoom">';

	if(!get_post_meta(get_the_ID(), 'gallery_category', true)):
		$gallery_category = get_terms('gallery_category');

	if($gallery_category):
		echo'				<li data-filter="*">'. esc_html__('All', 'vixan') .'</li>';
	foreach($gallery_category as $gallery_cat):
		echo'				<li class="rev '. $gallery_cat->slug .'" data-filter=".'. $gallery_cat->slug .'">'. $gallery_cat->name .'</li>';
	endforeach;
	endif;

	endif;
		echo'			</ul>
					</div>
					</div>
					<div class="cs_isotop_items_details row">';

		global $post;	
		$args=array('post_type' => 'gallery', 'gallery_category'=> $settings['gl_pocat'], 'showposts' => $settings['gl_pono']);
		$query=new \WP_Query($args);
		while($query->have_posts()) : $query->the_post();	        

        $gl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'port_thumb');
        $portfolio_category = wp_get_post_terms($post->ID,'gallery_category');      

        echo '<div class="col-md-4 cs_item ';
		foreach ($portfolio_category as $item)
		echo' '. $item->slug .' ';
		echo' cs_development">

				<div class="w-100">
					<a href="'. get_the_permalink() .'" class="cs_portfolio cs_style_1">
						<div class="cs_portfolio_img">';
	if( is_array($gl_image_port) ) {
		echo'				<img src="'. esc_url( $gl_image_port[0] ) .'" alt="'.get_bloginfo( 'name', 'display' ).'">';
	}	
		echo'			</div> 
						<div class="cs_portfolio_overlay"></div>
						<div class="cs_portfolio_info">
						<h2 class="cs_portfolio_title">
							'. get_the_title() .'
						</h2>
						<div class="cs_portfolio_subtitle">
							'. strip_tags( get_the_term_list($post->ID, 'gallery_category', '', ' / ', '') ) .'
						</div>
						</div>
					</a>
				</div>
			</div>';

		endwhile;
		wp_reset_postdata();		

		echo '		</div>
	    		</div>
				<div class="cs_height_70 cs_height_lg_30"></div>
	    		</div>
			</section>';

} elseif ($settings['gl_style'] == 'gl_stl_2') {

	echo '<h2 class="disp">Section Heading</h2><div class="cs_horizontal_scroll_wrap '. $settings['ex_class'] .'">
			<div class="cs_height_145 cs_height_lg_60"></div>
			<div class="container port">
				<div class="cs_section_heading cs_style_1 cs_type_2">
				<div class="cs_section_heading_text">
					<div class="cs_section_subtitle anim_div_ShowZoom">
					'. $settings['gl_tagline'] .'
					</div>
					<h2 class="cs_section_title anim_heading_title">
					'. $settings['gl_title'] .'
					</h2>
				</div>
				</div>
				<div class="cs_height_100 cs_height_lg_60"></div>
			</div>
			<div class="cs_horizontal_scrolls anim_div_ShowDowns">
				<div class="swiper-wrapper">';

	global $post;	
	$args=array('post_type' => 'gallery', 'gallery_category'=> $settings['gl_pocat'], 'showposts' => $settings['gl_pono']);
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();	        

	$gl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'port_thumb2');
	$portfolio_category = wp_get_post_terms($post->ID,'gallery_category');      

	echo '<div class="swiper-slide">
			<div class="cs_horizontal_scroll">
			<a
				href="'. get_the_permalink() .'"
				class="cs_portfolio cs_style_1"
			>
				<div class="cs_portfolio_img">
				<img src="'. esc_url( $gl_image_port[0] ) .'" alt="'.get_bloginfo( 'name', 'display' ).'">
				</div>
				<div class="cs_portfolio_overlay"></div>
				<div class="cs_portfolio_info">
				<h2 class="cs_portfolio_title">
					'. get_the_title() .'
				</h2>';
				
	echo'		<div class="cs_portfolio_subtitle">
					'. strip_tags( get_the_term_list($post->ID, 'gallery_category', '', ' / ', '') ) .'
				</div>';
						
	echo'			</div>
			</a>
			</div>
		</div>';

	endwhile;
	wp_reset_postdata();		

	echo '</div>
		</div>
	  </div>

	  <div class="cs_height_145 cs_height_lg_60"></div>';

}  elseif ($settings['gl_style'] == 'gl_stl_3') {

	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>
	
		<section class="cs_primary_bg '. $settings['ex_class'] .'">
			<div class="cs_height_100 cs_height_lg_60"></div>
			<div class="container">
			<div class="cs_section_heading cs_style_1 cs_color_1 cs_type_2">
				<div class="cs_section_heading_text">
				<div class="cs_section_subtitle anim_div_ShowZoom">
					'. $settings['gl_tagline'] .'
				</div>
				<h2 class="cs_section_title cs_white_color anim_heading_title">
					'. $settings['gl_title'] .'
				</h2>
				</div>
			</div>
			<div class="cs_height_100 cs_height_lg_60"></div>
			<div class="project_successfull" id="animated-thumbnails-gallery">';
	
	global $post;
	$gl = 0;	
	while($gl <= 4) {
	$args=array('post_type' => 'gallery', 'gallery_category'=> $settings['gl_pocat'], 'showposts' => $settings['gl_pono']);
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();	
	$gl++;        

	$gl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio');
	$portfolio_category = wp_get_post_terms($post->ID,'gallery_category');      

	echo '<a href="'. esc_url( $gl_image_port[0] ) .'" class="cs_portfolio project_successfull_'.$gl.' cs_style_1">
			<div class="cs_portfolio_img">
				<img src="'. esc_url( $gl_image_port[0] ) .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_portfolio_overlay"></div>
			<div class="cs_portfolio_info">
			<h2 class="cs_portfolio_title">'. get_the_title() .'</h2>';
 				
	echo'		<div class="cs_portfolio_subtitle cs_color_1">
					'. strip_tags( get_the_term_list($post->ID, 'gallery_category', '', ' / ', '') ) .'
				</div>';						

	echo'	</div>
		</a>';
	
	endwhile;

	wp_reset_postdata();		
}
	echo '</div>
		<div class="cs_height_70 cs_height_lg_60"></div>
		<div class="text-center cs_center">
		<a href="'. $settings['gl_btn_url'] .'" class="cs_btn cs_style_1 cs_color_1">
			<span>'. $settings['gl_btn_txt'] .'</span>

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
	</section>
	
	<div class="cs_height_150 cs_height_lg_60"></div>';

}  elseif ($settings['gl_style'] == 'gl_stl_4') {

	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>

		<section class="'. $settings['ex_class'] .'">
		<div class="container">
			<div class="cs_section_heading cs_style_1 cs_type_2">
			<div class="cs_section_heading_text">
				<div class="cs_section_subtitle anim_div_ShowZoom">
					'. $settings['gl_tagline'] .'
				</div>
				<h2 class="cs_section_title anim_heading_title">
					'. $settings['gl_title'] .'
				</h2>
			</div>
			</div>
			<div class="cs_height_100 cs_height_lg_60"></div>
		</div>
		<div class="cs_slider cs_slider_5 anim_div_ShowDowns">
			<div class="swiper-wrapper">';
	
	global $post;
	$args=array('post_type' => 'gallery', 'gallery_category'=> $settings['gl_pocat'], 'showposts' => $settings['gl_pono']);
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();	       

	$gl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'port_thumb3');
	$portfolio_category = wp_get_post_terms($post->ID,'gallery_category');      

	echo '<div class="swiper-slide">
			<a href="'. get_the_permalink() .'" class="cs_portfolio cs_style_2">
			<div class="cs_portfolio_img">
				<img src="'. esc_url( $gl_image_port[0] ) .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_portfolio_info">
				<div class="cs_text cs_style_1">
					<h6 class="cs_portfolio_title">
						'. get_the_title() .'
					</h6>
				<div class="cs_portfolio_subtitle">
					'. strip_tags( get_the_term_list($post->ID, 'gallery_category', '', ' / ', '') ) .'
				</div>
				</div>
			</div>
			</a>
		</div>';							
	
	endwhile;
	wp_reset_postdata();		

	echo '	</div>
		</div>
		<div class="cs_height_100 cs_height_lg_60"></div>
		<div class="cs_section_heading_right cs_btn_anim text-lg-center container">
		<a href="'. get_the_permalink() .'" class="cs_btn cs_style_1">
			<span>View All Case Study</span>
			<svg
			width="19"
			height="13"
			viewBox="0 0 19 13"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
			>
			<path
				d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104
			12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
				fill="currentColor"
			></path>
			</svg>
		</a>
		</div>
	</section>';	

} elseif($settings['gl_style'] == 'gl_stl_5') {	    
	echo '<div class="cs_height_145 cs_height_lg_60 ff"></div>
		<section class="' . $settings['ex_class'] . '"><h2 class="disp">Section Heading</h2>
			<div class="container">
				<div class="cs_section_heading cs_style_1">
					<div class="cs_section_heading_text">
						<h2 class="cs_section_title anim_heading_title">
							'. $settings['gl_title'] .'
						</h2>
					</div>
				</div>

		<div class="cs_height_50 cs_height_lg_30"></div>

		<div class="row overflow-hidden">
            <div class="col-md-12">
                <div class="cs_creative_protfolio_menu anim_div_ShowZoom">
					<ul>';

if(!get_post_meta(get_the_ID(), 'gallery_category', true)):
	$gallery_category = get_terms('gallery_category');

if($gallery_category):
	echo'				<li data-filter="*">'. esc_html__('All', 'vixan') .'</li>';
foreach($gallery_category as $gallery_cat):
	echo'				<li class="rev '. $gallery_cat->slug .'" data-filter=".'. $gallery_cat->slug .'">'. $gallery_cat->name .'</li>';
endforeach;
endif;

endif;
	echo'			</ul>
				</div>
			</div>
		<div>
			<div class="cs_creative_protfolio_details row">';

	$cp_counter = 1;		
	global $post;	
	$args=array('post_type' => 'gallery', 'gallery_category'=> $settings['gl_pocat'], 'showposts' => $settings['gl_pono']);
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();	        

	$gl_image_port = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'port_thumb');
	$portfolio_category = wp_get_post_terms($post->ID,'gallery_category');      

	echo '<div class="col-md-4 cs_project_card ';
	foreach ($portfolio_category as $item)
	echo' '. $item->slug .' ';
	echo' anim_div_ShowDowns">

				<a href="'. get_the_permalink() .'">
					<div class="cs_project_card_img">';
if( is_array($gl_image_port) ) {
	echo'				<img src="'. esc_url( $gl_image_port[0] ) .'" alt="'.get_bloginfo( 'name', 'display' ).'">';
}	
	echo'			</div> 

					<div class="cs_project_card_text">
						<h6 class="cs_title">'. get_the_title() .'</h6>
						<p class="cs_subtitle">'. strip_tags( get_the_term_list($post->ID, 'gallery_category', '', ' / ', '') ) .'</p>
					</div>
				</a>
			</div>';
if ($cp_counter % 3 == 0){
	echo '<div class="cs_height_60 cs_height_lg_30"></div>';
}

	$cp_counter++;		
	endwhile;
	wp_reset_postdata();		

	echo '		</div>
			</div>
			</div>
			</div>
		</section>';
	

} 
	
	}
	protected function _content_template() {

    }
	
	
}