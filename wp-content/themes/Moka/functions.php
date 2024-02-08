<?php
add_theme_support( 'title-tag' );
// Ajout des styles personnalisés
// function theme_enqueue_style() {
//     wp_enqueue_style('style', get_theme_file_uri() . '/sass/partiels/style.css',);
//     wp_enqueue_script('theme-script', get_theme_file_uri() . '/assets/js/script.js', array('jquery'), time(), true);
// }
// add_action('wp_enqueue_scripts', 'theme_enqueue_style');
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/sass/partiels/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
// appel de mes menus
function mota_setup() {
    register_nav_menus(
        array(
            'header-menu' => ('Menu En-tête'),
            'footer-menu' => ('Menu Pied-de-page'),
        )
    );
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mota_setup');

// appel des différents éléments en js:


    function script_JS_Custo()
    {
        // wp_enqueue_script('fadein-script', get_stylesheet_directory_uri() . '/js/scroll-fadePage.js', array('jquery'), '1.0', true);
        // appel de la page de la modale:
        wp_enqueue_script('modale-script', get_stylesheet_directory_uri() . '.././', array('jquery'), '1.0', true);
        // appel de la page du menu burger:
        wp_enqueue_script('menu-burger-script', get_stylesheet_directory_uri() . '/js/FlottementLogo.js', array('jquery'), '1.0', true);


    }
    add_action('wp_enqueue_scripts', 'script_JS_Custo');