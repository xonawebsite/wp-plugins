<?php
/*
 * Plugin Name:		Kenliten Hello World
 * Version:			1.0.0
 * Description:		Simple Hello World plugin. Adds the [hello] shortcode.
 * Author:			Kenliten
 * Author URI:		https://kenliten.github.io
 * Plugin URI:		https://github.com/xonawebsite/wp-plugins
 */

// Prevent direct access to the plugin file, exit the script if accessed directly by url
if (! defined('ABSPATH'))
{
	exit();
}

function add_kenliten_hello_shortcode()
{
	return "<div style='wrap'><h2>Hello, World!</h2></div>";
}

add_shortcode( 'hello', 'add_kenliten_hello_shortcode' );
