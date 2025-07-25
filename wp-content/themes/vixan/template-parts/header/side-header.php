<?php
/**
 * Displays header topbar
 *
 * @package vixan
 */

$vixan_options = get_option('vixan_options');
?>

<?php
 
    $sh_addr = '';
    $sh_phn = '';
    $sh_mail = '';
    $sh_btn_title = '';
    $color_logo = '';
    
    if(isset($vixan_options['vixan_color_logo'])){
      $color_logo = $vixan_options['vixan_color_logo']['url'];
    } 
    if(isset($vixan_options['vixan_sh_addr'])){
        $sh_addr = $vixan_options['vixan_sh_addr'];
    }    
    if(isset($vixan_options['vixan_sh_phn'])){
        $sh_phn = $vixan_options['vixan_sh_phn'];
    }    
    if(isset($vixan_options['vixan_sh_mail'])){
        $sh_mail = $vixan_options['vixan_sh_mail'];
    }
 
?>

          <div class="cs_side_header">
            <button class="cs_close"></button>
             <div class="cs_side_header_overlay"></div>
              <div class="cs_side_header_in">
                  <?php //vixan_the_custom_logo2(); ?>

                  <?php if(!empty($color_logo)) { ?>
                    <a class="cs_site_branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <img src="<?php echo esc_attr($color_logo); ?> " alt="<?php echo esc_attr(get_bloginfo('display', 'name')); ?>" />
                    </a>
                     
                  <?php } ?>

                <div class="row align-items-end">
                  <div class="col-7">
                    <div class="cs_box_one">
                      <div class="cs_nav_black_section cs_font_changes">
                        <?php get_template_part('template-parts/header/menu'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 offset-1">
                    <div class="cs_box_two">
                      <div>
                    <?php if(!empty($sh_addr)) { ?>      
                        <p>
                          <svg
                            width="14"
                            height="18"
                            viewBox="0 0 14 19"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M7 0.0195312C3.14027 0.0195312 0 3.01027 0 6.68621C0 7.78973 0.289693 8.88387 0.840408 9.85434L6.6172 17.8047C6.69411 17.9373 6.84065 18.0195 7 18.0195C7.15935 18.0195 7.30589 17.9373 7.3828 17.8047L13.1617 9.85105C13.7103 8.88387 14 7.78969 14 6.68617C14 3.01027 10.8597 0.0195312 7 0.0195312ZM7 10.0195C5.07014 10.0195 3.50002 8.52418 3.50002 6.68621C3.50002 4.84824 5.07014 3.35289 7 3.35289C8.92986 3.35289 10.5 4.84824 10.5 6.68621C10.5 8.52418 8.92986 10.0195 7 10.0195Z"
                              fill="white"
                            ></path>
                          </svg>
                          <span class="ms-2"><?php echo esc_html( $sh_addr ); ?> </span>
                        </p>
                    <?php } ?>    
                    
                    <?php if(!empty($sh_phn)) { ?>
                        <h4 class="cs_phone_number">
                          <a href="tel:<?php echo esc_attr( $sh_phn ); ?>">
                            <svg
                              width="35"
                              height="35"
                              viewBox="0 0 18 19"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M13.6837 11.9266C13.0957 11.3461 12.3616 11.3461 11.7773 11.9266C11.3316 12.3686 10.8859 12.8105 10.4477 13.26C10.3278 13.3836 10.2267 13.4098 10.0806 13.3274C9.79225 13.1701 9.48513 13.0427 9.20797 12.8704C7.91581 12.0577 6.8334 11.0127 5.87458 9.83668C5.39891 9.2524 4.97568 8.62692 4.6798 7.92279C4.61987 7.78046 4.63111 7.68683 4.74721 7.57072C5.19292 7.14 5.62738 6.69805 6.06559 6.25609C6.67609 5.64185 6.67609 4.92273 6.06185 4.30474C5.71353 3.95268 5.3652 3.6081 5.01688 3.25604C4.65733 2.89648 4.30151 2.53318 3.93821 2.17736C3.35018 1.60432 2.61609 1.60432 2.03181 2.18111C1.58236 2.62306 1.15164 3.07626 0.694705 3.51072C0.271476 3.91148 0.0579884 4.40212 0.0130438 4.97517C-0.0581186 5.90777 0.17035 6.78794 0.492454 7.64563C1.15164 9.42095 2.15541 10.9978 3.37266 12.4435C5.01688 14.3986 6.97947 15.9454 9.27539 17.0615C10.3091 17.5634 11.3803 17.9492 12.5451 18.0129C13.3466 18.0578 14.0433 17.8556 14.6013 17.2301C14.9834 16.8031 15.4141 16.4136 15.8186 16.0053C16.4178 15.3986 16.4216 14.6645 15.8261 14.0652C15.1145 13.3499 14.3991 12.6382 13.6837 11.9266Z"
                                fill="white"
                              ></path>
                              <path
                                d="M12.9672 8.93825L14.3493 8.70229C14.132 7.4326 13.5328 6.28277 12.6227 5.36889C11.6601 4.40633 10.4428 3.79957 9.10199 3.6123L8.90723 5.00184C9.9447 5.14791 10.8885 5.61609 11.6339 6.36142C12.338 7.06555 12.7987 7.95696 12.9672 8.93825Z"
                                fill="white"
                              ></path>
                              <path
                                d="M15.1294 2.93344C13.5338 1.33791 11.5151 0.330398 9.28656 0.0195312L9.0918 1.40907C11.0169 1.67874 12.7623 2.55141 14.1406 3.92597C15.4477 5.23311 16.3054 6.88483 16.6163 8.70134L17.9983 8.46538C17.635 6.36047 16.6425 4.45033 15.1294 2.93344Z"
                                fill="white"
                              ></path></svg><span class="ms-2"><?php echo esc_html( $sh_phn ); ?></span></a>
                        </h4>
                    <?php } ?>    

                        <div class="cs_social_link">
                          <?php get_template_part('template-extras/social', 'connections'); ?>
                        </div>
                    
                    <?php if(!empty($sh_mail)) { ?>
                        <hr class="mt-2 me-5 mb-2" />
                        <h2>
                          <a href="mailto:<?php echo esc_attr( $sh_mail ); ?>" class="cs_primary_font cs_text_btn">
                            <span class="cs_black"><?php echo esc_html( $sh_mail ); ?></span></a>
                        </h2>
                    <?php } ?>
                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>                
