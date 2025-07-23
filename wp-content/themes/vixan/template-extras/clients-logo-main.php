<?php
/**
 * Displays Social Links
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php
 
    $clt_logo = '';
    $clt_logo2 = '';
    $clt_logo3 = '';
    $clt_logo4 = '';
    $clt_logo5 = '';
    $clt_logo6 = '';
    $clt_logo7 = '';
    $clt_logo8 = '';
    $clt_logo9 = '';
    $clt_logo10 = '';
    $clt_logo11 = '';

	$clt_logo_url = '';
    $clt_logo2_url = '';
    $clt_logo3_url = '';
    $clt_logo4_url = '';
    $clt_logo5_url = '';
    $clt_logo6_url = '';
    $clt_logo7_url = '';
    $clt_logo8_url = '';
    $clt_logo9_url = '';
    $clt_logo10_url = '';
    $clt_logo11_url = '';

    if(isset($vixan_options['vixan_clt_logo'])){
        $clt_logo = $vixan_options['vixan_clt_logo'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo2'])){
        $clt_logo2 = $vixan_options['vixan_clt_logo2'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo3'])){
        $clt_logo3 = $vixan_options['vixan_clt_logo3'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo4'])){
        $clt_logo4 = $vixan_options['vixan_clt_logo4'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo5'])){
        $clt_logo5 = $vixan_options['vixan_clt_logo5'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo6'])){
        $clt_logo6 = $vixan_options['vixan_clt_logo6'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo7'])){
        $clt_logo7 = $vixan_options['vixan_clt_logo7'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo8'])){
        $clt_logo8 = $vixan_options['vixan_clt_logo8'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo9'])){
        $clt_logo9 = $vixan_options['vixan_clt_logo9'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo10'])){
        $clt_logo10 = $vixan_options['vixan_clt_logo10'] ['url'];
    }    
    if(isset($vixan_options['vixan_clt_logo11'])){
        $clt_logo11 = $vixan_options['vixan_clt_logo11'] ['url'];
    }    

    if(isset($vixan_options['vixan_clt_logo_url'])){
        $clt_logo_url = $vixan_options['vixan_clt_logo_url'];
    }    
    if(isset($vixan_options['vixan_clt_logo2_url'])){
        $clt_logo2_url = $vixan_options['vixan_clt_logo_url2'];
    }    
    if(isset($vixan_options['vixan_clt_logo3_url'])){
        $clt_logo3_url = $vixan_options['vixan_clt_logo_url3'];
    }    
    if(isset($vixan_options['vixan_clt_logo4_url'])){
        $clt_logo4_url = $vixan_options['vixan_clt_logo_url4'];
    }    
    if(isset($vixan_options['vixan_clt_logo5_url'])){
        $clt_logo5_url = $vixan_options['vixan_clt_logo_url5'];
    }    
    if(isset($vixan_options['vixan_clt_logo6_url'])){
        $clt_logo6_url = $vixan_options['vixan_clt_logo_url6'];
    }    
    if(isset($vixan_options['vixan_clt_logo7_url'])){
        $clt_logo7_url = $vixan_options['vixan_clt_logo_url7'];
    }    
    if(isset($vixan_options['vixan_clt_logo8_url'])){
        $clt_logo8_url = $vixan_options['vixan_clt_logo_url8'];
    }    
    if(isset($vixan_options['vixan_clt_logo9_url'])){
        $clt_logo9_url = $vixan_options['vixan_clt_logo_url9'];
    }    
    if(isset($vixan_options['vixan_clt_logo10_url'])){
        $clt_logo10_url = $vixan_options['vixan_clt_logo_url10'];
    }    
    if(isset($vixan_options['vixan_clt_logo11_url'])){
        $clt_logo11_url = $vixan_options['vixan_clt_logo_url11'];
    } 	

?>

<section class="brand-one brand-one--two">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                    "0": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "375": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 2
                                    },
                                    "575": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 2
                                    },
                                    "767": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 3
                                    },
                                    "991": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 4
                                    },
                                    "1199": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 5
                                    }
                                }}'>
                    <div class="swiper-wrapper">

					<?php if(!empty($clt_logo11)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo_url11); ?>"><img src="<?php echo esc_url($clt_logo11); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo10)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo10_url); ?>"><img src="<?php echo esc_url($clt_logo10); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo_url); ?>"><img src="<?php echo esc_url($clt_logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo2)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo_url2); ?>"><img src="<?php echo esc_url($clt_logo2); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo3)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo_url3); ?>"><img src="<?php echo esc_url($clt_logo3); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo4)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo_url4); ?>"><img src="<?php echo esc_url($clt_logo4); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo5)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo_url5); ?>"><img src="<?php echo esc_url($clt_logo5); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo6)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo6_url); ?>"><img src="<?php echo esc_url($clt_logo6); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo7)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo7_url); ?>"><img src="<?php echo esc_url($clt_logo7); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>

					<?php } if(!empty($clt_logo8)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo8_url); ?>"><img src="<?php echo esc_url($clt_logo8); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>	

					<?php } if(!empty($clt_logo9)) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($clt_logo9_url); ?>"><img src="<?php echo esc_url($clt_logo9); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>
					<?php } ?>	

                    </div>
                </div>
            </div>
        </section>

