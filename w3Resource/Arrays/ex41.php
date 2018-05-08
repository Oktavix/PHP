<?php
  $emails = array("mail01@gmail.com", "mail02@gmail.com", "mail03@gmail.com", "mail02@gmail.com");

  function getNonUniqueEmails($emails){
    $a = array();
    $b = array();

    foreach($emails as $email){
      if(!in_array($email, $a)){
        array_push($a, $email);

      } else{
        if(!in_array($email, $b)) array_push($b, $email);
      }

    }

    return $b;
  }

  $a = getNonUniqueEmails($emails);

  print_r($a);
?>
