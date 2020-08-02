<footer>
			
			<div class="bg-secondary  w-100">
				<div class="text-center pb-1">
					<nav class="navbar-expand-lg"><!-- class="navbar navbar-expand-lg 	navbar-light bg-secondar btb-navbar" -->				
								<?php 
								$arg = array('theme_location' => 'footer',
									'container_class'   => 'collapse navbar-collapse flex-grow-1 text-center ',
			                		'menu_class'        => 'navbar-nav ml-auto flex-nowrap text-center footer_ul_align',
			                		'add_li_class'       => 'nav-item');
								wp_nav_menu($arg);
								?>
							<div class="text-center color-white">
						<span><i class="fa fa-twitter pl-2 pr-2" aria-hidden="true"></i></span>
						<span><i class="fa fa-youtube-play pl-2 pr-2" aria-hidden="true"></i></span>
						<span><i class="fa fa-facebook-official pl-2 pr-2" aria-hidden="true"></i></span>
						<p href="#" class="color-primary copyrighttext">&#169; COPYRIGHT 2020. ALL RIGHTS RESERVED.</p>
					</div>
						</nav>
					
					
				</div>
			</div>
		</footer>
</body>
	</html>