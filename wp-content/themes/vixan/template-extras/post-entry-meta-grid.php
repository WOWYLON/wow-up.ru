<?php
/**
 * Displays Post Meta
 *
 * @package vixan
 */

 $vixan_options = get_option('vixan_options');
?>

<?php 
    $year  = get_the_time( 'Y' ); 
    $month = get_the_time( 'm' ); 
    $day   = get_the_time( 'd' ); 
?>

    <div class="entry-meta">
        <span>
            <svg
                width="14"
                height="18"
                viewBox="0 0 14 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7 0.0195312C3.14027 0.0195312 0 3.01027 0 6.68621C0 7.78973 0.289693 8.88387 0.840408 9.85434L6.6172 17.8047C6.69411 17.9373 6.84065 18.0195 7 18.0195C7.15935 18.0195 7.30589 17.9373 7.3828 17.8047L13.1617 9.85105C13.7103 8.88387 14 7.78969 14 6.68617C14 3.01027 10.8597 0.0195312 7 0.0195312ZM7 10.0195C5.07014 10.0195 3.50002 8.52418 3.50002 6.68621C3.50002 4.84824 5.07014 3.35289 7 3.35289C8.92986 3.35289 10.5 4.84824 10.5 6.68621C10.5 8.52418 8.92986 10.0195 7 10.0195Z"
                  fill="black"
                ></path>
              </svg>
            <a href="<?php echo esc_url(get_day_link( $year, $month, $day )); ?>"><i class="flaticon-appointment"></i><?php echo esc_html(get_the_date('d, M, Y')); ?></a>
        </span>
        
    </div>

        <!-- Post Meta End -->