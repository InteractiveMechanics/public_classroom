		<footer>
			<div class="container">
				<div class="row">
					<div class="footer-logo-wrapper">
					<a href="<?php echo the_field('footer_logo_link', 'option'); ?>" target="_blank" class="footer-logo-link">
					<img src="<?php printthemepath(); ?>/img/footer-logo@2x.jpg" alt="Penn Museum logo">
					</a>
					</div>
						<ul class="address-block">
<!--
						<li class="bold">The Public Classroom</li>
						<li>University of Pennsylvania</li>
-->
						<li>3260 South Street Philadelphia, PA 19104</li>
						<li>&copy; Penn Museum 2016</li>
<!-- 						<li>(215)898-5000</li> -->
					</ul>
				</div>
				<div class="row">
					<ul class="footer-links">
						<li><a href="#"><span class="dashed-line-silver">Public Programs</span></a></li>
						<li><a href="#"><span class="dashed-line-silver">Copyright</span></a></li>
						<li><a href="#"><span class="dashed-line-silver">Disclaimer</span></a></li>
						<li><a href="#"><span class="dashed-line-silver">Privacy Policy</span></a></li>
					</ul>
				</div>
			</div>
			
			
			
		</footer>
		
		
		<?php wp_footer(); ?>
		
		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
		<script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
		<script src="<?php printThemePath(); ?>/js/main.js"></script>

		
	</body>
</html>
