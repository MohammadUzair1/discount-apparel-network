<?php
function dan_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    register_nav_menus(array('primary' => __('Primary Menu', 'discount-apparel-network')));
}
add_action('after_setup_theme', 'dan_theme_setup');

function dan_enqueue_assets() {
    wp_enqueue_style('dan-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'dan_enqueue_assets');

function dan_page_link($slug) {
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page) : home_url('/' . $slug . '/');
}
