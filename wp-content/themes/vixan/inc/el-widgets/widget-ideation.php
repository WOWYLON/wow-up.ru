<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_Idea_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-idea';
	}
	
	public function get_title() {
		return 'Our Idea';
	}
	
	public function get_icon() {
		return 'eicon-hypster';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'idea_section',
            [
                'label' => esc_html__( 'Idea', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'idea_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Innovative Solutions for Modern Digital Needs', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Title', 'vixan' ),
			]
		);
		$this->add_control(
			'idea_wlc_txt',
			[
				'label' => esc_html__( 'Section Content', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Welcome to our digital agency! We specialize in helping businesses like yours succeed online. From website design and development to digital marketing and advertising', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Content', 'vixan' ),
			]
		);
		$this->add_control(
			'idea_fes_img',
			[
				'name' => 'idea_fes_img',
				'label' => esc_html__( 'Featured Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'idea_highlight_title',
			[
				'label' => esc_html__( 'Highlight Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Creating a Strong Brand Identity', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Title', 'vixan' ),
			]
		);
		$this->add_control(
			'idea_highlight_content',
			[
				'label' => esc_html__( 'Highlight Content', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Welcome to our digital agency! We spec ialize in helping businesses like yours succeed Well come to our digital agency', 'vixan' ),
                'placeholder' => esc_html__( 'Enter Content', 'vixan' ),
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
            'idea_rptr',
            [
                'label' => esc_html__( 'Idea Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
                        'name' => 'idea_num',
                        'label' => esc_html__( 'Idea Counting Number', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( '1', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'idea_title',
                        'label' => esc_html__( 'Idea Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Ideation', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'idea_content',
                        'label' => esc_html__( 'Idea Content', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Digital of the day Mobile app excellence', 'vixan' ),
                        'show_label' => false,
					]
                ],
                'title_field' => '{{{ idea_title }}}',
            ],
			
        );

        $this->end_controls_section();
    }

	protected function render() {


        $settings = $this->get_settings_for_display();

	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>
		<section class="'. $settings['ex_class'] .'">
			<div class="container">
			<div class="cs_modern_needs cs_style">
				<div class="cs_col_md_778">
				<div class="cs_text">
					<div class="cs_section_heading cs_style_1">
					<div class="cs_section_heading_text">
						<h2 class="cs_section_title anim_heading_title">
						'. $settings['idea_title'] .'
						</h2>
					</div>
					</div>
					<div class="cs_height_65"></div>
					<p class="anim_text">
					'. $settings['idea_wlc_txt'] .'
					</p>
				</div>
				<div class="cs_height_85"></div>
				<div class="row anim_div_ShowLeftSide">';

foreach ( $settings['idea_rptr'] as $idea_details ) :
	echo '<div class="col-md-4 col-12">
			<div class="cs_stroke_text">
			<span>'. $idea_details['idea_num'] .'</span>
			</div>
			<div class="">
			<h6>'. $idea_details['idea_title'] .'</h6>
			<p>'. $idea_details['idea_content'] .'</p>
			</div>
		</div>';
endforeach;					
			
	echo' </div>
		</div>
		<div class="cs_col_md_672">
		<div class="cs_img_section">
			<img
			src="'. $settings['idea_fes_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'">
			<div class="cs_img_card_text anim_div_ShowZoom">
			<h6 class="cs_color_style">
			'. $settings['idea_highlight_title'] .'
			</h6>
			<p>
			'. $settings['idea_highlight_content'] .'
			</p>
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

