<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Public_Classroom_2016
 * @since Public_Classroom 1.0
 */

get_header(); ?>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post();
	$cover_image = get_field('cover_image');
	$headline = get_field('headline');
	$lead_heading = get_field('lead_heading');
	$lead_body_copy = get_field('lead_body_copy');
	$quote_image = get_field('quote_image');
	$quote_copy = get_field('quote_copy');
	$quote_attribution = get_field('quote_attribution');
	$sponsor_heading = get_field('sponsor_heading');
	$sponsor_credit = get_field('sponsor_credit');
	$pew_logo = get_field('pew_logo');
	$pew_link = get_field('pew_link');	
?>


<main>
	
	<div class="jumbotron homepage-hero" style="background-image: url('<?php echo $cover_image; ?>');">
		<div class="container">	
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
                    <h4>The Course:</h4>
					<h1 class="homepage-headline"><?php echo $headline; ?></h1>
				</div>
			</div>
		</div>	
	 </div>
	
	<section class="front-video-section">
		<div class="container forcing-auto-width">
			<div class="row">
				
				<?php if ( have_rows('lead_media') ): ?>
					<?php while ( have_rows('lead_media') ): the_row(); ?>
					
					<div class="col-lg-10 col-md-12 col-lg-offset-1 front-video-container">
						<div class="col-lg-7 col-md-12 no-left-padding front-video-container-left">
							
							<?php if( get_row_layout() == 'video' ): ?>	
								 <div class="videoWrapper videoWrapper169 js-videoWrapper">
<!-- 									<iframe class="videoIframe js-videoIframe" src="<?php echo the_sub_field('video'); ?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
									<?php echo the_sub_field('video'); ?>
										
									<button class="videoPoster js-videoPoster"><span class="sr-only">Watch Course Preview</span></button>
								</div>	
							
							
							<?php elseif( get_row_layout() == 'image' ): ?>
								
								<div class="front-image" style="background-image: url('<?php echo the_sub_field("image"); ?>');"></div>
								
							
							<?php endif; ?>					
						
						</div>
						
						<div class="col-lg-5 col-md-12 front-video-container-right">
							<h3><?php echo $lead_heading; ?></h3>
							<p><?php echo $lead_body_copy; ?></p>
						</div>
					
					</div>	
					<?php endwhile; ?>
				<?php endif; ?>

				
				<?php if (! have_rows('lead_media') ): ?>	
				<div class="col-lg-10 col-md-12 col-lg-offset-1 front-video-container-no-media">
					<h3><?php echo $lead_heading; ?></h3>
					<p><?php echo $lead_body_copy; ?></p>
				</div>
				<?php endif; ?>
				
				
			</div>
		</div> 
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-12 col-lg-offset-1 no-padding">
					<div class="front-class-block-container">
					
					
					 <!-- ACF REPEATER STARTS -->
			    <?php if ( have_rows('class_module') ): ?>
			    <?php while ( have_rows('class_module') ): the_row();
				    $teaser_image = get_sub_field('teaser_image');
				    $date = get_sub_field('date');
				    $title = get_sub_field('title');
				    $teaser_copy = get_sub_field('teaser_copy');
				    $class_link = get_sub_field('class_link');
				    $registration_link = get_sub_field('registration_link');
				    
				?>
	
					<div class="class-block">
							<a href="<?php echo $class_link; ?>" class="class-top">
								<div class="thumb">
									<img src="<?php echo $teaser_image; ?>" alt="placeholder image">
								</div>
								<div class="class-block-text">
									<p class="single-class-date"><small><?php echo $date; ?></small></p>
									<h5 class="single-class-title"><?php echo $title; ?></h5>
								</div>	
							</a>
							<div class="class-description-container">
								<div class="class-description-wrapper">
								<p class="class-description"><?php echo $teaser_copy; ?>
								<span class="extend-p">Speakers include</span></p>
								
								<?php 

								$posts = get_sub_field('speakers');
								
								if( $posts ): ?>
								   <ul class="speaker-list">
								    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
								        <?php setup_postdata($post); ?>
								        <li>
								            <a href="<?php echo get_sub_field('speaker_link'); ?>#speaker-<?php echo $post->ID; ?>">
								            <span class="speaker-name"><?php the_field('name'); ?></span>
								            </a>
								        </li>
								    <?php endforeach; ?>
								    </ul>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
								<?php endif; ?>
								</div>
								</div>
								<div class="class-button-container">															
									<div class="front-btn-container">
										<a href="<?php echo $class_link; ?>" class="front-btn">Details</a>
										
										<?php if( get_sub_field('registration_link') ): ?>
										<a href="<?php echo $registration_link; ?>" class="front-btn">Register</a>
										<?php endif; ?>
									</div>
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
	
	<section class="mlk-section">
		<div class="mlk-img-container">
			<img class="mlk-img" src="<?php echo $quote_image; ?>" alt="mlk img">
			<blockquote class="mlk-quote">
				<p><?php echo $quote_copy; ?></p>
				<footer><cite><h4><?php echo $quote_attribution; ?></h4></cite></footer>
			</blockquote>
		</div>
	</section>
	
	
	<section class="sponsor-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h3 class="sponsor-heading"><?php echo $sponsor_heading; ?></h3>
					
					<div class="pew-container">
						<div class="pew-block">
							<a href="<?php echo $pew_link; ?>" target="_blank">
								<img src="<?php echo $pew_logo; ?>" alt="Pew Center for Arts and Heritage logo">
							</a>
						</div>
						<div class="pew-credit"><?php echo $sponsor_credit; ?></div>
					</div>
					
					
					<div class="sponsor-container">
						
						<?php if ( have_rows('sponsor_block') ): ?>
					    <?php while ( have_rows('sponsor_block') ): the_row();
						    $sponsor_link = get_sub_field('sponsor_link');
						    $sponsor_image = get_sub_field('sponsor_image');
						?>
						
						<div class="sponsor-block">
							<a href="<?php echo $sponsor_link; ?>" target="_blank">
								<img src="<?php echo $sponsor_image; ?>" alt="sponsor logo">
							</a>
						</div>
						
						<?php endwhile; ?>
						<?php endif; ?>
						<!-- END ACF REPEATER -->
									
						
						
						
					</div>
					
						
				</div>
			</div>
		</div>
	</section>
	
</main>
<?php endwhile; ?>


<?php get_footer(); ?>