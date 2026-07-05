<?php
/**
 * Allgemeine Shortcodes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Aktuelles Jahr: [aktuelles_jahr]
 */
function lsv_current_year_shortcode() {

	return date_i18n( 'Y' );
}

add_shortcode( 'aktuelles_jahr', 'lsv_current_year_shortcode' );
