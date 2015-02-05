<?php
/*
Template Name: Locations
*/
?>
<?php get_header(); ?>
  
    <div class="container content-main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>"  role="article">
        <section class="entry-content" itemprop="articleBody">
          <?php the_content(); ?>
        </section>

      </article>

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
          marker_shape = {coords: [0,0,50,50], type: "rect"};
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
              shape: marker_shape,
              navigationControlOptions: {
                  style: google.maps.NavigationControlStyle.SMALL
              },
              styles: styles
          };
          map = new google.maps.Map(document.getElementById("locations-map"), myOptions);

          geocoder.geocode( { 
            'address': '<?php if(the_field("location_name")) the_field("location_name"); ?>, <?php if(the_field("location_address")) the_field("location_address"); ?>, <?php if(the_field("location_city")) the_field("location_city"); ?>, <?php if(the_field("location_post_zip_code")) the_field("location_post_zip_code"); ?>, <?php if(the_field("location_country_shortcode")) the_field("location_country_shortcode"); ?>'},
            function(results, status) { 
              if (status == google.maps.GeocoderStatus.OK) {
                  map.setCenter(results[0].geometry.location);
                  var image = {
                    url: '<?php echo get_template_directory_uri(); ?>/library/images/map/conference_location.png',
                    size: new google.maps.Size(51, 52),
                    scaledSize: new google.maps.Size(51, 52)
                  }
                  marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: image
                  });

                  var mainContentString = '<div class="map-popup">' +
                    '<h4><?php if(the_field("location_name")) the_field("location_name"); ?></h4>' +
                    '<h4><address><span><?php if(the_field("location_address")) the_field("location_address"); ?></span><br />' +
                    '<a href="<?php the_field("directions_link") ?>">Get directions</a>'
                    '</h4>' +
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
            ['<?php the_title(); ?>', '<?php the_field("address"); ?>', '<?php the_field("city"); ?>', '<?php the_field("post_code"); ?>', '<?php the_field("directions_link"); ?>'],
          <?php endwhile; ?>
      ];

      function plotMarkers(){
          var i;
          for(i = 0; i < locationsArray.length; i++){
              codeAddresses(locationsArray[i], i);
          }
      }

      function codeAddresses(address, i){
          var concat_address = address[1] + ' ' + address[2] + ' ' + address[3];
          console.log(concat_address)
          geocoder.geocode( { 'address': concat_address }, function(results, status) { 
              if (status == google.maps.GeocoderStatus.OK) {
                  var image = {
                    url: '<?php echo get_template_directory_uri(); ?>/library/images/map/' + i + '.png',
                    size: new google.maps.Size(27, 28),
                    scaledSize: new google.maps.Size(27, 28)
                  }
                  marker = new google.maps.Marker({
                      map: map,
                      position: results[0].geometry.location,
                      shape: marker_shape,
                      icon: image
                  });

                  var contentString = '<div class="map-popup">' +
                    '<h4>' + address[0] + '</h4>' +
                    '<h4><address><span>' + address[1] + '</span><br />' +
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
   
<section id="locations-map" class="map" style="height:450px;width:100%;"></section>
  <section class="locations">
    <div>
      <?php
        $args = array('post_type' => 'locations', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post(); ?>
        
          <article>
            <h5><a href="<?php the_field("directions_link"); ?>"><?php the_title(); ?></a></h5>
            <p><?php the_field("address"); ?><br>
            <?php the_field("location_other_information"); ?></p>
          </article>
        
      <?php endwhile; ?>
      </div>
    </section>


<?php get_footer(); ?>
