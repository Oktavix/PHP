<?php
  if(version_compare(PHP_VERSION, "6.0.0") >= 0){
    echo "At least 6.0.0";

  } else if(version_compare(PHP_VERSION, "5.0.0") >= 0){
    echo "At least 5.0.0";
  }
?>
