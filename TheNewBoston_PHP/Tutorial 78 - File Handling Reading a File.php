<?php
  $readin = file("names.txt");

  echo $readin[0];

  foreach($readin as $fname){
    echo "$fname<br>";
  }
?>
