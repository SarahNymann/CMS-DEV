<?php

function lemonade_styles()
{
    wp_enqueue_style(
        'lemonade-app-css',
        get_template_directory_uri() . '/css/app.css'
    );
}

add_action('wp_enqueue_scripts', 'lemonade_styles');


function my_register_cakes_post_type()
{
    register_post_type('cake', [
        'labels' => [
            'name' => 'Cakes',
            'singular_name' => 'Cake',
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // important for Gutenberg + REST API
        'menu_icon' => 'dashicons-buddicons-community',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'cakes'],
    ]);
}
add_action('init', 'my_register_cakes_post_type');

?>