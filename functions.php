<?php

//Adds script and stylesheets
function starter_files() {
    wp_enqueue_style('starter_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
}

add_action('wp_enqueue_scripts', 'starter_files');

//Adds theme support - ex: title tag
function starter_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'starter_features');

?>