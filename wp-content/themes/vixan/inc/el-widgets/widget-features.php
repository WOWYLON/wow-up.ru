<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_Features_Widget extends Widget_Base {
	
	public function get_name() {
		return 'widget-features';
	}
	
	public function get_title() {
		return 'Our Features';
	}
	
	public function get_icon() {
		return 'eicon-yoast';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Features Content', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_style',
			[
				'label' => esc_html__( 'Features Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'fetr_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'fetr_stl_2' => esc_html__( 'Style Two', 'vixan' ),
				],
				'default' => 'fetr_stl_1',
			]
		);
		
		$this->add_control(
			'fetr_hdr_title',
			[
				'label' => esc_html__( 'Heading Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( ' Features', 'vixan' ),
                'placeholder' => esc_html__( 'Enter the Title', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_sec_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( ' Elevating Your Business to the Next Level Expertise in Startup Agency Services', 'vixan' ),
                'placeholder' => esc_html__( 'Enter the Title', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_sec_content',
			[
				'label' => esc_html__( 'Section Content', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Welcome to our digital agency! We specialize in helping businesses like yours succeed online. From website design  and development to digital marketing and advertising, we have the tools. From website design and development to digital marketing and advertising, we have the toolsis. From website design and development. Welcome to our digital agency.', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Content', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_sec_btn',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Button Text', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_sec_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Button URL', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_1st_title',
			[
				'label' => esc_html__( 'Primary Feature Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Unique Design', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Feature Title', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_1st_txt1',
			[
				'label' => esc_html__( 'Primary Feature Text One', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Award Winning Quality', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Feature Content', 'vixan' ),
			]
		);

		$this->add_control(
			'fetr_1st_txt2',
			[
				'label' => esc_html__( 'Primary Feature Text Two', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Digital of the day Mobile app excellence', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Feature Content', 'vixan' ),
			]
		);

		$this->add_control(
			'ex_class',
			[
				'label' => esc_html__( 'Extra Class', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter Class', 'vixan' ),
			]
		);
		
		$this->add_control(
            'fetr_rptr',
            [
                'label' => esc_html__( 'Feature Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'fetr_title',
                        'label' => esc_html__( 'Feature Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Clean Code', 'vixan' ),
                        'label_block' => true,
					],
					[
                        'name' => 'fetr_txt1',
                        'label' => esc_html__( 'Feature Content One', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Award Winning Quality', 'vixan' ),
                        'label_block' => true,
                    ],
					[
                        'name' => 'fetr_txt2',
                        'label' => esc_html__( 'Feature Content Two', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Digital of the day Mobile app excellence', 'vixan' ),
                        'label_block' => true,
                    ]

                ],
                'title_field' => '{{{ fetr_title }}}',
            ],
			
        );

		$this->end_controls_section();
	}
	
	protected function render() {

    $settings = $this->get_settings_for_display();

if($settings['fetr_style'] == 'fetr_stl_1') { 		
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>
	<section class="cs_shape_wrap_3 '. $settings['ex_class'] .'">
	<div class="cs_shape_1">
	  <svg
		width="138"
		height="118"
		viewBox="0 0 138 118"
		fill="none"
		xmlns="http://www.w3.org/2000/svg"
	  >
		<g opacity="0.3">
		  <path
			opacity="0.3"
			d="M61.0693 89.5549C72.1957 74.6168 102.936 49.6405 136.884 69.2405"
			stroke="#101010"
			stroke-width="2"
		  />
		  <path
			opacity="0.3"
			d="M74.4465 54.818C82.4465 40.8181 107.447 3.31795 135.251 18.0685"
			stroke="#101010"
			stroke-width="2"
		  />
		  <path
			opacity="0.3"
			d="M48.5117 82.305C55.8853 65.2002 62.1455 26.0906 28.1973 6.4906"
			stroke="#101010"
			stroke-width="2"
		  />
		</g>
	  </svg>
	</div>
	<div class="container">
	  <div class="row">
		<div class="col-lg-8 col-12">
		  <div class="cs_section_heading cs_style_1">
			<div class="cs_section_heading_text">
			  <div class="cs_section_subtitle anim_div_ShowZoom">
			  '. $settings['fetr_hdr_title'] .'
			  </div>
			  <h2 class="cs_section_title anim_heading_title">
			  '. $settings['fetr_sec_title'] .'
			  </h2>
			</div>
		  </div>
		  <div class="cs_height_70"></div>
		  <div
			class="d-flex gap-4 align-items-center flex-wrap flex-lg-nowrap justify-content-center"
		  >
			<div class="anim_text">
			  <p class="cs_font_16 cs_secend_section">
			  '. $settings['fetr_sec_content'] .'
			  </p>
			  <div class="cs_service_back_btn">
				<a href="'. $settings['fetr_sec_btn_url'] .'" class="cs_style_1 cs_color_1">
				  <span class="cs_font_18">'. $settings['fetr_sec_btn'] .'</span>
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
			<div class="cs_startup_agency cs_card cs_mr_left">
			  <h6>'. $settings['fetr_1st_title'] .'</h6>
			  <div class="d-flex align-items-center">
				<div class="cs_hr"></div>
				<p class="cs_font_16 cs_normal cs_mp0 text-nowrap">
				'. $settings['fetr_1st_txt1'] .'
				</p>
			  </div>
			  <p class="cs_font_16 cs_mp0">
			  '. $settings['fetr_1st_txt2'] .'
			  </p>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 col-12">
		  <div class="cs_startup_agency">';

foreach ( $settings['fetr_rptr'] as $feature_details ) :
	echo'<div class="cs_startup_agency cs_card">
			<h6>'. $feature_details['fetr_title'] .'</h6>
			<div class="d-flex align-items-center">
			<div class="cs_hr"></div>
			<p class="cs_font_16 cs_normal cs_mp0 text-nowrap">
			'. $feature_details['fetr_txt1'] .'
			</p>
			</div>
			<p class="cs_font_16 cs_mp0">
			'. $feature_details['fetr_txt2'] .'
			</p>
		</div>';
endforeach;	

	echo'		</div>
			</div>
			</div>
			</div>
			<div class="cs_shape_2">
			  <svg
				width="149"
				height="149"
				viewBox="0 0 149 149"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
			  >
				<g opacity="0.23">
				  <path
					d="M54.7532 1.16162C47.1932 42.2265 41.0646 48.3548 0 55.9147C41.065 63.4746 47.1932 69.6029 54.7532 110.668C62.3131 69.6029 68.4414 63.4746 109.506 55.9147C68.4414 48.3548 62.3128 42.2265 54.7532 1.16162Z"
					fill="#454545"
				  ></path>
				  <path
					d="M114.179 78.1968C109.372 104.312 105.474 108.21 79.3584 113.018C105.474 117.825 109.372 121.723 114.179 147.838C118.987 121.723 122.885 117.825 149 113.018C122.884 108.21 118.987 104.312 114.179 78.1968Z"
					fill="#454545"
				  ></path>
				</g>
			  </svg>
			</div>
		  </section>';				
		
} elseif($settings['fetr_style'] == 'fetr_stl_2') {
	echo'<h2 class="disp">Section Heading</h2><div class="cs_height_100 cs_height_lg_60"></div>

		<div class="cs_parallax">
		<a
			href="'. $settings['fetr_url2'] .'""
			class="cs_digital_agency cs_slidertext_block cs_style1 cs_slidertext_open cs_bg cs_parallax_bg"
			data-src="'. $settings['fetr_bg2']['url'] .'"
		>
			<span class="cs_player_btn cs_accent_color">
			<span></span>
			</span>
		</a>
		</div>';
} 		

	}
	
	protected function _content_template() {

    }
	
	
}