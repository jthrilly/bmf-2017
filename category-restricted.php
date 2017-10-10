<?php get_header(); ?>
	<div class="row">
		<div class="col-md-12 main-panel">
		 <!-- Start the Loop. -->

	<?php if ( is_user_logged_in() ) { ?>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <article <?php post_class('clearfix'); ?> >
		    	<div class="article-content pull-right">
					<h1 class="article-header"><?php the_title(); ?></h1>
			 		<small><?php the_tags(); ?></small>
			 		</p>
			 		<div class="entry"><?php the_content(); ?>
			 		</div>
		 		</div>
		 	</article>
		 	<hr class="post-bottom" />
		 	<?php
		 		if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			?>
		 <?php endwhile; ?>
		 <?php else: ?>
		<div class="page-header">
	  	<h1>No Posts</h1>
		</div>
		 	<p>Sorry, no posts matched your criteria.</p>

		 <?php endif; ?>
	<?php } else { ?>
		<article <?php post_class('clearfix'); ?> >
			<?php include('restricted-form.php'); ?>
		</article>
	<?php } ?>
		</div> <!-- main col -->
	</div> <!-- end row -->
</div>
<?php get_footer(); ?>
