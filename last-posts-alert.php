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
 * Text Domain: Last Post Alert
 * Domain Path: /languages/
 */
defined( 'ABSPATH' ) or die( '' );



function antes_de_sidebar ( $name ) 
{
echo "hola";

}

add_action( 'get_sidebar', 'antes_de_sidebar' );



