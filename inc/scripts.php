<?php 

define('CODE_BASE', get_template_directory_uri());

function load_scripts(){
    // CSS connection
    wp_enqueue_style('main-style-id', CODE_BASE . '/css/main.css', [], CURRENT_VERSION);

    // Javascript Connections
    wp_enqueue_script('main-javascript-id', CODE_BASE . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'load_scripts');