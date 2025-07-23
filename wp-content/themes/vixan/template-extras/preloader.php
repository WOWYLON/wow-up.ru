<?php
/**
 * Displays Preloader
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php
 
    $pred_txt = '';
    $pred_txt2 = '';
    $pred_txt3 = '';
    $pred_txt4 = '';
    $pred_txt5 = '';

    if(isset($vixan_options['vixan_pred_txt'])){
        $pred_txt = $vixan_options['vixan_pred_txt'];
    }    
    if(isset($vixan_options['vixan_pred_txt2'])){
        $pred_txt2 = $vixan_options['vixan_pred_txt2'];
    }    
    if(isset($vixan_options['vixan_pred_txt3'])){
        $pred_txt3 = $vixan_options['vixan_pred_txt3'];
    }    
    if(isset($vixan_options['vixan_pred_txt4'])){
        $pred_txt4 = $vixan_options['vixan_pred_txt4'];
    }    
    if(isset($vixan_options['vixan_pred_txt5'])){
        $pred_txt5 = $vixan_options['vixan_pred_txt5'];
    }    

?>

    <!-- Preloader -->
    <div class="cs_preloader cs_center">
      <div class="cs_preloader_in">
        <div class="loading loading05">
          <span><?php echo esc_html($pred_txt); ?></span>
          <span><?php echo esc_html($pred_txt2); ?></span>
          <span><?php echo esc_html($pred_txt3); ?></span>
          <span><?php echo esc_html($pred_txt4); ?></span>
          <span><?php echo esc_html($pred_txt5); ?></span>
        </div>
      </div>
    </div>

