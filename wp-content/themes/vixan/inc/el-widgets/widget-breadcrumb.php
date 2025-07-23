<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}

class vixan_widget_brdc extends Widget_Base {
	
	public function get_name() {
		return 'widget-brdc';
	}
	
	public function get_title() {
		return 'Breadcrumb';
	}
	
	public function get_icon() {
		return 'eicon-banner';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Breadcrumb Content', 'vixan' ),
			]
		);

		$this->add_control(
			'brdc_bg',
			[
				'label' => esc_html__( 'Section Background Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'brdc_wlc_title',
			[
				'label' => esc_html__( 'Custom Title / Welcome Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Enter your description', 'vixan' ),
			]
		);

		$this->add_control(
			'ex_class',
			[
				'label' => esc_html__( 'Extra Class', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter require class', 'vixan' ),
			]
		);	

		$this->end_controls_section();
	}
	
	protected function render() {


    $settings = $this->get_settings_for_display();
	$wlcTitle = $settings['brdc_wlc_title'];

	echo'<section class="page-header '. $settings['ex_class'] .'">
			<div class="page-header__bg" style="background-image: url('. $settings['brdc_bg']['url'] .')">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="page-header__wrapper">
							<div class="page-header__content">';
if( !empty($wlcTitle) ){							
	echo'							<h2>'. $settings['brdc_wlc_title'] .'</h2>';
} else {	
	echo'							<h2>'. get_the_title() .' '. esc_html__('Page', 'vixan') .'</h2>';
}	
	echo'							<div class="page-header__menu">
									<ul>
										<li><a href="'. get_the_permalink() .'">'. esc_html__('Home', 'vixan') .'</a></li>
										<li>'. get_the_title() .'</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>';	 

	}
	
	protected function _content_template() {

    }
	
	
}