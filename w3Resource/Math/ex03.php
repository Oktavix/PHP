<?php
  function generateRandomCode(){
    $random_code = "";

    for ($i = 0; $i < 11; $i++) {
      $random_code = $random_code.chr(rand(33, 126));
    }

    return $random_code;
  }

  echo $random_code = generateRandomCode();
?>
