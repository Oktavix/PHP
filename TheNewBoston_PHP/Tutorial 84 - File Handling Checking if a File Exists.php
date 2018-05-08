<?php
  $filename = "names.txt";

  if(file_exists($filename)){
    echo "File already exists";

  } else{
    echo "File does not exist";
  }
?>
