<?php
// register script
wp_register_script(
  $handle = 'style_js',
  $src = get_template_directory_uri()  .'/lib/js/style.js'
);

// Localize the script with new data
$data_to_BePassed = array(
  'home'            => get_template_directory_uri(),
  // 'bgi'             => get_template_directory_uri() . '/lib/img/bgi.png'
);
wp_localize_script(
  $handle = 'style_js',
  $object_name = 'php_style',
  $data = $data_to_BePassed
);
