<?php
  $a = array(2, 9, 4, 0, 2, -5, 1, 8);

  function find_lowest($a){
    $min = $a[0];

    foreach($a as $e){
      if($e < $min && $e != 0) $min = $e;
    }

    return $min;
  }

  echo find_lowest($a);
?>
