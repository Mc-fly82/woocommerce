<?php
/*
Template Name: Custom Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<style type="text/css" media="screen">
		html { margin-top: 0 !important; }
		* html body { margin-top: 0 !important; }
		@media screen and ( max-width: 782px ) {
			html { margin-top: 0 !important; }
			* html body { margin-top: 0 !important; }
		}
	</style>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('custom-nav-1') ?>
