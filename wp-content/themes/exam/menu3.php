<?php // appelle la fonction ou tu veut le voir apparaitre dans ton template
$nom_de_ton_menu_enregistre = 'menu3';
if (function_exists(menu_emplacement3($nom_de_ton_menu_enregistre))) menu_emplacement3($nom_de_ton_menu_enregistre);
?>


<?php
// customisation d'un menu wordpress
function menu_emplacement3($menu_name) {
	if ( ($locations = get_nav_menu_locations()) && isset($locations[$menu_name]) ) {

		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<nav id="menus-menu3" class="footer-color" role="navigation" >' ."\n";
		$menu_list .= '<div class="container">';
		$menu_list .= "\t\t\t\t". '<ul class="ul-strip d-flex flex-wrap-space-around flex-center">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			if ($title == 'facebook') {

				$menu_list .= "\t\t\t\t\t". '<li class="li-strip"><a class="a-strip social-li" href="'. $url .'">'. '<i class="fa-5x fa fa-'.$title.'-square " aria-hidden="true"></i>' .'</a></li>' ."\n";
			} else {

				$menu_list .= "\t\t\t\t\t". '<li class="li-strip"><a class="a-strip social-li" href="'. $url .'">'. '<i class="fa-5x fa fa-'.$title.'" aria-hidden="true"></i>' .'</a></li>' ."\n";
			}
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= '</div">';

		$menu_list .= "\t\t\t". '</nav>' ."\n";

	} else {
	}
	echo $menu_list;
}
