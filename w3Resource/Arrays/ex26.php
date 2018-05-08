<?php
  $a = array(1=>"Red", 2=>"Blue", 3=>"Green", 4=>"Yellow");

  function shuffle_associative(&$a){
    $keys = array_keys($a);

    shuffle($keys);

    foreach($keys as $key){
      $new_array[$key] = $a[$key];
    }

    $a = $new_array;
  }

  shuffle_associative($a);

  print_r($a);
?>
