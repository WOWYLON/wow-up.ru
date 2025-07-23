<?php

namespace Elementor;

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}

class Vixan_Hero_Widget extends Widget_Base {
	
	public function get_name() {
		return 'widget-hero';
	}
	
	public function get_title() {
		return 'Banner Hero';
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
				'label' => esc_html__( 'Hero Content', 'vixan' ),
			]
		);

		$this->add_control(
			'bnhr_style',
			[
				'label' => esc_html__( 'Choose Hero Style', 'vixan' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'bnhr_stl_1'  => esc_html__( 'Style One', 'vixan' ),
					'bnhr_stl_2' => esc_html__( 'Style Two', 'vixan' ),
					'bnhr_stl_3' => esc_html__( 'Style Three', 'vixan' ),
					'bnhr_stl_4' => esc_html__( 'Style Four', 'vixan' ),
					'bnhr_stl_5' => esc_html__( 'Style Five', 'vixan' )
				],
				'default' => 'bnhr_stl_1',
				'placeholder' => esc_html__( 'Choose Banner Hero Style', 'vixan' ),
			]
		);

		$this->add_control(
			'vixan_hero_img',
			[
				'label' => esc_html__( 'Hero Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bnhr_style' => 'bnhr_stl_1',
				],
				'placeholder' => esc_html__( 'Enter Hero Image', 'vixan' ),
			]
		);

		$this->add_control(
			'vixan_hero_img3',
			[
				'label' => esc_html__( 'Hero Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bnhr_style' => 'bnhr_stl_2',
				],
				'placeholder' => esc_html__( 'Enter Hero Image', 'vixan' ),
			]
		);

		$this->add_control(
			'vixan_hero_img2',
			[
				'label' => esc_html__( 'Hero Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bnhr_style' => 'bnhr_stl_4',
				],
				'placeholder' => esc_html__( 'Enter Hero Image', 'vixan' ),
			]
		);

		$this->add_control(
			'vixan_hero_img5',
			[
				'label' => esc_html__( 'Hero Image', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bnhr_style' => 'bnhr_stl_5',
				],
				'placeholder' => esc_html__( 'Enter Hero Image', 'vixan' ),
			]
		);

		$this->add_control(
			'hero1_tagline',
			[
				'label' => esc_html__( 'Tagline', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'OWelcome to our digital agency!', 'vixan' ),
				'placeholder' => esc_html__( 'Enter Hero Tagline', 'vixan' ),
			]
		);

		$this->add_control(
			'hero1_title1',
			[
				'label' => esc_html__( 'Title One', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Startup Sprint Accelerating', 'vixan' ),
				'placeholder' => esc_html__( 'Enter Hero Title', 'vixan' ),
			]
		);

		$this->add_control(
			'hero1_title2',
			[
				'label' => esc_html__( 'Title Two', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Digital Growth', 'vixan' ),
				'placeholder' => esc_html__( 'Enter Hero Title', 'vixan' ),
			]
		);
		
		$this->add_control(
			'hero1_content',
			[
				'label' => esc_html__( 'Content', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Welcome to our digital agency! We specialize in helping businesses like yours succeed online. From website design and development to digital marketing and advertising, we have the tools.', 'vixan' ),
				'placeholder' => esc_html__( 'Enter Hero Content', 'vixan' ),
			]
		);

		$this->add_control(
			'hero5_title1',
			[
				'label' => esc_html__( 'Title One', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'CREATIVE', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_5',
				],
				'placeholder' => esc_html__( 'Enter Hero Title', 'vixan' ),
			]
		);

		$this->add_control(
			'hero5_title2',
			[
				'label' => esc_html__( 'Title Two', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'PORTFOLIO x', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_5',
				],
				'placeholder' => esc_html__( 'Enter Hero Title', 'vixan' ),
			]
		);
		
		$this->add_control(
			'hero5_content',
			[
				'label' => esc_html__( 'Content', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Welcome to our digital agency! We specialize in helping businesses like yours succeed online. From website design and development to digital marketing and advertising, we have the tools.', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_5',
				],
				'placeholder' => esc_html__( 'Enter Hero Content', 'vixan' ),
			]
		);

		$this->add_control(
			'hero_btn_txt',
			[
				'label' => esc_html__( 'Button Text', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Project', 'vixan' ),
				'placeholder' => esc_html__( 'Enter Button Text', 'vixan' ),
			]
		);
		$this->add_control(
			'hero_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
				'placeholder' => esc_html__( 'Enter Button URL', 'vixan' ),
			]
		);

		$this->add_control(
			'ab_hero_title',
			[
				'label' => esc_html__( 'About Hero Title', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'How Our Agency is Transforming Businesses and Brands through Online Solutions', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_3',
				],
				'placeholder' => esc_html__( 'Enter Hero Title', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_spn_title1',
			[
				'label' => esc_html__( 'About Spinning Title One', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Vixan Digital Agency', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_3',
				],
				'placeholder' => esc_html__( 'Enter Spinning Title', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_spn_title2',
			[
				'label' => esc_html__( 'About Spinning Title Two', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Vixan Digital Agency', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_3',
				],
				'placeholder' => esc_html__( 'Enter Spinning Title', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_logo',
			[
				'label' => esc_html__( 'Hero Logo', 'vixan' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'bnhr_style' => 'bnhr_stl_3',
				],
				'placeholder' => esc_html__( 'Enter Hero Logo', 'vixan' ),
			]
		);

		$this->add_control(
			'ab_hero_sl_name1',
			[
				'label' => esc_html__( 'Social Media Name', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_2',
				],
				'placeholder' => esc_html__( 'Enter the Name', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_sl_url1',
			[
				'label' => esc_html__( 'Social Media URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_2',
				],
				'placeholder' => esc_html__( 'Enter the Link', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_sl_name2',
			[
				'label' => esc_html__( 'Social Media Name', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Behance', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_2',
				],
				'placeholder' => esc_html__( 'Enter the Name', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_sl_url2',
			[
				'label' => esc_html__( 'Social Media URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_2',
				],
				'placeholder' => esc_html__( 'Enter the Link', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_sl_name3',
			[
				'label' => esc_html__( 'Social Media Name', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Dribbble', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_2',
				],
				'placeholder' => esc_html__( 'Enter the Name', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_sl_url3',
			[
				'label' => esc_html__( 'Social Media URL', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_2',
				],
				'placeholder' => esc_html__( 'Enter the Link', 'vixan' ),
			]
		);

		$this->add_control(
			'ab_hero_sl_fb',
			[
				'label' => esc_html__( 'Facefook Link', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_3',
				],
				'placeholder' => esc_html__( 'Enter Facefook Link', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_sl_ld',
			[
				'label' => esc_html__( 'Linkedin Link', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_3',
				],
				'placeholder' => esc_html__( 'Enter Linkedin Link', 'vixan' ),
			]
		);
		$this->add_control(
			'ab_hero_sl_tw',
			[
				'label' => esc_html__( 'Twitter Link', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'vixan' ),
				'condition' => [
					'bnhr_style' => 'bnhr_stl_3', 
				],
				'placeholder' => esc_html__( 'Enter Twitter Link', 'vixan' ),
			]
		);

		$this->add_control(
			'ex_class',
			[
				'label' => esc_html__( 'Extra Class', 'vixan' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter Extra Class', 'vixan' ),
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {


        $settings = $this->get_settings_for_display();
		
if($settings['bnhr_style'] == 'bnhr_stl_1') { 
	echo '<h2 class="disp">Section Heading</h2><div class="cs_height_219 cs_height_lg_120"></div>
		<section class="'. $settings['ex_class'] .'">
			<div class="cs_hero cs_style4">
			<div class="cs_text_hero">
				<div class="cs_short_title anim_text_upanddowns">
				<h6>'. $settings['hero1_tagline'] .'</h6>
				<div class="cs_hr_design cs_color_1 cs_color_1"></div>
				</div>
				<div class="anim_banner_text_left">
				<h1 class="cs_title_text cs_mp0">
				'. $settings['hero1_title1'] .'
				</h1>
				</div>
				<div class="cs_text_section_2">
				<div class="anim_banner_text_right">
					<h1 class="cs_title_text cs_mp0">'. $settings['hero1_title2'] .'</h1>
				</div>
				<p class="cs_detils_text cs_mp0 anim_subtext">
				'. $settings['hero1_content'] .'
				</p>
				</div>
			</div>
		</div>
	</section>';

} elseif ($settings['bnhr_style'] == 'bnhr_stl_2') { 
	echo'<h2 class="disp">Section Heading</h2><section>
		<div class="cs_hero cs_style2">
		<div
			class="cs_hero_bg cs_bg cs_parallax_bg"
			data-src="'.$settings['vixan_hero_img3']['url'].'"
		></div>
		<div class="textupdowns">
			<div class="cs_left_text">
			<span class="cs_arrow">
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
				></path></svg
			></span>
			<p>SCROLL DOWN</p>
			</div>
		</div>

		<div class="container">
			<div class="cs_hero_text">
			<div class="anim_banner_text_left">
				<h1 class="cs_hero_title cs_hero_title_lg">'. $settings['hero1_title1'] .'</h1>
			</div>
			<div class="anim_banner_text_right">
				<h1 class="cs_hero_title cs_hero_title_lg">'. $settings['hero1_title2'] .'</h1>
			</div>
			<div class="cs_height_50 cs_height_lg_50"></div>
			<div class="cs_hero_subtitle">
				<div class="anim_subtext">
				<p class="cs_hero_mini_details">
				'. $settings['hero1_content'] .'
				</p>
				</div>
				<div class="cs_section_heading_right cs_btn_anim">
				<a
					href="'. $settings['hero_btn_url'] .'"
					class="cs_btn cs_style_1 cs_color_1"
				>
					<span>'. $settings['hero_btn_txt'] .'</span>

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
					></path>
					</svg>
				</a>
				</div>
			</div>
			</div>
		</div>
		<div class="cs_right_text">
			<a href="'. $settings['ab_hero_sl_url1'] .'"><p class="colorChanegs t1">'. $settings['ab_hero_sl_name1'] .'</p></a>
			<a href="'. $settings['ab_hero_sl_url2'] .'"><p class="colorChanegs t2">'. $settings['ab_hero_sl_name1'] .'</p></a>
			<a href="'. $settings['ab_hero_sl_url3'] .'"><p class="colorChanegs t3">'. $settings['ab_hero_sl_name1'] .'</p></a>
		</div>
		</div>
	</section>';
} elseif ($settings['bnhr_style'] == 'bnhr_stl_3') {
	echo'<h2 class="disp">Section Heading</h2><div class="cs_height_219 cs_height_lg_120"></div>
		<section class="'. $settings['ex_class'] .'">
			<div class="container">
			<div class="cs_section_heading cs_style_1 cs_type_1">
				<div class="cs_section_heading_text">
				<h2 class="cs_section_title anim_text_writting">
					'. $settings['ab_hero_title'] .'
				</h2>
				</div>
				<div class="cs_section_heading_right">
				<div class="cs_animated_badge">
					<div class="rounded_text rotating">
					<svg viewBox="0 0 200 200">
						<path
						id="textPath"
						d="M 85,0 A 85,85 0 0 1 -85,0 A 85,85 0 0 1 85,0"
						transform="translate(100,100)"
						fill="none"
						stroke-width="0"
						></path>
						<g font-size="22.1px">
						<text text-anchor="start">
							<textPath
							class="coloring"
							xlink:href="#textPath"
							startOffset="0%"
							>
								'. $settings['ab_spn_title1'] .' . '. $settings['ab_spn_title1'] .' . &nbsp;
							</textPath>
						</text>
						</g>
					</svg>
					</div>
					<div class="position-absolute cs_ceneter_text">
					<img src="'. $settings['ab_hero_logo']['url'] .'" alt="'. get_bloginfo('name', 'display') .'">
					</div>
				</div>
				</div>
			</div>
			</div>
		</section>
		
		<div class="cs_height_100 cs_height_lg_60"></div>';

} elseif ($settings['bnhr_style'] == 'bnhr_stl_4') {
	echo' <h2 class="disp">Section Heading</h2><div class="cs_height_219 cs_height_lg_120"></div>

          <section class="cs_shape_wrap_3 '. $settings['ex_class'] .'">
            <div class="cs_hero cs_style5">
              <div class="container">
                <div class="cs_marketing_agency_section cs_style_1">
                  <div class="cs_text_img">
                    <h1 class="cs_banner_text cs_mp0 anim_banner_text_left">
                      	'. $settings['hero1_title1'] .'
                    </h1>
                    <div class="cs_img">
                      <img src="'.$settings['vixan_hero_img2']['url'].'" alt="'.get_bloginfo('name', 'display').'">
                    </div>
                  </div>
                  <div class="cs_height_lg_20"></div>

                  <div class="cs_text_btn anim_div_ShowDowns">
                    <div class="cs_hero_btn_wrap">
                      <div class="cs_round_btn_wrap">
                        <a
                          href="'. $settings['hero_btn_url'] .'"
                          class="cs_hero_btn cs_round_btn btn-item"
                          ><span></span> '. $settings['hero_btn_txt'] .'</a
                        >
                      </div>
                    </div>
                    <h1 class="cs_banner_text cs_text_size cs_m0 anim_banner_text_right" >
						'. $settings['hero1_title2'] .'
                    </h1>
                  </div>
                  <p class="cs_subtext anim_subtext">
				  	'. $settings['hero1_content'] .'
                  </p>
                </div>
              </div>

              <div class="cs_icon_section">
                <p class="cs_font_16 text-uppercase m-0">FOLLOW US</p>
                <div class="cs_hr_design"></div>
                <div class="cs_icon_img">
                  <a href="'. $settings['ab_hero_sl_fb'] .'">
                    <img src="'. get_template_directory_uri() .'/images/fb_1.png" alt="'. get_bloginfo('name', 'display') .'">
                  </a>
                  <a href="'. $settings['ab_hero_sl_ld'] .'">
                    <img src="'. get_template_directory_uri() .'/images/linedin_1.png" alt="'. get_bloginfo('name', 'display') .'">
                  </a>
                  <a href="'. $settings['ab_hero_sl_tw'] .'">
                    <img src="'. get_template_directory_uri() .'/images/twitter_1.png" alt="'. get_bloginfo('name', 'display') .'">
                  </a>
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
                    d="M54.7532 1.16162C47.1932 42.2265 41.0646 48.3548 0 55.9147C41.065 63.4746 47.1932 69.6029 54.7532 110.668C62.3131 69.6029 68.4414 63.4746 109.506 55.9147C68.4414 48.3548 62.3128 42.2265 54.7532 1.16162Z"
                    fill="#454545"
                  ></path>
                  <path
                    d="M114.179 78.1968C109.372 104.312 105.474 108.21 79.3584 113.018C105.474 117.825 109.372 121.723 114.179 147.838C118.987 121.723 122.885 117.825 149 113.018C122.884 108.21 118.987 104.312 114.179 78.1968Z"
                    fill="#454545"
                  ></path>
                </g>
              </svg>
            </div>
          </section>';
} elseif ($settings['bnhr_style'] == 'bnhr_stl_5') {
	echo'<section><h2 class="disp">Section Heading</h2>
			<div class="cs_hero cs_style3 cs_bg_color">
			<div class="cs_banner_img">
				<img
				src="'.$settings['vixan_hero_img5']['url'].'" alt="'.get_bloginfo('name', 'display').'"
				class="h-100 w-100">
			</div>
			<div class="container">
				<div class="cs_hero_text">
				<h1 class="cs_hero_title anim_banner_text_left">'. $settings['hero5_title1'] .'</h1>
				<h1 class="cs_hero_subTitle anim_banner_text_right">
				'. $settings['hero5_title2'] .'
				</h1>
				<p class="cs_hero_p cs_subtext anim_subtext">
				'. $settings['hero5_content'] .'
				</p>
				</div>
			</div>
			</div>
		</section>';	
}				 

	}
	
	protected function _content_template() {

    }
	
	
}