<?php

  header('Content-type: text/html; charset=utf-8');
  
  require_once("imdb_parser/lib/Parser.class.php");
  
  $Parser = new Parser();
  $Top250 = $Parser->get_top_250();
  
  print_r($Top250);

?>
