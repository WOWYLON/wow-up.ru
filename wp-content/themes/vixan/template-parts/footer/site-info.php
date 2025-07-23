<?php
/**
 * Displays footer site info
 *
 * @package vixan
 */

$vixan_options = get_option('vixan_options');
?>

<?php
    $vixan_footercright = '';

    if(isset($vixan_options['vixan_footercright'])) {  
        $vixan_footercright = $vixan_options['vixan_footercright'];
    }
?>
                
    <?php if(!empty($vixan_options['vixan_footercright'])) { ?>
    	
        <div class="cs_copyright text-center">
            <div class="container"><?php echo $vixan_options['vixan_footercright']; ?></div>
        </div>

    <?php } ?>

        
