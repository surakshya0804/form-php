
<?php
if (isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "signup";
    $con = mysqli_connect($server, $username, $password,$database);
    if (!$con) {
        die("connection to the database failed due to " . mysqli_connect_error());
    }
    // echo"Sucess to connect the database";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contant = $_POST['contant'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    // $confirm =$_POST['confirm'];
    $sql = "INSERT INTO `signup` (`name`, `email`, `contant`, `password`) VALUES ('$name', '$email', '$contant', '$password');";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        header('Location:/form-php/login.php');
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
    <title>Signup</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body >
  <?php require 'Todolist/nav.php'?> 
    <div class="container">
      <h2 style="text-align: center; margin: 12px;">Signup to our website</h2>
      <hr >
      <form action="/form-php/signup.php" id="index.php" method="post">
        User Name: <input type="text" name="name" id="n0" />
        <span id="name_error"></span>

        User Id:<input type="text" name="email" id="n1" />
        <span id="id_errror"></span>

        Contant:<input type="number" name="contant" id="n2" />
        <span id="contant_error"></span>

        Password:<input type="password" name="password" id="n3" />
        <span id="password_error"></span>

        Confirm Password:<input type="password" name="confirm" id="n4" />
        <span id="confirm_error"></span>

        <button type="submit">Submit Your Value</button>
      </form>
    </div>
    <script src="index.js"></script>
    
  </body>
</html>
