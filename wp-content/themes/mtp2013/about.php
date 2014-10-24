<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 * Template Name: About
 */
?>

<?php 
  $page = "about";
  $title = "about";
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<div class="background background-about"></div>
    <h1>About</h1>
    <div class="clear">
    <div class="about-content">
      <h4>MindTheProduct 2013 is brought to you by a team of product managers who spend all day building start-ups, and all night building a community for other product managers.</h4>
      <p><a href="http://www.martineriksson.com">Martin</a> founded <a href="http://www.producttank.com">ProductTank</a>, a monthly product management meet up in London, which has been running for three years and now has over 1,600 members in the group and gets 300+ attendees at every meetup.</p>
  
      <p><a href="http://www.simplybastow.com">Janna</a> and <a href="https://twitter.com/simoncast">Simon</a> co-founded and run <a href="http://www.productcamplondon.com/">ProductCamp London</a> bi-annually - a collaborative, user organized unconference based on the global ProductCamp.org.</p>
  
      <p>Together we got together and founded <a href="http://www.mindtheproduct.com">Mind the Product</a>, a blog focused on product management, which we define as the intersection between design, technology and business. The blog combines our own editorial with community contributed posts.</p>
  
      <p>We are funded by our generous sponsors and ticket sales, and driven by a passion for great products and the people who build them.</p>
      
      <h6>This site was designed by</h6>
      <a href="http://thisiscapra.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/capra-logo.png" alt="Capra" /></a>
      <div class="video-container">
        <iframe src="http://player.vimeo.com/video/50825718?title=0&amp;byline=0&amp;portrait=0" width="700" height="394" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      </div>
    </div>
</div>
<div class="team">
  <img class="team" src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/martin.png" alt="Martin" />
    <img class="team" src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/jana.png" alt="Jana" />
  <img class="team" src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/simon.png" alt="Simon" />
  
 </div> 
<?php endwhile; ?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>