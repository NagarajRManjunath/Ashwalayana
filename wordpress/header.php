<!DOCTYPE html>
<html>
<head>
	<title>Shree Ashwalayana Vrinda | Veda Rakshana</title>
	
</head>
<body>
<header>
	<?php
	 	if( function_exists( 'the_custom_logo' ) ) 
	 	{
	 		//the_custom_logo();
	 		$custome_logo_id = get_theme_mod('custom_logo');
	 		$logo = wp_get_attachment_image_src($custome_logo_id);
	 	}

	 	$site_name = get_bloginfo('name');
	?>
		<nav class="navbar navbar-expand-lg navbar-light bg-light bg-primary btb-navbar">
			<div class="container">
				<div class="d-flex flex-grow-1">
					<span class="w-100 d-lg-none d-block">
						<a class="navbar-brand  resp-width-25" href="#">
							<img src="<?php echo isset($logo[0])?$logo[0]:THEME_IMG_PATH.'logo.png';?>" class="img-fluid" alt="Shree Ashwalayana Vrinda" title="Shree Ashwalayana Vrinda" />
							<span class="color-secondary pl-2 mobile_title"> <?php echo  $site_name;?></span>
						</a>
					</span>
					<a class="navbar-brand d-none d-lg-inline-block logo" href="#">						
						<img src="<?php echo isset($logo[0])?$logo[0]:THEME_IMG_PATH.'logo.png';?>" class="img-fluid banner logo-size" alt="Shree Ashwalayana Vrinda"  title="Shree Ashwalayana Vrinda"/>
						<span class="color-secondary pl-2 fw-2"><?php echo  $site_name;?></span>
					</a>
						<div class="w-100 text-right mt-4 ">
							<button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#header_banner">
								<i class="fa fa-bars color-white" aria-hidden="true"></i>
							</button>
						</div>
					</div>
					<?php 
					$arg = array('theme_location' => 'primary',
						'container_class'   => 'collapse navbar-collapse flex-grow-1 text-right',
						'container_id'		=> 'header_banner',
                		'menu_class'        => 'navbar-nav ml-auto flex-nowrap text-center',
                		'add_li_class'       => 'nav-item');
					wp_nav_menu($arg);
					?>
				</div>
			</nav>
		</header>
		<?php wp_head();?>