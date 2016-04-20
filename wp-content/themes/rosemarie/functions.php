<?php
// Ajouter Image à la Une sur les articles
add_theme_support('post-thumbnails');

// Ajouter un menu
require_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'principal', 'Menu principal' ),
    ) );
    register_nav_menu('footer', 'Menu du bas');



// Créer Custom Post Type
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type('evenement',
        array(
            'labels' => array(
                'name' => 'Evènement',
                'singular_name' => 'Evènement'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}


