<?php get_header(); ?>

	<div> <!-- Main container -->
		
		<div> <!-- post Container -->
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<div> <!-- Post -->
				<h2><?php the_title();?></h2>


				<?php if (has_post_thumbnail( $post_id )) : ?>
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail( $size, $attr );?></a>
				<?php endif; ?>

				<?php the_content(); ?>
			</div>
			
			<?php endwhile; ?>
			
			<?php else: ?>
				<div> 
					<h2>oops, nothing is here...</h2> <!--Add content for nothing being here -->
				</div>

			<?php endif; ?>
		</div>

	</div>

	<?php get_footer(); ?>