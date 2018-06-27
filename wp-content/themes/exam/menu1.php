<?php
if (function_exists(menu_emplacement1('primary'))) {
	menu_emplacement1('primary');
}
?>

<?php
// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function menu_emplacement1($menu_name) {
	$menu_name = 'primary'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		$menu_list = '<nav id="menu1">' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="d-flex flex-wrap-space-around">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$ID = $menu_item->ID;
			$menu_list .= "\t\t\t\t\t". '<li><a class="mui-btn mui-btn--primary c-color-green" href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		$menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}
?>
strinfg
