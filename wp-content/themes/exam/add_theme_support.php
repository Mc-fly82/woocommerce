<?php
function wpt_register_theme_customizer( $wp_customize ) {

	// var_dump( $wp_customize )->sections();

	// Customize title and tagline sections and labels
	$wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'wptthemecustomizer');
	$wp_customize->get_control('blogname')->label = __('Site Name', 'wptthemecustomizer');
	$wp_customize->get_control('blogdescription')->label = __('Site Description', 'wptthemecustomizer');
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';


}
add_action( 'customize_register', 'wpt_register_theme_customizer' );

// Custom js for theme customizer
function wpt_customizer_js() {
  wp_enqueue_script(
    'wpt_theme_customizer',
    get_template_directory_uri() . '/js/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '',
    true
);
}
add_action( 'customize_preview_init', 'wpt_customizer_js' );

?>
<script type="text/javascript">
  jQuery(function ($) {
    alert('string')
    alert('string');
  });
</script>
