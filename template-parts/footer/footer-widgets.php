<?php
/**
 * Displays the footer widgetized area
 *
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_footer_widgets_active() ) {
	return;
}

wp_rig()->print_styles( 'wp-rig-footer', 'wp-rig-widgets' );

?>
<aside id="footer-widgets" class="footer-widget-area widget-area">
	<?php wp_rig()->display_footer_widgets(); ?>
</aside><!-- #secondary -->
