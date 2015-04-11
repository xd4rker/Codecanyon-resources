<?php

  header('Content-type: text/html; charset=utf-8');
  
  require_once("imdb_parser/lib/Parser.class.php");
  
  $Parser1 = new Parser("tt0948470");
  $Parser2 = new Parser("The last samurai");
  
  $a = $Parser1->get_info();
  $b = $Parser2->get_info();
  
  print_r($a);
  print_r($b);

?>
