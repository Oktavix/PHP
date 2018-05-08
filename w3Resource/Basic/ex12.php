<?php
  $email = "testic2018@gmail.com";

  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email is valid";

  } else{
    echo "Email is not valid";
  }
?>
