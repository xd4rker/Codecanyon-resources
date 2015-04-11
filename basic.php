<?php

  header('Content-type: text/html; charset=utf-8');
  
  require_once("imdb_parser/lib/Parser.class.php");
  
  $Parser = new Parser("Breaking bad");

  $a = $Parser->get_info();

  print_r($a);

?>
