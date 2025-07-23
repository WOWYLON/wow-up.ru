<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class Vixan_FunFact_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-funfact';
	}
	
	public function get_title() {
		return 'Our FunFact';
	}
	
	public function get_icon() {
		return 'eicon-counter';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'funfact_section',
            [
                'label' => esc_html__( 'FunFact', 'vixan' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'fn_style',
			[
				'label' => esc_html__( 'Choose Portfolio Style', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'fn_stl_1',
				'options' => [
					''  => esc_html__( 'Select FunFact Style', 'vixan' ),
					'fn_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'fn_stl_2' => esc_html__( 'Style Two', 'vixan' )
				],
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
            'funfact_rptr',
            [
                'label' => esc_html__( 'FunFact Details', 'vixan' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					
                    [
                        'name' => 'funfact_title',
                        'label' => esc_html__( 'Counter Title', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Project Completed', 'vixan' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'funfact_number',
                        'label' => esc_html__( 'Counter Number', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( '91', 'vixan' ),
                        'show_label' => false,
                    ],
					[
                        'name' => 'funfact_unit',
                        'label' => esc_html__( 'Counter Unit', 'vixan' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'K', 'vixan' ),
                        'label_block' => true,
                    ],
                ],
                'title_field' => '{{{ funfact_title }}}',
            ],
			
        );

        $this->end_controls_section();
    }

	protected function render() {

    $settings = $this->get_settings_for_display();

if ($settings['fn_style'] == 'fn_stl_1') {    
	echo '<h2 class="disp">Section Heading</h2><div class="container '. $settings['ex_class'] .'">
			<div class="row align-items-center">';

foreach ( $settings['funfact_rptr'] as $funfact_details ) :
	echo '<div class="col-lg-3">
			<div class="cs_funfact cs_style1">
			<div class="cs_funfact_number cs_stroke_text me-4">
				<div class="">
				<span class="amin_auto_count">'. $funfact_details['funfact_number'] .'</span>
				</div>
				<span>'. $funfact_details['funfact_unit'] .'</span>
			</div>
			<div class="cs_funfact_text cs_primary_font">
				<p>'. $funfact_details['funfact_title'] .'</p>
			</div>
			</div>
		</div>';
endforeach;					
			
	echo'		</div>
          	</div>
		
			  <div class="cs_height_150 cs_height_lg_60"></div>';

} elseif ($settings['fn_style'] == 'fn_stl_2') {
  echo'<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_60"></div>

        <div class="container">
          <div class="row align-items-center">';

foreach ( $settings['funfact_rptr'] as $funfact_details ) :
  echo'    <div class="col-lg-3">
              <div class="cs_funfact cs_style1">
                <div class="cs_funfact_number cs_stroke_normal me-4">
                  <div class="">
                    <span class="amin_auto_count">'. $funfact_details['funfact_number'] .'</span>
                  </div>
                  <span>'. $funfact_details['funfact_unit'] .'</span>
                </div>
                <div class="cs_funfact_text cs_primary_font cs_color_1">
                  <p>'. $funfact_details['funfact_title'] .'</p>
                </div>
              </div>
            </div>';
endforeach;	            
        
  echo'</div>
    </div>
    
    <div class="cs_height_150 cs_height_lg_60"></div>';
}               

	}
	
	protected function _content_template() {

    }	
}

