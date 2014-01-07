<?php
/**
 * The secondary/right sidebar widgetized area.
 *
 * If no active widgets in sidebar, alert with default archive widget will appear.
 *
 * @since 1.0
 */

/* Conditional check to see if post/page template is full width
   or if no sidebars was selected in layout options */
$cyber_dc_boot_theme_options = cyber_dc_boot_theme_options();
$layout = $cyber_dc_boot_theme_options['layout'];
if ( 6 != $layout ) {
	if ( 3 == $layout || 4 == $layout || 5 == $layout ) {
		?>
		<div id="tertiary" <?php cyber_dc_boot_second_sidebar_class(); ?> role="complementary">
			<?php if ( ! dynamic_sidebar( 'second-sidebar' ) ) : ?>

			<aside id="archives" class="widget">

				<h3 class="widget-title"><?php _e( 'Archives', 'cdc_lobster' ); ?></h3>
				
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>
			<?php endif; ?>
		</div><!-- #tertiary.widget-area -->
		<?php
	}
}