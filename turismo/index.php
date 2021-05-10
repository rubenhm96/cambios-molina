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
		<div class="div-weather-parent">
		<!--Plugin El tiempo-->
			<a href="http://www.aemet.es/es/eltiempo/prediccion/municipios/molina-de-segura-id30027" class="div-weather">
				<h2><i class="bi bi-geo-alt-fill"></i> Molina de Segura</h2>
				<section id="tiempo_widget-2" class="widget tiempo_widget">
					<div id="tiempo-widget-enlace" class="tiempo-widget weather_widget_wrap tight" data-background="#c42b00" data-text-color="#fff"  data-width="tight" data-days="0" data-sunrise="false" data-wind="false" data-current="on" data-language="spanish" data-city="Murcia" data-country="Spain"></div>
				</section>
			</a>
		</div>
		<div class="max-width-content">
			<div class="que-esta-pasando row">
				<h4 class=""><i class="bi bi-calendar"></i> QUÉ ESTÁ PASANDO</h4>
				<div class="div-eventos-grid col-lg-7 col-md-7 col-sm-8 col-12">
					<?php echo do_shortcode('[MEC id="16"]') ?>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-12 div-twitter">
						<?php echo do_shortcode('[custom-twitter-feeds]') ?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 popular-post-parent">
					<div class="popular-posts">
						<h2>LO MÁS BUSCADO</h2>
						<ul class="wpp-list">
							<li><a href="" class="wpp-post-title">Atención al Ciudadano</a></li>
							<li><a href="" class="wpp-post-title">El Alcalde a un click</a></li>
							<li><a href="" class="wpp-post-title">Funciones y ubicación</a></li>
							<li><a href="" class="wpp-post-title">Población</a></li>
							<li><a href="" class="wpp-post-title">Ayuntamiento</a></li>
						</ul>
					</div>
				</div>
				<div class="banner-turismo-parent col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="banner-turismo col-12">
						<div class="col-lg-5 col-md-5 col-sm-4 col-12 banner-turismo-cabecera">
							<a class="banner-turismo-cabecera-child" href="#" target="_blank">
								<div class="logo-turismo"><img src="http://172.28.0.120/turismo/wp-content/uploads/sites/10/2021/05/output-onlinepngtools.png" alt="Oficina de Turismo"></div>
								<h3>Oficina De Turismo</h3>
								<h3>Molina de Segura</h3>
							</a>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-8 col-12 banner-turismo-content">
							<div class="banner-turismo-content-contact">
								<h4><i class="bi bi-info-circle"></i> Contacto</h4>
								<p>C/ Pensionista Nº3</p>
								<p><i class="bi bi-telephone-fill"></i> 968 388 522</p>
								<a href="mailto:oficinadeturismo@molinadesegura.es"><i class="bi bi-envelope-open-fill"></i> oficinadeturismo@molinadesegura.es</a>
							</div>
							<div class="banner-turismo-content-horario">
								<h4><i class="bi bi-clock"></i> Horario</h4>
								<p>Lunes a Viernes de 9:00 a 14:00</p>
								<p>Sábados y Domingos de 11:00 a 14:00</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-videos-parent row">
				<h4><i class="bi bi-play-btn"></i> VÍDEOS</h4>
				<div class="slider-videos col-lg-6 col-md-12 col-sm-12 col-12"><?php echo do_shortcode('[smartslider3 slider="9"]'); ?></div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
				<!--Contenedor de Encuestas-->
				<div class="col-lg-4 col-md-12 col-sm-12 col-12 div-encuestas">
					<div class="col-lg-12 col-md-6 col-sm-6 col-12 div-encuestas-l-parent">
						<div class="col-12 div-encuestas-l">
							<?php echo do_shortcode('[yop_poll id="1"]') ?>
						</div>
					</div>
					<!-- NEWSLETTER -->
					<div class="col-lg-12 col-md-6 col-sm-6 col-12">
						<?php echo do_shortcode('[mc4wp_form id="249"]')?>
					</div>
				</div>
			</div>
			<div class="row div-banners-parent">
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
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
