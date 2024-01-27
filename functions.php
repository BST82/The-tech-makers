<?php


function enqueue_custom_styles() {
    // Register and enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');

    // Register and enqueue Bootstrap Icons CSS
    wp_enqueue_style('bootstrap-icons-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3', 'all');

    // Enqueue your custom styles
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap-css', 'bootstrap-icons-css'), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function register_custom_menu() {
    add_menu_page(
        'Custom Menu',           // Menu title
        'manage_options',        // Capability required to access the page
        'my_custom_menu_slug',   // Menu slug
        'my_custom_menu_content' // Callback function to display the page content
    );
       register_nav_menus(array(
        'header_menu' => __('Header Menu', 'my_theme_temlate'),
        'footer_menu' => __('Footer Menu', 'my_theme_temlate'),
  
    ));
}

add_action('after_setup_theme', 'register_custom_menu');



?>