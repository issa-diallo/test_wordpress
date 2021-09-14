<?php

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus([
        'navigation' => __('Navigation'),
    ]);
});

function marque()
{
    register_taxonomy('marque', 'post', [
        'labels' => [
            'name' => 'Marque',
            'singular_name' => 'Marque',
            'plural_name' => 'Marques',
            'search_items' => 'Rechercher des marques',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,

    ]);

}

add_action('init', 'marque');
