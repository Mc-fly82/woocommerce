<?php
add_action( 'wp_ajax_ajax_page_handle', 'prefix_ajax_ajax_page_handle_fx' );
add_action( 'wp_ajax_nopriv_ajax_page_handle', 'prefix_ajax_ajax_page_handle_fx' );
  function prefix_ajax_ajax_page_handle_fx(){
    // wp_reset_postdata();

  if(isset($_POST['id']));
  { $ID = $_POST['id'];} ;

require 'content-page.php';


  }
  ?>
