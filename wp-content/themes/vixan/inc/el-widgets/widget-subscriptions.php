<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_Subscriptions_Widget extends Widget_Base {
	
	public function get_name() {
		return 'widget-subscriptions';
	}
	
	public function get_title() {
		return 'Subscriptions';
	}
	
	public function get_icon() {
		return 'eicon-email-field';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Subscriptions Content', 'vixan' ),
			]
		);

		$this->add_control(
			'subs_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Stay Ahead With Our Top Notch Digital Services', 'vixan' ),
				'placeholder' => esc_html__( 'Enter the Title', 'vixan' ),
			]
		);	

		$this->add_control(
			'subs_form',
			[
				'label' => esc_html__( 'Shortcode of Contact Form 7', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter the Shortcode of Contact Form 7', 'vixan' ),
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

	echo '  <h2 class="disp">Section Heading</h2><div class="container">
				<div class="cs_newsletter cs_style_1 cs_primary_bg cs_shape_wrap_1 cs_parallax">
				<div class="cs_shape_1">
					<svg
					width="149"
					height="150"
					viewBox="0 0 149 150"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<g opacity="0.23">
						<path
						d="M54.7532 1.2627C47.1932 42.3276 41.0646 48.4558 0 56.0158C41.065 63.5757 47.1932 69.7039 54.7532 110.769C62.3131 69.7039 68.4414 63.5757 109.506 56.0158C68.4414 48.4558 62.3128 42.3276 54.7532 1.2627Z"
						fill="#454545"
						/>
						<path
						d="M114.179 78.2979C109.372 104.413 105.474 108.311 79.3584 113.119C105.474 117.926 109.372 121.824 114.179 147.939C118.987 121.824 122.885 117.926 149 113.119C122.884 108.311 118.987 104.413 114.179 78.2979Z"
						fill="#454545"
						/>
					</g>
					</svg>
				</div>
				<div class="cs_shape_2">
					<svg
					width="149"
					height="150"
					viewBox="0 0 149 150"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					>
					<g opacity="0.23">
						<path
						d="M54.7532 1.2627C47.1932 42.3276 41.0646 48.4558 0 56.0158C41.065 63.5757 47.1932 69.7039 54.7532 110.769C62.3131 69.7039 68.4414 63.5757 109.506 56.0158C68.4414 48.4558 62.3128 42.3276 54.7532 1.2627Z"
						fill="#454545"
						/>
						<path
						d="M114.179 78.2979C109.372 104.413 105.474 108.311 79.3584 113.119C105.474 117.926 109.372 121.824 114.179 147.939C118.987 121.824 122.885 117.926 149 113.119C122.884 108.311 118.987 104.413 114.179 78.2979Z"
						fill="#454545"
						/>
					</g>
					</svg>
				</div>
				<div class="cs_section_heading cs_style_1 cs_color_1 text-center">
					<div class="cs_section_heading_text">
					<h2 class="cs_section_title anim_text_upanddowns">
					'. $settings['subs_title'] .'
					</h2>
					</div>
				</div>
				<div class="cs_height_70 cs_height_lg_40"></div>
				'. do_shortcode($settings['subs_form']) .'
				</div>
			</div>
			
			<div class="cs_height_140 cs_height_lg_70"></div>';	 

	}
	
	protected function _content_template() {

    }
	
	
}