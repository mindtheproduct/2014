			
<section class="sponsors">
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

														<?php the_excerpt(); ?>
													 <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read more</a>

												</article>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</section>

			<footer class="footer" role="contentinfo">

					<!--nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav-->

<p>Get social about it
      <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=218529131541034";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-like" data-href="http://conference.mindtheproduct.com/" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="verdana" data-colorscheme="dark"></div>

    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://conference.mindtheproduct.com" data-text="Check out Mind the Product 2013, the product event of the year!" data-via="mindtheproduct" data-related="mindtheproduct" data-hashtags="mtpcon">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone" data-size="medium"></div>

    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
