<?php

/**
 * Plugin Name: ShieldClimb – Remove Hentry and Hatom
 * Plugin URI: https://shieldclimb.com/free-woocommerce-plugins/remove-hentry-and-hatom/
 * Description: Remove hentry and hatom microformats in WordPress to fix SEO issues, improve search rankings, and enhance your site's overall performance.
 * Version: 1.0.3
 * Requires at least: 5.8
 * Tested up to: 6.9
 * Requires PHP: 7.2
 * Author: shieldclimb.com
 * Author URI: https://shieldclimb.com/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

 if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function shieldclimb_remove_hentry_and_hatom( $classes ) {

    if ( is_page() || is_single() ) {
        $classes = array_diff( $classes, array( 'hentry' ) );
    }

    return $classes;
}

add_filter( 'post_class', 'shieldclimb_remove_hentry_and_hatom' );

?>