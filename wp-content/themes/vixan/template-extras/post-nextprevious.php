<?php 
/**
 * The template for displaying the Next & Previous post
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php
    $cntsec_title = '';
    $cntbtn_txt = '';
    $cntbtn_url = '';

    if(isset($vixan_options['vixan_cntsec_title'])){  
        $cntsec_title = $vixan_options['vixan_cntsec_title'];
    } 
    if(isset($vixan_options['vixan_cntbtn_txt'])){  
        $cntbtn_txt = $vixan_options['vixan_cntbtn_txt'];
    } 
    if(isset($vixan_options['vixan_cntbtn_url'])){  
        $cntbtn_url = $vixan_options['vixan_cntbtn_url'];
    }   
?>

<div class="container">
    <div class="cs_portfolio_details">
        <div class="cs_section_next_prv anim_div_ShowZoom">
            <div class="cs_prv_btn">
        <?php
            $vixan_prev_post = get_previous_post();
            if($vixan_prev_post) {
            $vixan_prev_title = strip_tags(str_replace('"', '', $vixan_prev_post->post_title));
            echo "\t" . '<a rel="prev" href="' . get_permalink($vixan_prev_post->ID) . '" title="' . $vixan_prev_title. '">Previous</a>' . "\n";}
        ?>
            </div>
            <div>|</div>
            <div class="cs_next">
        <?php
            $vixan_next_post = get_next_post();
            if($vixan_next_post) {
            $vixan_next_title = strip_tags(str_replace('"', '', $vixan_next_post->post_title));
            echo "\t" . '<a rel="next" href="' . get_permalink($vixan_next_post->ID) . '" title="' . $vixan_next_title. '" >Next Project</a>' . "\n";}
        ?>
            </div>
        </div>
    </div>
</div>




