<?php
/**
* Plugin Name: Core Plugin
* Description: Core application of this website.
* Version: 1.0
* Author: Dagiac <phucdo@dagiac.com>
* Author URI: https://www.dagiac.com/
* License: PTB
*/
// Add Actions
add_action('init', 'custom_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'custom_styles'); // Add Theme Stylesheet

// Load scripts (header.php)
function custom_header_scripts()
{
    wp_register_script('responsive-slides', plugins_url('/js/responsiveslides.min.js', __FILE__), array('jquery'), '1.0.0');
    wp_enqueue_script('responsive-slides'); // Enqueue it!

    wp_register_script('slick-slider', plugins_url('/js/slick.min.js', __FILE__), array('jquery'), '1.0.0');
    wp_enqueue_script('slick-slider'); // Enqueue it!

    wp_register_script('scripts', plugins_url('/js/scripts.js', __FILE__), array('jquery'), '1.0.0');
    wp_enqueue_script('scripts'); // Enqueue it!

	wp_register_script('functions', plugins_url('/js/functions.js', __FILE__), array('jquery'), '1.0.0');
    wp_enqueue_script('functions'); // Enqueue it!

    wp_register_script('plugins', plugins_url('/js/plugins.js', __FILE__), array('jquery'), '1.0.0');
    wp_enqueue_script('plugins'); // Enqueue it!
}

// Load styles
function custom_styles()
{
    wp_register_style('rslides-style', plugins_url('/css/responsiveslides.css', __FILE__), array(), '1.0', 'all');
    wp_enqueue_style('rslides-style'); // Enqueue it!

    wp_register_style('slick-style', plugins_url('/css/slick.css', __FILE__), array(), '1.0', 'all');
    wp_enqueue_style('slick-style'); // Enqueue it!

    wp_register_style('slick-theme-style', plugins_url('/css/slick-theme.css', __FILE__), array(), '1.0', 'all');
    wp_enqueue_style('slick-theme-style'); // Enqueue it!

    wp_register_style('social-icon', plugins_url('/css/social-icon.css', __FILE__), array(), '1.0', 'all');
    wp_enqueue_style('social-icon'); // Enqueue it!

    wp_register_style('core-style', plugins_url('/css/core-style.css', __FILE__), array(), '1.0', 'all');
    wp_enqueue_style('core-style'); // Enqueue it!

    wp_register_style('magnific-popup', plugins_url('/css/magnific-popup.css', __FILE__), array(), '1.0', 'all');
    wp_enqueue_style('magnific-popup'); // Enqueue it!
}
