<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forloops.php" method="post">

    <label>Enter a number to count down from:</label>
    <input type="text" name="counter">
    <input type="submit" value="start">
</form>
</body>
</html>


<?php 

 /* for($i = 10 ; $i > 0 ; $i-=2) {
    echo $i . "<br>";
  }*/
    $counter = $_POST["counter"];

    for($i = $counter; $i > 0; $i-=5){
        echo $i . "<br>";
    }
?>