<?php

// Products

function add_products_type(){

    $labels = array( 
        'name' => 'Products', 
        'singular_name' => 'New Product', 
        'add_new' => 'Add New', 
    ); 

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'show_in_rest' => true, 
        'show_ui'     => true, 
        'publicly_queryable'    => true, 
        'menu_icon' => 'dashicons-products', 
        'supports' => array( 
            'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'comments' 
        ) 
    ); 
    
    register_post_type('products', $args); 

} 

add_action('init', 'add_products_type', 5);


// Services

function add_services_type(){

    $labels = array( 
        'name' => 'Services', 
        'singular_name' => 'New Service', 
        'add_new' => 'Add New', 
    ); 

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'show_in_rest' => true, 
        'show_ui'     => true, 
        'publicly_queryable'    => true, 
        'menu_icon' => 'dashicons-list-view', 
        'supports' => array( 
            'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' 
        ) 
    ); 
    
    register_post_type('services', $args); 

} 

add_action('init', 'add_services_type', 5);

?>