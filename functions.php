<?php 
 
 
 /*  function happy_birthday($first_name,$age) {

          echo "Happy Birthday dear {$first_name}! <br>";
          echo "you are {$age} years old! <br> <br>";
   }
  
   happy_birthday("Spongebob", 30);
   happy_birthday("Patrick", 35);*/

   function hypotenuse(float $a, float $b) {

              $c = sqrt($a ** 2 + $b ** 2);
              return $c;    
   }  

   echo hypotenuse(3, 4);
?>