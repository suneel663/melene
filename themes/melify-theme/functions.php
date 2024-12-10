<?php
// Enqueue Styles and Scripts
function theme_enqueue_styles_and_scripts() {
    // Enqueue main CSS styles
    wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css');
    wp_enqueue_style('carousel-style', get_template_directory_uri() . '/css/carousel.css');
    wp_enqueue_style('projects-style', get_template_directory_uri() . '/css/projects.css');
    wp_enqueue_style('services-style', get_template_directory_uri() . '/css/services.css');
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/contact.css');
    wp_enqueue_style('projectDetails-style', get_template_directory_uri() . '/css/product-details.css');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css');

    // Enqueue JavaScript files
    wp_enqueue_script('carousel-script', get_template_directory_uri() . '/js/carousel.js', array('jquery'), null, true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts');

// Register WordPress Menus (optional, if you plan to add a menu)
function register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
        )
    );
}
add_action('init', 'register_menus');

// Support for custom logo (optional, if you want users to set a logo)
function theme_custom_logo() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_custom_logo');

// Support for Title Tag (optional for dynamic page titles)
add_theme_support('title-tag');
?>
