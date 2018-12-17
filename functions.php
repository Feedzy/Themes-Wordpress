<?php
/**
 * Created by PhpStorm.
 * User: Lam L's Feedzy
 * Date: 11/12/2018
 * Time: 15:51
 */

register_nav_menus( array(
    'menu-principal' => 'Menu principal'
));

add_theme_support( 'post-thumbnails' );

/**
 * On laisse WordPress s'occuper comme un grand des balises <title>
 */
add_theme_support( 'title-tag' );

/*
 * On laisse aussi WordPress gérer les liens des flux RSS dans l'entête.
 */
add_theme_support( 'automatic-feed-links' );

/*
 * On dit à WordPress d'utiliser de l'HTML5 valide pour les formulaires et les galleries
 */
add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );
