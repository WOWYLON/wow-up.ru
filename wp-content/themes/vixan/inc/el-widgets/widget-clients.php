<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class vixan_widget_clients extends Widget_Base {
	
	public function get_name() {
		return 'widget-clients';
	}
	
	public function get_title() {
		return 'Our Clients';
	}
	
	public function get_icon() {
		return 'eicon-parallax';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Clients Content', 'vixan' ),
			]
		);

		$this->add_control(
			'clt_styles',
			[
				'label' => esc_html__( 'Clients Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'clt_stl'  => esc_html__( 'Select Clients Style', 'vixan' ),
					'clt_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'clt_stl_2' => esc_html__( 'Style Two', 'vixan' ),
					'clt_stl_3' => esc_html__( 'Style Three', 'vixan' )
				],
				'default' => 'clt_stl_1',
			]
		);

		$this->add_control(
			'clt_sec_tagline',
			[
				'label' => esc_html__( 'Section Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '130+ Our Client & Partner We Are Working Together', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Tagline', 'vixan' ),
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

		$this->add_control(
            'clt_rptr',
            [
                'label' => esc_html__( 'Client Logo', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
						'name' => 'clt_logo1',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo2',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo3',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo4',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo5',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo6',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo7',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo8',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo9',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'clt_logo10',
						'label' => esc_html__( 'Client Logo', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					]
                ],
            ],
			
        );

		$this->end_controls_section();
	}
	
	protected function render() {

	$settings = $this->get_settings_for_display();
	$clt_tagline = $settings['clt_sec_tagline'];

if($settings['clt_styles'] == 'clt_stl_1') {	

if(!empty($clt_tagline)){	
	echo '<h2 class="disp">Section Heading</h2><div>
			<p class="text-center cs_font_18 cs_normal">
				'. $settings['clt_sec_tagline'] .'
			</p>
			<div class="cs_height_100 cs_height_lg_60"></div>';
}
foreach ( $settings['clt_rptr'] as $client_logo ) :		
	echo'<div class="cs_moving_section_wrap cs_bold cs_moving_section_hover_push">
	  <div class="cs_moving_section_in">
		<div class="cs_moving_section cs_animation_speed_40">
		  <div class="cs_partner_logo_wrap">
			<div class="cs_partner_logo">
			  <img src="'. $client_logo['clt_logo1']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
			  <img src="'. $client_logo['clt_logo2']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
			  <img src="'. $client_logo['clt_logo3']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
			  <img src="'. $client_logo['clt_logo4']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
			  <img src="'. $client_logo['clt_logo5']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
		  </div>
		</div>
		<div class="cs_moving_section cs_animation_speed_40">
		  <div class="cs_partner_logo_wrap">
			<div class="cs_partner_logo">
				<img src="'. $client_logo['clt_logo6']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
				<img src="'. $client_logo['clt_logo7']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
				<img src="'. $client_logo['clt_logo8']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
				<img src="'. $client_logo['clt_logo9']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			<div class="cs_partner_logo">
				<img src="'. $client_logo['clt_logo10']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="cs_height_45 cs_height_lg_45"></div>';
endforeach;	

	echo'</div>
	<div class="cs_height_95 cs_height_lg_30"></div>'; 

} elseif($settings['clt_styles'] == 'clt_stl_2') {
	echo '<section class="client-page'. $settings['ex_class'].'">
			<div class="container">
			<div class="row">';

	if(!empty($settings['clt_logo'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo2'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo2']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
		}
	if(!empty($settings['clt_logo3'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo3']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo4'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo4']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo5'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo5']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo6'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo6']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
		}
	if(!empty($settings['clt_logo7'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo7']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo8'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo8']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo9'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo9']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo10'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo10']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	if(!empty($settings['clt_logo11'])) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo11']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}
	$client_logo12 = $settings['clt_logo12'];
	if(!empty($client_logo12)) {			
		echo '		<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
						<div class="client-page__single text-center">
							<a href="#"><img src="'. $settings['clt_logo12']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"></a>
						</div>
					</div>';
	}			

	echo '	</div>
		</div>
	</section>'; 
}

	}
	
	protected function _content_template() {

    }
	
	
}