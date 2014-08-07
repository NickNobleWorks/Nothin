		<?php get_header(); // Load header.php ?>
				
		<?php if (have_posts()) : // Check for posts ?>
			<?php while (have_posts()) : the_post(); // If there are posts, do each like this: ?>

				<article>
				
					<h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

					<?php if (has_post_thumbnail( $post_id )) : // If the post has a thumbnail, show it: ?>
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
					<?php endif; ?>

					<?php the_content(); // Get the post body ?>

					<ul> <!-- Meta Content for post, add and remove as needed -->
						<li><?php the_time('F jS, Y'); // Show the date posted ?></li>
						<li><?php the_category(''); // Lists the categories?></li>
						<li><?php comments_number( $zero, $one, $more, $deprecated ); // Let's us know if there's comments / how many exist ?></li>
					</ul>

				</article>

			<?php endwhile; // There are no more posts to list ?>

		<?php else : // If no posts show up, tell the user ?>
			<h2>No posts found :(</h2>
		<?php endif; ?>

		<?php get_footer(); // Load footer.php ?>