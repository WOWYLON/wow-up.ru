<?php
/**
 * Displays header breadcrumb
 *
 * @package vixan
 */
$vixan_options = get_option('vixan_options');
?>
   <section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="page-title-box">
                        <h2><?php the_title(); ?></h2>
                        <?php vixan_breadcrumb(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
