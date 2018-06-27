<?php
// wp_register_script
wp_register_script(
  $handle = 'style_js',
  $src = get_template_directory_uri()  .'/lib/js/style.js'
);
wp_localize_script(
  $handle = 'style_js',
  $object_name = 'php',
  $data = array(
    'home' => get_template_directory_uri(),
    )
  );

wp_register_script(
  $handle = 'page_refresh',
  $src =  get_template_directory_uri().'/lib/js/ajax.js',
  $deps = array('jquery'),
  $ver = '',
  $in_footer = 'true'
);
wp_localize_script(
  $handle = 'page_refresh',
  $object_name = 'ajax',
  $data = array(
  'url' => admin_url('admin-ajax.php'),
  'nonce' => wp_create_nonce('ajaxnonce')
  )
);
