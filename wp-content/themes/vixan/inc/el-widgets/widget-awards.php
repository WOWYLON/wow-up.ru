<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Custom_Awards_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-awards';
	}
	
	public function get_title() {
		return 'Our Awards';
	}
	
	public function get_icon() {
		return 'eicon-expand';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'awards_section',
            [
                'label' => esc_html__( 'Awards', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'awards_tagline',
			[
				'label' => esc_html__( 'Section Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Awards', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Tagline', 'vixan' ),
			]
		);

		$this->add_control(
			'awards_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Recognizing Excellence Our Award Winning Work', 'vixan' ),
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
            'awards_rptr',
            [
                'label' => esc_html__( 'Award Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
						'name' => 'award_img',
						'label' => esc_html__( 'Award Image', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'award_fes_img',
						'label' => esc_html__( 'Featured Image', 'vixan' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
                    [
                        'name' => 'award_title',
                        'label' => esc_html__( 'Award Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Elite Author Award', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'award_content',
                        'label' => esc_html__( 'Award Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Welcome to our digital agency We specialize in helping business most like yours succeed online. From website design.', 'vixan' ),
                        'show_label' => false,
                    ],
					[
                        'name' => 'award_authority',
                        'label' => esc_html__( 'Award Aothority', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Envato', 'vixan' ),
                        'label_block' => true,
                    ],
                ],
                'title_field' => '{{{ award_title }}}',
            ],
			
        );

        $this->end_controls_section();
    }

	protected function render() {


        $settings = $this->get_settings_for_display();

	echo '<h2 class="disp">Section Heading</h2><section class="'. $settings['ex_class'] .'">
			<div class="container">
			<div class="cs_section_heading cs_style_1 cs_type_1 swiper-slide swiper-slide-active">
				<div class="cs_section_heading_text">
				<div class="cs_section_subtitle anim_div_ShowZoom">
				'. $settings['awards_tagline'] .'
				</div>
				<h2 class="cs_section_title anim_heading_title">
				'. $settings['awards_title'] .'
				</h2>
				</div>
			</div>
			<div class="cs_height_100 cs_height_lg_60"></div>
			<div class="cs_card_2_list">';

foreach ( $settings['awards_rptr'] as $award_details ) :
	echo '<div class="cs_card cs_style_2 cs_hover_tab anim_div_ShowDowns">
			<div class="cs_card_left">
				<div class="cs_card_logo">
				<img src="'. $award_details['award_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" >
				</div>
				<div>
				<h2 class="cs_card_title">'. $award_details['award_title'] .'</h2>
				<div class="cs_card_subtitle">
				'. $award_details['award_content'] .'
				</div>
				</div>
			</div>
			<div class="cs_card_right">
				<h2 class="cs_card_brand">'. $award_details['award_authority'] .'</h2>
			</div>
			<div class="cs_card_hover_img">
				<img src="'. $award_details['award_fes_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			</div>
			</div>';
endforeach;					
			
	echo'		</div>
          	</div>
        </section>
		
		<div class="cs_height_145 cs_height_lg_60"></div>';	 

	}
	
	protected function _content_template() {

    }	
}

