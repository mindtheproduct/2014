<?php get_header(); ?>
	<div class="content-main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								

									<h1><?php the_title(); ?></h1>
					

								<section class="entry-content" itemprop="articleBody">
									<?php the_content(); ?>
									<?php if ( is_page('About')) {?>
										<div class="designed-by">
											<a class="capra" href="http://thisiscapra.com">
												<img src="<?php bloginfo('template_directory');?>/library/images/capra.png" alt="Capra Limited" />
											</a>
											<h5>This site was designed by <a href="http://thisiscapra.com">Capra</a></h5>
										</div>
									<?php } ?>
							</section>
						

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

			</div>

<?php get_footer(); ?>
