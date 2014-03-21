<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Casper
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : 
			// Put default widgets here
		endif; // end sidebar widget area ?>
		<div class="clear">&nbsp;</div>
	</div><!-- #secondary -->
