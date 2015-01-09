<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Awesome_Avatars
 * @subpackage Awesome_Avatars/admin/partials
 */

$plugin = new Awesome_Avatars();
$plugin_name = $plugin->get_plugin_name();
$plugin_version = $plugin->get_version();
$plugin_admin = new Awesome_Avatars_Admin( $plugin_name, $plugin_version );
$tokens = $plugin_admin->get_tokens();

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$public_token = isset( $_POST['public_token'] ) ? $_POST['public_token'] : '';
	$private_token = isset( $_POST['private_token'] ) ? $_POST['private_token'] : '';

	$tokens[ 'public' ] = $public_token;
	$tokens[ 'private' ] = $private_token;

}

$plugin_admin->set_tokens( $tokens );

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<p><?php _e( sprintf( 'Please get an API key from %s and input below.', '<a href="//avatars.io" target="_blank">Avatars.io</a>' ), $plugin_name );  ?></p>

	<form method="POST">
		<ul>
			<li>
				<label for="public-token">Public Token</label>
				<input id="public-token" type="text" name="public_token" value="<?php echo $tokens['public']; ?>">
			</li>
			<li>
				<label for="private-token">Private Token</label>
				<input id="private-token" type="text" name="private_token" value="<?php echo $tokens['private']; ?>">
			</li>
		</ul>
		<input type="submit" name="tokens" value="Save" class="button button-primary">
	</form>

</div>