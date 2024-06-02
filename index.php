<?php
// session_start();
if (isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "form";
    $con = mysqli_connect($server, $username, $password,$database);
    if (!$con) {
        die("connection to the database failed due to " . mysqli_connect_error());
    }
    // echo"Sucess to connect the database";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contant = $_POST['contant'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $sql = "INSERT INTO `form`.`form` (`name`, `email`, `contant`, `password`, `confirm`) VALUES ('$name', '$email', '$contant', '$password', '$confirm');";
    echo $sql;

    if ($con->query($sql) == true) {
        echo "Successfully inserted";
        header('Location:/');
        
        exit();
    } else {
        echo "ERROR:$sql <br> $con->error";
    }
    $con->close();
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form validation</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body >
    <?php include 'Todolist/nav.php';
    // echo $_SESSION;
    ?>
    <h1 style="text-align: center;margin: 10;">Hello!<br>How are u??</h1>
   
    <script src="index.js"></script>
    
  </body>
</html>
