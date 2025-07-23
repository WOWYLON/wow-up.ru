<?php
namespace Elementor;

class vixan_widget_contact extends Widget_Base {
	
	public function get_name() {
		return 'widget-cnt';
	}
	
	public function get_title() {
		return 'Contact';
	}
	
	public function get_icon() {
		return 'eicon-envelope';
	}
	
	public function get_categories() {
		return [ 'vixan-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Contact Content', 'vixan' ),
			]
		);

		$this->add_control(
			'cnt_style',
			[
				'label' => esc_html__( 'Contact Styles', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'cnt_stl'  => esc_html__( 'Select Contact Style', 'vixan' ),
					'cnt_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'cnt_stl_2' => esc_html__( 'Style Two', 'vixan' ),
					'cnt_stl_3' => esc_html__( 'Style Three', 'vixan' )
				],
				'default' => 'cnt_stl_2',
			]
		);

		$this->add_control(
			'cnt_tagline',
			[
				'label' => esc_html__( 'Contact Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact Us', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Tagline', 'vixan' ),
			]
		);

		$this->add_control(
			'cnt_title',
			[
				'label' => esc_html__( 'Contact Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Get in Touch', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Title', 'vixan' ),
			]
		);						

		$this->add_control(
			'cnt_fsrtc',
			[
				'label' => esc_html__( 'Contact Form Shortcode From Contact Form-7', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Shortcode', 'vixan' ),
			]
		);
		$this->add_control(
			'cnt_map',
			[
				'label' => esc_html__( 'Map Shortcode From ', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Shortcode', 'vixan' ),
			]
		);

		$this->add_control(
			'cnt_adr_title',
			[
				'label' => esc_html__( 'Address Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Address', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Address Title', 'vixan' ),
			]
		);
		
		$this->add_control(
			'cnt_adr',
			[
				'label' => esc_html__( 'Address', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '46 JOHN ST TORONTO', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Address', 'vixan' ),
			]
		);

		$this->add_control(
			'cnt_ph_title',
			[
				'label' => esc_html__( 'Phone Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Phone', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Phone Title', 'vixan' ),
			]
		);
		
		$this->add_control(
			'cnt_ph_no',
			[
				'label' => esc_html__( 'Phone No', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Phone', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Phone No', 'vixan' ),
			]
		);
		
		$this->add_control(
			'cnt_mail_title',
			[
				'label' => esc_html__( 'Email Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Email', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Email Title', 'vixan' ),
			]
		);
		
		$this->add_control(
			'cnt_mail',
			[
				'label' => esc_html__( 'Email', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'yourmail@gmail.com', 'vixan' ),
				'condition' => [
					'cnt_style' => 'cnt_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Email', 'vixan' ),
			]
		);
		$this->add_control(
			'cnt_sec_img',
			[
				'label' => esc_html__( 'Background Image', 'vixan' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
				'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'cnt_style' => 'cnt_stl_2',
				],
				'placeholder' => esc_html__( 'Upload Background Image', 'vixan' ),
			]
		);

		$this->add_control(
			'cnt_sec_title',
			[
				'label' => esc_html__( 'Section Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter Title', 'vixan' ),
			]
		);

		$this->add_control(
			'cnt_btn_txt',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Button Text', 'vixan' ),
			]
		);
		
		$this->add_control(
			'cnt_btn_url',
			[
				'label' => esc_html__( 'Button Url', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter Button Url', 'vixan' ),
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
	$cnt_adr = $settings['cnt_adr'];
	$cnt_ph_no = $settings['cnt_ph_no'];
	$cnt_mail = $settings['cnt_mail'];

	if($settings['cnt_style'] == 'cnt_stl_1') {
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_150 cs_height_lg_120"></div>

		<section>
		<div class="container">
			<div class="cs_contact_ms">
			<div class="cs_contact">
				<div class="cs_contact_text">
				<p class="cs_contact_subtitle anim_text_upanddowns">
					'. $settings['cnt_tagline'] .'
				</p>
				<h1 class="cs_contact_title anim_text_writting">
					'. $settings['cnt_title'] .'
				</h1>
				</div>
				<div class="cs_height_80 cs_height_lg_20"></div>
				<div class="cs_from anim_div_ShowDowns">
					'. do_shortcode($settings['cnt_fsrtc']) .'
				</div>
			</div>
			<div class="cs_contact_section_2 anim_div_ShowRightSide">
				<div
				class="cs_google_map cs_bg"
				data-src="assets/img/map_img.jpg"
				>
				'. do_shortcode($settings['cnt_map']) .'
				</div>
				<div class="cs_height_50 cs_height_lg_180"></div>
				<div class="row">';
if(!empty($cnt_adr)) {				
	echo'			<div class="col-md-4">
						<div class="cs_icon">
						<a
							href="https://www.google.com/maps"
							class="cs_icon_style"
						>
							<i>
							<svg
								width="14"
								height="19"
								viewBox="0 0 14 19"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
								d="M7 0.0195312C3.14027 0.0195312 0 3.01027 0 6.68621C0 7.78973 0.289693 8.88387 0.840408 9.85434L6.6172 17.8047C6.69411 17.9373 6.84065 18.0195 7 18.0195C7.15935 18.0195 7.30589 17.9373 7.3828 17.8047L13.1617
										9.85105C13.7103 8.88387 14 7.78969 14 6.68617C14 3.01027 10.8597 0.0195312 7 0.0195312ZM7 10.0195C5.07014 10.0195 3.50002 8.52418 3.50002 6.68621C3.50002 4.84824 5.07014 3.35289 7 3.35289C8.92986 3.35289 10.5 4.84824 10.5 6.68621C10.5
										8.52418 8.92986 10.0195 7 10.0195Z"
								fill="white"
								></path>
							</svg>
							</i>
						</a>
						<div class="cs_icon_text">
							<h6 class="cs_icon_title">'. $settings['cnt_adr_title'] .'</h6>
							<p class="cs_icon_subtitle">'. $settings['cnt_adr'] .'</p>
						</div>
						</div>
					</div>';
} if(!empty($cnt_ph_no)) {					
	echo'			<div class="col-md-4">
						<div class="cs_icon">
						<a href="tel:(406) 555-0120" class="cs_icon_style">
							<i>
							<svg
								width="18"
								height="19"
								viewBox="0 0 18 19"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
								d="M13.6837 11.9266C13.0957 11.3461 12.3616 11.3461 11.7773 11.9266C11.3316 12.3686 10.8859 12.8105 10.4477 13.26C10.3278 13.3836 10.2267 13.4098 10.0806 13.3274C9.79225 13.1701 9.48513 13.0427 9.20797 12.8704C7.91581 12.0577 6.8334 11.0127 5.87458 9.83668C5.39891 9.2524 4.97568 8.62692 4.6798 7.92279C4.61987 7.78046 4.63111 7.68683 4.74721 7.57072C5.19292 7.14 5.62738 6.69805 6.06559 6.25609C6.67609 5.64185 6.67609 4.92273 6.06185 4.30474C5.71353 3.95268 5.3652 3.6081 5.01688 3.25604C4.65733 2.89648 4.30151 2.53318 3.93821 2.17736C3.35018 1.60432 2.61609 1.60432 2.03181 2.18111C1.58236 2.62306 1.15164 3.07626 0.694705 3.51072C0.271476 3.91148 0.0579884 4.40212 0.0130438 4.97517C-0.0581186 5.90777 0.17035 6.78794 0.492454 7.64563C1.15164 9.42095 2.15541 10.9978 3.37266 12.4435C5.01688 14.3986 6.97947 15.9454 9.27539 17.0615C10.3091 17.5634 11.3803 17.9492 12.5451 18.0129C13.3466 18.0578 14.0433 17.8556 14.6013 17.2301C14.9834 16.8031 15.4141 16.4136 15.8186 16.0053C16.4178 15.3986 16.4216 14.6645 15.8261 14.0652C15.1145 13.3499 14.3991 12.6382 13.6837 11.9266Z"
								fill="white"
								></path>
								<path
								d="M12.9672 8.93825L14.3493 8.70229C14.132 7.4326 13.5328 6.28277 12.6227 5.36889C11.6601 4.40633 10.4428 3.79957 9.10199 3.6123L8.90723 5.00184C9.9447 5.14791 10.8885 5.61609 11.6339 6.36142C12.338 7.06555 12.7987 7.95696 12.9672 8.93825Z"
								fill="white"
								></path>
								<path
								d="M15.1294 2.93344C13.5338 1.33791 11.5151 0.330398 9.28656 0.0195312L9.0918 1.40907C11.0169 1.67874 12.7623 2.55141 14.1406 3.92597C15.4477 5.23311 16.3054 6.88483 16.6163 8.70134L17.9983 8.46538C17.635 6.36047 16.6425 4.45033 15.1294 2.93344Z"
								fill="white"
								></path>
							</svg>
							</i>
						</a>
						<div class="cs_icon_text">
							<h6 class="cs_icon_title">'. $settings['cnt_ph_title'] .'</h6>
							<p class="cs_icon_subtitle">'. $settings['cnt_ph_no'] .'</p>
						</div>
						</div>
					</div>';
} if(!empty($cnt_mail)) {					
	echo'			<div class="col-md-4">
						<div class="cs_icon">
						<a href="mailto:vixan@email.com" class="cs_icon_style">
							<i>
							<svg
								width="18"
								height="14"
								viewBox="0 0 18 14"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
								d="M10.5043 8.78757C10.0565 9.08612 9.53631 9.24394 9 9.24394C8.46373 9.24394 7.94356 9.08612 7.49574 8.78757L0.119848 3.87016C0.0789258 3.84288 0.0390586 3.81444 0 3.78519V11.8429C0 12.7667 0.749707 13.4999 1.65702 13.4999H16.3429C17.2668 13.4999 18 12.7502 18 11.8429V3.78516C17.9608 3.81448 17.9209 3.84299 17.8799 3.87031L10.5043 8.78757Z"
								fill="white"
								></path>
								<path
								d="M0.704883 2.99347L8.08077 7.91091C8.35998 8.09707 8.67997 8.19012 8.99996 8.19012C9.31999 8.19012 9.64002 8.09703 9.91923 7.91091L17.2951 2.99347C17.7365 2.69939 18 2.2072 18 1.67599C18 0.762594 17.2569 0.0195312 16.3435 0.0195312H1.65646C0.743098 0.0195664 0 0.762629 0 1.67687C0 2.2072 0.263531 2.69939 0.704883 2.99347Z"
								fill="white"
								></path>
							</svg>
							</i>
						</a>
						<div class="cs_icon_text">
							<h6 class="cs_icon_title">'. $settings['cnt_mail_title'] .'</h6>
							<p class="cs_icon_subtitle">'. $settings['cnt_mail'] .'</p>
						</div>
						</div>
					</div>';
}					
	echo'		</div>
			</div>
			</div>
		</div>
		</section>
		<div class="cs_height_150 cs_height_lg_60"></div>';

	} elseif($settings['cnt_style'] == 'cnt_stl_2') {
		echo '<section class="cs_cntmarg">
          <div
            class="cs_bg cs_bg_img_about_titile"
            data-src="'. $settings['cnt_sec_img']['url'] .'"
          ></div>
          <div class="container">
            <div class="cs_learning_project">
              <div class="cs_section_heading cs_style_1">
                <div class="cs_section_heading_text">
                  <h3 class="cs_section_title_3 cs_color_2 anim_heading_title">
				  '. $settings['cnt_sec_title'] .'
                  </h3>
                </div>
                <div class="cs_section_heading_right cs_btn_anim">
                  <a href="'. $settings['cnt_btn_url'] .'" class="cs_btn cs_style_1 cs_color_2">
                    <span>'. $settings['cnt_btn_txt'] .'</span>
                    <svg
                      width="19"
                      height="13"
                      viewBox="0 0 19 13"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>';		

	} elseif($settings['cnt_style'] == 'cnt_stl_3') {
		echo '<section>
				<div class="container">
				<div class="cs_learning_project">
					<div class="cs_section_heading cs_style_1">
					<div class="cs_section_heading_text">
						<h3 class="cs_section_title_3 anim_heading_title">
							'. $settings['cnt_sec_title'] .'
						</h3>
					</div>
					<div class="cs_section_heading_right cs_btn_anim">
						<a href="'. $settings['cnt_btn_url'] .'" class="cs_btn cs_style_1 cs_color_1">
						<span>'. $settings['cnt_btn_txt'] .'</span>
						<svg
							width="19"
							height="13"
							viewBox="0 0 19 13"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
							d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
							fill="currentColor"
							/>
						</svg>
						</a>
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