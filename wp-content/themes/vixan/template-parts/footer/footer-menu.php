<?php
/**
 * Displays Footer Menu
 *
 * @package WordPress
 * @subpackage vixan
 */
$vixan_options = get_option('vixan_options');
?>
   

   <?php if ( has_nav_menu( 'vixan-footer-menu' ) ) { 

        wp_nav_menu( array(
            'theme_location'=>'vixan-footer-menu',
            'menu_id'=>'footer-menu',
            'menu_class'=>'cs_footer_nav',
            'container'         =>  FALSE,
            'fallback_cb'       =>'vixan_Walker_Nav_Primary::fallback',
            'walker'            =>  new vixan_Walker_Nav_Primary()
            ) );                                        

        } ?>