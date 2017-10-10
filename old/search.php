<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

			<h2 class="blogtitle">Search Results</h2><p>
<?php if ( have_posts() ) : ?>
				<p><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></p>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<p class="entry-title"><?php _e( 'Nothing found.', 'twentyten' ); ?></p>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>

					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
</p>

<?php get_footer(); ?>
