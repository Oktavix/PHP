<?php
  $food = array("Pasta", "Pizza", "Salad");
  array_push($food, "Burger", "Chicken", "Pork");
  array_pop($food);

  echo $food[1];

  print_r($food);
  echo "<br>";

  for($i = 0; $i < sizeof($food); $i++){
    echo "$food[$i]<br>";
  }

  //associative arrays
  $food2 = array("Pasta"=>300, "Pizza"=>1000, "Salad"=>150);
  echo $food2["Pasta"];
  echo "<br>";

  //multidimensional arrays
  $food3 = array("Healthy"=>array("Salad", "Vegetables", "Pasta"),
                 "Unhealthy"=>array("Pizza", "Icecream"));

  echo $food3["Healthy"][1];
?>
