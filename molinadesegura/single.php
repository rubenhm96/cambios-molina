<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package molinadesegura
 */

get_header();
?>
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );} ?>
	<main id="primary" class="site-main-2 row max-width-content-2">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
