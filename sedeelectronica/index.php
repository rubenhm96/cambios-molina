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

	<main id="primary" class="site-main">
		<div class="row div-parent-click">
			<div class="col-12">
				<h4 class="title-click">A un Click</h4>
				<!--TRAMITES A UN CLICK-->
			</div>
			<div class="div-a-un-click">
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-paperclip btn-2"></i><span class="btn-1 from-right">Trámites Destacados</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-folder-fill btn-2"></i><span class="btn-1 from-right">Mi Carpeta</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-at btn-2"></i><span class="btn-1 from-right">Registro Electrónico</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-arrow-up-fill btn-2"></i><span class="btn-1 from-right">Validación de Documentos</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-calendar-week-fill btn-2"></i><span class="btn-1 from-right">Calendarios</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-text-fill btn-2"></i><span class="btn-1 from-right">Normativa Municipal</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-envelope-open-fill btn-2"></i><span class="btn-1 from-right">Sugerencias y Quejas</span></a>
			</div>
		</div>
		<div class="row div-tramites">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 div-tramites-destacados">
				<h4 class="titulo-tramites">Trámites Destacados</h4>
				<!--TRAMITES DESTACADOS-->
				<div class="contenido-destacados">
					<div class="link-destacado">
						<a href="">Presentación de Facturas</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
					</div>
					<div class="link-destacado">
						<a href="">Aportar Documentos a Expediente</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
					</div>
					<div class="link-destacado">
						<a href="">Tasa por Derechos de Examen</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
						<i class="iconos-tramites bi bi-person" title="Trámite Presencial"></i>
					</div>
					<div class="link-destacado">
						<a href="">Instancia Genérica</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
						<i class="iconos-tramites bi bi-person" title="Trámite Presencial"></i>
					</div>
					<div class="link-destacado">
						<a href="">Solicitud Tarjeta Residente</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
						<i class="iconos-tramites bi bi-person" title="Trámite Presencial"></i>
						<i class="iconos-tramites bi bi-telephone" title="Trámite Telefónico"></i>
					</div>
					<div class="link-destacado">
						<a href="">Pago de Multas de Tráfico</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
						<i class="iconos-tramites bi bi-person" title="Trámite Presencial"></i>
						<i class="iconos-tramites bi bi-telephone" title="Trámite Telefónico"></i>
					</div>
					<div class="link-destacado">
						<a href="">Solicitud Certificado de Convivencia</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
						<i class="iconos-tramites bi bi-person" title="Trámite Presencial"></i>
					</div>
					<div class="link-destacado">
						<a href="">Solicitud Volante Empadronamiento</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
						<i class="iconos-tramites bi bi-person" title="Trámite Presencial"></i>
						<i class="iconos-tramites bi bi-telephone" title="Trámite Telefónico"></i>
					</div>
					<div class="link-destacado">
						<a href="">Solicitud de Licencia de Obra Menor</a>
						<i class="iconos-tramites bi bi-display" title="Trámite Online"></i>
						<i class="iconos-tramites bi bi-person" title="Trámite Presencial"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 div-tramites-momento">
				<h4 class="titulo-tramites">Trámites y Servicios del Momento</h4>
				<!--TRAMITES DEL MOMENTO-->
				<div class="contenido-tmomento">
					<div class="link-tmomento">
						<a href="">Subvenciones para proyectos culturales</a>
					</div>
					<div class="link-tmomento">
						<a href="">Subvenciones para proyectos o servicios dirigidos a la juventud</a>
					</div>
					<div class="link-tmomento">
						<a href="">Solicitud de beca para emprender</a>
					</div>
					<div class="link-tmomento">
						<a href="">Ayudas a la contratación laboral</a>
					</div>
					<div class="link-tmomento">
						<a href="">Inscripción en el programa municipal de Actividades Vacacionales	</a>
					</div>
					<div class="link-tmomento">
						<a href="">Subvenciones para el desarrollo de proyectos sociales</a>
					</div>
				</div>
			</div>
		</div>
		<div class="div-contacta-parent">
			<div class="row">
				<div class="col-12">
					<h4>CONTACTA</h4>
				</div>
				<div class="div-contacta">
					<a href="" class="col-lg-2 col-md-3 col-sm-6 col-12 btn-contacta"><i class="bi bi-telephone-fill btn-4"></i><span class="btn-3">TELÉFONO</span></a>
					<a href="" class="col-lg-2 col-md-3 col-sm-6 col-12 btn-contacta"><i class="bi bi-person-fill btn-4"></i><span class="btn-3">PRESENCIAL</span></a>
					<a href="" class="col-lg-2 col-md-3 col-sm-6 col-12 btn-contacta"><i class="bi bi-display btn-4"></i><span class="btn-3">INTERNET</span></a>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
