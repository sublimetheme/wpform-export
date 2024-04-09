<?php
/**
 * Plugin Name: WPForm Exports
 * Description: A simple plugin to make WPForm available to export in default WordPress Export Tool
 * Version: 1.0.0
 * Requires at least: 6.5
 * Requires PHP: 7.4
 * Author: SublimeTheme
 * Author URI: https://sublimetheme.com/
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: wpform-exports
 * 
 * @package WPForm_Exports
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wpform_exports_post_type_args(){

    return [
        'label'               => 'WPForms',
        'public'              => false,
        'exclude_from_search' => true,
        'show_ui'             => false,
        'show_in_admin_bar'   => false,
        'rewrite'             => false,
        'query_var'           => false,
        'can_export'          => true,
        'supports'            => [ 'title', 'author', 'revisions' ],
        'capability_type'     => 'wpforms_form', // Not using 'capability_type' anywhere. It just has to be custom for security reasons.
        'map_meta_cap'        => false, // Don't let WP to map meta caps to have a granular control over this process via 'map_meta_cap' filter.
    ];
}
add_filter( 'wpforms_post_type_args', 'wpform_exports_post_type_args' );
