<?php
/**
 * LSV Egge Child Theme
 * Version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * CSS-Dateien laden
 */
add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'kadence-parent',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( get_template() )->get( 'Version' )
    );

    $css_files = array(
        'variables',
        'layout',
        'navigation',
        'login',
        'redaktion',
        'startseite',
        'mitglieder',
        'footer',
        'responsive',
    );

    foreach ( $css_files as $file ) {
        $path = get_stylesheet_directory() . '/css/' . $file . '.css';

        if ( file_exists( $path ) ) {
            wp_enqueue_style(
                'lsv-' . $file,
                get_stylesheet_directory_uri() . '/css/' . $file . '.css',
                array( 'kadence-parent' ),
                filemtime( $path )
            );
        }
    }

}, 20 );


/**
 * JavaScript-Dateien laden
 */
add_action( 'wp_enqueue_scripts', function () {

    $js_files = array(
        'login',
        'navigation',
        'members',
    );

    foreach ( $js_files as $file ) {
        $path = get_stylesheet_directory() . '/js/' . $file . '.js';

        if ( file_exists( $path ) ) {
            wp_enqueue_script(
                'lsv-' . $file,
                get_stylesheet_directory_uri() . '/js/' . $file . '.js',
                array(),
                filemtime( $path ),
                true
            );
        }
    }

}, 20 );


/**
 * PHP-Module laden
 *
 * Noch nicht automatisch aktiv.
 * Wenn wir Snippets später aus Code Snippets ins Theme verschieben,
 * aktivieren wir die Dateien hier schrittweise.
 */

/*
$inc_files = array(
    'helper',
    'login',
    'navigation',
    'redaktion',
    'members',
    'security',
);

foreach ( $inc_files as $file ) {
    $path = get_stylesheet_directory() . '/inc/' . $file . '.php';

    if ( file_exists( $path ) ) {
        require_once $path;
    }
}
*/
