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
	 
	<section class="about-content-section">
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
				
				<div class="col-sm-10 col-sm-offset-1 no-padding about-video-slider-wrapper">
					
					
					
						<!-- ACF REPEATER STARTS -->
					    <?php if ( have_rows('about_page_videos') ): ?>
					    <?php while ( have_rows('about_page_videos') ): the_row();
						    $video_embed = get_sub_field('video_embed');
						    $video_title = get_sub_field('video_title');
						    $video_description = get_sub_field('video_description');
						?>
					
						<div class="row about-video-slider">
							<div class="col-sm-7">
								<?php echo $video_embed; ?>
							</div> 
							<div class="col-sm-5 about-video-container-right">
								
								<h3><?php echo $video_title; ?></h3>
								<div class="video-description-container">
									<?php echo $video_description; ?>
								</div>
								
							</div>
						</div>
					
						<?php endwhile; ?>

						
						<?php endif; ?>
						
						<!-- END ACF REPEATER -->	
						
					
			
				
				</div> <!-- /about-video-slider-wrapper -->
				
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
						    $resource_file = get_sub_field('resource_file');
						    
						?>
					<div class="resources-block">
						<div class="col-sm-9">
						<p class="resources-title"><?php echo $resource_title; ?></p>
						<h3 class="file-type"><?php echo $resource_file_type; ?></h3>
						<p><span class="useful">Useful For:</span><?php echo implode(', ', get_sub_field('resource_useful_for')); ?></p>
						<p><?php echo $resource_optional_description; ?></p>
						</div>
						<div class="col-sm-3 resources-download-btn-container">
							<a href="<?php echo $resource_file; ?>" class="resources-download-btn visible-lg" target="_blank">Download</a>
							<a href="<?php echo $resource_file; ?>" class="resources-download-btn hidden-lg" target="_blank"><img src="<?php printthemepath(); ?>/img/icon-download.svg"></a>
							
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