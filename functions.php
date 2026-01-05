<?php
/**
 * ShopOfThings Child Theme Functions
 */

 // Enqueue Parent- und Child-Styles korrekt
function shopofthings_enqueue_styles() {
    // Parent-Theme Style (Storefront)
    wp_enqueue_style('storefront-style', get_template_directory_uri() . '/style.css');

    // Child-Theme Style (wird danach geladen → überschreibt Parent)
    wp_enqueue_style('shopofthings-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('storefront-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'shopofthings_enqueue_styles', 10);
