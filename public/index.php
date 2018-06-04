<?php

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', plugins_url( 'last-posts-alert/public/css/style-p.css' ) );
  //  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

