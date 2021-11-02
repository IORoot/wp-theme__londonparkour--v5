<?php

function londonparkourv4_scripts() {

	/**
	 * The default CSS file
	 */
	wp_enqueue_style(  'default', get_template_directory_uri() . '/src/assets/css/style.css', null, filemtime(get_template_directory() . '/src/assets/css/style.css') );

	// all JS - lazysizes and YT-Lite.
	wp_enqueue_script( 'londonparkourv5-all-js', get_template_directory_uri() . '/src/assets/js/all_js.js', array(), filemtime(get_template_directory() . '/src/assets/js/all_js.js'), true );


	/**
	 * Google Tag Manager
	 */
	wp_enqueue_script( 'londonparkourv4-tagmanager', get_template_directory_uri() . '/src/assets/js/google_tag_manager.js', array(), null, false );

}


add_action( 'wp_enqueue_scripts', 'londonparkourv4_scripts' );