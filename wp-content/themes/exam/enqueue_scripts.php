<?php
/**
* Enqueue styles.
*/
if ( ! is_admin() )
{
wp_enqueue_style( 'my-simone-style', get_stylesheet_uri() );

wp_enqueue_style(
  $handle = 'bootstrap4-css' ,
  $src = get_template_directory_uri()  .'/lib/css/bootstrap4.min.css',
  $deps = array(),
  $ver = false,
  $media = 'all' );

wp_enqueue_style(
  $handle = 'fontawesome-css' , $src = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', $deps = array(), $ver = false, $media = 'all' );

 wp_enqueue_style(
  $handle = 'mf_framework-css' , $src = get_template_directory_uri()  .'/lib/css/framework.css', $deps = array(), $ver = false, $media = 'all' );

wp_enqueue_style(
  $handle = 'mdb-css' , $src = get_template_directory_uri()  .'/lib/css/mdb.css', $deps = array(), $ver = false, $media = 'all' );

 wp_enqueue_style(
  $handle = 'mui-css' , $src = get_template_directory_uri()  .'/lib/mui-0.9.16/css/mui.min.css', $deps = array(), $ver = false, $media = 'all' );

 wp_enqueue_style(
  $handle = 'material-font-css' , $src = 'https://fonts.googleapis.com/icon?family=Material+Icons', $deps = array(), $ver = false, $media = 'all' );


/**
* Enqueue scripts.
*/

wp_enqueue_script(
  $handle = 'my-simone-navigation-js',
  get_template_directory_uri() . '/js/navigation.js',
  array(),
  '20120206',
  true );

wp_enqueue_script(
  $handle = 'my-simone-skip-link-focus-fix-js', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


wp_enqueue_script(// Adds JavaScript for handling the navigation menu hide-and-show behavior.
  $handle = 'tether-js' ,
  $src = get_template_directory_uri()  .'/js/tether.min.js',
  $deps = array('jquery'),
  $ver = '20140711',
  $in_footer = true );

wp_enqueue_script(
   $handle = 'twentytwelve-navigation-js' , $src = get_template_directory_uri()  .'/js/navigation.js', $deps = array('jquery'), $ver = '20140711', $in_footer = false );


wp_enqueue_script(
   $handle = 'bootstrap4-js' , $src = get_template_directory_uri()  .'/lib/js/bootstrap4.min.js', $deps = array('jquery','tether-js'), $ver = '', $in_footer = true );

wp_enqueue_script(
  $handle = 'style_js-js' , $src = get_template_directory_uri()  .'/lib/js/style.js', $deps = array('jquery'), $ver = '', $in_footer = true );

wp_enqueue_script(
  $handle = 'page_refresh-js' , $src = get_template_directory_uri().'/lib/js/ajax.js', $deps = array('jquery'), $ver = '', $in_footer = true );

// wp_enqueue_script(
//   $handle = 'mdb-js' , $src = get_template_directory_uri().'/lib/js/mdb.js', $deps = array('jquery'), $ver = '', $in_footer = true );

// wp_enqueue_script(
//   $handle = 'material-js' , $src = get_template_directory_uri().'/lib/js/material.min.js', $deps = array('jquery'), $ver = '', $in_footer = true );

// wp_enqueue_script(
//   $handle = 'material-js' , $src = get_template_directory_uri().'/lib/js/material.min.js', $deps = array('jquery'), $ver = '', $in_footer = true );

wp_enqueue_script(
  $handle = 'mdui-js' , $src = get_template_directory_uri().'/lib/mui-0.9.16/js/mui.min.js', $deps = array('jquery'), $ver = '', $in_footer = true );
}
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script(
  $handle = 'comment-reply-js' );
}
