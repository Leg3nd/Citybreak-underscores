<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Citybreak_underscoresme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,600&family=Source+Sans+Pro&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'citybreak-underscoresme' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$citybreak_underscoresme_description = get_bloginfo( 'description', 'display' );
			if ( $citybreak_underscoresme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $citybreak_underscoresme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'citybreak-underscoresme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<!-- Start of my header -->
		<div class="w-full p-4 bg-citybreakteal">
			<nav class="container">
				<!-- Flex Container -->
				<div class="flex items-center justify-between">
					<!-- Logo -->
					<div class="pt-2">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/img/citybreak.svg" alt="Citybreak" />
						</a>
					</div>
					<!-- Menu items -->
					<div class="hidden md:flex space-x-6">
						<a href="#" class="font-inter text-lg uppercase text-white no-underline hover:underline">Destinations</a>
						<a href="#" class="font-inter text-lg uppercase text-white no-underline hover:underline">Articles</a>
					</div>
					
				<!-- Hamburger menu -->
				<button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
					<span class="hamburger-top"></span>
					<span class="hamburger-middle"></span>
					<span class="hamburger-bottom"></span>
				</button>
				</div>
				<!-- Mobile menu -->
				<div class="md:hidden">
					<div id="menu" class="absolute flex-col items-center self-end hidden py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
						<a href="#" class="font-inter text-white hover:text-citybreakTeal600">Destinations</a>
						<a href="#" class="font-inter text-white hover:text-citybreakTeal">Articles</a>
					</div>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->
