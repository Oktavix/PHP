<?php
  $people_file = file_get_contents("people.json");
  $people = json_decode($people_file, true);

  echo $people["people"][1]["name"];
?>
