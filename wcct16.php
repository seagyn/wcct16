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

namespace WCCT16;

function wcct16_save_option( $name, $value ){
	update_option( $name, $value );
}

function wcct16_get_option( $name ){
	return get_option( 'wcct16_' . $name );
}

function wcct16_save_post_meta( $post_id, $meta_key, $meta_value ){
	update_post_meta( $post_id, 'wcct16_' . $meta_key, $meta_value );
}

function wcct16_get_post_meta( $post_id, $meta_key ){
	get_post_meta( $post_id, 'wcct16_' . $meta_key );
}