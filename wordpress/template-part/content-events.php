<section id="EventsSection">
				<div class="container  pb-4">
					<div class="row pt-4">
						<div class="col-md-12 text-center text-uppercase pb-3 "><h3 class="theme-underline color-primary ">Events</h3></div>

					</div>
					<div class="row">
						<?php $the_query = new WP_Query( 'tag=Events' );
							if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
						<div class="col-md-4">
							<div class="pt-3 d-flex flex-row">
								<div class="d-flex align-items-start">
									
											<span class="EventDate shadow bg-secondary text-center color-white pt-3 pb-3 pl-3 pr-3 dateCss"><?php the_title();?></span>
											&nbsp<?php the_content();?>										
									
								</div>
								
							</div>
						</div>
						<?php endwhile;  endif;
						/* Restore original Post Data */
						wp_reset_postdata();
						?>						
					</div>
				</div>
			</section>