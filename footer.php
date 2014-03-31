<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Casper
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	    <a class="subscribe icon-feed" href="<?php bloginfo('rss2_url'); ?>"><span class="tooltip">Subscribe!</span></a>
		<div class="site-info inner">
		    <section class="copyright">
		    	<?php if(  false == get_theme_mod( 'casper_custom_footer') ) { ?>
		    		<a href="https://github.com/lacymorrow/casper-wp" rel="home">Casper WP</a> &bull; Inspired by <span class="icon-ghost">Ghost.org</span>
		    	<?php } else { echo get_theme_mod( 'casper_custom_footer'); } ?>
		    </section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</main><!-- /#content -->

</body>
</html>
