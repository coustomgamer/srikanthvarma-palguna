<?php
  if(isset($_POST['name'])) {
    $server = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "trip";    

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
      die ("Connection to this database failed due to ". mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $desc = $_POST['desc'];


    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
        VALUES ('$name', $age, '$gender', '$email', '$phone', '$desc', current_timestamp())";

    if($con->query($sql) == TRUE) {
      echo "<h3> Successfully inserted </h1>";
    } else {
      echo "ERROR: $sql <br> $con->error";
    }
    
    $con->close();
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Details</title>
</head>
<body>
  
</body>
</html>