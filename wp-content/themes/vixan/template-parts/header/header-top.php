<?php 
/**
 * The template for displaying the header top
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>

<?php
$hd_mail = '';
$hd_oph = '';
$hd_btn = '';
$hd_url = '';

if(isset($vixan_options['vixan_hd_mail'])) {
    $hd_mail = $vixan_options['vixan_hd_mail'];
}

if(isset($vixan_options['vixan_hd_oph'])) {  
    $hd_oph = $vixan_options['vixan_hd_oph'];
} 

if(isset($vixan_options['vixan_hd_url'])) {  
    $hd_url = $vixan_options['vixan_hd_url'];
} 

if(isset($vixan_options['vixan_hd_btn'])) {  
    $hd_btn = $vixan_options['vixan_hd_btn'];
} 

?>

<div class="main-header__top clearfix">
    <div class="container clearfix">
        <div class="main-header__top-inner clearfix">
            <div class="main-header__top-left">
                <ul class="main-header__top-address">
                <?php if(!empty($hd_mail)) { ?>    
                    <li>
                        <div class="icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="text">
                            <p><a href="mailto:<?php echo esc_attr($hd_mail); ?>"><?php echo esc_html($hd_mail); ?></a></p>
                        </div>
                    </li>
                    <?php } if(!empty($hd_oph)) { ?>     
                    <li>
                        <div class="icon">
                            <span class="icon-wall-clock"></span>
                        </div>
                        <div class="text">
                            <p><?php echo esc_html($hd_oph); ?></p>
                        </div>
                    </li>
                <?php } ?>    
                </ul>
            </div>
            <div class="main-header__top-right">
                <div class="main-header__top-right-search">
                    <a href="#" class="search-toggler"> <i class="fa fa-search"></i></a>
                </div>

                <div class="main-header__top-right-social">
                    <?php get_template_part('template-extras/social', 'connections') ?>
                </div>
            <?php if(!empty($hd_btn)) { ?>            
                <div class="language-switcher">
                    <div id="polyglotLanguageSwitcher">
                        <a href="<?php echo esc_attr($hd_url); ?>"><?php echo esc_html($hd_btn); ?></a>
                    </div>
                </div>
            <?php } ?>    
            </div>
        </div>
    </div>
</div>