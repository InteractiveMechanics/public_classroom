 <?php 
	$speaker_image = get_field('speaker_image');
	$name = get_field('name');
	$primary_affiliation_title = get_field('primary_affiliation_title');
	$primary_affiliation_org = get_field('primary_affiliation_org');
	$short_bio = get_field('short_bio');
				   
				    
?>
					





<?php if( get_field('moderator') ) {
	echo ' <span class="moderator-wrapper">';
} else {
	
}
?>
<div class="col-sm-4 speaker-block" id="speaker-<?php echo $post->ID; ?>">
	<button data-toggle="modal" data-target="#<?php echo $post->ID; ?>">
		<img class="speaker-img" src="<?php echo $speaker_image; ?>">
			
			<div class="speaker-block-text">
				<h4><?php echo $name; ?></h4>
<!-- 					<p><?php echo $primary_affiliation_title; ?></p> -->
<!-- 					<p><?php echo $primary_affiliation_org; ?></p> -->
			</div>
	</button>
</div>

<?php if( get_field('moderator') ) {
	echo ' </span>';
} else {
	
}
?>
					
					
<!-- Modal -->
<div class="modal fade" id="<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 no-padding">
				<div class="modal-img-container">
					<div class="col-sm-4">
									
						<img class="speaker-img" src="<?php echo $speaker_image; ?>">
						
					</div>		
				</div>
				
				
				<div class="col-sm-8">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel"><?php echo $name; ?></h4>
							    
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
								<p><?php echo $short_bio; ?></p>
								     
								   
																			    
									<?php if ( have_rows('external_resources') ): ?>
								   		<h4>External Resources</h4>
								   	<?php endif;?>
								   	
								    
								    <?php if ( have_rows('external_resources') ): ?>
									<?php while ( have_rows('external_resources') ): the_row(); ?>
								    <ul>
									    									    
									    <li>
									    <?php if (get_sub_field('external_resource_link')) : ?>
									    	<a href="<?php echo get_sub_field('external_resource_link'); ?>"class="dashed-line-white" target="_blank">
										<?php endif; ?>
										
										<?php echo get_sub_field('external_resource_label'); ?>
										
										 <?php if (get_sub_field('external_resource_link')) : ?>
											</a>
										<?php endif; ?>
										</li>
									    
									    									    
								    </ul>
								    
								     <?php endwhile; ?>
										<?php endif; ?>

								    
								    <h4>Classes</h4>
								    
								    <?php 

										$posts = get_field('related_class');

									if( $posts ): ?>
								    
								    
								    <ul>
									    
									<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
									<?php setup_postdata($post); ?>
									<li>
							            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							        </li>
								    <?php endforeach; ?>
								    </ul>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>    
									    
								    
							    </div>
							
							</div>
						</div>
					</div>
				</div>
		
		</div>
	</div>
</div>

