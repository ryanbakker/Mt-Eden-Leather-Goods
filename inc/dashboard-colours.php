<?php 

// Gutenberg colour palette

function add_custom_colours(){
    add_theme_support('editor-color-palette', array(
        array(
            'name' => 'Leather Goods Grey',
            'slug' => 'leather_goods_grey',
            'color' => '#313131'
        ),  
        array(
            'name' => 'White',
            'slug' => 'white',
            'color' => '#FFFFFF'
        ),
    ));
}

add_action('after_setup_theme', 'add_custom_colours');

?>