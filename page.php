<?php get_header(); ?>
<body>
<?php include('nav.php'); ?>
	<div class="main-panel">
	 <!-- Start the Loop. -->
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <article>
	    	<div class="article-content text-center">
					<h1 class="front-page-header"><?php the_title(); ?></h1>
		 		</div>
		 		<div class="entry"><?php the_content(); ?></div>
	 		</article>
	 <?php endwhile; ?>
	 <?php else: ?>
		<div class="page-header">
	  	<h1>No Posts</h1>
		</div>
	 	<p>Sorry, no posts matched your criteria.</p>
	 <?php endif; ?>
	</div> <!-- main col -->
<?php get_footer(); ?>
</body>
</html>
