<?php
function navjeevan_enqueue_assets() {
    wp_enqueue_style('navjeevan-style', get_stylesheet_uri());
    wp_enqueue_script('navjeevan-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'navjeevan_enqueue_assets');
function navjeevan_register_menus() {
    register_nav_menus(array('primary' => __('Primary Menu', 'navjeevan-theme-v2')));
}
add_action('after_setup_theme', 'navjeevan_register_menus');
?>