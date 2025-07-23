<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_wps_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-wps';
	}
	
	public function get_title() {
		return 'Our Working Process';
	}
	
	public function get_icon() {
		return 'eicon-checkbox';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'wps_section',
            [
                'label' => esc_html__( 'WPS', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'wps_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Working Process', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Title', 'vixan' ),
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
            'wps_rptr',
            [
                'label' => esc_html__( 'Working Process Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'wps_title',
                        'label' => esc_html__( 'WPS Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'one', 'vixan' ),
                        'label_block' => true,
                    ],
					[
                        'name' => 'wps_subtitle',
                        'label' => esc_html__( 'WPS Sub Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Understand', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'wps_content',
                        'label' => esc_html__( 'WPS Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Welcome to our digital agency We specialize in helping your business most.', 'vixan' ),
                        'show_label' => false,
                    ],
					
                ],
                'title_field' => '{{{ wps_title }}}',
            ],
			
        );

        $this->end_controls_section();
    }

	protected function render() {

    $settings = $this->get_settings_for_display();
    $wps_title = $settings['wps_title'];

	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_115 cs_height_lg_60"></div>

	<section class="'. $settings['ex_class'] .'">
	  <div class="cs_primary_bg">
		<div class="cs_height_135 cs_height_lg_70"></div>
		<div class="container">';
if(!empty($wps_title)) {
	echo'	<div class="cs_section_heading_hr cs_style_1 cs_color_1">
			<div class="cs_hr_design"></div>
			<div class="cs_section_heading cs_style_1 cs_color_1">
			  <div class="cs_section_heading_text">
				<h2 class="cs_section_title anim_heading_title">
					'. $settings['wps_title'] .'
				</h2>
			  </div>
			</div>
			<div class="cs_hr_design"></div>
		  </div>';
}
	echo' <div class="cs_height_100 cs_height_lg_70"></div>

		  <div class="anim_div_ShowLeftSide">
			<div class="cs_work cs_work_1">
			  <div class="cs_card_work cs_style_1 cs_color_1">';

foreach ( $settings['wps_rptr'] as $wps_details ) :
	echo '<div class="cs_card">
			<div class="cs_card cs_style_1">
			<div class="cs_posagation">
				<div class="cs_work_style_1"></div>
				<div class="cs_work_style_2"></div>
			</div>
			<div class="cs_stroke_number">
				<span>'. $wps_details['wps_title'] .'</span>
			</div>
			</div>

			<h6 class="cs_work_title">'. $wps_details['wps_subtitle'] .'</h6>
			<p class="cs_work_subtitle">
			'. $wps_details['wps_content'] .'
			</p>
		</div>';
endforeach;					
			
	echo'		</div>
			</div>
		</div>

		</div>
		<div class="cs_height_150 cs_height_lg_60"></div>
		</div>
		</section>';	 

	}
	
	protected function _content_template() {

    }	
}

