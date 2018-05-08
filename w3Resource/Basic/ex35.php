<?php
  $nums = array(1, 1, 2, 2, 3, 4, 5, 5);

  function removeDuplicates($nums){
    $removed = array();

    foreach($nums as $num){
      if(!in_array($num, $removed)){
        array_push($removed, $num);
      } //if
    } //foreach

    global $nums;
    $nums = $removed;
  }

  removeDuplicates($nums);
  print_r($nums);
?>
