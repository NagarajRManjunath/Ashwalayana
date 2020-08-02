<?php 
	wp_head();
	get_header();
	?>

		<section id="single" class="pt-5 pb-4">
			<div class="row pt-3">
				<div class="col-md-5 post-thumbnail">
					<?php if ( have_posts() ) :
					    while ( have_posts() ) : the_post();
					    	if ( has_post_thumbnail() ) {
							    	the_post_thumbnail('banner-thambnail');
							}
					    endwhile;
					endif;?>
				</div>
				<div class="col-md-6">
					<?php if ( have_posts() ) :
					    while ( have_posts() ) : the_post();
					    	the_content();
					    endwhile;
					endif;?>
				</div>
			</div>	
		</section>
		
	<?php
	get_footer();
	wp_footer();
?>
		
	

