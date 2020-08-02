<section id="shlokas">	
					<div class="row no-margin">	
						<div class="col-md-6 no-padding">	<!--  pt-4 -->
							<img class="img-fluid pt-4 pb-4" src="https://images.newindianexpress.com/uploads/user/imagelibrary/2018/11/15/w900X450/Ayurveda_Goes_Back.jpg" />	
						</div>	
						<div class="col-md-6  no-padding top-padding">	
							 <div class="jumbotron shlokas_section bg-secondary-light shlok-div"> 	
								<div class="container text_center ">

								<?php $the_query = new WP_Query( 'tag=shlokas' );
									if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
											the_content();	
									 endwhile;  endif;
									wp_reset_postdata();
								?>
								 </div>	
							 </div> 	 
						</div>	
					</div>	
				</section>