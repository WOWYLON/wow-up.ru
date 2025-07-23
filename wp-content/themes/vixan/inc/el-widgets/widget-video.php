<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class vixan_widget_video extends Widget_Base {
	
	public function get_name() {
		return 'widget-video';
	}
	
	public function get_title() {
		return 'Video';
	}
	
	public function get_icon() {
		return 'eicon-slider-video';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Video Content', 'vixan' ),
			]
		);

		$this->add_control(
			'vd_style',
			[
				'label' => esc_html__( 'Video Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'vd_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'vd_stl_2' => esc_html__( 'Style Two', 'vixan' ),
				],
				'default' => 'vd_stl_1',
			]
		);

		$this->add_control(
			'vd_bg2',
			[
				'label' => esc_html__( 'Video Background Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'vd_url2',
			[
				'label' => esc_html__( 'Video URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter Video URL', 'vixan' ),
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

		$this->end_controls_section();
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();

if($settings['vd_style'] == 'vd_stl_1') { 		
	echo '<h2 class="disp">Section Heading</h2><div class="container '. $settings['ex_class'] .'">
			<div class="cs_parallax">
			<a
				href="'. $settings['vd_url2'] .'"
				class="video-popup cs_video_block cs_style1 cs_video_open cs_bg cs_parallax_bg"
				data-src="'. $settings['vd_bg2']['url'] .'"
			>
				<span class="cs_player_btn cs_accent_color">
				<span></span>
				</span>
			</a>
			</div>
		</div>

		<div class="cs_height_150 cs_height_lg_60"></div>';
		
} elseif($settings['vd_style'] == 'vd_stl_2') {
	echo'<h2 class="disp">Section Heading</h2><div class="cs_height_100 cs_height_lg_60"></div>

		<div class="cs_parallax">
		<a
			href="'. $settings['vd_url2'] .'""
			class="cs_digital_agency cs_video_block cs_style1 cs_video_open cs_bg cs_parallax_bg"
			data-src="'. $settings['vd_bg2']['url'] .'"
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