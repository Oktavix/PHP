<?php
  $computers_file = file_get_contents("computers.json");
  $computers = json_decode($computers_file, true);

  echo $computers["desktops"][1]["storage"]["ssd"]

?>
