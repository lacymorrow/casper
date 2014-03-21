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
			<span class="post-meta"><?php casper_posted_on(); ?> on <?php printf($category_list); ?></span>
		<?php endif; ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    </header>
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<section class="post-excerpt">
	        <p><?php the_excerpt(); ?></p>
	    </section><!-- .entry-summary -->
	<?php else : ?>
		<section class="post-content">
		    <?php the_content( __( 'more&nbsp;<span class="meta-nav">&rarr;</span>', 'casper' ) ); ?>
		    <?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'casper' ),
					'after'  => '</div>',
				) );
			?>
		</section>
	<?php endif; ?>
</article><!-- #post-## -->