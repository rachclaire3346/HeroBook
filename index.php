<?php  
  $url = $_SERVER['HTTP_HOST'] . '/app';
  header("Location: http://" . $url);
  die();
?>