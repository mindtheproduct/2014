			
  <section class="sponsors">
    <h5>Signature sponsor</h5>
    <ul>
      <li>
        <a href="http://tesco.com">
          <img src="<?php bloginfo('template_directory');?>/library/images/sponsors/tesco.png" alt="Tesco" />
        </a>
      </li>
    </ul>
    <?php if (get_field('interested_in_sponsoring')) { ?>
      <a href="<?php the_field('interested_in_sponsoring');?>">Interested in sponsoring?</a>
    <?php } ?>
    </section>

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

      <p>

      
          Get social about it
          <?php
            $args = array('post_type' => 'social', 'posts_per_page' => 1);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php if (get_field('facebook_link')) { ?>
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
          <?php endwhile; ?>
</p>
		</footer>

	</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
