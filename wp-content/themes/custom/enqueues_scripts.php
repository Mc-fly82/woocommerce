<?php
// flickit
function add_flickity_script() {

    wp_enqueue_script(
        $handle = 'flickity_scr' ,
        $src = get_template_directory_uri()  .'/inc/js/flickity.js',
        $deps = array(),
        $ver = '4.7.4',
        $in_footer = true
    );


    wp_enqueue_script(
        $handle = 'bootstrap' ,
        $src = get_template_directory_uri()  .'/inc/js/bootstrap.min.js',
        $deps = array(),
        $ver = '',
        $in_footer = true
    );

}
add_action(
    $tag = 'wp_enqueue_scripts',
    $function_to_add = 'add_flickity_script',
    $priority = 10,
    $accepted_args = 0
);
