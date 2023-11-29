<?php

    //setcookie("fav_food","khinkali" 
    //time() + (86400 * 2), "/");

    setcookie(
        "fav_food", "khinkali",
        time() - 0 , "/"
    );


    setcookie(
        "fav_drink", "cookie",
        time() + (86400 * 3), "/"
    );

    setcookie(
        "fav_desert", "tiramisu",
        time() + (86400 * 2), "/"
    );


    foreach($_COOKIE as $key => $value) {

        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])) {
        echo "buy some {$_COOKIE["fav_food"]}";
    }
    else {
        echo "I DONT KNOW YOUR FAV FOODS";
    }
 
?>