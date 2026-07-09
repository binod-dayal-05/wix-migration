<?php
/**
 * Wix Migration Theme Functions and Definitions
 */

function wix_migration_setup() {
    // Let WordPress manage the document title dynamically.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register Navigation Menus
    register_nav_menus( array(
        'main-menu' => esc_html__( 'Main Menu', 'wix-migration' ),
    ) );
}
add_action( 'after_setup_theme', 'wix_migration_setup' );

/**
 * Enqueue styles and scripts.
 */
function wix_migration_scripts() {
    wp_enqueue_style( 'wix-migration-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'wix_migration_scripts' );

/**
 * Fallback menu if main-menu is not assigned yet
 */
function wix_migration_fallback_menu() {
    echo '<ul class="nav-menu-list fallback-menu">';
    echo '<li class="menu-item"><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li class="menu-item"><a href="#">Waheguru</a></li>';
    echo '<li class="menu-item"><a href="#">You</a></li>';
    echo '<li class="menu-item"><a href="#">Us</a></li>';
    echo '<li class="menu-item menu-item-search"><a href="#" class="search-toggle-btn" aria-label="Open Search"><svg class="search-icon-svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg></a></li>';
    echo '</ul>';
}

/**
 * Filter to append search icon to main nav menu
 */
function wix_migration_add_search_to_menu( $items, $args ) {
    if ( $args->theme_location == 'main-menu' ) {
        $search_icon = '<li class="menu-item menu-item-search"><a href="#" class="search-toggle-btn" aria-label="Open Search"><svg class="search-icon-svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg></a></li>';
        $items .= $search_icon;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'wix_migration_add_search_to_menu', 10, 2 );

