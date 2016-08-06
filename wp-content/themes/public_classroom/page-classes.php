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
  ?>
    
  <main>
  	 <main class="classes-page">
	  	<ul class="classes-subnav" data-spy="affix" data-offset-top="0">
				<li><a href="#summary">Summary</a></li>
				<li><a href="#videos">Videos</a></li>
				<li><a href="#speakers">Speakers &amp; Moderator</a></li>
				<li><a href="#collection">Collection Workshop</a></li>
				<li><a href="#resources">Resources &amp; Workbook</a></li>
			</ul>
 
	  	<div class="jumbotron speakers-hero">
		<div class="container">	
			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h4>September 21, 2016</h4>
					<h1 class="homepage-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
				</div>
			</div>
		</div>	
	 </div>


	 <section id="summary">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-sm-offset-1 no-padding">
					<h4><span><img src="<?php printthemepath(); ?>/img/icon-bubble.svg" alt="quote bubble icon"></span> Focus Question</h4>
					
					<p class="lead">Does the concept of Race have any scientific validity? How did the concept of race originate?</p>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend semper. Nam ut hendrerit magna. Sed fringilla, nulla at consequat vulputate, elit tortor ultricies nisi, non interdum nisl turpis a libero. Nulla facilisi. Proin venenatis nulla ultrices tellus pretium blandit. Fusce at dictum magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras consequat eleifend fringilla. Vestibulum vehicula dui at massa pulvinar iaculis.Pellentesque lacinia arcu a posuere sodales. Fusce risus est, vestibulum id odio bibendum, dignissim auctor felis. Nulla vitae eros pretium, imperdiet enim eu, imperdiet tellus. Praesent hendrerit convallis est, id aliquam dui maximus nec. Etiam non tellus urna. Donec posuere augue semper porta egestas. Integer ut tincidunt risus, ut fermentum nisi.</p>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend semper. Nam ut hendrerit magna. Sed fringilla, nulla at consequat vulputate, elit tortor ultricies nisi, non interdum nisl turpis a libero. Nulla facilisi. Proin venenatis nulla ultrices tellus pretium blandit. Fusce at dictum magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras consequat eleifend fringilla. Vestibulum vehicula dui at massa pulvinar iaculis.Pellentesque lacinia arcu a posuere sodales. Fusce risus est, vestibulum id odio bibendum, dignissim auctor felis. Nulla vitae eros pretium, imperdiet enim eu, imperdiet tellus. Praesent hendrerit convallis est, id aliquam dui maximus nec. Etiam non tellus urna. Donec posuere augue semper porta egestas. Integer ut tincidunt risus, ut fermentum nisi.</p>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend semper. Nam ut hendrerit magna. Sed fringilla, nulla at consequat vulputate, elit tortor ultricies nisi, non interdum nisl turpis a libero. Nulla facilisi. Proin venenatis nulla ultrices tellus pretium blandit. Fusce at dictum magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras consequat eleifend fringilla. Vestibulum vehicula dui at massa pulvinar iaculis.Pellentesque lacinia arcu a posuere sodales. Fusce risus est, vestibulum id odio bibendum, dignissim auctor felis. Nulla vitae eros pretium, imperdiet enim eu, imperdiet tellus. Praesent hendrerit convallis est, id aliquam dui maximus nec. Etiam non tellus urna. Donec posuere augue semper porta egestas. Integer ut tincidunt risus, ut fermentum nisi.</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="about-video-slider-container" id="videos">
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

	<section class="classes-speaker-section" id="speakers">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h3>Speakers &amp; Moderator</h3>
					
					<div class="col-sm-4 speaker-block">
						<img class="speaker-img" src="<?php printthemepath(); ?>/img/speaker-jay-kaufman.jpg" alt="speaker placeholder">
						<div class="speaker-block-text">
							<h5>Jay Kaufman</h5>
							<p>Faculty of Medicine, Department of Epidemiology & Biostatistics</p>
							<p>McGill Centre on Population Dynamics</p>
							<p>McGill University</p>
						</div>
					</div>
					
					<div class="col-sm-4 speaker-block moderator">
						<img class="speaker-img" src="<?php printthemepath(); ?>/img/speaker-carolyn-rouse.jpg" alt="speaker placeholder">
						<div class="speaker-block-text">
							<h5>Carolyn Rouse</h5>
							<p>Associate Anthropology Professor</p>
							<p>Princeton University</p>
						</div>
					</div>
					
					<div class="col-sm-4 speaker-block">
						<img class="speaker-img" src="<?php printthemepath(); ?>/img/speaker-jay-kaufman.jpg" alt="speaker placeholder">
						<div class="speaker-block-text">
							<h5>Jay Kaufman</h5>
							<p>Faculty of Medicine, Department of Epidemiology & Biostatistics</p>
							<p>McGill Centre on Population Dynamics</p>
							<p>McGill University</p>

						</div>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend semper. Nam ut hendrerit magna. Sed fringilla, nulla at consequat vulputate, elit tortor ultricies nisi, non interdum nisl turpis a libero. Nulla facilisi. Proin venenatis nulla ultrices tellus pretium blandit. Fusce at dictum magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>					
				</div>
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<div class="classes-collection-wrapper">
						
					<div class="col-sm-4 speaker-block">
						<img class="speaker-img" src="<?php printthemepath(); ?>/img/collection_001.jpg" alt="speaker placeholder">
						<div class="speaker-block-text">
							<h5>Object Title</h5>
							<p>Collection Name</p>
							<p>Organization or Institution</p>
						</div>
					</div>
					
					<div class="col-sm-4 speaker-block">
						<img class="speaker-img" src="<?php printthemepath(); ?>/img/collection_001.jpg" alt="speaker placeholder">
						<div class="speaker-block-text">
							<h5>Object Title</h5>
							<p>Collection Name</p>
							<p>Organization or Institution</p>
						</div>
					</div>
					
					<div class="col-sm-4 speaker-block">
						<img class="speaker-img" src="<?php printthemepath(); ?>/img/collection_001.jpg" alt="speaker placeholder">
						<div class="speaker-block-text">
							<h5>Object Title</h5>
							<p>Collection Name</p>
							<p>Organization or Institution</p>
						</div>
					</div>
					
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
					<h3>Resources &amp; Workbook</h3>
				</div>
				<div class="col-sm-7 col-sm-offset-1 no-padding">
					<p class="resources-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur iaculis ipsum arcu, vitae porttitor purus sagittis sit amet. Etiam nec lobortis mauris. Praesent vel elit vel felis pulvinar tincidunt. Vestibulum in orci eu urna auctor sodales. Curabitur nisi mauris, lacinia at felis eget, facilisis auctor dolor. Vestibulum luctus iaculis varius. Vestibulum vestibulum nec ante et venenatis.</p>
					
					<div class="resources-block-quiz">
						<div class="col-sm-9">
						<p class="resources-title">Class Quiz </p>
						<h3 class="file-type">PDF</h3>
						<p><span class="useful">Useful For:</span> Before Class Starts</p>
						<p>Suggested Article</p>
						</div>
						<div class="col-sm-3 resources-download-btn-container">
							<a href="" class="resources-quiz-download-btn">Download</a>
						</div>
					</div>
					
					<div class="resources-block">
						<div class="col-sm-9">
						<p class="resources-title">Class Workbook </p>
						<h3 class="file-type">PDF</h3>
						<p><span class="useful">Useful For:</span> Before Class Starts</p>
						<p>Suggested Article</p>
						</div>
						<div class="col-sm-3 resources-download-btn-container">
							<a href="" class="resources-download-btn">Download</a>
						</div>
					</div>
					
					<div class="resources-block">
						<div class="col-sm-9">
						<p class="resources-title">Racial Theories in Physical Anthropology: 1850-1918</p>
						<h3 class="file-type">PDF</h3>
						<p><span class="useful">Useful For:</span>During Class</p>
						</div>
						<div class="col-sm-3 resources-download-btn-container">
							<a href="" class="resources-download-btn">Download</a>
						</div>
					</div>
					
					<div class="resources-block">
						<div class="col-sm-9">
						<p class="resources-title">WHYY Podcast</p>
						<h3 class="file-type">Podcast</h3>
						<p><span class="useful">Useful For:</span>During Class</p>
						</div>
						<div class="col-sm-3 resources-download-btn-container">
							<a href="" class="resources-download-btn">View Online</a>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</section>





  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>