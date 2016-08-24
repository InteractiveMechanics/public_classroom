<?php
/**
 * Template Name: Classes
 *
 * @package WordPress
 * @subpackage Public_Classroom
 * @since Public Classroom 2016 1.0
 */

get_header(); ?>

  <?php /* The loop */ ?>
  <?php while ( have_posts() ) : the_post();
	  $cover_image = get_field('cover_image');
	  $date = get_field('date');
	  $title = get_field('title');
	  $focus_question = get_field('focus_question');
	  $class_description = get_field('class_description');
	  $collection_description = get_field('collection_description');
	  $resources_heading = get_field('resources_heading');
	  $resources_description = get_field('resources_description');
	  $quiz_title = get_field('quiz_title');
	  $quiz_file_type = get_field('quiz_file_type');
	  $optional_description = get_field('optional_description');
  ?>
    
  <main>
  	 <main class="classes-page">
	  	<ul class="classes-subnav" data-spy="affix" data-offset-top="100">
				<li><a href="#summary">Summary</a></li>
				<li><a href="#videos">Videos</a></li>
				<li><a href="#speakers">Speakers &amp; Moderator</a></li>
				<li><a href="#collection">Collection Workshop</a></li>
				<li><a href="#resources">Resources &amp; Workbook</a></li>
			</ul>
 
	  	<div class="jumbotron speakers-hero" style="background-image: url('<?php echo $cover_image; ?>');">
		<div class="container">	
			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h4><?php echo $date; ?></h4>
					<h1 class="homepage-headline"><?php echo $title; ?></h1>
				</div>
			</div>
		</div>	
	 </div>


	 <section id="summary">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-sm-offset-1 no-padding">
					<h4><span><img src="<?php printthemepath(); ?>/img/icon-bubble.svg" alt="quote bubble icon"></span> Focus Question</h4>
					
					<p class="lead"><?php echo $focus_question?></p>
					
					<?php echo $class_description; ?>
					
				</div>
			</div>
		</div>
	</section>
	
	<section class="about-video-slider-container" id="videos">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding about-video-slider-wrapper">
					
					
					
						<!-- ACF REPEATER STARTS -->
					    <?php if ( have_rows('videos1') ): ?>
					    <?php while ( have_rows('videos1') ): the_row();
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
					
						<?php endwhile; else: ?>
							<div class="no-video">
								<div class="no-video-wrapper">
									<h3>No Videos Yet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
							</div>
							
						<?php endif; ?>
						
						<!-- END ACF REPEATER -->	
						
					
			
				
				</div> <!-- /about-video-slider-wrapper -->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</section>

	<section class="classes-speaker-section" id="speakers">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h3>Speakers &amp; Moderator</h3>
						<div class="classes-speakers-wrapper">
					
						
						<?php

							$post_object = get_field('moderator');
							
							if( $post_object ): 
							
								// override $post
								$post = $post_object;
								setup_postdata( $post ); 
							
								?>
							    <span class="moderator-wrapper"><?php get_template_part('content-speaker',  get_post_format()) ?></span>
							    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
													
						
						
						
					
						<?php 

									$post_objects = get_field('speakers');

									if( $post_objects ): ?>
								    
								    
								    
									    
									<?php foreach( $post_objects as $post): ?>
									 <?php setup_postdata($post); ?>
										<?php get_template_part('content-speaker',  get_post_format()) ?>
								    <?php endforeach; ?>
								    
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>    
					
					
						</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 no-padding">
			<div class="section-border"></div>
		</div>
	</div>
	
	<section class="classes-collection-section" id="collection">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h3>Collection Workshop</h3>
				</div>
				
				<div class="col-sm-7 col-sm-offset-1 no-padding">
					<?php echo $collection_description; ?>					
				</div>
				
				
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<div class="classes-collection-wrapper">
					
						<!-- ACF REPEATER STARTS -->
					    <?php if ( have_rows('collection_object') ): ?>
					    <?php while ( have_rows('collection_object') ): the_row();
						    $object_image = get_sub_field('object_image');
						    $object_title = get_sub_field('object_title');
						    $object_label = get_sub_field('object_label');
						?>
						
						<div class="col-sm-4 speaker-block">
							<img class="speaker-img" src="<?php echo $object_image; ?>">
							
							<div class="speaker-block-text">
								<h5><?php echo $object_title; ?></h5>
								<p><?php echo $object_label; ?></p>
							</div>
							
						</div>
					
						<?php endwhile; ?>
						<?php endif; ?>
						<!-- END ACF REPEATER -->	
							
					</div>
				</div>
				
				
			</div>
		</div>
	</section>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 no-padding">
			<div class="section-border"></div>
		</div>
	</div>
	
		<section class="resources-section" id="resources">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h3><?php echo $resources_heading; ?></h3>
				</div>
				<div class="col-sm-7 col-sm-offset-1 no-padding">
					<p class="resources-description"><?php echo $resources_description; ?></p>
					
					<?php if(!empty($quiz_title)) { ?>
					<div class="resources-block-quiz">
						<div class="col-sm-9">
						<p class="resources-title"><?php echo $quiz_title; ?></p>
						<h3 class="file-type"><?php echo $quiz_file_type; ?></h3>
						<p><span class="useful">Useful For:</span> <?php echo implode(', ', get_field('quiz_useful_for')); ?></p>
						<p><?php echo $optional_description; ?></p>
						</div>
						<div class="col-sm-3 resources-download-btn-container">
							<a href="" class="resources-quiz-download-btn">Download</a>
						</div>
					</div>
					<?php } ?>
					
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