<?php
/*
Plugin Name: Custom Plugin
Description: A custom plugin for WordPress.
Version: 1.0
Author: Custom
License: GPLv2 or later
*/

function my_first_plugin_function() {
	echo 'Hello from my first plugin!';
}
add_action('wp_footer', 'my_first_plugin_function');
