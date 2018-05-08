<?php
  function generateCaptcha(){
    $captcha = "abcdefghijklmnopqrstuvwxyz";

    return substr(str_shuffle($captcha), 0, 5);
  }

  echo generateCaptcha();
?>
