<?php
  $handle = fopen("names.txt", "r");

  $datain = fread($handle, filesize("names.txt"));

  $names_array = explode(" ", $datain);

  print_r($names_array);

  //filesize(filename)      //gets file size
?>
