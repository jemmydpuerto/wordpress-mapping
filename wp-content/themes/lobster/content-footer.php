<?php
/**
 * The template for displaying article footers
 *
 * @since 1.0
 */
$cyber_dc_boot_theme_options = cyber_dc_boot_theme_options();
$display_categories = $cyber_dc_boot_theme_options['display_categories'];

 	if ( ! empty( $display_categories ) && 'page' != get_post_type() ) { ?>
		<h3 class="post-category"><?php the_category( ', ' ) ?></h3>
		<?php } ?>
	<footer class="entry">
	    <?php
	    if ( is_single() ) wp_link_pages( array( 'before' => '<p id="pages">' . __( 'Pages:', 'cdc_lobster' ) ) );
	    edit_post_link( __( '(edit)', 'cdc_lobster' ), '<p class="edit-link">', '</p>' );
		if ( is_single() ) the_tags( '<p class="tags"><span>' . __( 'Tags:', 'cdc_lobster' ) . '</span>', ' ', '</p>' );
	    ?>
	</footer><!-- .entry -->