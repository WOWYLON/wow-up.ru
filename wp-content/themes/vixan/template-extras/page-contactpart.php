<?php 
/**
 * The template for displaying the Contact Part
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

<?php if(!empty($cntsec_title)) { ?>
<section>
    <div class="container">
        <div class="cs_learning_project">
            <div class="cs_section_heading cs_style_1">
            <div class="cs_section_heading_text">
                <h3 class="cs_section_title_3 anim_heading_title">
                    <?php echo esc_html($vixan_options['vixan_cntsec_title']) ; ?>
                </h3>
            </div>
            <div class="cs_section_heading_right cs_btn_anim">
                <a href="<?php echo esc_url($vixan_options['vixan_cntbtn_url']) ; ?>" class="cs_btn cs_style_1 cs_color_1">
                <span><?php echo esc_html($vixan_options['vixan_cntbtn_txt']) ; ?></span>
                <svg
                    width="19"
                    height="13"
                    viewBox="0 0 19 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                    fill="currentColor"
                    />
                </svg>
                </a>
            </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>




