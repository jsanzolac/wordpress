<?php

function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'init_template');

function assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', '', '5.0.0', 'all');
    wp_register_style('font', 'https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@500&display=swap', '', '1.0', 'all');
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap', 'font'), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'assets');
