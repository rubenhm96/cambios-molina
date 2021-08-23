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
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );} ?>
	<main id="primary" class="site-main-2 row">
		<div class="max-width-content-2">
			<h1 class="entry-title"><i class="bi bi-newspaper ultima-hora"></i> Noticias</h1>
			<?php echo do_shortcode('[ajax_load_more loading_style="infinite fading-circles" container_type="div" css_classes="col-lg-12 col-md-12 col-sm-12 col-12" post_type="post" posts_per_page="4" category="noticias" images_loaded="true" progress_bar="true" progress_bar_color="ed7070" no_results_text="<div class="no-results">No se encontraron resultados.</div>"]') ?>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();