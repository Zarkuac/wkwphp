<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task4.php" method="post">
        <label style="font-size:25px">
        <b>Please input your name:<b></label> <br>
        <br>
        <input type="text" name="taker"> 
        <input type="submit" value="Submit Name"> <br>
    </form>
</body>
</html>

<?php 
 
 /*Create a simple HTML form and accept the user name and 
 display the name through PHP echo statement. */

 // https://www.w3resource.com/php-exercises/php-basic-exercises.php
    $taker = $_POST["taker"];
    echo "<h3> Hello $taker </h3>";

    /*echo $x;
        print_r(error_get_last());
        
        get last error
    */

?>

