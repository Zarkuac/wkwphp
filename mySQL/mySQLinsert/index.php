<?php 

   include("database.php");

   /*$username = "tsotne1";
   $password = "zarkuac1233";
   $hash = password_hash($password, PASSWORD_DEFAULT);

   $sql = "INSERT INTO users (username,password)
           VALUES ('$username','$hash')";
 try {
           mysqli_query($conn, $sql);
           echo "User is now registered!";
        }
        catch(mysqli_sql_exception) {
            echo "could not register user";
        }*/


    $sql = "SELECT * FROM users";  
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["username"] . "<br>";
            echo $row["password"] . "<br>";
         };
    }

    else {
      echo "No username found!";
    }

   mysqli_close($conn);
?>