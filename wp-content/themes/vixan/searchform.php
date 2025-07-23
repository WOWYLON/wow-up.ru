<?php
/**
 * Template for displaying search forms in vixan
 *
 * @package vixan
 * @version 1.0
 */
$vixan_options = get_option('vixan_options');
?>

<?php $unique_id = esc_attr( uniqid( 'sb-search-' ) ); ?>

<div class="sidebar__search">

	<form class="sidebar__search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">

			<input type="search" id="<?php echo esc_attr($unique_id); ?>" class="form-control" placeholder="<?php echo esc_attr_x( 'Search Here..', 'placeholder', 'vixan' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

	</form>
</div>
