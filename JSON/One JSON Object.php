<?php
  $ashe_file = file_get_contents("ashe.json");
  $ashe = json_decode($ashe_file, true);

  echo $ashe["name"];
?>
