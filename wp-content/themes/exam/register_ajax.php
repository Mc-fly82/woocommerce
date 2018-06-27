<?php
add_action( 'wp_ajax_set_app_list', 'prefix_ajax_set_app_list' );
add_action( 'wp_ajax_nopriv_set_app_list', 'prefix_ajax_set_app_list' );
function prefix_ajax_set_app_list() {
  // if(isset($_POST['str']));
  // { $str = $_POST['str'];} ;

  echo ('$str');
}

add_action( 'wp_ajax_ajax_page', 'ajax_page_handle' );
add_action( 'wp_ajax_nopriv_ajax_page', 'ajax_page_handle' );

function ajax_page_handle() {
  echo "string";
}
 ?>
