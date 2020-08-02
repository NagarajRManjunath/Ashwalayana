<?php 
	wp_head();
	get_header();

	$current_year = date("Y");

	if(strpos($_SERVER['REQUEST_URI'], "gallery"))
	{
		get_template_part('template-part/content','gallery');
	}
	else if (strpos($_SERVER['REQUEST_URI'], $current_year))
	{
		if ( have_posts() ) :
		    while ( have_posts() ) : the_post();
		        the_content();
		    endwhile;
		endif;
	}
	else
	{
		get_template_part('template-part/content','slider');
		get_template_part('template-part/content','activity');
		get_template_part('template-part/content','shlokas');
		get_template_part('template-part/content','events');
		get_template_part('template-part/content','frontgallery');
		get_template_part('template-part/content','contact');
		if(strpos($_SERVER['REQUEST_URI'], "contactsection"))
			echo '<script>changeSection("ContactSection");</script>';
		else if(strpos($_SERVER['REQUEST_URI'], "events"))
			echo '<script>changeSection("EventsSection");</script>';	
	}

	get_footer();
	wp_footer();
?>
		
	

