<?php
/*
Template Name: Locations
*/
?>
<?php get_header(); ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUd1UX9NlcLTyz4V5LnpwHYgJ0mdslLAw&amp;sensor=false"></script>
    <script>
      var geocoder;
      var map;
      var markersArray = [];
      var bounds;
      var infowindow =  new google.maps.InfoWindow({
          content: ''
      });

      //plot initial point using geocode instead of coordinates (works just fine)
      function initialize() {
          geocoder = new google.maps.Geocoder();
          bounds = new google.maps.LatLngBounds();

          var styles = [
            {
              "stylers": [
                { "invert_lightness": true },
                { "saturation": -100 }
              ]
            }
          ]

          var myOptions = {
              zoom: 15, 
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              scrollwheel: false,
              navigationControlOptions: {
                  style: google.maps.NavigationControlStyle.SMALL
              },
              styles: styles
          };
          map = new google.maps.Map(document.getElementById("locations-map"), myOptions);

          geocoder.geocode( { 'address': 'Barbican Centre, Silk Street, EC2Y 8DS'}, function(results, status) { 
              if (status == google.maps.GeocoderStatus.OK) {
                  map.setCenter(results[0].geometry.location);
                  var image = {
                    url: '<?php echo get_template_directory_uri(); ?>/library/images/map/conference.png',
                    size: new google.maps.Size(51, 52),
                    scaledSize: new google.maps.Size(51, 52)
                  }
                  marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: image
                  });

                  var mainContentString = '<div class="map-popup">' +
                    '<h4>Barbican Centre</h4>' +
                    '<h4><address><span>Silk Street</span>, <span>EC2Y 8DS</span><br />' +
                    '<a href="https://www.google.co.uk/maps/dir//Barbican+Centre,+Silk+St,+London+EC2Y+8DS,+United+Kingdom/@51.52111,-0.100236,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x48761b56fb64b275:0xc756e26675d21f40!2m2!1d-0.093263!2d51.520075">Get directions</a></h4>' +
                  '</div>';

                  google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent(mainContentString);
                    infowindow.open(map, this);
                  });

                  bounds.extend(results[0].geometry.location);

                  markersArray.push(marker);
              }
              else{
                  alert("Geocode was not successful for the following reason: " + status);
              }
          });

          plotMarkers();
      }

      var locationsArray = [
          <?php
            $args = array('post_type' => 'locations', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post(); ?>
            ['<?php the_title(); ?>', '<?php the_field("address"); ?>', '<?php the_field("post_code"); ?>', '<?php the_field("directions_link"); ?>'],
          <?php endwhile; ?>
      ];

      function plotMarkers(){
          var i;
          for(i = 0; i < locationsArray.length; i++){
              codeAddresses(locationsArray[i], i);
          }
      }

      function codeAddresses(address, i){
          geocoder.geocode( { 'address': address[0,1,2] }, function(results, status) { 
              if (status == google.maps.GeocoderStatus.OK) {
                  var image = {
                    url: '<?php echo get_template_directory_uri(); ?>/library/images/map/' + i + '.png',
                    size: new google.maps.Size(27, 28),
                    scaledSize: new google.maps.Size(27, 28)
                  }
                  marker = new google.maps.Marker({
                      map: map,
                      position: results[0].geometry.location,
                      icon: image
                  });

                  var contentString = '<div class="map-popup">' +
                    '<h4>' + address[0] + '</h4>' +
                    '<h4><address><span>' + address[1] + '</span>, ' +
                    '<span>' + address[2] + '</span><br />' +
                    '<a href="' + address[3] + '">Get directions</a></address></h4>' +
                  '</div>';

                  google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent(contentString);
                    infowindow.open(map, this);
                  });

                  //bounds.extend(results[0].geometry.location);

                  markersArray.push(marker); 
              }
              else{
                  alert("Geocode was not successful for the following reason: " + status);
              }

              //map.fitBounds(bounds);
          });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  
    <div class="container content-main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>"  role="article">
        <section class="entry-content" itemprop="articleBody">
          <?php the_content(); ?>
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
</div>
   
<section id="locations-map" style="height:600px;width:100%;background-color: #000;"></section>
  <section class="locations">
    <div>
      <?php
        $args = array('post_type' => 'locations', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post(); ?>
        
          <article>
            <h5><a href="<?php the_field("directions_link"); ?>"><?php the_title(); ?></a></h5>
            <p><?php the_field("address"); ?>, <?php the_field("post_code"); ?><br />
            <?php the_field("location_other_information"); ?></p>
          </article>
        
      <?php endwhile; ?>
      </div>
    </section>


<?php get_footer(); ?>
