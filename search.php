<?php
/**
 * Search results pages
 *
 *
 * @package WordPress
 * @subpackage Wonka_Targets
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container-fluid w-search-wrap">

	<div class="row page-header">
		<div class="col-xs-12">
		<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wonka-target' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'wonka-target' ); ?></h1>
		<?php endif; ?>
		</div>
	</div><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End of the loop.

			/*the_posts_pagination( array(
				'prev_text' => wonka-target_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'wonka-target' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'wonka-target' ) . '</span>' . wonka-target_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'wonka-target' ) . ' </span>',
			) );*/

		else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search. Please check your terms and try again or search with some different keywords.', 'wonka-target' ); ?></p>
			<?php

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
