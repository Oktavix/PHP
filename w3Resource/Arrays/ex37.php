<?php
  $a = array(1=>"red", 2=>"green", 3=>"blue", 4=>"blue");

  function specific_appearances($a, $value){
    $counter = 0;

    foreach($a as $e){
      if($e == $value) $counter++;
    }

    return $counter;
  }

  echo specific_appearances($a, "blue");
?>
