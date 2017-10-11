
<?php get_header(); ?>
<body>
<?php include('nav.php'); ?>
	<div class="main-panel">
		 <!-- Start the Loop. -->
	<?php if ( is_user_logged_in() ) { ?>
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 <article>
			 <aside class="article-date pull-left" >
				 <div class="post-date post-author"><em style="background-image:url('<?php echo get_wp_user_avatar_src(); ?>');"></em><?php the_author(); ?></div>
				 <div class="post-date"><em><?php the_time('jS') ?></em> <?php the_time('M, Y') ?></div>
				 <div class="post-date post-comments"><a href="<?php the_permalink(); ?>"><em><?php echo get_comments_number(); ?></em></a> Comments</div>
			 </aside>
			 <div class="article-content pull-right">
				 <h1 class="article-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				 <small><?php the_tags(); ?></small>
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
	<?php } else { ?>
		<article>
			<?php include('restricted-form.php'); ?>
		</article>
	<?php } ?>
</div> <!-- main col -->
<?php get_footer(); ?>
</body>
</html>
