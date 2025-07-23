<?php
function vixan_wpml_languages(){

    extract(vixan_split_option(array(
        'wpml_select'  => array('', 'vixan-wpml-select'),
    )));

    $languages = icl_get_languages('skip_missing=0');

    echo '<li class="dropdown">';

    if($wpml_select === 'name'){

        foreach ($languages as $language) {

            if($language['active']){
                echo '<a  class="toggle" href="'.esc_url($language['url']).'">';
                echo esc_attr($language['translated_name']);
                echo '</a>';
            }
        }
        echo '<ul class="dropdown-menu">';
        foreach ($languages as $language) {

            if( !$language['active'] ){

                echo '<li> <a href="'.esc_url($language['url']).'">'.esc_attr($language['translated_name']).'</a></li>';

            }
        }
        echo '</ul>';

    } elseif($wpml_select === 'code'){

        foreach ($languages as $language) {

            if($language['active']){
                echo '<a  class="toggle" href="'.esc_url($language['url']).'">';
                echo esc_attr($language['language_code']);
                echo '</a>';
            }
        }

        echo '<ul class="dropdown-menu">';
        foreach ($languages as $language) {

            if( !$language['active'] ){

                echo '<li><a href="'.esc_url($language['url']).'">'.esc_attr($language['language_code']).'</a></li>';

            }
        }
        echo '</ul>';

    } else {

        foreach ($languages as $language) {

            if($language['active']){
                echo '<a  class="toggle href="'.esc_url($language['url']).'">';
                echo '<img src="'.esc_url($language['country_flag_url']).'">';

                echo '</a>';
            }
        }

        echo '<ul class="dropdown-menu">';
        foreach ($languages as $language) {

            if( !$language['active'] ){

                echo '<li> <a href="'.esc_url($language['url']).'"><img src="'.esc_url($language['country_flag_url']).'"></a></li>';

            }
        }
        echo '</ul>';
    }

    echo ' </li>';
}