<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
    username:<br>
    <input type="text" name="username"> <br>    
    age: <br>
    <input type="text" name="age"> <br> 
    EMAIL: <br>
    <input type="text" name="email"> <br> 
    <input type="submit" name="login" value="login">

    </form>
</body>
</html>

<?php 

  if(isset($_POST["login"])) {

    /*$username = filter_input(INPUT_POST, "username",
        FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age",
    FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST, "email",
    FILTER_SANITIZE_EMAIL);
    echo "Your email is {$email}";*/

    $age = filter_input(INPUT_POST, "age"
    , FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email"
    , FILTER_VALIDATE_EMAIL);
    
    if(empty($email)) {
        echo "THAT email WASNT VALID";
    }
    else {
        echo "Yore {$email} is esars old";
    }

  }

?>