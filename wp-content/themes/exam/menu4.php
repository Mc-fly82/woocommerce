<script type="text/javascript">
jQuery(function ($) {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 453 ) {
      $('#menu-scroll')
      .addClass('shrink');
      $('#menu1').css('visibility', 'hidden');
    } else {
      $('#menu-scroll')
      .removeClass('shrink');
      $('#menu1').css('visibility', 'visible');
    }
  });
  $(window).resize(function() {
    if($(window).width() <= 767)
    {
      // change functionality for smaller screens
      $('#menu-scroll').css('opacity', '1');
      $('#menu1').fadeOut();
    } else {
      // change functionality for larger screens
      $('#menu-scroll').css('opacity', '0');
      $('#menu1').fadeIn();
    }
  });
  if($(window).width() <= 767)
  {
    // change functionality for smaller screens
    $('#menu-scroll').css('opacity', '1');
    $('#menu1').fadeOut();
  } else {
    // change functionality for larger screens
    $('#menu-scroll').css('opacity', '0');
    $('#menu1').fadeIn();
  }
});
</script>

<?php
if (function_exists(custom_menu_scroll())) {
  custom_menu_scroll();
}

function custom_menu_scroll() {
	$menu_name = 'primary'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
 $menu_list .='<nav id="menu-scroll" class="navbar navbar-toggleable-md navbar-dark bg-primary fixed-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <strong>
            <img class="logo-site-menu-scroll" height="60px" src="http://marcflavius.e-formasup.com/carre-potager/wp-content/uploads/2017/06/logo-coeur-de-ville-test2.png" alt="">

            </strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">';

            $menu_list .= "\t\t\t\t". '<ul class="navbar-nav mr-auto">' ."\n";
        		foreach ((array) $menu_items as $key => $menu_item) {
        			$title = $menu_item->title;
        			$url = $menu_item->url;
        			$menu_list .= "\t\t\t\t\t". '<li class="nav-item"><a class="nav-link" href="'. $url .'">'. $title .'</a></li>' ."\n";
        		}
        		$menu_list .= "\t\t\t\t". '</ul>' ."\n";


            $menu_list .='<form class="form-inline waves-effect waves-light">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
    </div>
</nav>';
} else {
  // $menu_list = '<!-- no list defined -->';
}
echo $menu_list;
}
?>
