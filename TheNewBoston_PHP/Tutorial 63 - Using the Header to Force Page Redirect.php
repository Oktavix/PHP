<?php
  $redirect_page = "http://google.com";
  $redirect = false;

  if($redirect){
    header("Location: $redirect_page");     //redirects you to another webpage "Location: " is necessary

  } else{
    header("Location: http://youtube.com");
  }
?>
