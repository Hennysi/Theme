<?php
// Add Scripts & Styles
add_action('wp_enqueue_scripts', 'any_theme_ss');
function any_theme_ss()
{
	// Disable gutenberg built-in styles
	wp_dequeue_style('wp-block-library');

	// Load Styles
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', null, null);
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, null);

	// Load JavaScripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-selectmenu');

	// Load Plugins
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', null, '1.0', true );
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/bdd4361599.js', null, '1.0', true );

	// Load Custom JS
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', null, null, true);

	// Localize JS for AJAX
	wp_localize_script('main', 'ajax', array(
		'url'   => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('project_nonce')
	));
}

// Default Functions
