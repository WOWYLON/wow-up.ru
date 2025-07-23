<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_FAQ_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-faq';
	}
	
	public function get_title() {
		return 'Our FAQ';
	}
	
	public function get_icon() {
		return 'eicon-tabs';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'faq_section',
            [
                'label' => esc_html__( 'FAQ', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'faq_tagline',
			[
				'label' => esc_html__( 'Section Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Check FAQ', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Tagline', 'vixan' ),
			]
		);

		$this->add_control(
			'faq_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Frequently Asked Questions', 'vixan' ),
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
            'faq_rptr',
            [
                'label' => esc_html__( 'FAQ Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'faq_title',
                        'label' => esc_html__( 'FAQ Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'What is the design process for branding?', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'faq_content',
                        'label' => esc_html__( 'FAQ Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying conse quences lalin karar or one avoids a pain that produces no resultant pleasure. ', 'vixan' ),
                        'show_label' => false,
                    ]
                ],
                'title_field' => '{{{ faq_title }}}',
            ],
			
        );

        $this->end_controls_section();
    }

	protected function render() {


        $settings = $this->get_settings_for_display();

	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_219 cs_height_lg_120"></div>
	
		<div class="container '. $settings['ex_class'].'">
			<div class="cs_section_heading cs_style_1">
			<div class="cs_section_heading_text">
				<div class="mb-3 anim_text_writting">'. $settings['faq_tagline'] .'</div>
				<h2 class="cs_section_title anim_text_writting">
					'. $settings['faq_title'] .'
				</h2>
			</div>
			</div>
		</div>
		
		<div class="cs_height_100 cs_height_lg_60"></div>
		
		<div class="container">
          <div class="cs_accordeon anim_div_ShowDowns">';

foreach ( $settings['faq_rptr'] as $faq_details ) :
	echo '<div class="cs_accordion_item cs_color_1">
			<div class="cs_accordion_header">
			<p class="cs_accordion_title cs_m0" id="headingOne">
				'. $faq_details['faq_title'] .'
			</p>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 25 25"
				width="30"
			>
				<path
				style="fill: #ffffff"
				d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"
				data-name="Right"
				/>
			</svg>
			</div>

			<div class="cs_accordion_body">
				'. $faq_details['faq_content'] .'
			</div>
		</div>';
endforeach;					
			
	echo'		</div>
          	</div>
		
		<div class="cs_height_150 cs_height_lg_60"></div>';	 

	}
	
	protected function _content_template() {

    }	
}

