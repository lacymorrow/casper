<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Casper
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <?php if ( 'post' == get_post_type() ) : ?>
            <span class="post-meta"><?php casper_posted_on(); ?> | <?php printf($category_list); if ( '' != $tag_list ) { _e('in', 'casper'); } printf($tag_list); ?></span>
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
    </header><!-- .entry-header -->
	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'casper' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->