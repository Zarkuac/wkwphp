<?php 
    $grade = "Pizza";
    
    /*switch($grade){

        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okay";
            break;   
        case "D":
            echo "You did poorly";
            break; 
        case "F":
            echo "You failed";
            break;
        default:
            echo "{$grade} is not valid"; 
    }*/

    $date = date("1");

    //$date = "LKhinkali";
    
    switch($date){
        case "Monday":
            echo "I hate Mondays";
            break;
        case "Tuesday":
            echo "It is Taco Tuesday";
            break;
            default: 
            echo "{$date} is not a day";
    }

?>