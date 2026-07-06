<?php
/**
 * LSV Egge Child Theme
 * Version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Basis-Konfiguration
 */
require_once get_stylesheet_directory() . '/inc/config.php';

/**
 * Hilfsfunktionen
 */
require_once get_stylesheet_directory() . '/inc/helpers.php';

/**
 * Theme Setup
 */
require_once get_stylesheet_directory() . '/inc/setup.php';

/**
 * Sicherheit & Rollen
 */
require_once get_stylesheet_directory() . '/inc/security.php';
require_once get_stylesheet_directory() . '/inc/roles.php';

/**
 * Navigation
 */
require_once get_stylesheet_directory() . '/inc/navigation.php';

/**
 * Login
 */
require_once get_stylesheet_directory() . '/inc/login.php';

/**
 * Redaktion
 */
require_once get_stylesheet_directory() . '/inc/redaktion.php';

/**
 * Mitgliederbereich
 */
require_once get_stylesheet_directory() . '/inc/members.php';

/**
 * Shortcodes
 */
require_once get_stylesheet_directory() . '/inc/shortcodes.php';

/**
 * Shortcodes
 */
require_once get_stylesheet_directory() . '/inc/news.php';

/**
 * CSS-Dateien laden
 */
add_action( 'wp_enqueue_scripts', 'lsv_enqueue_styles', 20 );

function lsv_enqueue_styles() {

	wp_enqueue_style(
		'kadence-parent',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( get_template() )->get( 'Version' )
	);

	$css_files = array(
		'variables',
		'layout',
		'header',
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
}

/**
 * JavaScript-Dateien laden
 */
add_action( 'wp_enqueue_scripts', 'lsv_enqueue_scripts', 20 );

function lsv_enqueue_scripts() {

	$js_files = array(
		'global',
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
}



