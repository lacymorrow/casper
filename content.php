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
			<span class="post-meta"><?php casper_posted_on(); printf( __( ' on ', 'casper' ).'%1$s', $category_list ); ?></span>
		<?php endif; ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. 
        	$image_id = get_post_thumbnail_id();
        	$thumb_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
			$medium_url = wp_get_attachment_image_src($image_id,'medium', true);
			$large_url = wp_get_attachment_image_src($image_id,'large', true);
		?>

        	<div class="post-image">
        		<img data-src='<480:<?php echo $thumb_url[0]; ?>, <768:<?php echo $medium_url[0]; ?>, >768:<?php echo $large_url[0]; ?>' />
			</div>
			<noscript><?php the_post_thumbnail('thumbnail'); ?></noscript>
	    <?php } ?> 
    </header>
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<section class="post-excerpt">
	        <p><?php the_excerpt(); ?></p>
	    </section><!-- .entry-summary -->
	<?php else : ?>
		<section class="post-content">
		    <?php the_content( __( '&hellip;&nbsp;<span class="meta-nav">&rarr;</span>', 'casper' ) ); ?>
		    <?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'casper' ),
					'after'  => '</div>',
				) );
			?>
		</section>
	<?php endif; ?>
</article><!-- #post-## -->