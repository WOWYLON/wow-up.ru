<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}

class vixan_widget_osrv extends Widget_Base {
	
	public function get_name() {
		return 'our-services';
	}
	
	public function get_title() {
		return 'Our Services';
	}
	
	public function get_icon() {
		return 'eicon-favorite';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Services Content', 'vixan' ),
			]
		);

		$this->add_control(
			'srv_style',
			[
				'label' => esc_html__( 'Service Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'srv_stl'  => esc_html__( 'Select Service Style', 'vixan' ),
					'srv_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'srv_stl_2' => esc_html__( 'Style Two', 'vixan' ),
					'srv_stl_3' => esc_html__( 'Style Three', 'vixan' ),
					'srv_stl_4' => esc_html__( 'Style Four', 'vixan' ),
					'srv_stl_5' => esc_html__( 'Style Five', 'vixan' ),
					'srv_stl_6' => esc_html__( 'Style Six', 'vixan' )
				],
				'default' => 'srv_stl_1',
			]
		);

		$this->add_control(
			'srv_tagline',
			[
				'label' => esc_html__( 'Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter the tagline', 'vixan' ),
			]
		);
		
		$this->add_control(
			'srv_title',
			[
				'label' => esc_html__( 'Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter the title', 'vixan' ),
			]
		);

		$this->add_control(
			'srv_fes_img',
			[
				'label' => esc_html__( 'Featured Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'srv_fes_icon',
			[
				'label' => esc_html__( 'Featured Icon', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'srv_fes_title',
			[
				'label' => esc_html__( 'Featured Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter the title', 'vixan' ),
			]
		);

		$this->add_control(
			'srv_fes_content',
			[
				'label' => esc_html__( 'Featured Content', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Enter the Content', 'vixan' ),
			]
		);

		$this->add_control(
			'srv_btn_txt',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter required Button Text', 'vixan' ),
			]
		);

		$this->add_control(
			'srv_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter required Button URL', 'vixan' ),
			]
		);

		$this->add_control(
			'srv_post_no',
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
	$srv_title = $settings['srv_title'];
	$srv_btn_txt = $settings['srv_btn_txt'];

if($settings['srv_style'] == 'srv_stl_1') {	
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>
		<section class="cs_primary_bg position-relative '. $settings['ex_class'] .'">
			<div class="cs_height_150 cs_height_lg_60"></div>
			<div class="container">
			<div class="cs_section_heading cs_style_1 cs_type_1 cs_color_1">';
if(!empty($srv_title)) {			
	echo'		<div class="cs_section_heading_text">
					<div class="cs_section_subtitle anim_div_ShowZoom">
					'. $settings['srv_tagline'] .'
					</div>
					<h2 class="cs_section_title anim_heading_title">
					'. $settings['srv_title'] .'
					</h2>
			</div>';
}	
	echo'	<div class="cs_section_heading_right cs_btn_anim">';
if(!empty($srv_btn_txt)) {
	echo'		<a href="'. $settings['srv_btn_url'] .'" class="cs_btn cs_style_1 cs_color_1">
					<span>'. $settings['srv_btn_txt'] .'</span>
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
					/>
					</svg>
				</a>';
}				
	echo'	</div>	
			</div>
			<div class="cs_height_50 cs_height_lg_10"></div>
			<div class="cs_card_1_list">';

	global $post;
	$srv_count = 1;
	$args=array('post_type' => 'services', 'showposts' => $settings['srv_post_no'] );
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();             

	$srvs_image_port = wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');
	$service_category = get_terms('services_category');
	$services_category = get_the_terms($post->ID ,'services_category');
	$services_categories = strip_tags( get_the_term_list($post->ID, 'services_category', '', ' , ', '') );

do {	
	echo '<div class="cs_card cs_style_1 cs_color_1 anim_div_ShowDowns">
		<div class="cs_card_left">';
//if( !empty($srvs_image_port) ) {
	
	echo'  <div class="cs_card_number cs_primary_font" data-src="'. wp_get_attachment_image_url(get_post_thumbnail_id(), 'full') .'" >
		0'. $srv_count .'
	  </div>';

	echo'</div>
	<div class="cs_card_right">
	  <div class="cs_card_right_in">
		<h2 class="cs_card_title">
		  <a href="'. get_the_permalink() .'">'. get_the_title() .'</a>
		</h2>
		<div class="cs_card_subtitle">
		'. get_the_excerpt() .'
		</div>
	  </div>
	</div>
	<div class="cs_card_link_wrap">
	  <a href="'. get_the_permalink() .'" class="cs_card_link">
		<span>
		  <svg
			width="30"
			height="30"
			viewBox="0 0 30 30"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		  >
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
			  fill="currentColor"
			/>
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
			  fill="currentColor"
			/>
		  </svg>
		</span>
		<span>
		  <svg
			width="30"
			height="30"
			viewBox="0 0 30 30"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		  >
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
			  fill="currentColor"
			/>
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
			  fill="currentColor"
			/>
		  </svg>
		</span>
	  </a>
	</div>
  </div>';
  $srv_count++;  
} while($srv_count <= 1);

	endwhile;	
	wp_reset_postdata();

	echo'	</div>
		</div>
		<div class="cs_height_100 cs_height_lg_30"></div>
	</section>';		

 } elseif ($settings['srv_style'] == 'srv_stl_2') {
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_110"></div>
		<section class="cs_primary_bg '. $settings['ex_class'] .'">
			<div class="cs_height_100 cs_height_lg_60"></div>
			<div class="container">';
if(!empty($srv_title)) {			
	echo'		<div class="cs_section_heading cs_style_1 cs_color_1 cs_type_1">
					<div class="cs_section_heading_text">
						<div class="cs_section_subtitle anim_div_ShowZoom">
							'. $settings['srv_tagline'] .'
						</div>
						<h2 class="cs_section_title anim_heading_title">
							'. $settings['srv_title'] .'
						</h2>
					</div>
				</div>';
}			
	echo'		<div class="cs_height_100 cs_height_lg_50"></div>
					<div class="row cs_cr_pr cs_row_gap_150">
						<div class="col-md-6">
						<div class="anim_div_ShowLeftSide">';

	global $post;	
	$args=array('post_type' => 'services', 'showposts' => $settings['srv_post_no'] );
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();             

	echo'<div class="cs_creative_protfolio cs_card_style_change">
			<div class="cs_card cs_style_1 cs_color_1">
			<div class="cs_card_right">
				<div class="cs_card_right_in">
				<h2 class="cs_card_title">
					<a
					href="'. get_the_permalink() .'"
					class="cs_white_color"
					>
					<span></span> '. get_the_title() .'</a
					>
				</h2>
				</div>
			</div>
			<div class="cs_card_link_wrap">
				<a
				href="'. get_the_permalink() .'"
				class="cs_card_link cs_white_color"
				>
				<span>
					<svg
					width="20"
					height="20"
					viewBox="0 0 30 30"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
						fill="currentColor"
					/>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
						fill="currentColor"
					/>
					</svg>
				</span>
				<span>
					<svg
					width="20"
					height="20"
					viewBox="0 0 30 30"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
						fill="currentColor"
					/>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
						fill="currentColor"
					/>
					</svg>
				</span>
				</a>
			</div>
			</div>
			<div class="cs_hr_design cs_color_1"></div>
		</div>';

	endwhile;
	wp_reset_postdata();

	echo'	</div>
		</div>
		<div class="col-md-6 mb-4">
		<div class="h-100">
			<img src="'. $settings['srv_fes_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).' class="w-100 h-100 anim_div_ShowRightSide">
		</div>
		</div>
	</div>
	</div>
	<div class="cs_height_100 cs_height_lg_60"></div>
	</section>';	

} elseif($settings['srv_style'] == 'srv_stl_3') {	
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>

	<section class="'. $settings['ex_class'] .'">
	  <div class="container">
		<div class="cs_service_exploring">
		  <div class="cs_service_exploring_1">
			<div class="cs_section_heading cs_style_1">
			  <div class="cs_section_heading_text">
				<div class="cs_section_subtitle anim_div_ShowZoom">
					'. $settings['srv_tagline'] .'
				</div>
				<h2 class="cs_section_title anim_heading_title">
					'. $settings['srv_title'] .'
				</h2>
			  </div>
			</div>
			<div class="cs_height_150 cs_height_lg_20"></div>

			<ul class="cs_list_style_none cs_color_1 anim_div_ShowLeftSide">';

	global $post;	
	$args=array('post_type' => 'services', 'showposts' => $settings['srv_post_no'] );
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();             

	echo '<li>
			<a href="'. get_the_permalink() .'">
			<h3>&nbsp; &bull; '. get_the_title() .'</h3>
			</a>
		</li>';

	endwhile;
	wp_reset_postdata();

	echo'	</ul>
		</div>

		<div class="cs_service_exploring_2">
		<div class="cs_service_exploring_img">
			<div class="anim_div_ShowRightSide">
			<img src="'. $settings['srv_fes_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="cs_img">
			</div>
			<div
			class="cs_service_exploring_img_text cs_style_1 cs_color_1 anim_div_ShowDowns"
			>
			<img src="'. $settings['srv_fes_icon']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			<h6 class="cs_white_color">
			'. $settings['srv_fes_title'] .'
			</h6>
			<p class="cs_font_16">
				'. $settings['srv_fes_content'] .'
			</p>
			</div>
		</div>
		</div>
	</div>
	</div>
	</section>';
} elseif($settings['srv_style'] == 'srv_stl_4') {	
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_219 cs_height_lg_120"></div>

		<section class="position-relative '. $settings['ex_class'] .'">
			<div class="container">
			<div class="cs_section_heading cs_style_1">';
if(!empty($srv_title)) {			
	echo'		<div class="cs_section_heading_text">
					<h2 class="cs_section_title anim_word_writting">
						'. $settings['srv_title'] .'
					</h2>
				</div>';
}	
	echo'	<div class="cs_height_100 cs_height_lg_60"></div>
		
			<div class="cs_card_1_list">';

	global $post;
	$srv_count = 0;
	while($srv_count <= 4) {
	$args=array('post_type' => 'services', 'showposts' => $settings['srv_post_no'] );
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();
	$srv_count++;             

	$srvs_image_port = wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');
	$service_category = get_terms('services_category');
	$services_category = get_the_terms($post->ID ,'services_category');
	$services_categories = strip_tags( get_the_term_list($post->ID, 'services_category', '', ' , ', '') );

do {	
	echo '<div class="cs_card cs_style_1 anim_div_ShowDowns">
		<div class="cs_card_left">';
//if( is_array($srvs_image_port) ) {
	echo'  <div class="cs_card_number cs_primary_font" data-src="'. wp_get_attachment_image_url(get_post_thumbnail_id(), 'full') .'" >
		0'. $srv_count .'
	  </div>';
//}
	echo'</div>
	<div class="cs_card_right">
	  <div class="cs_card_right_in">
		<h2 class="cs_card_title">
		  <a href="'. get_the_permalink() .'">'. get_the_title() .'</a>
		</h2>
		<div class="cs_card_subtitle">
		'. get_the_excerpt() .'
		</div>
	  </div>
	</div>
	<div class="cs_card_link_wrap">
	  <a href="'. get_the_permalink() .'" class="cs_card_link">
		<span>
		  <svg
			width="30"
			height="30"
			viewBox="0 0 30 30"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		  >
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
			  fill="currentColor"
			/>
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
			  fill="currentColor"
			/>
		  </svg>
		</span>
		<span>
		  <svg
			width="30"
			height="30"
			viewBox="0 0 30 30"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		  >
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
			  fill="currentColor"
			/>
			<path
			  fill-rule="evenodd"
			  clip-rule="evenodd"
			  d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
			  fill="currentColor"
			/>
		  </svg>
		</span>
	  </a>
	</div>
  </div>';
  $srv_count++;  
} while($srv_count <= 1);

	endwhile;
	wp_reset_postdata();
}
	echo'	</div>
		</div>
	</section>';		

} elseif($settings['srv_style'] == 'srv_stl_5') {
	echo'<h2 class="disp">Section Heading</h2><section class="'. $settings['ex_class'] .'">
		<div class="container">';

if(!empty($srv_title)) {		
	echo'	<div class="cs_section_heading cs_style_1 cs_type_1">
				<div class="cs_section_heading_text">
					<div class="cs_section_subtitle anim_div_ShowZoom">
						'. $settings['srv_tagline'] .'
					</div>
					<h2 class="cs_section_title anim_heading_title">
						'. $settings['srv_title'] .'
					</h2>
				</div>
			</div>';
}
	echo'	<div class="cs_height_100 cs_height_lg_60"></div>
			<div class="cs_slider cs_slider_3 cs_row_slider anim_blog">
			<div class="swiper-wrapper">';

	global $post;	
	$args=array('post_type' => 'services', 'showposts' => $settings['srv_post_no'] );
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();
	
	echo'<div class="swiper-slide">
			<div class="cs_post cs_style_2">
			<div class="cs_post_info">
				<h6 class="cs_post_title">
				<a href="'. get_the_permalink() .'">'. get_the_title() .'</a>
				</h6>
				<p class="cs_m0 cs_color_1">
					'. get_the_excerpt() .'
				</p>
				<div class="cs_section_heading_right">
				<a
					href="'. get_the_permalink() .'"
					class="cs_btn cs_style_1 cs_color_1"
				>
					<span>View More</span>
					<svg
					width="19"
					height="13"
					viewBox="0 0 19 13"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<path
						d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
													12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
						fill="currentColor"
					></path>
					</svg>
				</a>
				</div>
			</div>
			</div>
		</div>';
	
	endwhile;
	wp_reset_postdata();

	echo'		</div>
			</div>
		</div>
		</section>';
} elseif($settings['srv_style'] == 'srv_stl_6') {
	echo'<div class="cs_height_150 cs_height_lg_60"></div>
	<section class="'. $settings['ex_class'] .'"><h2 class="disp">Section Heading</h2>
		<div class="container">';

if(!empty($srv_title)) {		
	echo'	<div class="cs_section_heading cs_style_1">
				<div class="cs_section_heading_text">
					<div class="cs_section_subtitle anim_div_ShowZoom">
						'. $settings['srv_tagline'] .'
					</div>
					<h2 class="cs_section_title anim_heading_title">
						'. $settings['srv_title'] .'
					</h2>
				</div>
			</div>';
}
	echo'	<div class="cs_height_100 cs_height_lg_50"></div>
			<div class="row cs_cr_pr cs_row_gap_150">
			<div class="col-md-6 mb-4">
				<div class="h-100">
				<img src="'. $settings['srv_fes_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="w-100 h-100 anim_div_ShowLeftSide">
				</div>
			</div>
			<div class="col-md-6">
                <div class="anim_div_ShowRightSide">';

	global $post;	
	$args=array('post_type' => 'services', 'showposts' => $settings['srv_post_no'] );
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();
	
	echo'<div class="cs_creative_protfolio cs_card_style_change">
			<div class="cs_card cs_style_1 cs_color_1">
			<div class="cs_card_right">
				<div class="cs_card_right_in">
				<h2 class="cs_card_title">
					<a href="'. get_the_permalink() .'" class="srv_6post">
					<span></span> '. get_the_title() .'</a
					>
				</h2>
				</div>
			</div>
			<div class="cs_card_link_wrap">
				<a href="'. get_the_permalink() .'" class="cs_card_link">
				<span>
					<svg
					width="20"
					height="20"
					viewBox="0 0 30 30"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
						fill="currentColor"
					/>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
						fill="currentColor"
					/>
					</svg>
				</span>
				<span>
					<svg
					width="20"
					height="20"
					viewBox="0 0 30 30"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M0.340728 29.2063C0.722095 29.5875 1.34043 29.5875 1.72188 29.2063L29.0656 1.8625C29.4469 1.48106 29.4469 0.862698 29.0656 0.481253C28.6842 0.100002 28.0658 0.100002 27.6844 0.481253L0.340728 27.825C-0.0406592 28.2064 -0.0406592 28.8248 0.340728 29.2063Z"
						fill="currentColor"
					/>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M28.375 26.5625C28.9143 26.5625 29.3516 26.1252 29.3516 25.5859V1.17188C29.3516 0.632618 28.9143 0.195312 28.375 0.195312H3.96094C3.42168 0.195312 2.98438 0.632618 2.98438 1.17188C2.98438 1.71113 3.42168 2.14844 3.96094 2.14844H27.3984V25.5859C27.3984 26.1252 27.8357 26.5625 28.375 26.5625Z"
						fill="currentColor"
					/>
					</svg>
				</span>
				</a>
			</div>
			</div>
			<div class="cs_hr_design"></div>
		</div>';
	
	endwhile;
	wp_reset_postdata();

	echo'		</div>
			</div>
			</div>
			</div>
		</section>';
}		

}	

	protected function _content_template() {

    }
	
}