<?php
/**
 * Template Name: Speakers
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
	  <div class="jumbotron speakers-hero">
		<div class="container">	
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h4>Speakers</h4>
					<h1 class="homepage-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
				</div>
			</div>
		</div>	
	 </div>
	 
	 <section class="speaker-section">
		 <div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					
					
					<div class="col-sm-4 speaker-block">
						<button data-toggle="modal" data-target="#myModal">
							<img class="speaker-img" src="<?php printthemepath(); ?>/img/speaker-carolyn-rouse.jpg" alt="speaker placeholder">
							<div class="speaker-block-text">
								<h5>Carolyn Rouse</h5>
								<p>Associate Anthropology Professor</p>
								<p>Princeton University</p>
							</div>
						</button>
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
					
					<div class="col-sm-4 speaker-block">
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
	 
	 

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="container">
		<div class="row">
		<div class="col-sm-10 col-sm-offset-1 no-padding">
		<div class="modal-img-container">
				<div class="col-sm-4">
					<img class="speaker-img" src="<?php printthemepath(); ?>/img/speaker-carolyn-rouse.jpg" alt="speaker placeholder">
				</div>
		</div>
		<div class="col-sm-8">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
				    <h4 class="modal-title" id="myModalLabel">About the Speaker</h4>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
	 							<g id="_x37_09-plus_x40_2x.png">
	 								<g>
	 									<path d="M31.4,30l18.4-18.4c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0L30,28.6L11.6,10.2c-0.4-0.4-1-0.4-1.4,0
			c-0.4,0.4-0.4,1,0,1.4L28.6,30L10.2,48.4c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0L30,31.4l18.4,18.4c0.4,0.4,1,0.4,1.4,0
			c0.4-0.4,0.4-1,0-1.4L31.4,30z"/>
									</g>
								</g>
							</svg>
						</span>
					</button>
			    </div>
			    <div class="modal-body">
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus pellentesque eros, eget gravida urna convallis ac. Ut id sem facilisis, finibus ligula a, sodales nunc. Morbi efficitur varius neque ac dignissim. Pellentesque mollis ut sapien at semper. Phasellus tincidunt dui placerat, lobortis odio quis, blandit sapien. Praesent risus felis, sagittis nec mi eu, fermentum consequat ligula. Praesent a finibus mi.</p>
				     
				    <h4>External Resources</h4>
				    
				    <ul>
					    <li><a class="dashed-line-white">Sample External Link</a></li>
					    <li><a>Sample External Link</a></li>
					    <li><a>Sample External Link</a></li>
					    <li><a>Sample External Link</a></li>
				    </ul>
				    
				    <h4>Classes</h4>
				    
				    <ul>
					    <li><a>Sample External Link</a></li>
					    <li><a>Sample External Link</a></li>
					    <li><a>Sample External Link</a></li>
				    </ul>
				    
				    
			      </div>
			
			    </div>
			</div>
		</div>
		</div>
	</div>
	</div>
	</div>
	</div>

	  

  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>