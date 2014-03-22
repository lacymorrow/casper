<?php
/**
 * @package Casper
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'casper' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'casper' ) );

			if ( ! casper_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'casper' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'casper' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'casper' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'casper' );
				}

			} // end check for categories on this blog
		?>
    <header class="post-header">
        <?php if ( 'post' == get_post_type() ) : ?>
			<span class="post-meta"><?php casper_posted_on(); ?> | <?php printf($category_list); if ( '' != $tag_list ) { echo " in "; } printf($tag_list); ?></span>
		<?php endif; ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. 
        	$image_id = get_post_thumbnail_id();
        	$thumb_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
			$medium_url = wp_get_attachment_image_src($image_id,'medium', true);
			$large_url = wp_get_attachment_image_src($image_id,'large', true);
		?>

        	<img data-src='<480:<?php echo $thumb_url[0]; ?>, <768:<?php echo $medium_url[0]; ?>, >768:<?php echo $large_url[0]; ?>' />
			<noscript><?php the_post_thumbnail('thumbnail'); ?></noscript>
	    <?php } ?>
    </header>
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<section class="post-excerpt">
	        <p><?php the_excerpt(); ?></p>
	    </section><!-- .entry-summary -->
	<?php else : ?>
		<section class="post-content">
		    <?php the_content( __( 'more&nbsp<span class="meta-nav">&rarr;</span>', 'casper' ) ); ?>
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
	        <a class="icon-twitter" href="http://twitter.com/share?text=<?php bloginfo( 'name' ); ?>&url=<?php the_permalink(); ?>"
	            onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
	            <span class="hidden">Twitter</span>
	        </a>
	        <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
	            onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
	            <span class="hidden">Facebook</span>
	        </a>
	        <a class="icon-google-plus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"
	           onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
	            <span class="hidden">Google+</span>
	        </a>
	    </section>

	</footer>
</article><!-- #post-## -->
