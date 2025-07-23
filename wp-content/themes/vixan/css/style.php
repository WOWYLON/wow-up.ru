<?php
/*
 * Dynamic style of cursor
 *
 * @package vixan
 */

add_action('wp_head', 'vixan_cursor_colors');
function vixan_cursor_colors() {  
 	
 global $vixan_options;
 ?>

<?php
    $cus_cursor_dot_outline = '';
    $cs_stroke_text = '';
    
    if(isset($vixan_options['vixan_cus_cur_dot_outline'])){
        $cus_cursor_dot_outline = $vixan_options['vixan_cus_cur_dot_outline'];
    }
    if(isset($vixan_options['vixan_cs_stroke_text'])){
        $cs_stroke_text = $vixan_options['vixan_cs_stroke_text'];
    }
    ?>


<style type="text/css">
.cs_cursor_1 {
    border: 2px solid <?php echo esc_attr($cus_cursor_dot_outline); ?>!important;
}   
.cs_cursor_2 {
    background-color: <?php echo esc_attr($cus_cursor_dot_outline); ?>!important;
} 
.cs_stroke_text, .cs_stroke_number {
    -webkit-text-stroke: 1px <?php echo esc_attr($cs_stroke_text); ?>!important;
}
</style>

<?php } ?>