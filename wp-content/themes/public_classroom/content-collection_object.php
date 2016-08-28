<?php
	$object_image = get_field('object_image');
	$object_title = get_field('object_title');
	$object_label = get_field('object_label');
	$object_description = get_field('object_description');


?> 



<div class="col-sm-4 collection_object-block" id="collection_object-<?php echo $post->ID; ?>">
		
	<button data-toggle="modal" data-target="#<?php echo $post->ID; ?>" class="collection_object-modal-btn">
			 
		<img class="collection_object-img" src="<?php echo $object_image; ?>">
										
		<div class="speaker-block-text">
			<h4><?php echo $object_title; ?></h4>
			
			<!-- <p><?php echo $object_label; ?></p> -->
		</div>	
	
	</button>
	
	<div class="collection_object-overlay btn-show">	
				<p>This object depicts potentially sensitive or graphic material.</p>
				<a href="" class="collection_object-overlay-btn">Show Object</a>
		</div>
								
</div>

<!-- Modal -->
<div class="modal fade" id="<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 no-padding">
				<div class="modal-flex-wrapper">
					<div class="modal-img-container collection_object-modal-img-container">
						<div class="col-sm-12">
							
									
							<img class="collection_object-modal-img" src="<?php echo $object_image; ?>">
							
						</div>		
					</div>
					
					
					<div class="col-sm-12 collection_object-modal-dialog-wrapper">
						<div class="modal-dialog collection_object-modal-dialog" role="document">
							<div class="modal-content collection_object-modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel"><?php echo $object_title; ?></h4>
								    
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
									<?php echo $object_description; ?>
										    
									    
								</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
		
		</div>
	</div>
</div>
