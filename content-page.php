<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Casper
 */
?>
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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <?php if ( 'post' == get_post_type() ) : ?>
            <span class="post-meta">
                <?php 
                    if(  false == get_theme_mod( 'casper_hide_dates') ) {
                        casper_posted_on(); 
                    }
                    if(  false == get_theme_mod( 'casper_hide_categories') ) {
                        printf( __( ' | ', 'casper' ).'%1$s', $category_list );
                    }
                    if(  false == get_theme_mod( 'casper_hide_tags') ) {
                        if ( '' != $tag_list ) { _e(' in ', 'casper'); } printf($tag_list); 
                    }
                    edit_post_link( __( 'Edit&rarr;', 'casper' ), '<span class="edit-link">&nbsp;&bull;&nbsp;', '</span>' ); 
                ?>
            </span>
        <?php endif; ?>
        <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
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
        <div class="clear">&nbsp;</div>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'casper' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->