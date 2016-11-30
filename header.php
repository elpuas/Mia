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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4466420089990804",
    enable_page_level_ads: true
  });
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="wordpress, developer,
ui/ux, elpuas, el puas, front end, front-end,
designer, illustrator, 3lpu4s, wordpress developer, wordcamp, web developer, web designer,
advertising, wordpress designer, alfredo navas, carlo fernandini, responsive, mobile web, mobile, el puas dev,
elpuasdev, front-end development, comics, sketches, comic artist, web developer costa rica, web designer costa rica" />
<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
<link href=/favicon.ico rel=icon>
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
								<a type="button" class="fa fa-bars fa-2x theme-hamburguer" data-toggle="modal" data-target="#nav-modal">&nbsp;</a><!-- #site-navigation -->
    </div><!-- .site-branding -->
</header>
<!-- #masthead -->

	<div id="content" class="site-content">
