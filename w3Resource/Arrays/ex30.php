<?php
  function getArray(){
    $a = array();

    $len = rand(1, 26);
    $counter = 97;

    for ($i = 0; $i < $len; $i++) {
      array_push($a, chr($counter));

      $counter++;
    }

    return $a;
  }

  $a = getArray();

  foreach($a as $e){
    echo "$e<br>";
  }
?>
