<?php
//add content to page white short_code example [page p="acceuil"]
function print_page($atts, $content = null ) {
	switch ($atts["p"]) {
		case 'accueil':  			 include 'page-accueil.php';         break;
		case 'association':    include 'page-2.php';               break;
		case 'carres_potager': include 'page-3.php';               break;
		case 'contact':        include 'page-4.php';               break;
		case 'liens_utiles':   include 'page-5.php';               break;
		case 'mentions_legale':include 'page-6.php';               break;

		default: return '<p>Please inter a valide page</p>';       break;
	}
}

add_shortcode(
	$tag = "page" ,
	$func = "print_page"
);
