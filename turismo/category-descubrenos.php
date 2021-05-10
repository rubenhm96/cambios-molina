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
 * @package turismo
 */

get_header();
?>
	<main id="primary" class="site-main-2">
    <?php echo do_shortcode('[smartslider3 slider="8"]'); ?>
    <div class="div-weather-parent">
		<!--Plugin El tiempo-->
		<a href="http://www.aemet.es/es/eltiempo/prediccion/municipios/molina-de-segura-id30027" class="div-weather">
			<h2><i class="bi bi-geo-alt-fill"></i> Molina de Segura</h2>
			<section id="tiempo_widget-2" class="widget tiempo_widget">
				<div id="tiempo-widget-enlace" class="tiempo-widget weather_widget_wrap tight" data-background="#c42b00" data-text-color="#fff"  data-width="tight" data-days="0" data-sunrise="false" data-wind="false" data-current="on" data-language="spanish" data-city="Murcia" data-country="Spain"></div>
			</section>
		</a>
	</div>
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );} ?>
    <div class="max-width-content">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-12">
        <iframe class="video-muestra-iframe" src="https://www.youtube.com/embed/kI4ePW2y4Qg?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-12">
        <h5>En cualquier momento del año...</h5>
        <p>Molina de Segura, cruce de caminos y mezcla de culturas, recibe al visitante con una esplendida y sincera sonrisa. Los molinenses, de carácter amable, hospitalario y honesto a los que les gusta compartir, sorprender y disfrutar con todo aquel que los visita.</p>
        <p>Ven y descubre un lugar donde el sol nunca descansa, donde poder pasear a la orilla del río, acunado por el canto del búho real en sus sierras, entre árboles frutales que te embriagan con el aroma del azahar, al tiempo que te asombras por su cultura.</p>
        <p>Regálate una tarde de compras visitando nuestros mercados o en nuestros comercios especializados, date un paseo por la ciudad, vente de tapas y disfruta de unas tradiciones aún muy vivas en sus gentes.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Debido a su situación, a caballo entre los climas mediterráneo y semiárido del norte de África, Mollina de Segura como la Región de Murcia en la que se encuentra, recibe al visitante con un esplendido sol más de 300 días al año. 
            Temperatura media de 18º C, veranos calurosos e inviernos suaves con escasas precipitaciones, hacen de nuestra estancia aquí una experiencia inolvidable.</p>
            <p><a href="http://www.aemet.es/es/eltiempo/prediccion/municipios/horas/molina-de-segura-id30027" target="_blank">Hoy en Molina de Segura la temperatura es…</a></p>
            <div class="div-weather">
                
            </div>
        </div>
    </div>
    </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();