<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form accept="checkboxes.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">
    Pizza<br>
    <input type="checkbox" name="hamburger" value="Hamburger">
    Hamburger<br>
    <input type="checkbox" name="hotdog" value="Hotdog">
    Hotdog<br>
    <input type="checkbox" name="taco" value="Taco">
    Taco<br>
    <input type="submit" name="submit">
</form>    

</body>
</html>

<?php 
   if(isset($_POST["submit"])) {

       if(isset($_POST["pizza"])){
        echo "You like pizza <br>";
       }
       if(isset($_POST["hamburger"])){
        echo "You like hamburger <br>";
       }
       if(isset($_POST["taco"])){
        echo "You like tacos! <br>";
       }
       if(isset($_POST["hotdog"])){
        echo "You like hotdog! <br>";
       }

       if(empty($_POST["pizza"])){
        echo "You dont like pizza <br>";
       }
       if(empty($_POST["hamburger"])){
        echo "You dont like hamburger <br>";
       }
       if(empty($_POST["taco"])){
        echo "You dont like tacos! <br>";
       }
       if(empty($_POST["hotdog"])){
        echo "You  dont like hotdog! <br>";
       }
   }

?>
