<?php
/*
Template Name: Landing Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="content-main">

			<?php the_content(); ?>
    </section>
    <section class="landing-page">
      <?php if (get_field('san_francisco')) { ?>
        <div class="sixcol first">
          <?php the_field('san_francisco');?>
        </div>
      <?php } ?>
      <?php if (get_field('london')) { ?>
        <div class="sixcol last">
          <?php the_field('london');?>
        </div>
      <?php } ?>

		</section>

	<?php endwhile; else : ?>
			
		<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>

		<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>	

	<?php endif; ?>

<?php get_footer(); ?>
