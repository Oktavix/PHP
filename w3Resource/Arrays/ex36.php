<?php
  $a = array("hello", "there", "man");
  print_r($a);
  echo "<br>";

  $a = array_map("strtoupper", $a);
  print_r($a);
  echo "<br>";

  $a = array_map("strtolower", $a);
  print_r($a);
  echo "<br>";
?>
