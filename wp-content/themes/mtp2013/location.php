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
 * Template Name: Location
 */
?>

<?php 
  $page = "location";
  $title = "location";
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<div id="map" style="height:100%;width:100%;"></div>

  
<div class="location-content">
  <h1>Location</h1>
  <div class="button button-location"><a href="https://maps.google.co.uk/maps?ie=UTF8&cid=12291073452166057833&q=The+Mermaid+Conference+%26+Events+Centre&iwloc=A&gl=GB&hl=en" target="_blank">How to<br />get here</a></div>  
  <div class="hotels">
    <h6>Where to stay</h6>
    <ol>
      <li>
        <a class="number" href="https://plus.google.com/107301700070523841598/about?gl=uk&hl=en" target="_blank">1</a>
        <a href="https://plus.google.com/107301700070523841598/about?gl=uk&hl=en" target="_blank"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/star.png" alt="4 stars" /></a>
        <h5><a href="https://plus.google.com/107301700070523841598/about?gl=uk&hl=en" target="_blank">Grange St Paul's</a></h5>
        <p>10 Godliman Street<br />
        from &pound;250/night</p>
      </li>
      <li>
        <a class="number" href="https://plus.google.com/101867957883352898692/about?gl=uk&hl=en" target="_blank">2</a>
        <a href="https://plus.google.com/101867957883352898692/about?gl=uk&hl=en" target="_blank"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/star.png" alt="4 stars" /></a>
        <h5><a href="https://plus.google.com/101867957883352898692/about?gl=uk&hl=en" target="_blank">Crown City Plaza</a></h5>
        <p>19 New Bridge Street<br />
        from &pound;130/night</p>
      </li>
      <li class="last">
        <a class="number" href="https://plus.google.com/117218290271646451443/about?gl=uk&hl=en" target="_blank">3</a>
        <a href="https://plus.google.com/117218290271646451443/about?gl=uk&hl=en" target="_blank"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/star.png" alt="4 stars" /></a>
        <h5><a href="https://plus.google.com/117218290271646451443/about?gl=uk&hl=en" target="_blank">Mercure Bankside</a></h5>
        <p>71 Southwark Street<br />
        from &pound;105/night</p>
      </li>
    </ol>
  
  </div>
</div>
<?php endwhile; ?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>