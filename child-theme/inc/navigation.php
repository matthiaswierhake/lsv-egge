<?php
/**
 * Navigation
 * LSV Egge Child Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Nach dem Logout auf die Login-Seite umleiten.
 */
add_filter( 'logout_redirect', 'lsv_logout_redirect', 10, 3 );

function lsv_logout_redirect( $redirect_to, $requested_redirect_to, $user ) {

    return home_url( '/' );

}