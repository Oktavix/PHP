<?php
  //string word count
  $string = "This is an example string.";
  $string_word_count = str_word_count($string, 1);
  print_r($string_word_count);
  echo "<br>";

  //string_shuffled
  $string_shuffled = str_shuffle($string);
  echo $string_shuffled;
  echo "<br>";

  //substring
  $half = substr($string, 0, strlen($string) / 2);
  echo $half;
  echo "<br>";

  //string_reversed
  $string_reversed = strrev($string);
  echo $string_reversed;
  echo "<br>";

  //similar text
  $s1 = "Icecream";
  $s2 = "I love icecream";

  similar_text($s1, $s2, $result);
  echo $result;
  echo "<br>";

  //trim
  $string_trimmed = trim($string);

  //strtolower and strtoupper
  $string_lower = strtolower($string);
  $string_upper = strtoupper($string);
  echo "$string_lower<br>";
  echo "$string_upper<br>";

  //strpos
  echo strpos($string, "is", 3);
  echo "<br>";

  //substr_replace
  $string_replaced = substr_replace($string, "isn't", 5, strlen("isn't"));
  echo "$string_replaced<br>";

  //str_replace
  $string_replaced2 = str_replace("is", "isn't", $string, $counter);
  echo "$string_replaced2<br>";
  echo "$counter<br>";

  /*
    str_word_count(string, x)                           //0 returns number of words, 1 returns an array of words
    str_word_count(string, x, 'string')                 //third argument lets your specify what to count as a word
    print_r(array)                                      //prints an array
    str_shuffle(string)                                 //shuffles characters of a string
    substr(string, begin, end)
    strlen($string)
    strrev(string)                                      //reverses a string
    similar_text(string1, string2, result)              //compares similarities between two strings and puts the precentage in result
    trim(string)                                        //trims whitespaces in beginning and end
    strtolower(string)                                  //string to lower case
    strtoupper(string)                                  //string to upper case
    strpos(string, sequence, offset)                    //searches for a sequence in a string
    substr_replace(string, sequence, start, howMany)    //replaces a string with a sequence
    str_replace(find, replace, string, counter)
  */
?>
