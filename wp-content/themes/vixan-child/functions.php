<?php 

//Parent theme style.css

add_action( 'wp_enqueue_scripts', 'vixan_theme_enqueue_styles' );

function vixan_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
  