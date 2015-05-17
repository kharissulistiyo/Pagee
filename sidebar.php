<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Pagee
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area widget-area pagee__container" role="complementary">

	<div class="inner_container_wide margin-x-auto clear">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- /.inner_container -->

</div><!-- #secondary -->
