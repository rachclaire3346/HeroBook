<?php

require_once('../database.php');

function getHero() {
    // Return a list of all palettes in the database
    $sql = "SELECT * FROM heroes order by name";
    $request = pg_query(getDb(), $sql);
    return pg_fetch_all($request);
  }

?>