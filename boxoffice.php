<?php

  header('Content-type: text/html; charset=utf-8');
  
  require_once("imdb_parser/lib/Parser.class.php");
  
  $Parser = new Parser();
  $BoxOffice = $Parser->get_BoxOffice();
  
  print_r($BoxOffice);

?>
