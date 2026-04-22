<?php
function mi9vn_enqueue_styles() {
    wp_enqueue_style( 'mi9vn-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mi9vn_enqueue_styles' );

function mi9vn_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mi9vn_setup' );
