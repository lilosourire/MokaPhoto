<?php
add_theme_support( 'title-tag' );
// gestion des thèmes et du css
// dd_action('wp_enqueue_scripts', 'theme_enqueue_styles');
// function theme_enqueue_styles()
// {
//     // Chargement du style.css du thème parent
//     wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

//     // Chargement du style.css du thème enfant
//     //wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/sass/style.css', array());
//     // $file_name = '/sass/style.css'; // Nom du fichier CSS
// 	$style_path =  get_stylesheet_directory() . $file_name; // Chemin vers votre fichier CSS
// 	wp_enqueue_style(
//         'theme-style', // Identifiant unique pour votre style
//         get_stylesheet_directory_uri(). $file_name,
//         array(), // Dépendances, le cas échéant
//         file_exists($style_path) ? filemtime($style_path) : false // Version du fichier basée sur la date de dernière modification ( pour les probleme de cache)
//     );
// }
// // Enqueue le style du thème
// function enqueue_styles() {
//   wp_enqueue_style('style', get_stylesheet_uri());
// }

// // Action pour ajouter la file d'attente du style
// add_action('wp_enqueue_scripts', 'enqueue_styles');
// Enqueue le style du thème

// Ajout des styles personnalisés
function theme_enqueue_style() {
    wp_enqueue_style('style', get_theme_file_uri() . '/sass/partiels/style', time());
    wp_enqueue_script('theme-script', get_theme_file_uri() . '/assets/js/script.js', array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_style');

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