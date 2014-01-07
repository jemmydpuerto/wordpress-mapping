<?php

class Cyber_DC_Custom_Metaboxes {
	
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Add option for full width posts & pages
	 *
	 * This function is attached to the 'add_meta_boxes' action hook.
	 *
	 * @since 1.0
	 */
	public function add_meta_boxes() {
		add_meta_box( 'alignment-options', __( 'Home Page Alignment', 'cdc_lobster' ), array( $this, 'alignment_option' ), 'post', 'side', 'high' );
	}

	public function alignment_option( $post ) {
		$alignment = get_post_meta( $post->ID, 'cyber_dc_boot_home_page_alignment', true );

		// Use nonce for verification
		wp_nonce_field( 'cyber_dc_boot_nonce', 'cyber_dc_boot_nonce' );
		?>
		<input id="cyber_dc_boot_home_page_alignment" name="cyber_dc_boot_home_page_alignment" type="radio" <?php checked( $alignment, 'pull-left' ); ?> value="pull-left" /> <label for="cyber_dc_boot_home_page_alignment"><?php _e( 'Left', 'cdc_lobster' ); ?></label>
		<br />
		<input id="cyber_dc_boot_home_page_alignment" name="cyber_dc_boot_home_page_alignment" type="radio" <?php checked( $alignment, 'pull-right' ); ?> value="pull-right" /> <label for="cyber_dc_boot_home_page_alignment"><?php _e( 'Right', 'cdc_lobster' ); ?></label>
		<?php
	}

	/**
	 * Save post custom fields
	 *
	 * This function is attached to the 'save_post' action hook.
	 *
	 * @since 1.0
	 */
	public function save_post( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return;

		if ( ! empty( $_POST['cyber_dc_boot_nonce'] ) && ! wp_verify_nonce( $_POST['cyber_dc_boot_nonce'], 'cyber_dc_boot_nonce' ) )
			return;

		if ( ! empty( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) )
				return;
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) )
				return;
		}

		$layout = ( empty( $_POST['cyber_dc_boot_home_page_alignment'] ) ) ? '' : $_POST['cyber_dc_boot_home_page_alignment'];
		if ( $layout )
			update_post_meta( $post_id, 'cyber_dc_boot_home_page_alignment', $layout );
		else
			delete_post_meta( $post_id, 'cyber_dc_boot_home_page_alignment' );
	}
}
$cyber_dc_boot_custom_metaboxes = new Cyber_DC_Custom_Metaboxes;