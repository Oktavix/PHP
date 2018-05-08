<?php
  $json = '{"Title": "The Cuckoos Calling",
           "Author": "Robert Galbraith",
           "Detail": {
             "Publisher": "Little Brown"
           }}';

  $data = json_decode($json, true);

  print_r($data);
?>
