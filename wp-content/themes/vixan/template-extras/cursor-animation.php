<?php
/**
 * Displays Preloader
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php
 
    $cursor_animation = '';

    if(isset($vixan_options['vixan_cursor_animation'])){
        $cursor_animation = $vixan_options['vixan_cursor_animation'];
    }   

?>

    <!-- Cursor Animation -->
    <div class="cs_cursor_1"></div>
    <div class="cs_cursor_2"></div>

