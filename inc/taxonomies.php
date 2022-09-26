<?php

// Products

function add_products_taxonomy(){ 

    $labels = array( 
        'name' => _x('Product Type', 'taxonomy general name'),
        'singular_name' => _x('Product Types', 'taxonomy singular name'),
        'search_items' => __('Search Product Types'),
        'all_items' => __('All Product Types'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit Product Type'),
        'update_item' => __('Update Product Type'),
        'add_new_item' => __('Add New Product Type'),
        'new_item_name' => __('New Product Type Name'),
        'menu_name' => __('Product Types'),
    ); 

    register_taxonomy('product-type', 'products', array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'products/product-type'),
    )); 
} 

add_action('init', 'add_products_taxonomy', 0); 


// Services

function add_services_taxonomy(){ 

    $labels = array( 
        'name' => _x('Service Type', 'taxonomy general name'),
        'singular_name' => _x('Service Types', 'taxonomy singular name'),
        'search_items' => __('Search Service Types'),
        'all_items' => __('All Service Types'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit Service Type'),
        'update_item' => __('Update Service Type'),
        'add_new_item' => __('Add New Service Type'),
        'new_item_name' => __('New Service Type Name'),
        'menu_name' => __('Service Types'),
    ); 

    register_taxonomy('service-type', 'services', array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services/service-type'),
    )); 
} 

add_action('init', 'add_services_taxonomy', 0); 

?>