<?php
  $x = array(1, 2, 3, 4, 5);

  function deleteElement(&$x, $pos){
    array_splice($x, $pos, 1);
  }

  deleteElement($x, 2);

  foreach($x as $element){
    echo "$element<br>";
  }
?>
