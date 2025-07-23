<?php
namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}
class vixan_widget_advg extends Widget_Base {
	
	public function get_name() {
		return 'widget-advg';
	}
	
	public function get_title() {
		return 'Advantage';
	}
	
	public function get_icon() {
		return 'fa fa-ad';
	}
	
	public function get_categories() {
		return [ 'basic' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Content', 'vixan' ),
			]
		);

		$this->add_control(
			'advg_style',
			[
				'label' => esc_html__( 'Benefit Style', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'advg_stl'  => esc_html__( 'Select Benefit Style', 'vixan' ),
					'advg_stl_1'  => esc_html__( 'Benefit Style One', 'vixan' ),
					'advg_stl_2' => esc_html__( 'Benefit Style Two', 'vixan' )
				],
			]
		);

		$this->add_control(
			'advg_title',
			[
				'label' => esc_html__( 'Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title', 'vixan' ),
			]
		);

		$this->add_control(
			'advg_title2',
			[
				'label' => esc_html__( 'Sub Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your sub-title', 'vixan' ),
			]
		);

		$this->add_control(
			'advg_desc',
			[
				'label' => esc_html__( 'Welcome Note', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Enter your Welcome Note', 'vixan' ),
			]
		);		

		$this->add_control(
			'advg_ftr_img',
			[
				'label' => esc_html__( 'Feature Icon', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'advg_ftr',
			[
				'label' => esc_html__( 'Feature Description', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Enter your valuable feature', 'vixan' ),
			]
		);		

		$this->add_control(
			'advg_ftr_img2',
			[
				'label' => esc_html__( 'Feature Icon', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'advg_ftr2',
			[
				'label' => esc_html__( 'Feature Description', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Enter your valuable feature', 'vixan' ),
			]
		);		

		$this->add_control(
			'advg_ftr_img3',
			[
				'label' => esc_html__( 'Feature Icon', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'advg_ftr3',
			[
				'label' => esc_html__( 'Feature Description', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Enter your valuable feature', 'vixan' ),
			]
		);		

		$this->add_control(
			'advg_ftr_img4',
			[
				'label' => esc_html__( 'Feature Icon', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'advg_ftr4',
			[
				'label' => esc_html__( 'Feature Description', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Enter your valuable feature', 'vixan' ),
			]
		);		
		$this->add_control(
			'advg_prd_img',
			[
				'label' => esc_html__( 'Product Image One', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);		

		$this->add_control(
			'advg_prd_img2',
			[
				'label' => esc_html__( 'Product Image Two', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {


        $settings = $this->get_settings_for_display();
        $advg_ftr = $settings['advg_ftr'];
        $advg_ftr2 = $settings['advg_ftr2'];
        $advg_ftr3 = $settings['advg_ftr3'];
        $advg_ftr4 = $settings['advg_ftr4'];
        $advg_prd_img = $settings['advg_prd_img']['url'];
        $advg_prd_img2 = $settings['advg_prd_img2']['url'];

if($settings['advg_style'] == 'advg_stl_1') {	
echo'<h2 class="disp">'.esc_html__('Section Title', 'vixan').'</h2><section class="add1-area">
     <div class="rt-container">
         <div class="row">
            
             <div class="col-lg-6 rt-pr-50 rt-pr-lg-0">
                 <h2 class="rt-section-title">
                     <span>'. $settings['advg_title'] .'</span>
                         '. $settings['advg_title2'] .'
                 </h2>
                 <p class="rt-mb-0">
                    '. $settings['advg_desc'] .'
                 </p>
                 <div class="rt-spacer-50"></div>';

if(!empty($advg_ftr)) {
	echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
             <div class="icon-thumb ">
                 <img src="'. $settings['advg_ftr_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class=" rt-circle rt-Bshadow-1">
             </div>
             <div class="iconbox-content">
                 <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr'] .'</p>
             </div>
         </div>';

} if(!empty($advg_ftr2)) {
	echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
	         <div class="icon-thumb ">
	             <img src="'. $settings['advg_ftr_img2']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="rt-circle rt-Bshadow-3">
	         </div>
	         <div class="iconbox-content">
	             <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr2'] .'</p>
	         </div>
	     </div>';

} if(!empty($advg_ftr3)) {
        echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
                 <div class="icon-thumb ">
                     <img src="'. $settings['advg_ftr_img3']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="rt-circle rt-Bshadow-2">
                 </div>
                 <div class="iconbox-content">
                     <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr3'] .'</p>
                 </div>
             </div>';

} if(!empty($advg_ftr4)) {
        echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
                     <div class="icon-thumb ">
                         <img src="'. $settings['advg_ftr_img4']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="rt-circle rt-Bshadow-4">
                     </div>
                     <div class="iconbox-content">
                         <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr4'] .'</p>
                     </div>
                 </div>
             </div>';

} 
if(!empty($advg_prd_img2)) {
        echo'<div class="col-lg-6 rt-mb-md-30">
                  <div class="rt-flow-parent text-center rtbgprefix-contain" data-scrollax-parent="true">';

 if(!empty($advg_prd_img2)) {
        echo'<div class="stra_image text-center">
                  <img src="'. $settings['advg_prd_img2']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="">
              </div>';
}
        echo'         <div class="flow-box"></div>
                      <div class="flow-img-item">
                          <img src="'. $settings['advg_prd_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="pulse_animation_image">
                      </div>
                  </div>
              </div>';
}
        echo' </div>
		     </div>
		     
		 </section>
		  <div class="rt-spacer-93 rt-spacer-xs-50"></div>';

} elseif($settings['advg_style'] == 'advg_stl_2') {
echo'<h2 class="disp">'.esc_html__('Section Title', 'vixan').'</h2><section class="content-area-2 ">
    <div class="rt-spacer-105 rt-spacer-xs-80"></div><!-- /.rt-spacer-123 -->
    <div class="rt-container">
        <div class="row">
            <div class="col-lg-6 rt-pr-50 rt-pr-lg-0">
                <h2 class="rt-section-title">
                    <span> '. $settings['advg_title'] .'</span>
                    '. $settings['advg_title2'] .'
                </h2>
                <p class="rt-mb-0">
                    '. $settings['advg_desc'] .'
                </p>
                <div class="rt-spacer-50"></div>';

if(!empty($advg_ftr)) {
	echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
             <div class="icon-thumb ">
                 <img src="'. $settings['advg_ftr_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class=" rt-circle rt-Bshadow-1">
             </div>
             <div class="iconbox-content">
                 <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr'] .'</p>
             </div>
         </div>';

} if(!empty($advg_ftr2)) {
	echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
	         <div class="icon-thumb ">
	             <img src="'. $settings['advg_ftr_img2']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="rt-circle rt-Bshadow-3">
	         </div>
	         <div class="iconbox-content">
	             <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr2'] .'</p>
	         </div>
	     </div>';

} if(!empty($advg_ftr3)) {
        echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
                 <div class="icon-thumb ">
                     <img src="'. $settings['advg_ftr_img3']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="rt-circle rt-Bshadow-2">
                 </div>
                 <div class="iconbox-content">
                     <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr3'] .'</p>
                 </div>
             </div>';

} if(!empty($advg_ftr4)) {
        echo'<div class="rt-single-icon-box   plain-list  rt-mb-30">
                     <div class="icon-thumb ">
                         <img src="'. $settings['advg_ftr_img4']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" class="rt-circle rt-Bshadow-4">
                     </div>
                     <div class="iconbox-content">
                         <p class="f-size-15 line-height-25 rt-mb-0"> '. $settings['advg_ftr4'] .'</p>
                     </div>
                 </div>
             </div>';

}

echo'            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 rt-mb-30">
                <img src="'. $settings['advg_prd_img']['url'] .'" alt="'.get_bloginfo( 'name', 'display' ).'" draggable="false">
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->

    </div><!-- /.rt-container -->
    <div class="rt-spacer-105 rt-spacer-xs-80"></div><!-- /.rt-spacer-93 -->
</section>';	
}	


	}
	
	protected function _content_template() {

    }
	
	
}