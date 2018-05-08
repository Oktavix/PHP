<?php
  $a = array(" red ", " green ", "blue   ");

  array_walk($a, "trim");

  print_r($a);
?>
