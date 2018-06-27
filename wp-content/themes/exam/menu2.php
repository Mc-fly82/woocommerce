<nav id="menu2"  role="navigation">
	<?php
	$defaults = array(
		'theme_location'=> '',
		'menu'            => 'menu2',//(int|string|WP_Term) Desired menu.
		'container'       => 'ul',//Whether to wrap the ul, and what to wrap it with. Default 'div'.
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'd-flex flex-center',//CSS class to use for the ul
		'menu_id'         => '',//id class to use for the u		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'depth'           => 0,
	);

	wp_nav_menu( $defaults ); ?>
</nav><!-- #site-navigation -->
