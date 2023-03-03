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

		<!-- Start of navigation -->
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
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'flex',
								'add_li_class'  => 'mr-4',
								'link_class'     => 'font-inter text-white text-lg uppercase no-underline hover:underline',
							)
						);
						?>
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
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'flex',
								'add_li_class'  => 'mr-4',
								'link_class'     => 'font-inter text-white hover:text-citybreakteal',
							)
						);
						?>
					</div>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->
