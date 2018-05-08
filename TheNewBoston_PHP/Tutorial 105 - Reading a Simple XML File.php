<?php
  $xml = simplexml_load_file("example.xml");

  echo $xml->producer[1]->name."<br>";
  echo $xml->producer[1]->age."<br>";

  foreach($xml->producer as $p){
    echo $p->name;
    echo " ";
    echo $p->age."<br>";
  }
?>
