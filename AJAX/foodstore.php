<?php
  header("Content-Type: text/xml");

  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?';

  echo '<response>';

    $food = $_GET["food"];
    $food_array = array("tuna", "bacon", "beef", "loaf", "ham");

    if(in_array($food, $food_array)){
      echo "We do have $food!";

    } else if($food == ""){
      echo "Enter a food";

    } else{
      echo "Sorry we don't sell $food";
    }

  echo '</response>';
?>
