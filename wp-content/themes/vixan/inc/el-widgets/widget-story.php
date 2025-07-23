<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Custom_Story_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-story';
	}
	
	public function get_title() {
		return 'Our Story';
	}
	
	public function get_icon() {
		return 'eicon-pojome';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'story_section',
            [
                'label' => esc_html__( 'Our Story', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'story_style',
			[
				'label' => esc_html__( 'Choose Story Style', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'story_stl'  => esc_html__( 'Select Story Style', 'vixan' ),
					'story_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'story_stl_2' => esc_html__( 'Style Two', 'vixan' )
				],
				'default' => 'story_stl_1',
			]
		);

		$this->add_control(
			'story_tagline',
			[
				'label' => esc_html__( 'Section Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Journey Story', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Tagline', 'vixan' ),
			]
		);

		$this->add_control(
			'story_primary_title',
			[
				'label' => esc_html__( 'Primary Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Welcome to', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Title', 'vixan' ),
			]
		);

		$this->add_control(
			'story_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'How Our Agency is Pushing the Boundaries of Online Marketing and Design', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Sub Title', 'vixan' ),
			]
		);

		$this->add_control(
			'story_content1',
			[
				'label' => esc_html__( 'Content One', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Digital agency! We specialize in helping businesses like yours succeed online. From website design and development to digital marketing and advertising, we have the tools and expertise to elevate your online presence. Let us help you lione evolving world of digital to drive growth and reach your goals.', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Content', 'vixan' ),
			]
		);

		$this->add_control(
			'story_content2',
			[
				'label' => esc_html__( 'Content Two', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Digital agency! We specialize in helping businesses like yours succeed online. From website design and development to digital marketing and advertising, we have the tools and expertise to elevate your online presence. Let us help you lione evolving world of digital to drive growth and reach your goals.', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Content', 'vixan' ),
			]
		);

		$this->add_control(
			'story_fes_img1',
			[
				'label' => esc_html__( 'Featured Image One', 'vixan' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'story_fes_img2',
			[
				'label' => esc_html__( 'Featured Image Two', 'vixan' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'story_fes_img3',
			[
				'label' => esc_html__( 'Featured Image Three', 'vixan' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'story_fes_img4',
			[
				'label' => esc_html__( 'Featured Image Four', 'vixan' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'ex_class',
			[
				'label' => esc_html__( 'Extra Class', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter Required Extra Class', 'vixan' ),
			]
		);

        $this->add_control(
            'story_rptr',
            [
                'label' => esc_html__( 'Story Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
						'name' => 'story_img',
						'label' => esc_html__( 'Story Image', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
                    [
                        'name' => 'story_title',
                        'label' => esc_html__( 'Story Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'our design studio! We create visually stunning designs', 'vixan' ),
                        'label_block' => true,
                    ]
                ],
                'title_field' => '{{{ story_title }}}',
            ],
			
        );

        $this->end_controls_section();
    }

	protected function render() {

    $settings = $this->get_settings_for_display();

if($settings['story_style'] == 'story_stl_1') {	
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_0"></div> 
		<section class="'. $settings['ex_class'] .'">
			<div class="container">
				<div class="cs_journey_stary">
					<div class="anim_div_ShowZoom">
					<h6>'. $settings['story_tagline'] .'</h6>
					</div>

					<div class="cs_height_50"></div>
					<div class="anim_text">
						<h2 class="cs_line_height_85">
						'. $settings['story_primary_title'] .'';

foreach ( $settings['story_rptr'] as $story_details ) :
	echo '
		<span>
			<img src="'. $story_details['story_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
		</span>
		'. $story_details['story_title'] .'';
endforeach;					
			
	echo'				</h2>
					</div>
				</div>
			</div>
		</section>';

} elseif($settings['story_style'] == 'story_stl_2') {
	echo'<h2 class="disp">Section Heading</h2><section>
	  <div class="cs_primary_bg">
		<div class="container">
		  <div class="cs_height_100 cs_height_lg_60"></div>
		  <div class="cs_section_heading_hr cs_style_1">
			<div class="cs_hr_design"></div>
			<div class="cs_section_heading cs_style_1 cs_color_1">
			  <div class="cs_section_heading_text">
				<h2 class="cs_section_title anim_heading_title">
				  '. $settings['story_primary_title'] .'
				</h2>
			  </div>
			</div>
			<div class="cs_hr_design"></div>
		  </div>
		  <div class="cs_height_100 cs_height_lg_60"></div>
		  <div>
			<div class="row">
			  <div class="col-md-6 col-sm-12">
				<div class="cs_section_heading cs_style_1 cs_color_1">
				  <div class="cs_section_heading_text">
					<h3 class="cs_section_title_3 anim_div_ShowLeftSide">
					   '. $settings['story_sub_title'] .'
					</h3>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-sm-12">
				<div class="anim_div_ShowRightSide">
				  <p class="cs_ternary_color">
				  		'. $settings['story_content1'] .'
				  </p>
				  <p class="cs_ternary_color">
						'. $settings['story_content2'] .'
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="cs_height_385 cs_height_lg_120"></div>
		</div>
	  </div>

	  <div class="container">
		<div class="cs_agency agency_about_images_posation">
		  <div class="cs_img_section_1">
			<img src="'. $settings['story_fes_img1'] ['url'] .'" alt="'. get_bloginfo('name', 'display') .'" class="w-100">
		  </div>
		  <div class="cs_img_section_2">
			<img src="'. $settings['story_fes_img2'] ['url'] .'" alt="'. get_bloginfo('name', 'display') .'" class="w-100">
		  </div>
		  <div class="cs_img_section_3">
			<div class="text-end">
			  <img src="'. $settings['story_fes_img3'] ['url'] .'" alt="'. get_bloginfo('name', 'display') .'" alt="">
			  <img src="'. $settings['story_fes_img4'] ['url'] .'" alt="'. get_bloginfo('name', 'display') .'" class="w-100">
			</div>
		  </div>
		</div>
	  </div>

	</section>
	
	<div class="cs_height_150 cs_height_lg_30"></div>';

}			

	}
	
	protected function _content_template() {

    }	
}

