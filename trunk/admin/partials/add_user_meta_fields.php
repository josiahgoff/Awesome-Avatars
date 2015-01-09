<?php
$plugin = new Awesome_Avatars();
$plugin_name = $plugin->get_plugin_name();
$plugin_version = $plugin->get_version();
$plugin_admin = new Awesome_Avatars_Admin( $plugin_name, $plugin_version );

$user = wp_get_current_user();

echo '<pre>' . print_r($_POST, true) . '</pre>';
?>
<h3><?php _e('Awesome Avatars', $plugin_name); ?></h3>
	
<table class="form-table">
	<tr>
		<th>
			<label for="twitter"><?php _e('Twitter', $plugin_name); ?>
		</label></th>
		<td>
			<input type="text" name="aa-twitter" id="aa-twitter" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" /><br />
			<span class="description"><?php _e('Please enter your Twitter handle.', $plugin_name); ?></span>
		</td>
	</tr>
	<tr>
		<th>
			<label for="facebook"><?php _e('Facebook', $plugin_name); ?>
		</label></th>
		<td>
			<input type="text" name="aa-facebook" id="aa-facebook" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" /><br />
			<span class="description"><?php _e('Please enter your Facebook id OR username.', $plugin_name); ?></span>
		</td>
	</tr>
	<tr>
		<th>
			<label for="instagram"><?php _e('Instagram', $plugin_name); ?>
		</label></th>
		<td>
			<input type="text" name="aa-instagram" id="aa-instagram" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" /><br />
			<span class="description"><?php _e('Please enter your Instagram handle.', $plugin_name); ?></span>
		</td>
	</tr>
</table>