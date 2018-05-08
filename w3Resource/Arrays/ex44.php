<?php
  $a = array(4, 2, 1, 3, 4, 3, 2, 5);

  function removeDuplicate(&$a, $d){
    $first = true;

    for ($i = 0; $i < sizeof($a); $i++) {
      if($a[$i] == $d){
        if(!$first) array_splice($a, $i, 1);
        
        $first = false;
      }
    }
  }

  removeDuplicate($a, 3);

  foreach($a as $e){
    echo "$e<br>";
  }
?>
