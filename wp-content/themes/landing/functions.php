<?php

function landing_enqueue_styles() {

	// Enqueue Custom CSS.
	wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');

	// Enqueue Bootstrap CSS.
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

	// Enqueue Bootstrap JS.
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'landing_enqueue_styles');

function landing_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'landing'),
	));
}
add_action('after_setup_theme', 'landing_setup');

function create_team_post_type() {
	register_post_type('team',
		array(
			'labels' => array(
				'name' => __('Teams'),
				'singular_name' => __('Team')
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('thumbnail', 'title', 'editor', 'comments'),
			'rewrite' => array('slug' => 'team'),
		)
	);
}
add_action('init', 'create_team_post_type');

function enqueue_montserrat_font() {
	wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_montserrat_font');
