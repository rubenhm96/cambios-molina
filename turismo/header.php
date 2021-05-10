<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package turismo
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'turismo' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<?php
					the_custom_logo();
					?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 div-cont-header">
					<form role='search' method='get' class='search-form col-lg-12 col-md-12 col-sm-12 col-6' action='http://172.28.0.120/turismo'>
						<button type='submit' class='search-submit' id="btn-buscador"><i class='bi-search'></i></button>
						<label><span class='screen-reader-text'>Buscar:</span><input type='search'name='s' class='search-field' id='buscador' placeholder='Buscador' value></label>
					</form>
					<div class="col-lg-12 col-md-12 col-sm-12 col-6 div-iconos-header">
						<a href="https://www.facebook.com/AytoMolinaSegura" title="Facebook"><i class="bi bi-facebook"></i></a>
						<a href="https://twitter.com/AytMolinaSegura" title="Twitter"><i class="bi bi-twitter"></i></a>
						<a href="https://www.instagram.com/aytomolina" title="Instagram"><i class="bi bi-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UC0g4oAo4hihGQrfB2x7qxiw" title="Youtube"><i class="bi bi-youtube"></i></a>
						<a href="https://t.me/AytoMolina" title="Telegram"><i class="bi bi-telegram"></i></a>
					</div>
				</div>	
			</div>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<?php echo do_shortcode('[maxmegamenu location=max_mega_menu_1]')?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
