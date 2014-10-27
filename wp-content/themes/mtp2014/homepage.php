<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="content-main">

			<?php the_content(); ?>

			<!-- Begin MailChimp Signup Form -->
			
			<div id="mc_embed_signup">
			<form action="http://mindtheproduct.us5.list-manage1.com/subscribe/post?u=9f9609492007e56236a074b27&amp;id=babd9cfe61" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			</form>
			</div>

			<!--End mc_embed_signup-->


		</section>

	<?php endwhile; else : ?>
			
		<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>

		<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>	

	<?php endif; ?>

<?php get_footer(); ?>
