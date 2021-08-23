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
 * @package juventud
 */

get_header();
?>

	<main id="primary" class="site-main max-width-content">
		<div class="max-width-content slider-index-juventud">
			<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
		</div>
		<div class="max-width-content banners-index-juventud">
			<a class="item-banner" href="/juventud/actividades-cursos/">
				<img class="img-banner-pred" src="/juventud/wp-content/uploads/sites/11/2021/05/J_ActividadesCursos.gif" alt="">
				<img class="img-banner-hover" src="/juventud/wp-content/uploads/sites/11/2021/05/SJ_ActividadesCursos.png" alt="">
			</a>
			<a class="item-banner" href="/juventud/la-nueva-19/">
				<img class="img-banner-pred" src="/juventud/wp-content/uploads/sites/11/2021/05/J_Espacio_Joven.gif" alt="">
				<img class="img-banner-hover" src="/juventud/wp-content/uploads/sites/11/2021/05/SJ_Espacio_Joven.png" alt="">
			</a>
			<a class="item-banner" href="/juventud/paticipacion-juvenil/">
				<img class="img-banner-pred" src="/juventud/wp-content/uploads/sites/11/2021/05/J_ParticipacionJuvenil.gif" alt="">
				<img class="img-banner-hover" src="/juventud/wp-content/uploads/sites/11/2021/05/SJ_ParticipacionJuvenil.png" alt="">
			</a>
			<a class="item-banner" href="/juventud/recibe-info/">
				<img class="img-banner-pred" src="/juventud/wp-content/uploads/sites/11/2021/05/J_Informajoven.gif" alt="">
				<img class="img-banner-hover" src="/juventud/wp-content/uploads/sites/11/2021/05/SJ_Informajoven.png" alt="">
			</a>
			<a class="item-banner" href="/juventud/inscripcion-y-tramites/">
				<img class="img-banner-pred" src="/juventud/wp-content/uploads/sites/11/2021/05/J_Inscripcion.gif" alt="">
				<img class="img-banner-hover" src="/juventud/wp-content/uploads/sites/11/2021/05/SJ_Inscripcion.png" alt="">
			</a>
		</div>
		<div class="max-width-content row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12">
				<h4 class="content-title"><i class="bi bi-newspaper"></i> PUBLICACIONES</h4>
				<?php echo do_shortcode('[frontpage_news widget="62" name="PUBLICACIONES"]') ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 lo-mas-leido">
				<div class="list-group">
					<h5 href="#" class="list-group-item list-group-item-action active text-center">LO <i class="bi bi-plus"></i> LEIDO</h5>
					<a href="#" class="list-group-item list-group-item-action">XXX Certamen Literario de Educación Secundaria 2021. Microrrelato y Micropoesía</a>
					<a href="#" class="list-group-item list-group-item-action">TOMA LA RED. Campeonatos y cursos online 2021</a>
					<a href="#" class="list-group-item list-group-item-action">DIALOGOS DE JUVENTUD</a>
					<a href="#" class="list-group-item list-group-item-action">COMISIÓN DE SEGUIMIENTO DEL PLAN JOVEN</a>
				</div>
			</div>
		</div>
		<div class="max-width-content row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12">
				<h4 class="content-title"><i class="bi bi-journals"></i> AGENDA</h4>
				<?php echo do_shortcode('[MEC id="58"]') ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 div-twitter">
				<h4 class="content-title"><i class="bi bi-twitter"></i> TWITTER</h4>
				<?php echo do_shortcode('[custom-twitter-feeds]') ?>
			</div>
		</div>
		<div class="row div-banners-parent max-width-content">
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
get_footer();
