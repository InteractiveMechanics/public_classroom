<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Public_Classroom
 * @since Public Classroom 2016 1.0
 */

get_header(); ?>

  <?php /* The loop */ ?>
  <?php while ( have_posts() ) : the_post();
	  $cover_image  = get_field('cover_image');
	  $header_label = get_field('header_label');
	  $header_copy = get_field('header_copy');
	  $resources_heading = get_field('resources_heading');
	  $resources_description = get_field('resources_description');
	  
	  
	  ?>
    
    
  <main class="about-page">
	  <div class="jumbotron speakers-hero" style="background-image: url('<?php echo $cover_image; ?>');">
		<div class="container">	
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h4><?php the_field('testing_label'); ?></h4>
					<h1 class="homepage-headline"><?php echo $header_copy; ?></h1>
				</div>
			</div>
		</div>	
	 </div>
	 
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-sm-offset-1 no-padding">
					<?php echo the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	
	<section class="about-video-slider-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<div class="about-video-slider-wrapper">
						<div class="col-sm-7 no-padding about-video-slider">
							<div>
							<iframe src="https://player.vimeo.com/video/72716406?title=0&byline=0&portrait=0" width="569" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div> 	
								
							
							<div>
							<iframe src="https://player.vimeo.com/video/72716406?title=0&byline=0&portrait=0" width="569" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
								
							
							<div>
							<iframe src="https://player.vimeo.com/video/72716406?title=0&byline=0&portrait=0" width="569" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
															
						</div>
					<div class="col-sm-5 about-video-container-right no-padding">
						<h3>About the Public Classroom</h3>
						<p>Race is a sensitive topic in this country. Individual understanding of it is at once emotional, intellectual, and confused. Everyone thinks they are experts on the topic of race, yet few issues are characterized by more contradictory assumptions and myths, as data from the Museum's 2012 focus groups on the topic attested. Yet real conversations on race are intentionally avoided, and that silence intensifies the confusions.</p>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="resources-section" id="resources">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h3><?php echo $resources_heading; ?></h3>
				</div>
				<div class="col-sm-7 col-sm-offset-1 no-padding">
					<p class="resources-description"><?php echo $resources_description; ?></p>
					
					<!-- ACF REPEATER STARTS -->
					    <?php if ( have_rows('resource_block') ): ?>
					    <?php while ( have_rows('resource_block') ): the_row();
						    $resource_title = get_sub_field('resource_title');
						    $resource_file_type = get_sub_field('resource_file_type');
						    $resource_optional_description = get_sub_field('resource_optional_description');
						    
						?>
					<div class="resources-block">
						<div class="col-sm-9">
						<p class="resources-title"><?php echo $resource_title; ?></p>
						<h3 class="file-type"><?php echo $resource_file_type; ?></h3>
						<p><span class="useful">Useful For:</span><?php echo implode(', ', get_sub_field('resource_useful_for')); ?></p>
						<p><?php echo $resource_optional_description; ?></p>
						</div>
						<div class="col-sm-3 resources-download-btn-container">
							<a href="" class="resources-download-btn">Download</a>
						</div>
					</div>
					
					<?php endwhile; ?>
					<?php endif; ?>
					<!-- END ACF REPEATER -->
					
				</div>
			</div>
		</div>
	</section>
	  
	  

  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>