<?php get_header(); // Load header.php ?>

<?php if (have_posts()) : // Check for posts ?>
	<?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

			<h2><?php the_title();?></h2>
			
			<?php the_content(); // Get the post body ?>

		</article>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); // Load footer.php ?>