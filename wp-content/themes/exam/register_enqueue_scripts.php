<?php
/**
* Enqueue styles.
*/
wp_enqueue_style( 'my-simone-style', get_stylesheet_uri() );

if ( ! is_admin() )
wp_enqueue_style( $handle = 'bootstrap4' , $src = get_template_directory_uri()  .'/lib/css/bootstrap4.min.css', $deps = array(), $ver = false, $media = 'all' );

if ( ! is_admin() )
wp_enqueue_style( $handle = 'mdb' , $src = get_template_directory_uri()  .'/lib/css/mdb.css', $deps = array(), $ver = false, $media = 'all' );

if ( ! is_admin() )
wp_enqueue_style( $handle = 'fontawesome' , $src = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', $deps = array(), $ver = false, $media = 'all' );

 wp_enqueue_style( $handle = 'mf_framework' , $src = get_template_directory_uri()  .'/lib/css/framework.css', $deps = array(), $ver = false, $media = 'all' );

wp_enqueue_style( $handle = 'style-content', $src = get_template_directory_uri()  .'/style-content.css', $deps = array(), $ver = false, $media = 'all' );

/**
* Enqueue scripts.
*/

wp_enqueue_script( $handle = 'my-simone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

wp_enqueue_script( $handle = 'my-simone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

wp_enqueue_script($handle = 'twentytwelve-navigation' , $src = get_template_directory_uri()  .'/js/navigation.js', $deps = array('jquery'), $ver = '20140711', $in_footer = false );

if ( ! is_admin() )
wp_enqueue_script( $handle = 'bootstrap4' , $src = get_template_directory_uri()  .'/lib/js/bootstrap4.min.js', $deps = array('jquery'), $ver = '', $in_footer = true );

if ( ! is_admin() )
wp_enqueue_script( $handle = 'style_js' , $src = get_template_directory_uri()  .'/lib/js/style.js', $deps = array('jquery'), $ver = '', $in_footer = true );

wp_enqueue_script( $handle = 'ajax_page' , $src = get_template_directory_uri()  .'/lib/js/ajax.js', $deps = array('jquery'), $ver = '', $in_footer = false );


if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( $handle = 'comment-reply' );
}
