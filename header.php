<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pagee
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pagee' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<div class="pagee__container">
			<div class="inner_container_wide margin-x-auto clear">

				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation clear" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="burger_menu genericon genericon-menu"></span></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</div><!-- /.inner_container -->
		</div><!-- /.pagee__container -->


		<?php /*
		<div class="pagee__container">

			<div class="inner_container_wide margin-x-auto clear">

				<nav id="site-navigation" class="main-navigation clear" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pagee' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</div><!-- /.inner_container -->

		</div><!-- /.pagee__container -->
		*/ ?>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
