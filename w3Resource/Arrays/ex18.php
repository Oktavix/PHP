<?php
  function fn01(&$n){
    $n = number_format($n, 2);
  }

  $n1 = 15.11223;
  $n2 = 29.99292;
  $n3 = 9922.2221;

  fn01($n1);
  fn01($n2);
  fn01($n3);

  echo "$n1<br>";
  echo "$n2<br>";
  echo "$n3<br>";
?>
