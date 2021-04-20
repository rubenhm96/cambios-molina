<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package molinadesegura
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'molinadesegura' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			/*Logo Portal*/
			the_custom_logo();
			?>
			<div class="other-actions">
				<!--Plugin El tiempo-->
				<div class="div-weather">
					<section id="tiempo_widget-2" class="widget tiempo_widget">
						<div class="tiempo-widget weather_widget_wrap tight" data-background="#ffff" data-text-color="#000"  data-width="tight" data-days="0" data-sunrise="false" data-wind="false" data-current="on" data-language="spanish" data-city="Molina de Segura" data-country="Spain">
                		<div class="weather_widget_placeholder"></div>
            			</div>
					</section>
				</div>
				<!--Contenedor enlaces de contacto-->
				<div class="div-contact">
					<div class="contact">
						<a href="##"><i class='bi-envelope' style='font-size: 1.4rem; color: #fff;'></i><span>Contacta con nosotros</span></a>
					</div>
					<div id="clon-responsive" class="social-media">
						<!--Plugin redes sociales-->
						<?php echo do_shortcode('[cn-social-icon selected_icons="4,5,6,7,8"]') ?>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<!--Menu de navegacion-->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'molinadesegura' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
