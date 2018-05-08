<?php
    $email = "testic2018@gmail.com";

    function validate($email){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
      }

      return false;
    }

    echo validate($email);
?>
