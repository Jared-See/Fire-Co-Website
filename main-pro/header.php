<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php wp_title(); ?></title>
	
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'main' ); ?></a>

	<header>
		<div class="site-branding">
		
		</div><!-- .site-branding -->

		<nav>
			<ul class="header">
	  <li class="header-li Apperatus"><a href="#">Apparatus</a></li>
	  <li class="header-li"><a href="#">Gallery</a></li>

		<div class="dropdown">
				<button class="dropbtn">About Us 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="#">History</a>
					<a href="#">Company Officers</a>
					<a href="#">Crew Officers</a>
					<a href="#">Mission</a>
					<a href="#">Members</a>
					<a href="#">Volunteer</a>
					<a href="#">FAQ</a>
				</div>
		</div> 
  	  
		<li class="header-li"><a href="#">Events</a></li>	
	  <li class="header-li"><a href="#">Contact Us</a></li>
	  <li class="header-li"><a class="active" href="#">Home</a></li>
	</ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
    <div class="container">

	<div id="content" class="site-content">
