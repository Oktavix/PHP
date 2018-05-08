<?php
  $a = array(1=>"red", 2=>"green", 3=>"blue");

  $values = array_values($a);
  sort($values);

  print_r($values);
?>
