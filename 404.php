<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Casper
 */

get_header(); 
if( isset($_SERVER['REQUEST_URI']) ) {
	$s = str_replace(array('-', '%20'),' ', substr($_SERVER['REQUEST_URI'], 1));
	$search = new WP_Query('s='.$s);
}
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found hentry">
				<header class="page-header">
					<h2 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'casper' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<img class="alignright" src="<?php echo get_template_directory_uri(); ?>/img/404-ghost@2x.png" width="96" height="150">
						
					<?php if( isset($search) && $search->have_posts() ):?>
						<p>Below are some search results related to what you were looking for, or you can manually try another search using the form below.</p>
					<?php else:?>
						<p>We tried searching for what you were looking for, but didn&apos;t find anything. Please use the search form below.</p>
					<?php endif; ?>
					
					<p><?php get_search_form(); ?></p>

					<?php if( isset($search) && $search->have_posts() ):
						while( $search->have_posts() ) : $search->the_post(); ?>
							<article>
								<?php $category_list = get_the_category_list( __( ', ', 'casper' ) );
					       		if ( 'post' == get_post_type() ) : ?>
									<span class="post-meta"><?php casper_posted_on(); printf( __( ' on %1$s', 'casper' ), $category_list ); ?></span>
								<?php endif; ?>
								<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php the_excerpt(); ?>
							</article>
						<?php endwhile;
					endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>