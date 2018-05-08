<?php
  $age = 16;

  try{
    if($age > 16){
      echo "Old enough<br>";

    } else{
      throw new Exception("Not old enough<br>");
    }

  } catch(Exception $ex){
    echo "Error: ".$ex->getMessage();
  }
?>
