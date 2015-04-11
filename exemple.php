<?php

header('Content-type: text/html; charset=utf-8');

require_once("../lib/Parser.class.php");

$Parser = new Parser("tt0948470");
$Parser2 = new Parser("The last samurai");

$a = $Parser->get_info();
$b = $Parser2->get_info();

print_r($a);

print_r($b);

?>
