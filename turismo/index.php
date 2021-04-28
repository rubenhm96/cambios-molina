<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package turismo
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="slider-index">
			<?php
			echo do_shortcode('[smartslider3 slider="7"]');
			?>
		</div>
		<div class="que-esta-pasando row">
			<h4 class=""><i class="bi bi-calendar"></i> Qué Está Pasando</h4>
			<div class="div-eventos-grid col-lg-7 col-md-7 col-sm-12 col-12">
				<?php echo do_shortcode('[MEC id="16"]') ?>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-12 div-twitter">
					<?php echo do_shortcode('[custom-twitter-feeds]') ?>
			</div>
		</div>
		<div class="row">
			<div class="div-banners col-12">
				<div class="div-banners-campania">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="1"]')?>
				</div>
				<div class="div-banners-campania">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="2"]')?>
				</div>
				<div class="div-banners-campania">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="3"]')?>
				</div>
				<div class="div-banners-campania">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="4"]')?>
				</div>
				<div class="div-banners-campania">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="5"]')?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
