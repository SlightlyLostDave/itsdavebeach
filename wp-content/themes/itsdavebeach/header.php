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
    <!--<a href="#content">Skip to content</a>-->

	<header>
		<nav>
			<ul id="main-menu" class="main-menu">
				<li class="main-menu__menu-item"><a href="/">Home</a></li>
				<li class="main-menu__menu-item"><a data-bg="about.jpg" data-text="About Me" href="#about">About</a></li>
				<li class="main-menu__menu-item"><a data-bg="resume.jpg" data-text="Résumé" href="#resume">Résumé</a></li>
				<li class="main-menu__menu-item"><a data-bg="skills.jpg" data-text="Skills" href="#skills">Skills</a></li>
				<li class="main-menu__menu-item"><a href="/style-guide/">Style Guide</a></li>
			</ul>
		</nav>
		<button class="hamburger" type="button" aria-label="Menu" aria-controls="navigation">
			<span class="hamburger__box">
				<span class="hamburger__inner"></span>
			</span>
		</button>
	</header>

	<!-- Loading Spinner -->
	<div class="loading">
		<div class="loading__text">
			<div class="loading__text__letter">L</div>
			<div class="loading__text__letter">O</div>
			<div class="loading__text__letter">A</div>
			<div class="loading__text__letter">D</div>
			<div class="loading__text__letter">I</div>
			<div class="loading__text__letter">N</div>
			<div class="loading__text__letter">G</div>
		</div>
	</div>

	<div id="content">
