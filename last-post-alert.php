<?php
/**
 * Plugin Name: Last Post Alert
 * Plugin URI: http://markdevs.com
 * Description: Show an alert with last post.
 * Version: 1.0.0
 * Author: Arón Yáñez
 * Author URI: http://markdevs.com
 * Requires at least: 4.0
 * Tested up to: 4.3
 *
 * Text Domain: last-post-alert
 * Domain Path: /languages
 */
defined( 'ABSPATH' ) or die( '' );

include_once( 'public/index.php' );

include_once( 'admin/index.php' );


//add settings in menu
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links' );

function add_action_links ( $links ) {
 $mylinks = array(
 '<a href="' . admin_url( 'admin.php?page=LPA_opciones' ) . '">' . __('Settings','last-post-alert') . '</a>',
 );
return array_merge( $links, $mylinks );
}

// add languages

add_action('plugins_loaded', 'LPA_plugin_load_textdomain');

function LPA_plugin_load_textdomain() {
	
	$text_domain	= 'last-post-alert';
	$path_languages = basename(dirname(__FILE__)).'/languages/';

 	load_plugin_textdomain($text_domain, false, $path_languages );
}