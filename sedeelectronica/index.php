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
 * @package sedeElectronica
 */

get_header();
?>

	<main id="primary" class="site-main max-width">
		<div class="row div-parent-click max-width-content">
			<div class="div-a-un-click">
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-paperclip btn-2"></i><span class="btn-1 from-right">Trámites Destacados</span></a>
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-folder-fill btn-2"></i><span class="btn-1 from-right">Mi Carpeta</span></a>
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-at btn-2"></i><span class="btn-1 from-right">Registro Electrónico</span></a>
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-arrow-up-fill btn-2"></i><span class="btn-1 from-right">Validación de Documentos</span></a>
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-calendar-week-fill btn-2"></i><span class="btn-1 from-right">Calendarios</span></a>
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-text-fill btn-2"></i><span class="btn-1 from-right">Normativa Municipal</span></a>
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-envelope-open-fill btn-2"></i><span class="btn-1 from-right">Sugerencias y Quejas</span></a>
			<a href="" class=" col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-bell-fill btn-2"></i><span class="btn-1 from-right">Mis Notificaciones</span></a>
			</div>
		</div>
		<div class="row div-tramites">
			<div class="max-width-content">
				<?php
					echo do_shortcode('[smartslider3 slider="2"]');
				?>
			</div>
			<div class="div-banners col-12 max-width-content">
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
			<div class="max-width-content col-12 div-iconos-pie">
				<a href="https://www.facebook.com/AytoMolinaSegura"><i class="bi bi-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
				<a href="https://twitter.com/AytMolinaSegura"><i class="bi bi-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
				<a href="https://www.instagram.com/aytomolina"><i class="bi bi-instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram"></i></a>
				<a href="https://www.youtube.com/channel/UC0g4oAo4hihGQrfB2x7qxiw"><i class="bi bi-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
				<a href="https://t.me/AytoMolina"><i class="bi bi-telegram" data-toggle="tooltip" data-placement="bottom" title="Telegram"></i></a>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
