<?php
require_once("portscan.php");

$portScan = new Scan();
$a = $portScan->covertRange(75,80);

foreach ($a as $port) {
  print $port ."\n";
}

$scan = $portScan->scan("http://www.google.com.br", $a);
var_dump($scan);
