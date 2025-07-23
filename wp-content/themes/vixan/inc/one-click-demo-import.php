<?php 
if ( ! function_exists( 'vixan_import_files' ) ) :
function vixan_import_files() {
  return array(

    // vixan Demo  
    array(
      'import_file_name'           => esc_html__( 'Design Agency', 'vixan'),
      'categories'                 => array( esc_html__( 'Demo One', 'vixan') ),
      'import_file_url'            => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_demo.xml',
      'import_widget_file_url'     => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_widgets.wie',
      'import_customizer_file_url' => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_customizer.dat',
      'import_redux'               => array(
      array(
          'file_url'    => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_options.json',
          'option_name' => 'vixan_options',
        ),
      ),
      'import_preview_image_url'   => 'http://3jon.com/demo/pro/demo-content/vixan/img/preview_import_image1.png',
      'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'vixan' ),
      'preview_url'                => 'http://3jon.com/demo/pro/tm/vixan/',
    ),


  // Demo Two
        array(
      'import_file_name'           => esc_html__( 'Startup Agency', 'vixan'),
      'categories'                 => array( esc_html__( 'Demo Two', 'vixan') ),
      'import_file_url'            => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_demo2.xml',
      'import_widget_file_url'     => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_widgets.wie',
      'import_customizer_file_url' => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_customizer2.dat',
      'import_redux'               => array(
      array(
          'file_url'    => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_options.json',
          'option_name' => 'vixan_options',
        ),
      ),
      'import_preview_image_url'   => 'http://3jon.com/demo/pro/demo-content/vixan/img/preview_import_image2.png',
      'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'vixan' ),
      'preview_url'                => 'http://3jon.com/demo/pro/tm/vixan/startup-agency/',
    ),
    
      // Demo Three
        array(
      'import_file_name'           => esc_html__( 'Design Studio', 'vixan'),
      'categories'                 => array( esc_html__( 'Demo Three', 'vixan') ),
      'import_file_url'            => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_demo3.xml',
      'import_widget_file_url'     => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_widgets.wie',
      'import_customizer_file_url' => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_customizer3.dat',
      'import_redux'               => array(
      array(
          'file_url'    => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_options.json',
          'option_name' => 'vixan_options',
        ),
      ),
      'import_preview_image_url'   => 'http://3jon.com/demo/pro/demo-content/vixan/img/preview_import_image3.png',
      'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'vixan' ),
      'preview_url'                => 'http://3jon.com/demo/pro/tm/vixan/design-studio/',
    ),

      // Demo Four
        array(
      'import_file_name'           => esc_html__( 'Marketing Agency', 'vixan'),
      'categories'                 => array( esc_html__( 'Demo Three', 'vixan') ),
      'import_file_url'            => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_demo4.xml',
      'import_widget_file_url'     => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_widgets.wie',
      'import_customizer_file_url' => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_customizer4.dat',
      'import_redux'               => array(
      array(
          'file_url'    => 'http://3jon.com/demo/pro/demo-content/vixan/vixan_options.json',
          'option_name' => 'vixan_options',
        ),
      ),
      'import_preview_image_url'   => 'http://3jon.com/demo/pro/demo-content/vixan/img/preview_import_image3.png',
      'import_notice'              => esc_html__( 'After import this demo, you will have to setup the slider separately.', 'vixan' ),
      'preview_url'                => 'http://3jon.com/demo/pro/tm/vixan/marketing-agency/',
    ),

  );
}
add_filter( 'pt-ocdi/import_files', 'vixan_import_files' );
endif;


if ( ! function_exists( 'vixan_after_import' ) ) :
function vixan_after_import( $selected_import ) {

    if ( 'Demo Main' === $selected_import['import_file_name'] ) {

        //Set Menu
        $top_menu = get_term_by('name', 'Primary Menu', 'nav_menu');

        set_theme_mod( 'nav_menu_locations' , array( 
              'vixan-menu' => $top_menu->term_id,
             ) 
        );

       //Set Front page
       $page = get_page_by_title( 'Home One');
       if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
       }

    } elseif ( 'Demo Two' === $selected_import['import_file_name'] ) {
      
        //Set Menu
        $top_menu = get_term_by('name', 'Primary Menu', 'nav_menu');

        set_theme_mod( 'nav_menu_locations' , array( 
              'vixan-menu' => $top_menu->term_id,
             ) 
        );

       //Set Front page
       $page = get_page_by_title( 'Home Two');
       if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
       }

    } elseif ( 'Demo Three' === $selected_import['import_file_name'] ) {
      
        //Set Menu
        $top_menu = get_term_by('name', 'Primary Menu', 'nav_menu');

        set_theme_mod( 'nav_menu_locations' , array( 
              'vixan-menu' => $top_menu->term_id,
             ) 
        );

       //Set Front page
       $page = get_page_by_title( 'Home Three');
       if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
       }

    } elseif ( 'Demo Four' === $selected_import['import_file_name'] ) {
      
        //Set Menu
        $top_menu = get_term_by('name', 'Primary Menu', 'nav_menu');

        set_theme_mod( 'nav_menu_locations' , array( 
              'vixan-menu' => $top_menu->term_id,
             ) 
        );

       //Set Front page
       $page = get_page_by_title( 'Home Four');
       if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
       }

    }
    
}
endif;