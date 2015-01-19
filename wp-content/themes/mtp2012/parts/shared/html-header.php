<!DOCTYPE html>
  <head>
	  <meta charset="utf-8" />
	  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<title>Mind the Product 2012 | Product Management Conference</title>
    <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
		<meta name="description" content="MindtheProduct 2012 is the first conference of its kind - bringing together product management leaders from around the world to explore the intersection of design, technology and business - the business of building great products."/>
	  	<meta name="keywords" content="product management conference, product manager conference, product design conference, web conference, London, 2012, MindtheProduct, ProductTank, ProductCamp"/>

	  <meta property="og:title" content="Mind the Product 2012 | Product Management Conference" />
	  <meta property="og:url" content="http://conference.mindtheproduct.com/" />
	  <meta property="og:type" content="website" />
	  <meta property="og:description" content="MindtheProduct 2012 is the first conference of its kind - bringing together product management leaders from around the world to explore the intersection of design, technology and business - the business of building great products." />
	  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/square_logo_512x512.png" />

	  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/square_logo_512x512.png"/>
	  <!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
		<!-- typekit -->

		<script type="text/javascript" src="//use.typekit.net/mus3wjm.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<?php include('nav-script.inc.php'); ?>
		<?php if(of_get_option('google_analytics', '')) { ?>
      <script>
        <?php echo of_get_option('google_analytics', ''); ?>
      </script>
    <?php } ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	