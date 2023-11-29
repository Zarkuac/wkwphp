<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form accept="task1.php" method="post"> 
        <label> <b> Email Address: </b> </label> <br> <br>
     <input type="text" name="mail"> <br> <br>
     <input type="submit" value="Submit"> 
    </form>
</body>
</html>


<?php 
   
   $mail = $_POST["mail"];

   echo "Your Email Address IS {$mail}";
?>