<?php

  header('Content-type: text/html; charset=utf-8');
  
  require_once("imdb_parser/lib/Parser.class.php");
  
  $Parser = new Parser();
  $Popular = $Parser->get_popular();
  
  print_r($Popular);

?>
