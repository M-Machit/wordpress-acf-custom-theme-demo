<?php

function mmt_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mmt_theme_setup');


// Register Custom Post Type: Services

function mmt_register_services() {

    register_post_type('services',
        array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-portfolio',
        )
    );

}

add_action('init', 'mmt_register_services');



// Register Custom Post Type: Projects

function mmt_register_projects() {

    register_post_type('projects',
        array(

            'labels' => array(
                'name' => 'Projects',        
                'singular_name' => 'Project' 
            ),

            'public' => true,

            'has_archive' => true,

            'supports' => array('title', 'editor', 'thumbnail'),

            'menu_icon' => 'dashicons-portfolio',
        )
    );

}

add_action('init', 'mmt_register_projects');


// Register navigation menu
function mmt_register_menus() {
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('init', 'mmt_register_menus');


// Link Css file
function mmt_enqueue_assets() {

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() .'/assets/style.css',
        array(),
        time()
    );

}

add_action('wp_enqueue_scripts', 'mmt_enqueue_assets');

