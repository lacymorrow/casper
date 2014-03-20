<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Casper
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta property="og:site_name" content="Amjad Masad" />
<meta property="og:title" content="Why I'm Excited About Object.observe" />
<meta property="og:type" content="article" />
<meta property="article:publisher" content="https://www.twitter.com/amasad" />
<meta property="article:author" content="https://www.twitter.com/amasad" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory(); ?>/favicon.ico">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Open+Sans:700,400" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" role="banner" class="site-head site-header" <?php if(is_home() && get_header_image() ) : ?>style="background-image: url(<?php header_image(); ?>);"<?php endif ?>>
    <div class="vertical">
        <div class="site-head-content inner">
            <a class="blog-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_avatar(1); ?></a>
            <h1 class="blog-title"><a class="blog-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="blog-description"><?php bloginfo( 'description' ); ?></h2>
        </div>
    </div>
    <!-- <nav id="site-navigation" class="main-navigation" role="navigation">
		<h1 class="menu-toggle"><?php _e( 'Menu', 'casper' ); ?></h1>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'casper' ); ?></a>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav> --><!-- #site-navigation -->
</header><!-- #masthead -->

<main id="content" class="content" role="main">