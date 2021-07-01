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
 * @package deportes
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="slider-index">
		<?php
			echo do_shortcode('[smartslider3 slider="3"]');
		?>
		</div>
		<div class="div-weather-parent">
		<!--Plugin El tiempo-->
			<a href="http://www.aemet.es/es/eltiempo/prediccion/municipios/molina-de-segura-id30027" class="div-weather">
				<h2><i class="bi bi-geo-alt-fill"></i> Molina de Segura</h2>
				<section id="tiempo_widget-2" class="widget tiempo_widget">
					<div id="tiempo-widget-enlace" class="tiempo-widget weather_widget_wrap tight" data-background="#d3301b" data-text-color="#fff"  data-width="tight" data-days="0" data-sunrise="false" data-wind="false" data-current="on" data-language="spanish" data-city="Murcia" data-country="Spain"></div>
				</section>
			</a>
		</div>
		<div class="max-width-content">
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
			<div class="row">
				<h4 class="title-qep-out"><i class="bi bi-facebook"></i> FACEBOOK</h4>
				<div class="col-lg-4 col-md-12 col-sm-12 col-12 div-twitter">
					<?php echo do_shortcode('[custom-facebook-feed]') ?>
				</div>
				<div class="banner-deportes-parent col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="banner-deportes col-12">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 banner-deportes-cabecera">
							<a class="banner-deportes-cabecera-child" href="#" target="_blank">
								<div class="logo-deportes">
									<lord-icon src="https://cdn.lordicon.com/rhvddzym.json"
										trigger="loop"
										colors="primary:#d3301b,secondary:#08a88a"
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
						<?php echo do_shortcode('[mc4wp_form id="53"]')?>
				</div>
			</div>
			<div class="que-esta-pasando row">
				<h4 class="title-qep-out"><i class="bi bi-calendar"></i> PRÓXIMOS EVENTOS</h4>
				<div class="div-calendar col-lg-4 col-md-5 col-sm-12 col-12">
					<?php echo do_shortcode('[MEC id="9"]') ?>
					<a href="/deportes/calendario-de-eventos/" class="btn btn-primary">Ver todos los Eventos</a>
				</div>
				<div class="div-eventos-grid col-lg-8 col-md-7 col-sm-12 col-12">
					<?php echo do_shortcode('[MEC id="16"]') ?>
				</div>
			</div>
			<div class="slider-videos-parent row">
				<h4><i class="bi bi-play-btn"></i> VÍDEOS</h4>
				<div class="slider-videos col-lg-12 col-md-12 col-sm-12 col-12"><?php echo do_shortcode('[Total_Soft_Gallery_Video id="2"]') ?></div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php echo do_shortcode('[smartslider3 slider="2"]') ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
