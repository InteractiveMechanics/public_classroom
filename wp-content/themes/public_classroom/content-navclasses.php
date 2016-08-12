<?php 

								$posts = get_field('testing_classes', 'option');
								

								
								if( $posts ): ?>
								    <ul class="dropdown-menu">
								    <?php foreach( $posts as $post_object):?>
								       
								         <li class="nav-inline-li">
							            		<a href="<?php the_permalink($post_object->ID); ?>">
								            	<div class="nav-img-container">
									            	<img src="http://cdn8.openculture.com/wp-content/uploads/2013/11/old-books-32.jpg" alt="placeholder image" class="nav-img">
								            	</div>
							          		</a>
								            	<div class="nav-text-container">
								            	<p><?php the_field('date', $post_object->ID); ?></p>
								            	<a href="<?php the_permalink($post_object->ID); ?>">
								            		<h4 class="nav-class-title"><?php the_field('title', $post_object->ID); ?></h4>
								            	</a>
							            	</a>
							            	<div class="nav-address-container">
										        <p><?php the_field('address_line_1', $post_object->ID); ?></p>
										        <p><?php the_field('address_line_2', $post_object->ID); ?></p>
										        <p><?php the_field('address_line_3', $post_object->ID); ?></p>
										        <a href="<?php the_field('map_link', $post_object->ID); ?>" class="nav-map"><span class="dashed-line-white">view map</span></a>
										            
										        <a href="<?php the_permalink($post_object->ID); ?>" class="nav-details-btn">View Details</a>
												<a href="<?php the_field('registration_link', $post_object->ID); ?>" class="nav-register-btn">Register</a>
							            	</div>		
								            	
							           </li>

								        
								    <?php endforeach; ?>
								    </ul>
								<?php endif; ?>
