<?php
/*
Plugin Name: WordCamp Cape Town 2016 - Continuous Integration
Plugin URI:  https://2016.capetown.wordcamp.org/session/a-basic-introduction-to-continuous-integration-with-wordpress/
Description: A nice little demo of absolutely nothing to achieve everything.
Version:     0.5
Author:      Seagyn Davis
Author URI:  http://www.seagynsdavis.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wcct16
*/

namespace WCCT;

function wcct_save_option( $name, $value ){
	update_option( $name, $value );
}

function wcct_get_option( $name ){
	$option = get_option( 'wcct_' . $name );
	return get_option( 'wcct_' . $name );
}

function wcct_save_post_meta( $post_id, $meta_key, $meta_value ){
	update_post_meta( $post_id, 'wcct_' . $meta_key, $meta_value );
}

function wcct_get_post_meta( $post_id, $meta_key, $single ){
	get_post_meta( $post_id, 'wcct_' . $meta_key, $single );
}