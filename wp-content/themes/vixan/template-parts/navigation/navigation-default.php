<?php
/**
 * Displays top default navigation
 *
 * @package vixan
 */
?>
<div class="container">
    <div class="header-main-menu">
        <nav id="site-navigation" class="main-navigation navbar navbar-default" aria-label="<?php esc_attr_e( 'Top Menu', 'vixan' ); ?>">

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-coll">
                    <ul class="nav navbar-nav">
                        <li><a href=" <?php echo (esc_url(admin_url( 'nav-menus.php' ))); ?>"><?php esc_html_e('Add menu', 'vixan'); ?></a></li>
                    </ul>
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