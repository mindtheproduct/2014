<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mind The Product Conference :: 27 September 2013 in London :: <?php echo $title ?></title>
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="http://conference.mindtheproduct.com/">
  <meta name="twitter:title" content="Mind The Product 2013 - Fri 27 Sept 2013 in London">
  <meta name="twitter:description" content="Mind the Product 2013 is a conference that brings together product leaders from around the world to explore the intersection of design, technology and business in order to inspire you to build products your customers love.">
  <meta name="twitter:image" content="http://conference.mindtheproduct.com/assets/images/bg/speaking.jpg">


  <meta property="fb:app_id" content="240866859264841" /> 
  <meta property="og:url" content="http://conference.mindtheproduct.com/" /> 
  <meta property="og:title" content="Mind The Product 2013 - Fri 27 Sept 2013 in London" /> 
  <meta property="og:image" content="http://conference.mindtheproduct.com/assets/images/bg/speaking.jpg" /> 
  <meta property="og:description" content="Mind the Product 2013 is a conference that brings together product leaders from around the world to explore the intersection of design, technology and business in order to inspire you to build products your customers love." /> 
  <meta property="og:type" content="website" /> 
  <!-- Grid styles for IE -->
  <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/1140.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" type="text/css" media="screen" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
  <?php if(is_front_page()) { ?>
    
      
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bigvideo.css" type="text/css" media="screen" />
      <script>
        $(function () {
            setTimeout( 
                function () {
                    $('.fading').animate({ opacity: 1 }, 500);    
                }, 500
            );
        });
      </script>
      <?php include 'video.php'; ?>


  <?php } ?>
   
  <?php if(is_page("location")) { ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="http://cdn.mindtheproduct.com/conference/2013/assets/js/richmarker-compiled.js"></script>
    <script src="http://cdn.mindtheproduct.com/conference/2013/assets/js/map.js"></script>
  <?php } ?>


  <script>
    jQuery(document).ready(function($){
      $('.menu-link').click(function(){
        $('nav').toggleClass('open');
        return false;
      });
      $('a').click(function(){
          $('html, body').animate({
              scrollTop: $( $.attr(this, 'href') ).offset().top
          }, 500);
          return false;
      });
    });


  </script>

  <!--[if lt IE 9]>
    <script src="assets/js/html5.js"></script>
  <![endif]-->

  <link href="http://conference.mindtheproduct.com/2013/favicon.ico" rel="shortcut icon" />
  <link href="http://conference.mindtheproduct.com/2013/apple-touch-icon.png" rel="apple-touch-icon">
  
</head>
<body <?php body_class(); ?>>
   <?php if (get_field('its-over')) { ?>
      <div class="its-over">
        <?php the_field('its-over');?>

      </div>
    <?php } ?>
  <?php if(is_page("schedule")) { ?> 
    <div class="background background-schedule"></div>
  <?php } ?> 

  <?php if(is_page("about")) { ?> 
    <div class="background background-about"></div>
  <?php } ?> 

  <?php if(is_front_page()) { ?> 
    <div class="wrapper fading">
  <?php } ?> 

 

  <header>

    <a class="logo" href="/">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mtp-logo.png" alt="Mind The Product 2013" />
    </a>
    <a class="menu-link" href="#">Menu</a>
    <nav>

      <ul>
        <li class="date"><a href="/" <?php if(is_front_page()) { echo 'class="current"'; } ?>><span>FRI  27 SEPT  2013</span>  IN LONDON</a></li>
        <li><a href="schedule"  <?php if(is_page("schedule")) { echo 'class="current"'; } ?>>schedule</a></li>
        <li><a href="location"  <?php if(is_page("location")) { echo 'class="current"'; } ?>>location</a></li>
        <li><a href="about" <?php if(is_page("about")) { echo 'class="current"'; } ?>>about</a></li>
      </ul>
      <div class="button"><a href="http://mindtheproduct2013.eventbrite.com">Buy Tickets<span>SOLD OUT!</span></a></div>
    </nav>

  </header>
	