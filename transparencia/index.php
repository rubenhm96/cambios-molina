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

	<main id="primary" class="site-main max-width-content site-main-index">
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
		<div class="row separador">
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
		</div>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
