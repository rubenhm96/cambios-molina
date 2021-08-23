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
 * @package bibliotecas
 */
get_header();
?>

	<main id="primary" class="site-main max-width">
		<div class="video-promo"><!--Video promocion-->
			<?php echo do_shortcode('[smartslider3 slider="2"]');?>
		</div>
		<!--Enlaces Alcalde y otros-->
		<div class="row div-other-links">
			<div class="max-width-content-center">
				<!--Enlaces-->
				<div class="col-lg-6 col-md-12 col-sm-12 col-12 links-1">
					<a href="##"><i class="bi-at"></i><h4>Sede electrónica</h4></a>
					<a href="##"><i class="bi-briefcase"></i><h4>Perfil del contratante</h4></a>
					<a href="##"><i class="bi-calendar3"></i><h4>Cita Previa</h4></a>
					<a href="##"><i class="bi-clipboard-check"></i><h4>Transparencia</h4></a>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-12 links-2">
					<a href="##"><i class="bi-file-earmark-text"></i><h4>Trámites Administrativos</h4></a>
					<a href="##"><i class="bi-display"></i><h4>Registro Electrónico</h4></a>
					<a href="##"><i class="bi-envelope-open"></i><h4>Contacto</h4></a>
					<a href="##"><i class="bi-building"></i><h4>Corporación</h4></a>
				</div>
			</div>
		</div>
		<!--Calendario-->
		<div class="row div-eventos max-width-content">
			<h4 class="title-calendar"><i class="bi bi-calendar prox-eventos"></i> CALENDARIO DE EVENTOS</h4>
			<div class="div-calendar col-lg-4 col-md-4 col-sm-12 col-12">
				<?php echo do_shortcode('[MEC id="9"]')?>
			</div>
			<div class="div-prox-eventos col-lg-8 col-md-8 col-sm-12 col-12">
				<?php echo do_shortcode('[MEC id="15"]')?>
				<a class="btn btn-secundary" href="/bibliotecas/calendario-de-eventos/">Ver Más Eventos</a>
			</div>
		</div>
		<div class="row div-noticias max-width-content">
			<!--Noticias de Ultima Hora-->
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 noticias-ultima-hora">
				<h4><i class="bi bi-alarm ultima-hora"></i> ÚLTIMA HORA</h4>
				<?php echo do_shortcode('[recent_post_carousel category="4" show_author="false" limit="8" show_read_more="false" show_category_name="false" slides_to_show="1" content_words_limit="10"]') ?>
			</div>
			<!--Noticias Generales-->
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 noticias-generales">
				<h4><i class="bi bi-newspaper ultima-hora"></i> NOTICIAS</h4>
				<?php echo do_shortcode('[frontpage_news widget="41" name="Noticias"]')?>
				<div class="morenews-link">
					<a href="/bibliotecas/category/noticias/" class="btn btn-primary btn-sm" role="button">MÁS NOTICIAS</a>
				</div>
			</div>
		</div>
		<div class="row div-galeria-videos max-width-content">
			<!--Contenedor de Encuestas-->
			<div class="col-lg-3 col-md-12 col-sm-12 col-12 div-encuestas">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 div-twitter">
					<h4><i class="bi bi-twitter"></i> ÚLTIMOS TWEETS</h4>
					<?php echo do_shortcode('[custom-twitter-feeds]') ?>
				</div>
			</div>
			<!--Galeria de Videos-->
			<div class="col-lg-9 col-md-12 col-sm-12 col-12">
				<h4><i class="bi bi-play-btn ultima-hora"></i> VÍDEOS</h4>
				<?php echo do_shortcode('[Total_Soft_Gallery_Video id="1"]') ?>
			</div>
		</div>
		<!--Banners-->
		<div class="row max-width-content">
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
