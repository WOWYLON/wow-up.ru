<?php

namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}

class vixan_widget_sld extends Widget_Base {
	
	public function get_name() {
		return 'widget-slider';
	}
	
	public function get_title() {
		return 'Vixan Home Slider';
	}
	
	public function get_icon() {
		return 'eicon-slider-album';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Slider Content', 'vixan' ),
			]
		);

        $this->add_control(
            'home_sld_rptr',
            [
                'label' => esc_html__( 'Slider Item Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
						'name' => 'home_sld_img',
						'label' => esc_html__( 'Slide Image', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
                    [
                        'name' => 'home_sld_tagline',
                        'label' => esc_html__( 'Slide Tagline', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Creative Agency', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'home_sld_title',
                        'label' => esc_html__( 'Slide Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Expert Digital Services for Your Own Business', 'vixan' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'home_sld_desc',
                        'label' => esc_html__( 'Slide Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Welcome to our digital agency! We specialize in helping businesses like yours succeed online. From website design and development to digital marketing and advertising, we have the tools and expertise to elevate your online presence. Let us help you lione evolving world of digital.', 'vixan' ),
                        'show_label' => false,
                    ],
					[
                        'name' => 'home_sld_btn',
                        'label' => esc_html__( 'Button Text', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Our Projects', 'vixan' ),
                        'label_block' => true,
                    ],
					[
                        'name' => 'home_sld_btn_url',
                        'label' => esc_html__( 'Button URL', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( '#', 'vixan' ),
                        'label_block' => true,
                    ],
                ],
                'title_field' => '{{{ home_sld_tagline }}}',
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

echo '<h2 class="disp">Section Heading</h2><section class="cs_slider cs_slider_1">
		<div class="swiper-wrapper">';

		foreach ( $settings['home_sld_rptr'] as $home_sld_details ) :
			echo '<div class="swiper-slide">
			<div class="cs_hero cs_style1 cs_center cs_parallax">
			  <div
				class="cs_hero_bg cs_bg cs_parallax_bg"
				data-src="'. $home_sld_details['home_sld_img']['url'] .'"
			  ></div>
			  <div class="container">
				<div class="cs_hero_text">
				  <div class="cs_hero_mini_title">
					<svg
					  width="134"
					  height="12"
					  viewBox="0 0 134 12"
					  fill="none"
					  xmlns="http://www.w3.org/2000/svg"
					>
					  <path
						d="M133.53 6.53033C133.823 6.23744 133.823 5.76256 133.53 5.46967L128.757 0.696699C128.464 0.403806 127.99 0.403806 127.697 0.696699C127.404 0.989593 127.404 1.46447 127.697 1.75736L131.939 6L127.697 10.2426C127.404 10.5355 127.404 11.0104 127.697 11.3033C127.99 11.5962 128.464 11.5962 128.757 11.3033L133.53 6.53033ZM0 6.75H133V5.25H0V6.75Z"
						fill="#101010"
					  />
					</svg>
					'. $home_sld_details['home_sld_tagline'] .'
				  </div>
				  <div class="cs_height_20 cs_height_lg_20"></div>
				  <h2 class="cs_hero_title">
				  	'. $home_sld_details['home_sld_title'] .'
				  </h2>
				  <div class="cs_height_70 cs_height_lg_60"></div>
				  <div class="cs_hero_text_in">
					<div class="cs_hero_subtitle">
						'. $home_sld_details['home_sld_desc'] .'
					</div>
					<div class="cs_height_65 cs_height_lg_40"></div>
					<div class="cs_hero_btn_wrap">
					  <div class="cs_round_btn_wrap">
						<a
						  href="'. $home_sld_details['home_sld_btn_url'] .'"
						  class="cs_hero_btn cs_round_btn btn-item"
						  ><span></span> '. $home_sld_details['home_sld_btn'] .'</a
						>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>';
		endforeach;

echo' </div>
		<div class="cs_pagination cs_style1"></div>
	</section>';	 

	}
	
	protected function _content_template() {

    }
	
	
}