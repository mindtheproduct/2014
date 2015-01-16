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
 * Template Name: Homepage
 */
?>

<?php 
  $page = "home";
  $title = "Home";
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<h1>Building products customers love</h1>
  <div class="content-home">
    <h3><span>FRI  27 SEPT  2013</span> IN LONDON</h3>
  
    <p>Mind the Product 2013 is a one-day, one-track conference that brings together product leaders from around the world to explore the intersection of design, technology and business in order to inspire you to build products your customers love.</p>

  </div>
  <div class="home-ctas">
    <div class="button button-home">
      <a href="schedule">See the full line-up</a>
    </div> 
    <div class="sponsors">
      <h6>Signature sponsor</h6>
      <a href="http://ebay.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/ebay.png" alt="Ebay" /></a>
      <h6>Sponsors</h6>
      <a href="http://www.rackspace.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/rackspace.png" alt="Rackspace" /></a>
      <br/>
      <a href="http://www.nexmo.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/nexmo.png" alt="Nexmo" /></a>
      <br/>
      <a href="http://skype.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/skype.png" alt="Skype" /></a>
      <br/>
      <a href="http://www.eventbrite.co.uk/l/social/?ref=mtp"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/eventbrite.png" alt="Eventbrite" /></a>
      <br/>
      <a href="http://www.mindcandy.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/mindcandy.png" alt="MindCandy" /></a>
    </div>
  </div>
</div><!--closes wrapper-->
<?php endwhile; ?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>