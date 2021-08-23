<?php
/**
 * Notice when no restaurants were found in `[restaurants]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/restaurant_listings/content-widget-no-restaurants-found.php.
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
?>
<?php if ( defined( 'DOING_AJAX' ) ) : ?>
	<li class="no_restaurant_listings_found"><?php _e( 'No hay restaurantes que coincidan con su búsqueda.', 'wp-restaurant-listings' ); ?></li>
<?php else : ?>
	<p class="no_restaurant_listings_found"><?php _e( 'Actualmente no hay restaurantes.', 'wp-restaurant-listings' ); ?></p>
<?php endif; ?>
