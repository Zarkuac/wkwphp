<?php 
  
  /*$temp = 15;
  $cloudy = false;
  
  if($temp < 0 || $temp > 30) {
    echo "The weather is bad. <br>";
  }
  else{
    echo "The weather is good. <br>";
  }

  if(!$cloudy) {

    echo "It's sunny";
  }
  else {
    echo "It's cloudy";
  }*/

  /*$age = 19;
  $citizen = false;

  if($age >= 18 && $citizen){
    echo "You can vote";
  }
  else {
    echo "You cannot vote";
  }*/

  $child = true;
  $senior = false;
  $ticket = null;

  if($child || $senior) {
    $ticket = 10;
  }
  else {
   $ticket = 15;
  }

  echo "The ticket price is \${$ticket}";
?>