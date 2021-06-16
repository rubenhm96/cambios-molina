<?php
/**
 * Restaurants overview
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $post;
?>
<div id="restaurants-overview" class="restaurants-overview">
    <div class="overview-content-col">
        <div class="rest-overview-group">
            <h2><?php _e('Número de Teléfono', 'wp-restaurant-listings') ?></h2>
            <?php the_restaurant_phone() ?>
        </div>
        <div class="rest-overview-group">
            <h2><?php _e('Estilo de Cocina', 'wp-restaurant-listings' ) ?></h2>
            <?php the_restaurant_category() ?>

        </div>
    </div>
    <div class="overview-content-col">
        <div class="rest-overview-group restaurant-opening-hours">
            <h2><?php _e('Horas de Apertura', 'wp-restaurant-listings' ) ?></h2>
            <?php the_restaurant_opening_hours() ?>
        </div>
    </div>
    <div class="overview-content-col">
        <div class="rest-overview-group">
            <h2><?php _e( 'Dirección', 'wp-restaurant-listings' ) ?></h2>
            <?php the_restaurant_location(false) ?>
            <div class="rest-map-canvas">
                <a class="btn btn-primary" href="<?php echo get_the_restaurant_direction_link(); ?>" target="_blank">
                <i class="bi bi-geo-alt-fill"></i>
                <?php _e('Ver en el Mapa', 'wp-restaurant-listings') ?>
                </a>
            </div>
        </div>
    </div>
</div>