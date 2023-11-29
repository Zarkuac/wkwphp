<?php 

  $foods = array("apple","orange","banana","coconut");

  /* echo $foods[0] . "<br>";
  echo $foods[1] . "<br>";
  echo $foods[2] . "<br>"; 
  echo $foods[3] . "<br>"; */

   //$foods[0] = "Pineapple";
   //array_push($foods, "sazamtro","kiwi");

   //array_pop($foods);
   //array_shift($foods);
   //$foods = array_reverse($foods);
   
   echo count($foods) . "<br>";
   
  foreach($foods as $food) {
        echo $food. "<br>";     
  }
?>