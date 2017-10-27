<?php  
  $url = $_SERVER['HTTP_HOST'];
  header("Location: http://" . $url);
  die();
?>