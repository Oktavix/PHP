<?php
  $a = array(1, 2, 3, 4, 5);

  function insertAtPos(&$a, $element, $pos){
    array_splice($a, $pos, 0, $element);
  }

  insertAtPos($a, 10, 2);

  foreach($a as $e){
    echo "$e ";
  }
?>
