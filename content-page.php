<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Casper
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
    	    <a class="blog-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                {{#if @blog.logo}}
                    <img src="{{@blog.logo}}" alt="Blog Logo" />
                {{else}}
                    <span class="blog-title"><?php the_title(); ?></span>
                {{/if}}
            </a>
	</header><!-- .entry-header -->
	<h1 class="post-title"><?php the_title(); ?></h1>
	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'casper' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->