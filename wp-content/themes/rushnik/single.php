<?php
  $post = $wp_query->post;
 
  if (in_category('2')) {
      include(TEMPLATEPATH.'/single-towel.php');
  } else {
      include(TEMPLATEPATH.'/single-symbol.php');
  }
?>