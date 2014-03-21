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
		    	<?php if( ) { ?>
		    		<a href="https://github.com/lacymorrow/casper-wp" rel="home">Casper WP</a> &bull; Inspired by <a class="icon-ghost" href="http://ghost.org">Ghost</a>
		    	<?php } else { ?>

				<?php } ?>
		    </section>
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'casper' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'casper' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'casper' ), 'Casper', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</main><!-- /#content -->

</body>
</html>
