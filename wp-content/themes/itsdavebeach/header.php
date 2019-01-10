<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package It's_Dave_Beach
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a href="#content">Skip to content</a>

	<header>
		<nav>
			<?php
				wp_nav_menu( array(
					'menu_class' => 'main-menu',
					'container' => false,
					'theme_location' => 'primary-menu',
				) );
			?>
		</nav>
		<button class="hamburger" type="button" aria-label="Menu" aria-controls="navigation">
			<span class="hamburger__box">
				<span class="hamburger__inner"></span>
			</span>
		</button>
	</header>