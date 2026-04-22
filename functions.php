<?php
function miniai_workshop_enqueue_styles() {
    wp_enqueue_style( 'miniai-workshop-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'miniai_workshop_enqueue_styles' );

function miniai_workshop_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'miniai_workshop_setup' );
