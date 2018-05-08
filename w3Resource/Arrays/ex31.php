<?php
  $a = array(9, 2, 21, 3, 33, 4, 18);

  $max = max($a);

  $max_index = array_search($max, $a);

  echo $max_index;
?>
