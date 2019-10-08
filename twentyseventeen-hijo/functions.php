<?php
 
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' );
function theme_slug_enqueue_styles() {
 
    $parent_style = 'parent-style'; // Esto será 'twentyseventeen-style' para el tema Twenty Seventeen.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
 
/* Aquí tus funciones personales */
?>
