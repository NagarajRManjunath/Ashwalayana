<section id="Activities">	
					<div class="container  pb-4">	
						<div class="row pt-4">	
							<div class="col-md-12 text-center text-uppercase pb-3 "><h3 class="theme-underline color-primary ">All Activities</h3></div>	
		
						</div>	
						<div class="row">	
							<div class="col-md-4">	
								<div class="card card-custom">	

									<?php 
									if ( has_post_thumbnail() ) {
										    the_post_thumbnail('small-thambnail');
										    the_excerpt();
										}									
									?>
								</div>	
							</div>	
								
						</div>	
					</div>	
				</section>	
				