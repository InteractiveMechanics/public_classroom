<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Public_Classroom_2016
 * @since Public_Classroom_2016 1.0
 */
 ?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?> Public Classroom</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		
		<!-- stylesheets -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="<?php printThemePath(); ?>/style.css">
		<link rel="stylesheet" href="<?php printThemePath(); ?>/css/main.css">
		<link rel="stylesheet" href="<?php printThemePath(); ?>/css/animate.css">

		
		
		<!-- favicons and icons go here-->
		

		<!-- google analytics goes here -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-7338071-1', 'penn.museum');
		  ga('send', 'pageview');
		</script>
				
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		
	</head>
	<body> 
		
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							<img src="<?php printthemepath(); ?>/img/public_classroom_logo.svg" alt="Penn Public Classroom logo">
						</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				      
				      <ul class="nav navbar-nav navbar-right">
					      	<li><a class="nav-link no-dropdown" href="<?php the_field('focus_page_link', 'option'); ?>"><?php the_field('focus_page_label', 'option'); ?></a></li>

							<li class="dropdown nav-link">
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Classes</a>
								
								<?php
								$post_objects = get_field('classes', 'option');

								if( $post_objects ): ?>
								    <ul class="dropdown-menu animated">
									
								    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
								        <?php setup_postdata($post); ?>
								        
								         <li class="nav-inline-li">
							            	<a href="<?php the_permalink($post_object->ID); ?>" class="nav-img-link">
								            	<div class="nav-img-container">
									            	<img src="<?php the_field('cover_image', $post_object->ID); ?>" alt="placeholder image" class="nav-img">
								            	</div>
							          		</a>
								            	
								            <div class="nav-text-container">
								            	<p><?php the_field('date', $post_object->ID); ?></p>
								            	<a href="<?php the_permalink($post_object->ID); ?>">
								            		<h4 class="nav-class-title"><?php the_field('title', $post_object->ID); ?></h4>
								            	</a>
							            	</div>
							            	<div class="nav-address-container">
										        <p><?php the_field('address_line_1', $post_object->ID); ?></p>
										        <p><?php the_field('address_line_2', $post_object->ID); ?></p>
										        <p><?php the_field('address_line_3', $post_object->ID); ?></p>
										        <a href="<?php the_field('map_link', $post_object->ID); ?>" class="nav-map" target="_blank"><span class="dashed-line-white">view map</span></a>
							            	</div>
							            	<div class="nav-text-container nav-dropdown-buttons">   
										        <a href="<?php the_permalink($post_object->ID); ?>" class="nav-details-btn">View Details</a>
										        
										        <?php if( get_field('registration_link', $post_object->ID) ): ?>
												<a href="<?php the_field('registration_link', $post_object->ID); ?>" class="nav-register-btn">Register</a>
												<?php endif; ?>
							            	</div>		
								            	
							           </li>

								    <?php endforeach; ?>
								    </ul>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
								<?php endif; ?>

																							
																
								
							</li>
						  	<li><a class="nav-link no-dropdown" href="<?php the_field('speakers_page_link', 'option'); ?>"><?php the_field('speakers_page_label', 'option'); ?></a></li>
						  	<li class="divider-before"><a class="nav-link no-dropdown" href="<?php the_field('about_page_link', 'option'); ?>"><?php the_field('about_page_label', 'option'); ?></a></li>

				        </ul>
				    </div><!-- /.navbar-collapse -->
				
				</div><!-- /.container-fluid -->

			</nav>		 
			
			
				 
				 

		</header>
		
		<!-- /header -->
