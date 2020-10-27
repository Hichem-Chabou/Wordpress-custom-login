<?php // plugin - Register Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// register plugin settings
function plugin_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback = ''
	);
	
	*/
	
	register_setting( 
		'plugin_options', 
		'plugin_options', 
		'plugin_callback_validate_options' 
	); 
	
	/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/
	
	add_settings_section( 
		'plugin_section_login', 
		'Customize Login Page', 
		'plugin_callback_section_login', 
		'plugin'
	);
	
	add_settings_section( 
		'plugin_section_admin', 
		'Customize Admin Area', 
		'plugin_callback_section_admin', 
		'plugin'
	);
	
	/*
	
	add_settings_field(
    	string   $id, 
		string   $title, 
		callable $callback, 
		string   $page, 
		string   $section = 'default', 
		array    $args = []
	);
	
	*/
	
	add_settings_field(
		'custom_url',
		'Custom URL',
		'plugin_callback_field_text',
		'plugin', 
		'plugin_section_login', 
		[ 'id' => 'custom_url', 'label' => 'Custom URL for the login logo link' ]
	);
	
	add_settings_field(
		'custom_title',
		'Custom Title',
		'plugin_callback_field_text',
		'plugin', 
		'plugin_section_login', 
		[ 'id' => 'custom_title', 'label' => 'Custom title attribute for the logo link' ]
	);
	
	add_settings_field(
		'custom_style',
		'Custom Style',
		'plugin_callback_field_radio',
		'plugin', 
		'plugin_section_login', 
		[ 'id' => 'custom_style', 'label' => 'Custom CSS for the Login screen' ]
	);
	
	add_settings_field(
		'custom_message',
		'Custom Message',
		'plugin_callback_field_textarea',
		'plugin', 
		'plugin_section_login', 
		[ 'id' => 'custom_message', 'label' => 'Custom text and/or markup' ]
	);
	
	add_settings_field(
		'custom_footer',
		'Custom Footer',
		'plugin_callback_field_text',
		'plugin', 
		'plugin_section_admin', 
		[ 'id' => 'custom_footer', 'label' => 'Custom footer text' ]
	);
	
	add_settings_field(
		'custom_toolbar',
		'Custom Toolbar',
		'plugin_callback_field_checkbox',
		'plugin', 
		'plugin_section_admin', 
		[ 'id' => 'custom_toolbar', 'label' => 'Remove new post and comment links from the Toolbar' ]
	);
	
	add_settings_field(
		'custom_scheme',
		'Custom Scheme',
		'plugin_callback_field_select',
		'plugin', 
		'plugin_section_admin', 
		[ 'id' => 'custom_scheme', 'label' => 'Default color scheme for new users' ]
	);
    
} 
add_action( 'admin_init', 'plugin_register_settings' );


