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
 * @package cultura
 */

get_header();
?>

	<main id="primary" class="site-main-2">
		<div class="slider-index">
		<?php
			echo do_shortcode('[smartslider3 slider="2"]');
		?>
		</div>
		<div class="max-width-content">
			<div class="que-esta-pasando row">
				<h4 class="title-qep-out"><i class="bi bi-calendar"></i> PRÓXIMOS EVENTOS</h4>
				<div class="div-calendar col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
					<?php echo do_shortcode('[MEC id="19"]') ?>
					<a href="/cultura/calendario-de-eventos/" class="btn btn-primary">Ver todos los Eventos</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12 margin-bottom">
					<h4 class="title-qep-out"><i class="bi bi-star-fill"></i> DESTACADOS</h4>
					<?php echo do_shortcode('[recent_post_carousel category="5" show_author="false" limit="8" show_read_more="false" show_category_name="false" slides_to_show="3"]') ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 div-twitter">
					<h4 class="title-qep-out"><i class="bi bi-twitter"></i> TWITTER</h4>
					<?php echo do_shortcode('[custom-twitter-feeds]') ?>
				</div>
			</div>
			<div class="slider-videos-parent row mb-5">
				<h4><i class="bi bi-play-btn"></i> VÍDEOS</h4>
				<div class="slider-videos col-lg-7 col-md-12 col-sm-12 col-12"><?php echo do_shortcode('[smartslider3 slider="3"]'); ?></div>
				<div class="col-lg-1 col-md-1 col-sm-12 col-12"></div>
				<!--Contenedor de Encuestas-->
				<div class="col-lg-4 col-md-12 col-sm-12 col-12 div-encuestas">
					<div class="banner-cultura-parent col-lg-12 col-md-6 col-sm-6 col-12">
						<div class="banner-cultura col-12">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12 banner-cultura-cabecera">
								<a class="banner-cultura-cabecera-child" href="#" target="_blank">
									<div class="logo-cultura">
										<lord-icon src="https://cdn.lordicon.com/rhvddzym.json"
											trigger="loop"
											colors="primary:#004458,secondary:#08a88a"
											style="width:100%;height:100px">
										</lord-icon>
									</div>
									<h3>Buzón de Quejas</h3>
									<h3>Y Sugerencias</h3>
								</a>
							</div>
						</div>
					</div>
					<!-- NEWSLETTER -->
					<div class="col-lg-12 col-md-6 col-sm-6 col-12">
						<?php echo do_shortcode('[mc4wp_form id="67"]')?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				echo do_shortcode('[smartslider3 slider="4"]');
				?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
