<?php

// Styles
function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );