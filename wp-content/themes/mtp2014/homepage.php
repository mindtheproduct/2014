<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="content-main">

			<?php the_content(); ?>



		</section>

	<?php endwhile; else : ?>
			
		<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>

		<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>	

	<?php endif; ?>

<?php get_footer(); ?>
