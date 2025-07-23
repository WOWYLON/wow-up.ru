<?php
/**
 * Displays top navigation
 *
 * @package vixan
 * @version 1.0
 */

?>

<?php
extract(vixan_split_option(array(
    'sticky_nav_menu'     => array('0', 'opt-switch-sticky'),
    'mobile_menu'         => array('0', 'opt-layout-mobile'),
    'mobile_menu_effect'  => array('0', 'opt-mobile-menu-effect'),
)));
?>

<div class="container">
    <div class="header-main-menu">

        <nav id="site-navigation" class="main-navigation navbar navbar-default" aria-label="<?php esc_attr_e( 'Top Menu', 'vixan' ); ?>">

                <!-- Collect the nav links, forms, and other content for toggling -->

               <div class="navbar-coll"  data-hover="dropdown" data-animations="fadeIn fadeInRight fadeInUp fadeInLeft">
                    <a href="#" class="close-panel"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <?php
                        wp_nav_menu( array(
                                'theme_location'    => 'top',
                                'menu_id'           => 'main-navbar',
                                'container'         =>  FALSE,
                                'menu_class'        => 'nav navbar-nav',
                                'walker'            =>  new aa_Walker_Nav_Primary()
                            )
                        );
                        ?>
                </div><!-- /.navbar-collapse-->
        </nav><!-- #site-navigation -->

    </div>
    <div class="header-right-content clearfix ">
        <div class="content-search pull-right">
            <ul class="search-btn">
                <li><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
        <div class="mobile-menu-trigger pull-right">
            <a href="#" class="open-panel"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
