<?php
/**
 * Plugin Name: Last Post Alert
 * Plugin URI: http://markdevs.com
 * Description: Show an alert with last post.
 * Version: 1.0.0
 * Author: Arón Yáñez
 * Author URI: http://markdevs.com
 * License:  GPLv2 or later
 *
 * Text Domain: last-post-alert
 * Domain Path: /languages
 */

/*  Copyright 2018 Arón Yáñez (email : aronyanez@markdevs.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
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