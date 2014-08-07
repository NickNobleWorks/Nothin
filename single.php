<?php get_header(); // Load header.php ?>
		
<article>
	
	<?php if (have_posts()) : // Check for posts ?>
		<?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>
	
			<h2><?php the_title();?></h2>

			<?php if (has_post_thumbnail( $post_id )) : // If the post has a thumbnail, show it: ?>
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
			<?php endif; ?>

			<?php the_content(); // Get the post body ?>
	
		<?php endwhile; ?>
	<?php endif; ?>

</article>

<?php get_footer(); // Load footer.php ?>