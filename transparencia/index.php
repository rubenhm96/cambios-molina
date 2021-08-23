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
 * @package transparencia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!--<div class="row separador">
			<div class="col-lg-3 col-md-4 col-sm-3 col-12 div-link-alcalde">
				<a href="" class="alcalde-a-un-click"><img src="http://192.168.3.216/wordpress/transparencia/wp-content/uploads/sites/7/2021/05/Alcalde-a-un-click-movimiento.gif" alt=""></a>
			</div>
			<div class="col-lg-9 col-md-8 col-sm-9 col-12 div-actualidad-parent">
				<h4><i class="bi bi-globe2"></i> Actualidad</h4>
				<div class="col-lg-12 div-actualidad" id="div-actualidad">
					<?php
						/*$aux = 0;
						while ( have_posts() & $aux<5 ) :
							$aux++;
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );
						endwhile; // End of the loop.*/
					?>
				</div>
			</div>
		</div>-->
		<!--<div class="row separador">
			<div class="col-lg-6 iconos-centrales-parent">
				<a href="##" class="iconos-centrales">
					<h4><i class="material-icons icono-titulo">euro_symbol</i> PRESUPUESTOS</h4>
					<p class="txt-iconos-centrales">Te mostramos de un modo claro cómo se distribuye nuestro presupuesto. De dónde vienen los ingresos y a qué destinamos el gasto.</p>
				</a>
			</div>
			<div class="col-lg-6 iconos-centrales-parent">
				<a href="##" class="iconos-centrales">
					<h4><i class="material-icons icono-titulo">account_balance</i> MI MUNICIPIO EN CIFRAS</h4>
					<p class="txt-iconos-centrales">Te mostramos de un modo claro cómo se distribuye nuestro presupuesto. De dónde vienen los ingresos y a qué destinamos el gasto.</p>
				</a>
			</div>
			<div class="col-lg-6 iconos-centrales-parent">
				<a href="##" class="iconos-centrales">
					<h4><i class="bi bi-people-fill icono-titulo"></i> PARTICIPACIÓN CIUDADANA</h4>
					<p class="txt-iconos-centrales">Te mostramos de un modo claro cómo se distribuye nuestro presupuesto. De dónde vienen los ingresos y a qué destinamos el gasto.</p>
				</a>
			</div>
			<div class="col-lg-6 iconos-centrales-parent">
				<a href="##" class="iconos-centrales">
					<h4><i class="bi bi-chat-text-fill icono-titulo"></i> SUGERENCIAS Y QUEJAS</h4>
					<p class="txt-iconos-centrales">Te mostramos de un modo claro cómo se distribuye nuestro presupuesto. De dónde vienen los ingresos y a qué destinamos el gasto.</p>
				</a>
			</div>
		</div>-->
		<div class="row div-parent-click max-width-content separador site-main-index">
			<div class="div-a-un-click">
				<a href="" class=" col-lg-4 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-newspaper btn-2"></i><span class="btn-1 from-right">Actualidad</span></a>
				<a href="" class=" col-lg-4 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-box-arrow-in-up btn-2"></i><span class="btn-1 from-right">Alcalde a un Click</span></a>
				<a href="" class=" col-lg-4 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-calculator-fill btn-2"></i><span class="btn-1 from-right">Presupuestos</span></a>
				<a href="" class=" col-lg-4 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-bar-chart-fill btn-2"></i><span class="btn-1 from-right">Mi Municipio en Cifras</span></a>
				<a href="" class=" col-lg-4 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-people-fill btn-2"></i><span class="btn-1 from-right">Participación Ciudadana</span></a>
				<a href="" class=" col-lg-4 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-chat-text-fill btn-2"></i><span class="btn-1 from-right">Sugerencias y Quejas</span></a>
			</div>
		</div>
		<div class="row div-tramites separador-padding">
			<div class="max-width-content">
				<?php
					echo do_shortcode('[smartslider3 slider="2"]');
				?>
			</div>
			<div class="max-width-content col-12 div-iconos-pie">
				<a href="https://www.facebook.com/AytoMolinaSegura"><i class="bi bi-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
				<a href="https://twitter.com/AytMolinaSegura"><i class="bi bi-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
				<a href="https://www.instagram.com/aytomolina"><i class="bi bi-instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram"></i></a>
				<a href="https://www.youtube.com/channel/UC0g4oAo4hihGQrfB2x7qxiw"><i class="bi bi-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
				<a href="https://t.me/AytoMolina"><i class="bi bi-telegram" data-toggle="tooltip" data-placement="bottom" title="Telegram"></i></a>
			</div>
			<div class="max-width-content row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-12 lo-mas-leido">
					<div class="list-group">
						<h5 href="#" class="list-group-item list-group-item-action active text-center">LO <i class="bi bi-plus"></i> LEIDO</h5>
						<a href="#" class="list-group-item list-group-item-action">XXX Certamen Literario de Educación Secundaria 2021. Microrrelato y Micropoesía</a>
						<a href="#" class="list-group-item list-group-item-action">TOMA LA RED. Campeonatos y cursos online 2021</a>
						<a href="#" class="list-group-item list-group-item-action">DIALOGOS DE JUVENTUD</a>
						<a href="#" class="list-group-item list-group-item-action">COMISIÓN DE SEGUIMIENTO DEL PLAN JOVEN</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-12  noticias-transparencia">
					<?php echo do_shortcode('[recent_post_carousel show_author="false" limit="8" show_read_more="false" show_category_name="false" slides_to_show="3" content_words_limit="15"]') ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
