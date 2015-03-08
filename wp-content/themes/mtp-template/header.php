<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->


	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<script type="text/javascript" src="//use.typekit.net/hba8xtt.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery.widowFix-1.3.2.min.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
			  $('.entry-content h1,.entry-content h2,.entry-content h3,.entry-content p, .content-main p').widowFix();
			});
	</script>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

					<nav role="navigation" class="main-menu">
						
						<ul class="menu-all">
							<?php bones_main_nav(); ?>

								
								<?php
									$args = array('post_type' => 'price', 'posts_per_page' => 1);
									$loop = new WP_Query($args);
									while ($loop->have_posts()) : $loop->the_post(); ?>
										<?php if (get_field('show_panel')) { ?>

										<li class="get-tickets">
											<a class="get-tickets-button" href="#" title="">Get tickets</a>
											<ul class="submenu-yo">
											<li class="buy buy-conference">
												<?php if (get_field('buy_link')) { ?>
													<a href="<?php the_field('buy_link');?>">
												<?php } ?>
													<?php if (get_field('buy_date')) { ?>
														<h3 class="date"><?php the_field('buy_date');?></h3>
													<?php } ?>
													<?php if (get_field('buy_price')) { ?>
														<h1 class="price"><?php the_field('buy_price');?></h1>
													<?php } ?>
										    	<?php if (get_field('buy_action')) { ?>
														<span><?php the_field('buy_action'); ?></span>
													<?php } ?>
												<?php if (get_field('buy_link')) { ?>
													</a>
												<?php } ?>
											</li>

											<?php if (get_field('workshop_price')) { ?>
												<li class="buy buy-workshops">
													<?php if (get_field('workshop_buy_link')) { ?>
														<a href="<?php the_field('workshop_buy_link');?>">
													<?php } ?>
														<?php if (get_field('workshop_date')) { ?>
															<h3 class="date"><?php the_field('workshop_date');?></h3>
														<?php } ?>
														<?php if (get_field('workshop_price')) { ?>
															<h1 class="price"><?php the_field('workshop_price');?></h1>
														<?php } ?>
											    	<?php if (get_field('workshop_action')) { ?>
															<span><?php the_field('workshop_action'); ?></span>
														<?php } ?>
														<?php if (get_field('workshop_buy_link')) { ?>
														</a>
													<?php } ?>
												</li>
											<?php } ?>
										
										</ul>
									</li>
									<?php } ?>
								<?php endwhile; ?>
							</li>
						</ul>
						<a href="#" class="menu-button">Menu</a>
					</nav>

	      	<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
				    <div class='site-logo'>
				      <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>'></a>
				    </div>
					<?php else : ?>
					   <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src="<?php bloginfo('template_directory');?>/library/images/mtp-logo.png" alt="<?php bloginfo('name'); ?>" /></a>
					<?php endif; ?>


			</header>

			
			
		
