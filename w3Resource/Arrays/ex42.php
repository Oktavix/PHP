<?php
  $a = array(array(1, 2, 3), array(3, 2, 1), array(4, 9), array(5, 4, 2, 2));

  function flattenArray($a){
    $uniques = array();

    foreach($a as $a1){
      foreach($a1 as $e){
        if(!in_array($e, $uniques)) array_push($uniques, $e);
      } //$a1
    } //$a

    return $uniques;
  }

  $uniques = flattenArray($a);

  foreach($uniques as $e){
    echo "$e ";
  }
?>
