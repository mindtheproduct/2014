<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

			<div id="content">


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<section class="content-home">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

									<?php the_content(); ?>
								</section>


							<?php endwhile; else : ?>

									
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										

							<?php endif; ?>


			</div>

<?php get_footer(); ?>
