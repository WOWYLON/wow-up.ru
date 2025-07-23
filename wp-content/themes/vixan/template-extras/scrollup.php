<?php 
/**
 * The template for displaying the social share
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php
    $modal_form_title = ''; 
    $modal_form_sc = ''; 

    if(isset($vixan_options['vixan_modal_form_title'])){  
        $modal_form_title = $vixan_options['vixan_modal_form_title'];
    }

    if(isset($vixan_options['vixan_modal_form_sc'])){  
        $modal_form_sc = do_shortcode($vixan_options['vixan_modal_form_sc']);
    }    
?>

    <span class="cs_scrollup">
      <svg
        width="20"
        height="20"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z"
          fill="currentColor"
        />
      </svg>
    </span>




