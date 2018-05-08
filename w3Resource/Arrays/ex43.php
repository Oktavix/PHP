<?php
  $list1 = "4, 5, 6, 7";
  $list2 = "4, 5, 7, 8";

  $a1 = explode(",", $list1);
  $a2 = explode(",", $list2);

  $list3 = implode(",", array_unique(array_merge($a1, $a2)));

  print_r($list3);
?>
