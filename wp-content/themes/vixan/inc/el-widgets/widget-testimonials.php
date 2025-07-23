<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_Testimonials_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-testimonials';
	}
	
	public function get_title() {
		return 'Our Testimonials';
	}
	
	public function get_icon() {
		return 'eicon-review';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'testimonials_section',
            [
                'label' => esc_html__( 'Testimonials', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'tst_style',
			[
				'label' => esc_html__( 'Testimonials Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'tst_stl'  => esc_html__( 'Select the Style', 'vixan' ),
					'tst_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'tst_stl_2' => esc_html__( 'Style Two', 'vixan' )
				],
				'default' => 'tst_stl_1',
			]
		);

		$this->add_control(
			'tst_sec_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Some Of Our Respected Happy Clients Says', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Title', 'vixan' ),
			]
		);

		$this->add_control(
			'tst_sec_img',
			[
				'label' => esc_html__( 'Section Image', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::MEDIA,
                'placeholder' => esc_html__( 'Upload Section Image', 'vixan' ),
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
            'testimonials_rptr',
            [
                'label' => esc_html__( 'Testimonial Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
						'name' => 'tst_clt_img',
						'label' => esc_html__( 'Client Image', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
                    [
                        'name' => 'tst_clt_name',
                        'label' => esc_html__( 'Client Name', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Delores Olliva', 'vixan' ),
                        'label_block' => true,
                    ],
					[
                        'name' => 'tst_clt_country',
                        'label' => esc_html__( 'Client Country', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'From USA', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tst_clt_content',
                        'label' => esc_html__( 'Testimonial Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Welcome to our digital agency We specialize in helping business most like yours succeed online. From website design and development to digital marketing agency', 'vixan' ),
                        'show_label' => false,
                    ],
					
                ],
                'title_field' => '{{{ tst_clt_name }}}',
            ],
			
        );

        $this->end_controls_section();
    }

	protected function render() {


        $settings = $this->get_settings_for_display();
if( $settings['tst_style'] == 'tst_stl_1' ) {
	echo '<h2 class="disp">Section Heading</h2><section class="cs_primary_bg cs_shape_wrap_2 '. $settings['ex_class'] .'">
	<div class="cs_shape_1">
	  <svg
		width="1041"
		height="1005"
		viewBox="0 0 1041 1005"
		fill="none"
		xmlns="http://www.w3.org/2000/svg"
	  >
		<circle
		  opacity="0.3"
		  cx="538.5"
		  cy="502.5"
		  r="501.5"
		  stroke="#454545"
		  stroke-width="2"
		/>
		<circle
		  opacity="0.3"
		  cx="501.5"
		  cy="526.5"
		  r="458.5"
		  stroke="#454545"
		  stroke-width="2"
		/>
		<circle
		  opacity="0.3"
		  cx="453"
		  cy="570"
		  r="424"
		  stroke="#454545"
		  stroke-width="2"
		/>
		<circle
		  opacity="0.3"
		  cx="396"
		  cy="591"
		  r="377"
		  stroke="#454545"
		  stroke-width="2"
		/>
		<circle
		  opacity="0.3"
		  cx="330"
		  cy="630"
		  r="329"
		  stroke="#454545"
		  stroke-width="2"
		/>
	  </svg>
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
		  />
		  <path
			d="M114.179 78.1968C109.372 104.312 105.474 108.21 79.3584 113.018C105.474 117.825 109.372 121.723 114.179 147.838C118.987 121.723 122.885 117.825 149 113.018C122.884 108.21 118.987 104.312 114.179 78.1968Z"
			fill="#454545"
		  />
		</g>
	  </svg>
	</div>
	<div class="cs_height_150 cs_height_lg_60"></div>
	<div class="container">
	  <div class="row align-items-center">
		<div class="col-lg-4">
		  <div>
			<img
			  src="'. $settings['tst_sec_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'"
			  class="w-100"
			>
		  </div>
		</div>
		<div class="col-lg-7 offset-lg-1">
		  <div class="cs_testimonial cs_style_1 cs_color_1">
			<h2 class="cs_testimonial_title">
				'. $settings['tst_sec_title'] .'
			</h2>
			<div class="cs_slider cs_slider_4">
			  <div class="swiper-wrapper">';

foreach ( $settings['testimonials_rptr'] as $tst_details ) :
	echo '<div class="swiper-slide">
			<div class="cs_testimonial_box">
			<div class="cs_testimonial_quote_icon">
				<svg
				width="61"
				height="44"
				viewBox="0 0 61 44"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
				>
				<path
					d="M0 26.2855H12.9844L4.32807 43.4283H17.3125L25.9689 26.2855V0.571289H0V26.2855Z"
					fill="#FF6B00"
				/>
				<path
					d="M34.625 0.571289V26.2855H47.6094L38.9531 43.4283H51.9375L60.5939 26.2855V0.571289H34.625Z"
					fill="#FF6B00"
				/>
				</svg>
			</div>
			<blockquote class="cs_testimonial_text">
				“'. $tst_details['tst_clt_content'] .'”
			</blockquote>
			<div class="cs_testimonial_meta">
				<div class="cs_testimonial_avatar">
					<img src="'. $tst_details['tst_clt_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
				</div>
				<div class="cs_testimonial_meta_right">
				<h3 class="cs_testimonial_avatar_name">
					'. $tst_details['tst_clt_name'] .'
				</h3>
				<div class="cs_testimonial_avatar_designation">
					'. $tst_details['tst_clt_country'] .'
				</div>
				</div>
			</div>
			</div>
		</div>';
endforeach;					
			
	echo'		</div>
				<div class="cs_pagination cs_style1"></div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="cs_height_150 cs_height_lg_60"></div>
			</section>
			<div class="cs_height_115 cs_height_lg_60"></div>';

} elseif( $settings['tst_style'] == 'tst_stl_2' ) {
	echo'<h2 class="disp">Section Heading</h2><section class="cs_shape_wrap_3">
			<div class="cs_height_150 cs_height_lg_60"></div>
			<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4">
				<div>
					<img src="'. $settings['tst_sec_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="w-100">
				</div>
				</div>
				<div class="col-lg-7 offset-lg-1">
				<div class="cs_testimonial cs_style_1 cs_color_2">
					<h2 class="cs_testimonial_title">
						'. $settings['tst_sec_title'] .'
					</h2>
					<div class="cs_slider cs_slider_4">
					<div class="swiper-wrapper">';

foreach ( $settings['testimonials_rptr'] as $tst_details ) :
	echo'<div class="swiper-slide">
			<div class="cs_testimonial_box">
			<div class="cs_testimonial_quote_icon">
				<svg
				width="61"
				height="44"
				viewBox="0 0 61 44"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
				>
				<path
					d="M0 26.2855H12.9844L4.32807 43.4283H17.3125L25.9689 26.2855V0.571289H0V26.2855Z"
					fill="#FF6B00"
				/>
				<path
					d="M34.625 0.571289V26.2855H47.6094L38.9531 43.4283H51.9375L60.5939 26.2855V0.571289H34.625Z"
					fill="#FF6B00"
				/>
				</svg>
			</div>
			<blockquote class="cs_testimonial_text">
				“'. $tst_details['tst_clt_content'] .'”
			</blockquote>
			<div class="cs_testimonial_meta">
				<div class="cs_testimonial_avatar">
					<img src="'. $tst_details['tst_clt_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
				</div>
				<div class="cs_testimonial_meta_right">
				<h3 class="cs_testimonial_avatar_name">
					'. $tst_details['tst_clt_name'] .'
				</h3>
				<div class="cs_testimonial_avatar_designation">
					'. $tst_details['tst_clt_country'] .'
				</div>
				</div>
			</div>
			</div>
		</div>';
endforeach;	

	echo'</div>
	<div class="cs_pagination cs_style1"></div>
	</div>
	</div>
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
	d="M114.179 78.1968C109.372 104.312 105.474 108.21 79.3584 113.018C105.474 117.825 109.372 121.723 114.179 147.838C118.987 121.723 122.885 117.825 149 113.018C122.884 108.21 118.987 104.312 114.179 78.1968Z"
	fill="#454545"
	/>
	</g>
	</svg>
	</div>
	</section>';
}				 

	}
	
	protected function _content_template() {

    }	
}

