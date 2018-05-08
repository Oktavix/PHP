<?php
  function printNextChar($c){
    $ascii = ord($c);
    return chr($ascii + 1);
  }

  echo printNextChar('a');
?>
