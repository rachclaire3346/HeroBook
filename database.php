<?php 
  function getDb() {
    $db = pg_connect("host=ec2-184-73-159-137.compute-1.amazonaws.com port=5432 dbname=d3raoiht0r0ji0 user=atpgqmnfrfdjig password=261da8d714b49e1b9cfa20820ef2e536049e7465147605c3a325f94a150cb935");
    return $db;
  }
?>