<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class vixan_widget_abus extends Widget_Base {
	
	public function get_name() {
		return 'widget-about';
	}
	
	public function get_title() {
		return 'About Us';
	}
	
	public function get_icon() {
		return 'eicon-info-box';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'About Us Content', 'vixan' ),
			]
		);

		$this->add_control(
			'ab_styles',
			[
				'label' => esc_html__( 'About Us Style', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'ab_stl'  => esc_html__( 'Select About Us Style', 'vixan' ),
					'ab_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'ab_stl_2' => esc_html__( 'Style Two', 'vixan' )
				],
				'default' => 'ab_stl_1',
			]
		);

		$this->add_control(
			'ab_img',
			[
				'label' => esc_html__( 'Featured Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'ab_img2',
			[
				'label' => esc_html__( 'Featured Image Two', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'ab_exp_box',
			[
				'label' => esc_html__( 'Experience Box', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter Your Experience', 'vixan' ),
			]
		);

		$this->add_control(
			'ab_tagline',
			[
				'label' => esc_html__( 'Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title', 'vixan' ),
			]
		);

		$this->add_control(
			'ab_title',
			[
				'label' => esc_html__( 'Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title', 'vixan' ),
			]
		);

		$this->add_control(
			'ab_content',
			[
				'label' => esc_html__( 'Text Content', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Enter Content', 'vixan' ),
			]
		);		

		$this->add_control(
			'ab_btn',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter text', 'vixan' ),
			]
		);		

		$this->add_control(
			'ab_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter url', 'vixan' ),
			]
		);		

		$this->add_control(
			'ex_class',
			[
				'label' => esc_html__( 'Extra Class', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter a class if you need', 'vixan' ),
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {

	$settings = $this->get_settings_for_display();

if($settings['ab_styles'] == 'ab_stl_1') {	
	echo '<section class="about-one pd-120-0-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="about-one__img clearfix">
							<div class="about-one__img-inner">
								<img src="'. $settings['ab_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
							</div>
							<div class="experince-box">
								<h2>'. $settings['ab_exp_box'] .'</h2>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="about-one__content">
							<div class="section-title">
								<span class="section-title__tagline">'. $settings['ab_tagline'] .'</span>
								<h2 class="section-title__title">'. $settings['ab_title'] .'</h2>
							</div>
							<div class="about-one__content-inner">
									'. $settings['ab_content'] .'
								<div class="about-one__content-btn">
									<a href="'. $settings['ab_btn_url'] .'" class="thm-btn">
										<span>'. $settings['ab_btn'] .'</span>
										<div class="liquid"></div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>'; 

} if($settings['ab_styles'] == 'ab_stl_2') {

	echo '<section class="about-two">
	<div class="container">
		<div class="row">

			<div class="col-xl-6">
				<div class="about-two__img clearfix">
					<div class="about-two__img1 wow slideInLeft" data-wow-delay="100ms"
						data-wow-duration="2500ms">
						<div class="about-two__img1-inner">
							<img src="'. $settings['ab_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
						</div>
					</div>
					<div class="about-two__img2 wow zoomIn" data-wow-delay="100ms" data-wow-duration="3500ms">
						<div class="about-two__img2-inner">
							<img src="'. $settings['ab_img2']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-6">
				<div class="about-two__content">
					<div class="section-title">
						<span class="section-title__tagline">'. $settings['ab_tagline'] .'</span>
						<h2 class="section-title__title">'. $settings['ab_title'] .'</h2>
					</div>
					<div class="about-two__content-inner">
						'. $settings['ab_content'] .'
						<div class="about-two__progress">
			
							<div class="about-two__progress-single">
								<h4 class="about-two__progress-title">Development</h4>
								<div class="bar">
									<div class="bar-inner count-bar" data-percent="58%">
										<div class="count-text">58%</div>
									</div>
								</div>
							</div>

							<div class="about-two__progress-single mar-b0">
								<h4 class="about-two__progress-title">Design</h4>
								<div class="bar">
									<div class="bar-inner count-bar" data-percent="77%">
										<div class="count-text">77%</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>';
}			
	}
	
	protected function _content_template() {

    }
	
	
}