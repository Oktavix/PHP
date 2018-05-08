<?php
  $s = "sladoled";

  function getArray($s, $start, $end){
    $s1 = substr($s, $start, $end);

    return str_split($s1);
  }

  $a = getArray($s, 2, 5);

  print_r($a);
?>
