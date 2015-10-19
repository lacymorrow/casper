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

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" role="banner" class="site-head site-header" <?php if(get_header_image() ) : ?>style="background-image: url(<?php esc_url(header_image()); ?>);"<?php endif ?>>
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <div>
            <h1 class="menu-toggle">
                <a class="icon-bars" href="#">
                    <span class="hidden"><?php _e( 'Menu', 'casper' ); ?></span>
                </a>
            </h1>
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'casper' ); ?></a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
    </nav><!-- #site-navigation -->

    <div class="vertical-row">
        <div class="vertical">
            <div class="site-head-content inner">
                <?php if ( get_theme_mod( 'casper_logo' ) ) : ?>
                    <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'casper_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                <?php endif; ?>

                <div class="social-icons">
                    <?php if ( false != get_theme_mod( 'casper_social_youtube')) { ?>
                        <a class="icon-youtube" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_youtube') ); ?>">
                            <span class="hidden"><?php _e( 'Youtube', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_tumblr')) { ?>
                        <a class="icon-tumblr" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_tumblr') ); ?>">
                            <span class="hidden"><?php _e( 'Tumblr', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_instagram')) { ?>
                        <a class="icon-instagram" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_instagram') ); ?>">
                            <span class="hidden"><?php _e( 'Instagram', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_google')) { ?>
                        <a class="icon-google-plus" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_google') ); ?>">
                            <span class="hidden"><?php _e( 'Google+', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_facebook')) { ?>
                        <a class="icon-facebook" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_facebook') ); ?>">
                            <span class="hidden"><?php _e( 'Facebook', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_twitter')) { ?>
                        <a class="icon-twitter" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_twitter' ) ); ?>">
                            <span class="hidden"><?php _e( 'Twitter', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_website')) { ?>
                        <a class="icon-home" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_website') ); ?>">
                            <span class="hidden"><?php _e( 'Home', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_mail')) { ?>
                        <a class="icon-envelope" target="_blank" href="<?php echo esc_url( 'mailto:' . get_theme_mod( 'casper_social_mail') ); ?>">
                            <span class="hidden"><?php _e( 'Email', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_linkedin')) { ?>
                        <a class="icon-linkedin" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_linkedin') ); ?>">
                            <span class="hidden"><?php _e( 'LinkedIn', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_github')) { ?>
                        <a class="icon-github-alt" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_github') ); ?>">
                            <span class="hidden"><?php _e( 'GitHub', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_bitbucket')) { ?>
                        <a class="icon-bitbucket" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_bitbucket') ); ?>">
                            <span class="hidden"><?php _e( 'Bitbucket', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_stack_overflow')) { ?>
                        <a class="icon-stack-overflow" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_stack_overflow') ); ?>">
                            <span class="hidden"><?php _e( 'Stack Overflow', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_dribbble')) { ?>
                        <a class="icon-dribbble" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_dribbble') ); ?>">
                            <span class="hidden"><?php _e( 'Dribbble', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_behance')) { ?>
                        <a class="icon-behance" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_behance') ); ?>">
                            <span class="hidden"><?php _e( 'Behance', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_rss')) { ?>
                        <a class="icon-feed" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_rss') ); ?>">
                            <span class="hidden"><?php _e( 'RSS', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_codepen')) { ?>
                        <a class="icon-codepen" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_codepen') ); ?>">
                            <span class="hidden"><?php _e( 'CodePen', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_deviantart')) { ?>
                        <a class="icon-deviantart" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_deviantart') ); ?>">
                            <span class="hidden"><?php _e( 'Deviant Art', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_flickr')) { ?>
                        <a class="icon-flickr" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_flickr') ); ?>">
                            <span class="hidden"><?php _e( 'Flickr', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_lastfm')) { ?>
                        <a class="icon-lastfm" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_lastfm') ); ?>">
                            <span class="hidden"><?php _e( 'LastFM', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_soundcloud')) { ?>
                        <a class="icon-soundcloud" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_soundcloud') ); ?>">
                            <span class="hidden"><?php _e( 'SoundCloud', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_spotify')) { ?>
                        <a class="icon-spotify" target="_blank" href="<?php echo esc_url( get_theme_mod( 'casper_social_spotify') ); ?>">
                            <span class="hidden"><?php _e( 'Spotify', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                </div>
                <h1 class="blog-title"><a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="blog-description"><?php bloginfo( 'description' ); ?></h2>
            </div>
        </div>
    </div>
</header><!-- #masthead -->

<main id="content" class="content" role="main">
