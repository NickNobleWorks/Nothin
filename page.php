<?php get_header(); ?>

	<div> <!-- Main container -->
		
		<div> <!-- content Container -->
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			
				<h2><?php the_title();?></h2>
				<?php the_content(); ?>
			
			
			<?php endwhile; ?>

			<?php endif; ?>
		</div>

	</div>

	<?php get_footer(); ?>