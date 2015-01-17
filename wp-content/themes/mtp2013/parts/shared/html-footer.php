
	<?php wp_footer(); ?>

    <?php if(!$page = "location") { ?> 
  <div class="push"></div>
  </div> <!-- closes wrapper for sticky footer-->
<?php } ?> 

  <footer>
    <h6>Tell your friends</h6>
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


    <div class="sponsoring">
      <a href="http://conference.mindtheproduct.com/sponsorpack.pdf" target="_blank" alt="download pdf sponsor pack">Interested in Sponsoring?</a>
    </div>
  </footer>
  
  <?php echo of_get_option('google_analytics', ''); ?>
  
</body>

</html>