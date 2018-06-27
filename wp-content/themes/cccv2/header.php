<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->

<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link rel="stylesheet" href="test.css">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<?php require 'enqueue_head.php'; ?>
</head>

<body <?php body_class('container-fluid'); ?>>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

	<!-- <div class="se-pre-con"></div> -->
<div id="page" class="row hfeed site">

 <?php
 global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));
 $array_url = explode('/', $current_url);
// var_dump($array_url);

 $search_shop = in_array(('boutique'), $array_url);
 $search_cart = in_array(('panier'), $array_url);
 $search_connect = in_array(('mon-compte'), $array_url);
 $search_produit = in_array(('produit'), $array_url);
 $search = $search_shop + $search_cart + $search_connect + $search_produit;
  ?>

<?php if ($search === 0) { ?>
	<div class="col-12 top">
		<img class="logo-site" src="http://marcflavius.e-formasup.com/carre-potager/wp-content/uploads/2017/06/logo-coeur-de-ville-test2.png" alt="">
		<?php get_template_part('top') ?>
		<div class="logos-partenaires">
			<img class="logo-partenaire" height="70" src="http://marcflavius.e-formasup.com/carre-potager/wp-content/uploads/2017/06/colibris-82_logo.png" alt="">
			<img class="logo-partenaire" height="70" src="http://marcflavius.e-formasup.com/carre-potager/wp-content/uploads/2017/06/colibris-incroyables-e1496392894425.png" alt="">
			<img class="logo-partenaire" height="70" src="http://marcflavius.e-formasup.com/carre-potager/wp-content/uploads/2017/06/formasup_logo.png" alt="">
		</div>
	</div>

<?php } else { ?>
<style media="screen">
	#page {
		min-height:<?php echo 800 . "px" . "!important" ?>
	}

	/*# portable*/
	@media only screen and (max-width: 768px) {

	}
	/*# tablette*/
	@media only screen and (min-width: 768px) and (max-width: 992px) {

	}
	/*# screen*/
	@media only screen and (min-width: 992px) and (max-width: 1200px) {
		#menu-scroll {
			display:none;

		}
	}
	/*# tablette*/
	@media only screen and (min-width: 1200px) {
		#menu-scroll {
			display:none;
		}
	}
</style>

<?php } ?>

<div class="col-12 bgi">
	<?php get_template_part('menu1') ?>

	<div id="main" class="wrapper">
<?php get_template_part('menu_scroll') ?>
<?php// get_template_part('menu-scroll') ?>

<?php require 'enqueue_after_head.php'; ?>
