
<?php get_header(); ?>

<?php get_sidebar(); ?>

	
	<div> <!-- main container -->


		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		
		<div> <!-- Post Container -->
			
			
			<h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

			<!--If the post has a thumbnail: -->
			<?php if (has_post_thumbnail( $post_id )) : ?>
			<div> <!--Thumbnail container-->
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail( $size, $attr );?></a>
			</div> <!--End thumbnail container-->
			<?php endif; ?>

			<?php the_content(''); ?>

			<ul> <!-- Meta Content for post, add and remove as needed -->
				<li><?php the_time('F jS, Y'); ?></li>
				<li><?php the_category('');?></li>
				<li><?php comments_number( $zero, $one, $more, $deprecated );?></li>
			</ul>

		</div> <!-- end post container -->


		<?php endwhile; ?>
		
		<?php else : ?>

			<h2>Oops, Nothing is here....</h2> <!-- Display message you want seen if no post exists...-->

		<?php endif; ?>
	</div> <!-- end main container -->

	<?php get_footer(); ?>
