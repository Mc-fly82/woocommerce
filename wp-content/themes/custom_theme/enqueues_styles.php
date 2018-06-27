<?php
// flickit
function mxy_add_custom_styles() {
    wp_enqueue_style(
        $handle = 'bootstrap' ,
        $src = get_template_directory_uri()  .'/inc/css/bootstrap.min.css',
        $deps = array(),
        $ver = false,
        $media = 'all'
    );

    wp_enqueue_style(
        $handle = 'flickity' ,
        $src = get_template_directory_uri()  .'/inc/css/flickity.css',
        $deps = array(),
        $ver = false,
        $media = 'all'
    );

    wp_enqueue_style(
        $handle = 'mf_main' ,
        $src = get_template_directory_uri()  .'/css/main.css',
        $deps = array(),
        $ver = false,
        $media = 'all'
    );

    wp_enqueue_style(
        $handle = 'mf_framework' ,
        $src = get_template_directory_uri()  .'/inc/css/framework.css',
        $deps = array(),
        $ver = false,
        $media = 'all'
    );

}
add_action(
    $tag = 'wp_enqueue_scripts',
    $function_to_add = 'mxy_add_custom_styles',
    $priority = 30,
    $accepted_args = 0
);
