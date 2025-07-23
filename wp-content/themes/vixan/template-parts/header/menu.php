<?php
/**
 * Displays header menu
 *
 * @package WordPress
 * @subpackage vixan
 */
$vixan_options = get_option('vixan_options');
?>
   

   <?php if ( has_nav_menu( 'vixan-menu' ) ) { 

        wp_nav_menu( array(
            'theme_location'=>'vixan-menu',
            'menu_id'=>'',
            'menu_class'=>'cs_nav_list',
            'container'         =>  FALSE,
            'fallback_cb'       =>'vixan_Walker_Nav_Primary::fallback',
            'walker'            =>  new vixan_Walker_Nav_Primary()
            ) );                                        

        } ?>