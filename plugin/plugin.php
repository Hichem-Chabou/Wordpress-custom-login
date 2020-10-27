<?php
/*
  Plugin Name: Slider
  Plugin URI: 
  Description: A simple slider component for wordpress
  Version: 1.0
  Author: Hichem Chabou
  Author URI:
  License: GPLv2 or later
 */

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// if admin area
if ( is_admin() ) {
	
	// include plugin dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
  require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';
  
}

// include dependencies : admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';



// default plugin options
function plugin_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}


