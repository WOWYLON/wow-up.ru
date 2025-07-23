<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vixan
 */

if ( ! is_active_sidebar( 'vixan-sidebar-main' ) ) {
	return;
}
?>

<div class="col-xl-4 col-lg-5">
	<div class="sidebar">
		<?php dynamic_sidebar( 'vixan-sidebar-main' ); ?>
	</div>
</div>
