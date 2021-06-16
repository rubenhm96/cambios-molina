<?php
/**
 * Notice when restaurant has been submitted.
 *
 * This template can be overridden by copying it to yourtheme/restaurant_listings/restaurant-submitted.php.
 *
 * @see         https://wpdrift.com/document/template-overrides/
 * @author      WPdrift
 * @package     WP Restaurant Listings
 * @category    Template
 * @version     1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $wp_post_types;

switch ( $restaurant->post_status ) :
	case 'publish' :
		printf( __( '%s listado satisfactoriamente. Para ver tus listas haz <a href="%s">click aquí</a>.', 'wp-restaurant-listings' ), $wp_post_types['restaurant_listings']->labels->singular_name, get_permalink( $restaurant->ID ) );
	break;
	case 'pending' :
		printf( __( '%s enviado satisfactoriamente. Tus listados serán visibles una vez aprobados.', 'wp-restaurant-listings' ), $wp_post_types['restaurant_listings']->labels->singular_name, get_permalink( $restaurant->ID ) );
	break;
	default :
		do_action( 'restaurant_listings_restaurant_submitted_content_' . str_replace( '-', '_', sanitize_title( $restaurant->post_status ) ), $restaurant );
	break;
endswitch;

do_action( 'restaurant_listings_restaurant_submitted_content_after', sanitize_title( $restaurant->post_status ), $restaurant );
