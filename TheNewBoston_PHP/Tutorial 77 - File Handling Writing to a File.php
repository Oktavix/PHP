<?php
  $handle = fopen("names.txt", "w");
  fwrite($handle, "Alex\n");
  fwrite($handle, "Billy\n");

  fclose($handle);
  echo "Written<br>";
?>
