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
	
?>



<main>
	
	<div class="jumbotron homepage-hero">
		<div class="container">	
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h1 class="homepage-headline">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
				</div>
			</div>
		</div>	
	 </div>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 front-video-container">
					<div class="col-sm-7 no-left-padding">
						 <div class="videoWrapper videoWrapper169 js-videoWrapper">
							<iframe class="videoIframe js-videoIframe" src="https://player.vimeo.com/video/72716406?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<button class="videoPoster js-videoPoster"><span class="sr-only">Watch Course Preview</span></button>
						</div>					
					</div>
					<div class="col-sm-5 front-video-container-right">
						<h3>About the Public Classroom</h3>
						<p>Race is a sensitive topic in this country. Individual understanding of it is at once emotional, intellectual, and confused. Everyone thinks they are experts on the topic of race, yet few issues are characterized by more contradictory assumptions and myths, as data from the Museum's 2012 focus groups on the topic attested. Yet real conversations on race are intentionally avoided, and that silence intensifies the confusions.</p>
					</div>
				</div>
			</div>
		</div> 
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<div class="front-class-block-container">
					<div class="class-block">
							<a href="" class="class-top">
								<div class="thumb">
									<img src="<?php printthemepath(); ?>/img/class-featured-placeholder.jpg" alt="placeholder image">
								</div>
								<div class="class-block-text">
									<p class="single-class-date"><small>September 21, 2016</small></p>
									<h5 class="single-class-title">Understanding the History of Race and Science</h5>
								</div>	
							</a>
							<div class="class-description-container">
								<p class="class-description">Race is a modern idea. Ancient societies did not segregate people according to physical differences. Social scientists have argued that race is a social construct without a biological basis, that is rooted instead in the long history of racial inequalities. Speakers include</p>
								<ul class="speaker-list">
									<li><a href="">Janet Monge</a></li>
									<li><a href="">Michael Yudell</a></li>
									<li><a href="">Michael Weisberg</a></li>
									<li><a href="">Claudine Cohen</a></li>
									<li><a href="">Rachel Watkins</a></li>
									<li><a href="">Monique Scott</a></li>
								</ul>
								<div class="front-btn-container">
									<a href="" class="front-btn">Details</a>
									<a href="" class="front-btn">Register</a>
								</div>
						</div>
					</div>
					
					
						<div class="class-block">
							<a href="" class="class-top">
								<div class="thumb">
									<img src="<?php printthemepath(); ?>/img/class-featured-placeholder.jpg" alt="placeholder image">
								</div>
								<div class="class-block-text">
									<p class="single-class-date"><small>September 21, 2016</small></p>
									<h5 class="single-class-title">Understanding the History of Race and Science</h5>
								</div>	
							</a>
								<div class="class-description-container">
									<p class="class-description">Race is a modern idea. Ancient societies did not segregate people according to physical differences. Social scientists have argued that race is a social construct without a biological basis, that is rooted instead in the long history of racial inequalities. Speakers include</p>
									<ul class="speaker-list">
										<li><a href="">Janet Monge</a></li>
										<li><a href="">Michael Yudell</a></li>
										<li><a href="">Michael Weisberg</a></li>
										<li><a href="">Claudine Cohen</a></li>
										<li><a href="">Rachel Watkins</a></li>
										<li><a href="">Monique Scott</a></li>
									</ul>
									<div class="front-btn-container">
									<a href="" class="front-btn">Details</a>
									<a href="" class="front-btn">Register</a>
									</div>
								</div>
								
							</a>
						</div>
					
					
					
						<div class="class-block">
							<a href="" class="class-top">
								<div class="thumb">
									<img src="<?php printthemepath(); ?>/img/class-featured-placeholder.jpg" alt="placeholder image">
								</div>
								<div class="class-block-text">
									<p class="single-class-date"><small>September 21, 2016</small></p>
									<h5 class="single-class-title">Understanding the History of Race and Science</h5>
								</div>	
							</a>
								<div class="class-description-container">
									<p class="class-description">Race is a modern idea. Ancient societies did not segregate people according to physical differences. Social scientists have argued that race is a social construct without a biological basis, that is rooted instead in the long history of racial inequalities. Speakers include</p>
									<ul class="speaker-list">
										<li><a href="">Janet Monge</a></li>
										<li><a href="">Michael Yudell</a></li>
										<li><a href="">Michael Weisberg</a></li>
										<li><a href="">Claudine Cohen</a></li>
										<li><a href="">Rachel Watkins</a></li>
										<li><a href="">Monique Scott</a></li>
									</ul>
									<div class="front-btn-container">
									<a href="" class="front-btn">Details</a>
									<a href="" class="front-btn">Register</a>
									</div>
								</div>
								
							</a>
						</div>
					
					
					
						<div class="class-block">
							<a href="" class="class-top">
								<div class="thumb">
									<img src="<?php printthemepath(); ?>/img/class-featured-placeholder.jpg" alt="placeholder image">
								</div>
								<div class="class-block-text">
									<p class="single-class-date"><small>September 21, 2016</small></p>
									<h5 class="single-class-title">Understanding the History of Race and Science</h5>
								</div>	
							</a>
								<div class="class-description-container">
									<p class="class-description">Race is a modern idea. Ancient societies did not segregate people according to physical differences. Social scientists have argued that race is a social construct without a biological basis, that is rooted instead in the long history of racial inequalities. Speakers include</p>
									<ul class="speaker-list">
										<li><a href="">Janet Monge</a></li>
										<li><a href="">Michael Yudell</a></li>
										<li><a href="">Michael Weisberg</a></li>
										<li><a href="">Claudine Cohen</a></li>
										<li><a href="">Rachel Watkins</a></li>
										<li><a href="">Monique Scott</a></li>
									</ul>
									<div class="front-btn-container">
									<a href="" class="front-btn">Details</a>
									<a href="" class="front-btn">Register</a>
									</div>
								</div>
								
							</a>
						</div>
					
					
					
						<div class="class-block">
							<a href="" class="class-top">
								<div class="thumb">
									<img src="<?php printthemepath(); ?>/img/class-featured-placeholder.jpg" alt="placeholder image">
								</div>
								<div class="class-block-text">
									<p class="single-class-date"><small>September 21, 2016</small></p>
									<h5 class="single-class-title">Understanding the History of Race and Science</h5>
								</div>	
							</a>
								<div class="class-description-container">
									<p class="class-description">Race is a modern idea. Ancient societies did not segregate people according to physical differences. Social scientists have argued that race is a social construct without a biological basis, that is rooted instead in the long history of racial inequalities. Speakers include</p>
									<ul class="speaker-list">
										<li><a href="">Janet Monge</a></li>
										<li><a href="">Michael Yudell</a></li>
										<li><a href="">Michael Weisberg</a></li>
										<li><a href="">Claudine Cohen</a></li>
										<li><a href="">Rachel Watkins</a></li>
										<li><a href="">Monique Scott</a></li>
									</ul>
									<div class="front-btn-container">
									<a href="" class="front-btn">Details</a>
									<a href="" class="front-btn">Register</a>
									</div>
								</div>
								
							</a>
						</div>
					
					
					</div>						

				</div>
			</div>
		</div>
	</section>
	
	<section class="mlk-section">
		<div class="mlk-img-container">
			<img class="mlk-img" src="<?php printthemepath(); ?>/img/quote-image.jpg" alt="mlk img">
			<blockquote class="mlk-quote">
				<p>Our lives begin to end the day we become silent about things that matter</p>
				<footer><cite><h4>Martin Luther King Jr.</h4></cite></footer>
			</blockquote>
		</div>
	</section>
	
	
	<section class="sponsor-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 no-padding">
					<h3 class="sponsor-heading">Sponsors &amp; Partners</h3>
					
					<div class="sponsor-container">
						
						<div class="sponsor-block">
							<a href="#">
								<img src="<?php printthemepath(); ?>/img/sponsor-campaign-for-community@2x.jpg" alt="sponsor logo">
							</a>
						</div>
						
						<div class="sponsor-block">
							<a href="#">
								<img src="<?php printthemepath(); ?>/img/sponsor-campaign-for-community@2x.jpg" alt="sponsor logo">
							</a>
						</div>
						
						<div class="sponsor-block">
							<a href="#">
								<img src="<?php printthemepath(); ?>/img/sponsor-campaign-for-community@2x.jpg" alt="sponsor logo">
							</a>
						</div>
						
						<div class="sponsor-block">
							<a href="#">
								<img src="<?php printthemepath(); ?>/img/sponsor-campaign-for-community@2x.jpg" alt="sponsor logo">
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
</main>
<?php endwhile; ?>


<?php get_footer(); ?>