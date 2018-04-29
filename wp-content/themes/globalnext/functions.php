<?php
function my_theme_scripts(){

wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css');
wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js');
wp_enqueue_script( 'boostrapjs', get_template_directory_uri() . '/js/bootstrap.min.js');
wp_enqueue_script( 'appjs', get_template_directory_uri() .'/js/app.js');

}

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );