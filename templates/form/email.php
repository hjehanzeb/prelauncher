<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?>

<input type="email" id="email" name="email" value="" placeholder="<?php _e('your@email.com', 'prelaunchr'); ?>" required="required" />