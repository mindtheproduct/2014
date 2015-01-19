   
    <?php include('sponsors.php'); ?>
    <section class="blog-home">
    
    	<div>


					<?php $posts = get_posts( "numberposts=3" ); ?>
					<?php if( $posts ) : ?>
					<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
					<h2><?php the_title(); ?></h2>

							<?php
                global $more;
                $more = 0;
                the_content('Read more');
              ?> 

					</article>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</section>

			<footer class="footer" role="contentinfo">

					<!--nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav-->

      

      
          
          <?php
            $args = array('post_type' => 'social', 'posts_per_page' => 1);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php if (get_field('it_is_over')) { ?>
                  <p class="it-is-over">
                    <?php the_field('it_is_over');?>
                  </p>
                <?php } ?>

                <?php if (get_field('facebook_link')) { ?>
                  <p>Get social about it
                  <a class="social-link" href="<?php the_field('twitter_link');?>"><img src="<?php bloginfo('template_directory');?>/library/images/twitter.png" alt="Share on Twitter" /></a>
                <?php } ?>
                <?php if (get_field('facebook_link')) { ?>
                  <a class="social-link" href="<?php the_field('facebook_link');?>"><img src="<?php bloginfo('template_directory');?>/library/images/facebook.png" alt="Share on Facebook" /></a>
                <?php } ?>
                <?php if (get_field('google_link')) { ?>
                  <a class="social-link" href="<?php the_field('google_link');?>"><img src="<?php bloginfo('template_directory');?>/library/images/google_plus.png" alt="Share on Google +" /></a>
                <?php } ?>
                <?php if (get_field('linkedin_link')) { ?>
                  <a class="social-link" href="<?php the_field('linkedin_link');?>"><img src="<?php bloginfo('template_directory');?>/library/images/linked_in.png" alt="Share on Google +" /></a>
                <?php } ?>
                </p>
                <?php if (get_field('previous_years')) { ?>
                  <p class="previous-years">
                    <?php the_field('previous_years');?>
                  </p>
                <?php } ?>
                <?php if (get_field('copyright')) { ?>
                  <p class="copyright">
                    <?php the_field('copyright');?>
                  </p>
                <?php } ?>
          <?php endwhile; ?>

		</footer>

	</div>

  <div class="overlay"></div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

    <?php if(of_get_option('google_analytics', '')) { ?>
      <script>
        <?php echo of_get_option('google_analytics', ''); ?>
      </script>
    <?php } ?>

	</body>

</html>
