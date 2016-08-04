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
		
		
		<!-- favicons and icons go here-->
		

		<!-- google analytics goes here -->
				
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
						<a class="navbar-brand" href="#">Logo</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				      
				      <ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Classes</a>
								<ul class="dropdown-menu">
<!-- 									<ul class="list-inline nav-inline-dropdown"> -->
							            <li class="nav-inline-li">
							            		<a href="#">
								            	<div class="nav-img-container">
									            	<img src="http://cdn8.openculture.com/wp-content/uploads/2013/11/old-books-32.jpg" alt="placeholder image" class="nav-img">
								            	</div>
							          		</a>
								            	<div class="nav-text-container">
								            	<p>September 14, 2016</p>
								            	<a href="#">
								            		<h4 class="nav-class-title">1 Understanding The History of Race and Science</h4>
								            	</a>
							            	</a>
							            	<div class="nav-address-container">
										        <p>Huntsman Hall</p>
										        <p>University of Pennsylvania</p>
										        <p>3730 Walnut Street</p>
										        <a href="" class="nav-map"><span class="dashed-line-white">view map</span></a>
										            
										        <a href="" class="nav-details-btn">View Details</a>
												<a href="" class="nav-register-btn">Register</a>
							            	</div>		
								            	
							           </li>
							            <li class="nav-inline-li">
							            		<a href="#">
								            	<div class="nav-img-container">
									            	<img src="http://cdn8.openculture.com/wp-content/uploads/2013/11/old-books-32.jpg" alt="placeholder image" class="nav-img">
								            	</div>
							          		</a>
								            	<div class="nav-text-container">
								            	<p>September 14, 2016</p>
								            	<a href="#">
								            		<h4 class="nav-class-title">2 Understanding The History of Race and Science</h4>
								            	</a>
							            	</a>
							            	<div class="nav-address-container">
										        <p>Huntsman Hall</p>
										        <p>University of Pennsylvania</p>
										        <p>3730 Walnut Street</p>
										        <a href="" class="nav-map"><span class="dashed-line-white">view map</span></a>
										            
										        <a href="" class="nav-details-btn">View Details</a>
												<a href="" class="nav-register-btn">Register</a>
							            	</div>		
								            	
								            	
							            </li>
							            <li class="nav-inline-li">
							            <a href="#">
								            	<div class="nav-img-container">
									            	<img src="http://cdn8.openculture.com/wp-content/uploads/2013/11/old-books-32.jpg" alt="placeholder image" class="nav-img">
								            	</div>
							          		</a>
								            	<div class="nav-text-container">
								            	<p>September 14, 2016</p>
								            	<a href="#">
								            		<h4 class="nav-class-title">3 Understanding The History of Race and Science</h4>
								            	</a>
							            	</a>
							            	<div class="nav-address-container">
										        <p>Huntsman Hall</p>
										        <p>University of Pennsylvania</p>
										        <p>3730 Walnut Street</p>
										        <a href="" class="nav-map"><span class="dashed-line-white">view map</span></a>
										            
										        <a href="" class="nav-details-btn">View Details</a>
												<a href="" class="nav-register-btn">Register</a>
							            	</div>		
								            	

							            </li>
							            <li class="nav-inline-li">
							            			<a href="#">
								            	<div class="nav-img-container">
									            	<img src="http://cdn8.openculture.com/wp-content/uploads/2013/11/old-books-32.jpg" alt="placeholder image" class="nav-img">
								            	</div>
							          		</a>
								            	<div class="nav-text-container">
								            	<p>September 14, 2016</p>
								            	<a href="#">
								            		<h4 class="nav-class-title">4 Understanding The History of Race and Science</h4>
								            	</a>
							            	</a>
							            	<div class="nav-address-container">
										        <p>Huntsman Hall</p>
										        <p>University of Pennsylvania</p>
										        <p>3730 Walnut Street</p>
										        <a href="" class="nav-map"><span class="dashed-line-white">view map</span></a>
										            
										        <a href="" class="nav-details-btn">View Details</a>
												<a href="" class="nav-register-btn">Register</a>
							            	</div>		
								            	
							            </li>
							            
							            </li>
							          	<li class="nav-inline-li">
							          		<a href="#">
								            	<div class="nav-img-container">
									            	<img src="http://cdn8.openculture.com/wp-content/uploads/2013/11/old-books-32.jpg" alt="placeholder image" class="nav-img">
								            	</div>
							          		</a>
								            	<div class="nav-text-container">
								            	<p>September 14, 2016</p>
								            	<a href="#">
								            		<h4 class="nav-class-title">5 Understanding The History of Race and Science</h4>
								            	</a>
							            	</a>
							            	<div class="nav-address-container">
										        <p>Huntsman Hall</p>
										        <p>University of Pennsylvania</p>
										        <p>3730 Walnut Street</p>
										        <a href="" class="nav-map"><span class="dashed-line-white">view map</span></a>
										            
										        <a href="" class="nav-details-btn">View Details</a>
												<a href="" class="nav-register-btn">Register</a>
							            	</div>		
							          	</li>
<!-- 									</ul> -->
								</ul>
						  	</li>
						  	<li><a href="<?php printthemepath(); ?>/about.php">About</a></li>
						  	<li><a href="#">Speakers</a></li>
				        </ul>
				    </div><!-- /.navbar-collapse -->
				
				</div><!-- /.container-fluid -->

			</nav>		 
			
			
				 
				 

		</header>
		<!-- /header -->
