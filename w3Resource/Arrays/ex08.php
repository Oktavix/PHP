<?php
  $a = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

  echo "Ascending sort by value<br>";
  asort($a);
  printArray($a);
  echo "<br>";

  echo "Descending sort by value<br>";
  array_reverse($a);
  printArray($a);
  echo "<br>";

  echo "Ascending sort by key<br>";
  ksort($a);
  printArray($a);
  echo "<br>";

  echo "Descending sort by value<br>";
  array_reverse($a);
  printArray($a);
  echo "<br>";



  function printArray($a){
    foreach($a as $key => $value){
      echo "$key -> $value<br>";
    }
  }
?>
