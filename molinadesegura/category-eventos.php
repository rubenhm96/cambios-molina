<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package molinadesegura
 */

get_header();
?>

	<main id="primary" class="site-main-2 row">
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>
    <h1 class="entry-title"><i class="bi bi-calendar prox-eventos"></i> Eventos</h1>
    <div class="calendario-de-eventos div-calendar">
       <?php echo do_shortcode('[MEC id="106"]') ?>
    </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();