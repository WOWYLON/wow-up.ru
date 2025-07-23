<?php
/*
Plugin Name: Contact Info Widget
Description: Contact Info Widget to display contact information.
Author: thememarch
Version: 1.0
Author URI: https://themeforest.net/user/thememarch
Text Domain: thememarch
*/

class thememarch_contact_widget extends WP_Widget {
    var $settings = array( 'title', 'ci_address', 'cl_phone', 'ci_fax', 'ci_openh', 'cl_email', 'ci_webs');

    function __construct() {
        $widget_ops = array('description' => esc_html__('Use this widget to add any type of Contact Details as a widget.', 'thememarch'));
        parent::__construct(false, esc_html__('Contact Info', 'thememarch'), $widget_ops);
}


function widget($args, $instance) {
        $settings = $this->thememarch_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

         echo $before_widget; 
         if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;

            echo '<ul class="cs_footer_contact_list cs_mp0">';

        if ( $ci_address != '' ) {
            echo '<li>
                    <i>
                        <svg
                        width="14"
                        height="19"
                        viewBox="0 0 14 19"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M7 0.0195312C3.14027 0.0195312 0 3.01027 0 6.68621C0 7.78973 0.289693 8.88387 0.840408 9.85434L6.6172 17.8047C6.69411 17.9373 6.84065 18.0195 7 18.0195C7.15935 18.0195 7.30589 17.9373 7.3828 17.8047L13.1617 9.85105C13.7103 8.88387 14 7.78969 14 6.68617C14 3.01027 10.8597 0.0195312 7 0.0195312ZM7 10.0195C5.07014 10.0195 3.50002 8.52418 3.50002 6.68621C3.50002 4.84824 5.07014 3.35289 7 3.35289C8.92986 3.35289 10.5 4.84824 10.5 6.68621C10.5 8.52418 8.92986 10.0195 7 10.0195Z"
                            fill="white"
                        />
                        </svg>
                    </i>';
                    echo $ci_address;
                    echo '</li>';
                    }

        if ( $cl_phone != '' ) {
       echo '<li>
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
                    />
                    <path
                        d="M12.9672 8.93825L14.3493 8.70229C14.132 7.4326 13.5328 6.28277 12.6227 5.36889C11.6601 4.40633 10.4428 3.79957 9.10199 3.6123L8.90723 5.00184C9.9447 5.14791 10.8885 5.61609 11.6339 6.36142C12.338 7.06555 12.7987 7.95696 12.9672 8.93825Z"
                        fill="white"
                    />
                    <path
                        d="M15.1294 2.93344C13.5338 1.33791 11.5151 0.330398 9.28656 0.0195312L9.0918 1.40907C11.0169 1.67874 12.7623 2.55141 14.1406 3.92597C15.4477 5.23311 16.3054 6.88483 16.6163 8.70134L17.9983 8.46538C17.635 6.36047 16.6425 4.45033 15.1294 2.93344Z"
                        fill="white"
                    />
                    </svg>
                </i>';
             echo $cl_phone;
             echo '</li>';
              }            
             
        if ( $cl_email != '' ) {
            echo '<li>
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
                        />
                        <path
                            d="M0.704883 2.99347L8.08077 7.91091C8.35998 8.09707 8.67997 8.19012 8.99996 8.19012C9.31999 8.19012 9.64002 8.09703 9.91923 7.91091L17.2951 2.99347C17.7365 2.69939 18 2.2072 18 1.67599C18 0.762594 17.2569 0.0195312 16.3435 0.0195312H1.65646C0.743098 0.0195664 0 0.762629 0 1.67687C0 2.2072 0.263531 2.69939 0.704883 2.99347Z"
                            fill="white"
                        />
                        </svg>
                    </i>
                    <a href="mailto:">';
              echo $cl_email;
              echo '</a></li>';
             }                                    

            echo'</ul>';
       echo $after_widget;      
    }
    
    


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'ci_address', 'cl_phone', 'cl_email') as $setting )
            $new_instance[$setting] = strip_tags( $new_instance[$setting] );
        // Users without unfiltered_html cannot update this arbitrary HTML field
        if ( !current_user_can( 'unfiltered_html' ) )
            $new_instance['ci_des'] = $old_instance['ci_des'];
        return $new_instance;
    }


    function thememarch_get_settings() {
        // Set the default to a blank string
        $settings = array_fill_keys( $this->settings, '' );
        // Now set the more specific defaults
        return $settings;
    }

    function form($instance) {
        $instance = wp_parse_args( $instance, $this->thememarch_get_settings() );
        extract( $instance, EXTR_SKIP );
?>

    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:','thememarch'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>    
    <p>
        <label for="<?php echo $this->get_field_id('ci_address'); ?>"><?php esc_html_e('Contact Address:','thememarch'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('ci_address'); ?>" value="<?php echo esc_attr( $ci_address ); ?>" placeholder="<?php echo esc_attr_x( '152, New South Wales, Australia', 'placeholder', 'thememarch'); ?>" class="widefat" id="<?php echo $this->get_field_id('ci_address'); ?>" />
    </p>    
    <p>
        <label for="<?php echo $this->get_field_id('cl_phone'); ?>"><?php esc_html_e('Contact Phone No:','thememarch'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('cl_phone'); ?>" value="<?php echo esc_attr( $cl_phone ); ?>" placeholder="<?php echo esc_attr_x( '001 (407) 901-6400', 'placeholder', 'thememarch'); ?>" class="widefat" id="<?php echo $this->get_field_id('cl_phone'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('cl_email'); ?>"><?php esc_html_e('Contact E-mail:','thememarch'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('cl_email'); ?>" value="<?php echo esc_attr( $cl_email ); ?>" placeholder="<?php echo esc_attr_x( 'Yourmail@gmail.com', 'placeholder', 'thememarch'); ?>" class="widefat" id="<?php echo $this->get_field_id('cl_email'); ?>" />
    </p>                 

    <?php 

    }
}

function thememarch_register_contact_widget() {
 
    register_widget( 'thememarch_contact_widget' );
 
}
add_action( 'widgets_init', 'thememarch_register_contact_widget' );
