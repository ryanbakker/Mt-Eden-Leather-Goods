<?php

define('CURRENT_VERSION', '1.1.0');

// Scripts
include __DIR__ . "/inc/scripts.php";

// Colour Palette
include __DIR__ . "/inc/dashboard-colours.php";

// Taxonomies
include __DIR__ . "/inc/taxonomies.php";

// Custom Post Types
include __DIR__ . "/inc/post-types.php";

function site_menus(){
    register_nav_menus([
        'menu-header' => esc_html__('Menu for Header'),
        'menu-footer' => esc_html__('Menu for Footer'),
    ]);
}

add_action('after_setup_theme', 'site_menus');

function setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'setup');

// Create new image size

function create_posts_thumb(){ 
    add_image_size('post-thumbs', 300, 300, true); 
}

add_action('after_setup_theme', 'create_posts_thumb');

// Show new image size in Gutenberg

function display_custom_images($sizes){ 
    return array_merge($sizes, array( 
        'post-thumbs' => 'Post Thumbs', 
    )); 
}

add_filter('image_size_names_choose', 'display_custom_images'); 




?>