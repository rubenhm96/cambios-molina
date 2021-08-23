<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deportes
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
	<script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'deportes' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<?php
					the_custom_logo();
					?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 div-cont-header">
					<div class="search-form col-lg-12 col-md-12 col-sm-12 col-6">
						<?php echo do_shortcode('[wd_asp id=6]'); ?>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-6 div-iconos-header">
						<a href="https://www.facebook.com/Concejal%C3%ADa-de-Deporte-y-Salud-de-Molina-de-Segura-136429330311227/" title="Facebook"><i class="bi bi-facebook"></i></a>
						<a href="https://twitter.com/DEPORTEYSALUD4" title="Twitter"><i class="bi bi-twitter"></i></a>
					</div>
				</div>	
			</div>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<?php echo do_shortcode('[maxmegamenu location=menu-1]')?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
