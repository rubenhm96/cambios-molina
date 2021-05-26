<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package juventud
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'juventud' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="header-in max-width-content">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>

		</div><!-- .site-branding -->
		<div class="site-header-right">
			<div class="div-content-header">
				<div class="div-iconos-header">
					<a href="https://www.facebook.com/JuventudMolina/" target="_blank"><i class="bi bi-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
					<a href="https://twitter.com/juventudmolina" target="_blank"><i class="bi bi-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
					<a href="https://www.instagram.com/juventudmolina/" target="_blank"><i class="bi bi-instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram"></i></a>
					<a href="https://www.youtube.com/user/juventudmolina" target="_blank"><i class="bi bi-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
				</div>
				<form role='search' method='get' class='search-form' action='http://172.28.0.120/juventud'>
					<button type='submit' class='search-submit' id="btn-buscador"><i class='bi-search'></i></button>
					<label><span class='screen-reader-text'>Buscar:</span><input type='search'name='s' class='search-field' id='buscador' placeholder='Buscador' value></label>
				</form>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php echo do_shortcode('[maxmegamenu location=menu-1]')?>
			</nav><!-- #site-navigation -->
		</div>
	</div>
	</header><!-- #masthead -->
