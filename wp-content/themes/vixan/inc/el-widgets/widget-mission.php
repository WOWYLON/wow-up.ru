<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_OurMission_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-mission';
	}
	
	public function get_title() {
		return 'Our Our Mission';
	}
	
	public function get_icon() {
		return 'eicon-expand';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'mission_section',
            [
                'label' => esc_html__( 'Our Mission', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'mission_rptr',
            [
                'label' => esc_html__( 'Our Mission Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
						'name' => 'ourmission_img',
						'label' => esc_html__( 'Our Mission Image', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
                    [
                        'name' => 'ourmission_tagline',
                        'label' => esc_html__( 'Our Mission Tagline', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Our Mission', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'ourmission_title',
                        'label' => esc_html__( 'Our Mission Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Unleashing Creativity to Transform Your Business', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'ourmission_content',
                        'label' => esc_html__( 'Our Mission Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Welcome to our digital agency! We specialize in helping businesses like yours succeed online. From website design and development to digital marketing and advertising, we have the tools and expertise to elevate your online presence. Let us help you lione evolving world of digital.', 'vixan' ),
                        'show_label' => false,
                    ],
                ],
                'title_field' => '{{{ ourmission_tagline }}}',
            ],
			
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

        $this->end_controls_section();
    }

	protected function render() {


        $settings = $this->get_settings_for_display();

	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_130 cs_height_lg_60"></div>
		<section class="cs_slider cs_slider_2 anim_div_ShowRightSide '. $settings['ex_class'] .'">
			<div class="swiper-wrapper">';

foreach ( $settings['mission_rptr'] as $ourmission_details ) :
	echo '<div class="swiper-slide">
			<div class="cs_about cs_style_1">
				<div
				class="cs_about_bg cs_bg"
				data-src="'. $ourmission_details['ourmission_img']['url'] .'"
				></div>
				<div class="container">
				<div class="cs_about_text">
					<div class="cs_section_heading cs_style_1">
					<div class="cs_section_heading_text">
						<div class="cs_section_subtitle">'. $ourmission_details['ourmission_tagline'] .'</div>
						<h2 class="cs_section_title">
							'. $ourmission_details['ourmission_title'] .'
						</h2>
					</div>
					</div>
					<div class="cs_height_40 cs_height_lg_30"></div>
					<p class="cs_m0">
						'. $ourmission_details['ourmission_content'] .'
					</p>
				</div>
				</div>
			</div>
		</div>';
endforeach;					
			
	echo'</div>
	<div class="container">
	  <div class="cs_swiper_controll">
		<div class="cs_pagination cs_style2 cs_primary_font"></div>
		<div class="cs_swiper_navigation_wrap">
		  <div class="cs_swiper_button_prev">
			<svg
			  width="82"
			  height="24"
			  viewBox="0 0 82 24"
			  fill="none"
			  xmlns="http://www.w3.org/2000/svg"
			>
			  <path d="M82 1H2L24 23" stroke="currentColor" />
			</svg>
		  </div>
		  <div class="cs_swiper_button_next">
			<svg
			  width="82"
			  height="24"
			  viewBox="0 0 82 24"
			  fill="none"
			  xmlns="http://www.w3.org/2000/svg"
			>
			  <path d="M0 23H80L58 1" stroke="currentColor" />
			</svg>
		  </div>
		</div>
	  </div>
	</div>
  </section>';	 

	}
	
	protected function _content_template() {

    }	
}

