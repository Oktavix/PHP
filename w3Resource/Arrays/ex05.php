<?php
  $color = array(4 => 'white', 6 => 'green', 11=> 'red');

  function getFirst($a){
    return @array_pop(array_reverse($a));
  }

  $first = getFirst($color);

  echo $first;
?>
