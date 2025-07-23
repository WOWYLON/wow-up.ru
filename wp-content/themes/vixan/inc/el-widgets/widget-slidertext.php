<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_Slidertext_Widget extends Widget_Base {
	
	public function get_name() {
		return 'widget-slidertext';
	}
	
	public function get_title() {
		return 'Text Slider';
	}
	
	public function get_icon() {
		return 'eicon-slider-device';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Slider Text Content', 'vixan' ),
			]
		);

		$this->add_control(
			'sldtxt_style',
			[
				'label' => esc_html__( 'Slider Text Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'sldtxt_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'sldtxt_stl_2' => esc_html__( 'Style Two', 'vixan' ),
					'sldtxt_stl_3' => esc_html__( 'Style Three', 'vixan' ),
				],
				'default' => 'sldtxt_stl_1',
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
            'sldtxt_rptr',
            [
                'label' => esc_html__( 'Slider Text Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'sldtxt_content',
                        'label' => esc_html__( 'Slider Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Elevating brands through inspired design', 'vixan' ),
                        'label_block' => true,
					],
					[
                        'name' => 'sldtxt_content2',
                        'label' => esc_html__( 'Slider Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Elevating brands through inspired design', 'vixan' ),
                        'label_block' => true,
                    ],
					[
                        'name' => 'sldtxt_content3',
                        'label' => esc_html__( 'Slider Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Elevating brands through inspired design', 'vixan' ),
                        'label_block' => true,
                    ]
                ],
                'title_field' => '{{{ sldtxt_content }}}',
            ],
			
        );

		$this->end_controls_section();
	}
	
	protected function render() {

    $settings = $this->get_settings_for_display();

if($settings['sldtxt_style'] == 'sldtxt_stl_3') { 		
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_130 cs_height_lg_60"></div>

			<div class="cs_moving_section_wrap cs_bold '. $settings['ex_class'] .'">
				<div class="cs_moving_section_in">';

foreach ( $settings['sldtxt_rptr'] as $sldtxt_details ) :
	echo'			<div class="cs_moving_section cs_stroke_text">
						'. $sldtxt_details['sldtxt_content'] .'
					</div>';
endforeach;	

	echo'		</div>
			</div>';				
		
} elseif($settings['sldtxt_style'] == 'sldtxt_stl_1') {		
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>

			<div class="cs_moving_section_wrap cs_bold '. $settings['ex_class'] .'">
				<div class="cs_moving_section_in">';

foreach ( $settings['sldtxt_rptr'] as $sldtxt_details ) :
	echo'			<div class="cs_moving_section cs_stroke_text">
						'. $sldtxt_details['sldtxt_content'] .'
					</div>';
endforeach;	

	echo'		</div>
			</div>';				
		
} elseif($settings['sldtxt_style'] == 'sldtxt_stl_2') {
	echo'<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>

		<div class="cs_moving_section_wrap cs_bold cs_primary_bg py-4 '. $settings['ex_class'] .'">
			<div class="cs_moving_section_in">';

	foreach ( $settings['sldtxt_rptr'] as $sldtxt_details ) :
	echo'		<h4 class="cs_moving_section mb-0 cs_white_color">
					'. $sldtxt_details['sldtxt_content'] .'&nbsp;
					<span class="cs_accent_color">
					&bull; '. $sldtxt_details['sldtxt_content'] .' &bull;
					</span>
					&nbsp; '. $sldtxt_details['sldtxt_content2'] .'
					<span class="cs_accent_color">
					&bull; '. $sldtxt_details['sldtxt_content3'] .' &bull;
					</span>
				</h4>';
	endforeach;	

	echo'	</div>
		</div>';
} 		

	}
	
	protected function _content_template() {

    }
	
	
}