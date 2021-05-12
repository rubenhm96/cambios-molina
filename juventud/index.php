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
			<a class="item-banner" href="">
				<img class="img-banner-pred" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/J_ActividadesCursos.gif" alt="">
				<img class="img-banner-hover" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/SJ_ActividadesCursos.png" alt="">
			</a>
			<a class="item-banner" href="">
				<img class="img-banner-pred" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/J_Espacio_Joven.gif" alt="">
				<img class="img-banner-hover" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/SJ_Espacio_Joven.png" alt="">
			</a>
			<a class="item-banner" href="">
				<img class="img-banner-pred" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/J_ParticipacionJuvenil.gif" alt="">
				<img class="img-banner-hover" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/SJ_ParticipacionJuvenil.png" alt="">
			</a>
			<a class="item-banner" href="">
				<img class="img-banner-pred" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/J_Informajoven.gif" alt="">
				<img class="img-banner-hover" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/SJ_Informajoven.png" alt="">
			</a>
			<a class="item-banner" href="">
				<img class="img-banner-pred" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/J_Inscripcion.gif" alt="">
				<img class="img-banner-hover" src="http://192.168.3.216/wordpress/juventud/wp-content/uploads/sites/6/2021/05/SJ_Inscripcion.png" alt="">
			</a>
		</div>
		

	</main><!-- #main -->

<?php
get_footer();
