<?php

function print_page($atts, $content = null ) {





	switch ($atts["p"]) {
		case 'accueil': return require 'page-accueil.php'; break;

		case 'association':    include 'page-association.php'; break;
		case 'carres_potager': include 'page-carres_potager.php';break;
		case 'contact':        include 'page-contact.php'; break;
		case 'liens_utiles':   include 'page-liens_utiles.php'; break;
		case 'mentions_legale':include 'page-mentions_legale.php'; break;

		default: return '<p>Please inter a valide page</p>'; break;
	}
}

add_shortcode(
	$tag = "page" ,
	$func = "print_page"
);
