<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mia' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
        <?php if ( get_theme_mod( 'mia_logo' ) ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
 
        <img src="<?php echo get_theme_mod( 'mia_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
 
    </a>

            <?php else : ?>

                <hgroup>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <p class="site-description">
                        <?php bloginfo( 'description' ); ?>
                    </p>
                </hgroup>

                <?php endif; ?>
    </div><!-- .site-branding -->
<a type="button" class="fa fa-bars fa-5x" data-toggle="modal" data-target="#nav-modal">&nbsp;</a><!-- #site-navigation -->
</header>
<!-- #masthead -->

	<div id="content" class="site-content">
