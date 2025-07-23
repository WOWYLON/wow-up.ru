<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) ) {
	return;
}

//Widget Ordering in Top
function add_elementor_widget_categories( $elements_manager ) {

	$categories = [];
    $categories['vixan-category'] =
		
		[
			'title' => esc_html__( 'Vixan Widgets', 'vixan' ),
			'icon' => 'fa fa-plug',
			'active' => true,
		];

	$old_categories = [];		
	$old_categories = $elements_manager->get_categories();
    $categories = array_merge($categories, $old_categories);

    $set_categories = function ( $categories ) {
        $this->categories = $categories;
    };

    $set_categories->call( $elements_manager, $categories );

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );

//Widget-Breadcrumb
class Vixan_Widget_Breadcrumb {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-breadcrumb.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_brdc() );
	}

}

add_action( 'init', 'vixan_elementor_brc_init' );
function vixan_elementor_brc_init() {
	Vixan_Widget_Breadcrumb::get_instance();
}


//Widget-Slider
class Vixan_Widget_Slider {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-slider.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_sld() );
	}

}

add_action( 'init', 'vixan_elementor_init' );
function vixan_elementor_init() {
	Vixan_Widget_Slider::get_instance();
}


//Widget-Hero-Banner
class Vixan_Widget_Hero {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-tophero.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_Hero_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_hero_init' );
function vixan_elementor_hero_init() {
	Vixan_Widget_Hero::get_instance();
}

//Widget-Our Mission
class Vixan_Widget_OurMission {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-mission.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_OurMission_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_mission_init' );
function vixan_elementor_mission_init() {
	Vixan_Widget_OurMission::get_instance();
}


//Widget-About_Us
class Vixan_Widget_Aboutus {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-aboutus.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_abus() );
	}

}

add_action( 'init', 'vixan_elementor_about_init' );
function vixan_elementor_about_init() {
	Vixan_Widget_Aboutus::get_instance();
}

//Widget-Services
class Vixan_Widget_Services {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-our-services.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_osrv() );
	}

}

add_action( 'init', 'vixan_elementor_srv_init' );
function vixan_elementor_srv_init() {
	Vixan_Widget_Services::get_instance();
}

//Widget-Gallery
class Vixan_Widget_Gallery {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-gallery.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_gallery() );
	}

}

add_action( 'init', 'vixan_elementor_gallery_init' );
function vixan_elementor_gallery_init() {
	Vixan_Widget_Gallery::get_instance();
}

//Widget-Team
class Vixan_Widget_Team {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-team.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_team() );
	}

}

add_action( 'init', 'vixan_elementor_team_init' );
function vixan_elementor_team_init() {
	Vixan_Widget_Team::get_instance();
}


//Widget-Blog
class Vixan_Widget_Blog {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-blog.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_blog() );
	}

}

add_action( 'init', 'vixan_elementor_blog_init' );
function vixan_elementor_blog_init() {
	Vixan_Widget_Blog::get_instance();
}


//Widget-Contact
class Vixan_Widget_Contact {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-contact.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_contact() );
	}

}

add_action( 'init', 'vixan_elementor_contact_init' );
function vixan_elementor_contact_init() {
	Vixan_Widget_Contact::get_instance();
}


//Widget-FAQ
class Vixan_Widget_FAQ {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-faq.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_FAQ_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_faq_init' );
function vixan_elementor_faq_init() {
	Vixan_Widget_FAQ::get_instance();
}


//Widget-Testimonials
class Vixan_Widget_Testimonials {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-testimonials.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_Testimonials_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_testimonials_init' );
function vixan_elementor_testimonials_init() {
	Vixan_Widget_Testimonials::get_instance();
}


//Widget-Clients
class Vixan_Widget_Clients {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-clients.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_clients() );
	}

}

add_action( 'init', 'vixan_elementor_clients_init' );
function vixan_elementor_clients_init() {
	Vixan_Widget_Clients::get_instance();
}


//Widget-Video
class Vixan_Widget_vd {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-video.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\vixan_widget_video() );
	}

}

add_action( 'init', 'vixan_elementor_video_init' );
function vixan_elementor_video_init() {
	Vixan_Widget_vd::get_instance();
}

//Widget-Awards
class Vixan_Widget_Awards {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-awards.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Custom_Awards_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_awards_init' );
function vixan_elementor_awards_init() {
	Vixan_Widget_Awards::get_instance();
}


//Widget-FunFact
class Vixan_Widget_FunFact {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-funfact.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_FunFact_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_funfact_init' );
function vixan_elementor_funfact_init() {
	Vixan_Widget_FunFact::get_instance();
}


//Widget-Subscriptions
class Vixan_Widget_Subscriptions {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-subscriptions.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_Subscriptions_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_subs_init' );
function vixan_elementor_subs_init() {
	Vixan_Widget_Subscriptions::get_instance();
}


//Widget-Idea
class Vixan_Widget_Idea {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-ideation.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_Idea_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_idea_init' );
function vixan_elementor_idea_init() {
	Vixan_Widget_Idea::get_instance();
}

//Widget-SliderText
class Vixan_Widget_SliderText{

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-slidertext.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_Slidertext_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_sldtxt_init' );
function vixan_elementor_sldtxt_init() {
	Vixan_Widget_SliderText::get_instance();
}


//Widget-Features
class Vixan_Widget_Features{

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-features.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_Features_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_fetr_init' );
function vixan_elementor_fetr_init() {
	Vixan_Widget_Features::get_instance();
}


//Widget-Story
class Vixan_Widget_Story{

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-story.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Custom_Story_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_story_init' );
function vixan_elementor_story_init() {
	Vixan_Widget_Story::get_instance();
}


//Widget-WorkingProcess
class Vixan_Widget_WorkingProcess{

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('widget-workingprocess.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Vixan_wps_Widget() );
	}

}

add_action( 'init', 'vixan_elementor_wps_init' );
function vixan_elementor_wps_init() {
	Vixan_Widget_WorkingProcess::get_instance();
}


