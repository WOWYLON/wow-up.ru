<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class vixan_widget_team extends Widget_Base {
	
	public function get_name() {
		return 'team';
	}
	
	public function get_title() {
		return 'Team';
	}
	
	public function get_icon() {
		return 'eicon-integration';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Team Widget', 'vixan' ),
			]
		);

		$this->add_control(
			'team_style',
			[
				'label' => esc_html__( 'Team Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'tm_stl_1'  => esc_html__( 'Team Style One', 'vixan' ),
					'tm_stl_2' => esc_html__( 'Team Style Two', 'vixan' ),
					'tm_stl_3' => esc_html__( 'Team Style Three', 'vixan' ),
				],
				'default' => 'tm_stl_1',
			]
		);

		$this->add_control(
			'team_tagline',
			[
				'label' => esc_html__( 'Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Team', 'vixan' ),
                'placeholder' => esc_html__( 'Enter the tagline', 'vixan' ),
			]
		);
		
		$this->add_control(
			'team_title',
			[
				'label' => esc_html__( 'Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( ' Our Excellence Team That Can Digitalize Your Brand ', 'vixan' ),
				'placeholder' => esc_html__( 'Enter the title', 'vixan' ),
			]
		);

		$this->add_control(
			'team_btn',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'View All Members', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Button Text', 'vixan' ),
			]
		);

		$this->add_control(
			'team_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Button URL', 'vixan' ),
			]
		);

		$this->add_control(
			'team_order',
			[
				'label' => esc_html__( 'Select Team Order', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'DESC'  => esc_html__( 'DESC', 'vixan' ),
					'ASC' => esc_html__( 'ASC', 'vixan' ),
				],
				'default' => 'DESC',
			]
		);

		$this->add_control(
			'team_post_no',
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
	$team_tagline = $settings['team_tagline'];
	$team_title = $settings['team_title'];
	$team_btn = $settings['team_btn'];

	echo '<h2 class="disp">Section Heading</h2><section class="'. $settings['ex_class'] .'">
			<div class="container">
			<div class="cs_section_heading cs_style_1 cs_type_1">';
if(!empty($team_title)) {	
	echo'  <div class="cs_section_heading_text">';
if(!empty($team_tagline)) {		
	echo'			<div class="cs_section_subtitle anim_div_ShowZoom">
						'. $settings['team_tagline'] .'
					</div>';
}				
	echo'			<h2 class="cs_section_title anim_heading_title">
						'. $settings['team_title'] .'
					</h2>';					
	echo'		</div>';
}
if(!empty($team_btn)) {	
	echo'	<div class="cs_section_heading_right cs_btn_anim">';			
	echo'		<a
					href="'. $settings['team_btn_url'] .'"
					class="cs_btn cs_style_1 cs_color_1 text-black"
				>
					<span>'. $settings['team_btn'] .'</span>
					<svg
					width="19"
					height="13"
					viewBox="0 0 19 13"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<path
						d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038
											11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
						fill="currentColor"
					></path>
					</svg>
				</a>';				
	echo'		</div>';	
}	
	echo'		</div>
			<div class="cs_height_100 cs_height_lg_60"></div>
			
			<div class="cs_team_section anim_blog">';

	global $post;	
	$args=array('post_type' => 'team', 'order' => $settings['team_order'], 'showposts' => $settings['team_post_no'] );
	$query=new \WP_Query($args);
	while($query->have_posts()) : $query->the_post();             

	$team_image_port = wp_get_attachment_image_src(get_post_thumbnail_id(), 'team');

	echo '<div class="cs_team_img">
			<a href="'. get_the_permalink() .'">
			<img src="'. esc_url( $team_image_port[0] ) .'" alt="'. get_bloginfo('name', 'display') .'" />
			<div class="cs_portfolio_overlay"></div>
			</a>

			<div class="cs_team_text">
			<a href="'. get_the_permalink() .'">
				<h6 class="cs_team_text_title">'. get_the_title() .'</h6>
			</a>';

$team_category = get_the_terms( $post->ID , 'team_category' );

foreach($team_category as $team_cat):	
	echo '		<p class="cs_team_subtitle">'. $team_cat->name .'</p>';
endforeach;

	echo '		</div>
		</div>';

	endwhile;
	wp_reset_postdata();

	echo'		</div>
			</div>	
		</section>
		
		<div class="cs_height_150 cs_height_lg_60"></div>';		

	}
	
	protected function _content_template() {

    }
	
}