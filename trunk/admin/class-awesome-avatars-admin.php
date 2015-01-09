<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Awesome_Avatars
 * @subpackage Awesome_Avatars/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Awesome_Avatars
 * @subpackage Awesome_Avatars/admin
 * @author     Your Name <email@example.com>
 */
class Awesome_Avatars_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $plugin_name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Awesome_Avatars_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Awesome_Avatars_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/awesome-avatars-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Awesome_Avatars_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Awesome_Avatars_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/awesome-avatars-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	/**
	 * Display custom user meta
	 */
	public function add_user_meta_fields( ) {
		
		include( 'partials/add_user_meta_fields.php' );
		
	}
	
	/**
	 * Save custom user meta fields
	 */
	public function save_user_meta_fields( $user_id ) {
		
		if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

		update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
		update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
		update_usermeta( $user_id, 'instagram', $_POST['instagram'] );
		
	}

}
