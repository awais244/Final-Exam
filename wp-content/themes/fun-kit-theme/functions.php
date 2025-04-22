<?php
// Enqueue parent theme styles and custom font
function diy_family_kits_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap', false);
    wp_enqueue_script('custom-javascript', get_stylesheet_directory_uri() . '/customElements.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'diy_family_kits_enqueue_styles');
