<?php
/**
 * @package Casper
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'casper' ) );
		?>
    <header class="post-header">
        <?php if ( 'post' == get_post_type() ) : ?>
			<span class="post-meta"><?php casper_posted_on(); ?> in <?php printf($category_list; ?></span>
		<?php endif; ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    </header>
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<section class="post-excerpt">
	        <p><?php the_excerpt(); ?></p>
	    </section><!-- .entry-summary -->
	<?php else : ?>
		<section class="post-content">
		    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'casper' ) ); ?>
		    <?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'casper' ),
					'after'  => '</div>',
				) );
			?>
		</section>
	<?php endif; ?>

	<footer class="post-footer">

	    <section class="author">
	        <h4><?php the_author_link(); ?></h4>
	        <p><?php the_author_meta('description'); ?></p>
	    </section>

	    <section class="share">
	        <h4>Share this post</h4>
	        <a class="icon-twitter" href="http://twitter.com/share?text={{encode title}}&url={{url absolute="true"}}"
	            onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
	            <span class="hidden">Twitter</span>
	        </a>
	        <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{url absolute="true"}}"
	            onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
	            <span class="hidden">Facebook</span>
	        </a>
	        <a class="icon-google-plus" href="https://plus.google.com/share?url={{url absolute="true"}}"
	           onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
	            <span class="hidden">Google+</span>
	        </a>
	    </section>

	</footer>
</article><!-- #post-## -->
