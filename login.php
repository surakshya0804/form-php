<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include 'Todolist/nav.php' ?>

    <div class="container">
        <h2 style="text-align: center;margin: 6px;">Login to our website</h2>
        <hr>
        <form action="/form-php/login.php" id="form" method="post">

            User Id:<input type="text" name="email" id="n1" />
            <span id="id_errror"></span>



            Password:<input type="password" name="password" id="n3" />
            <span id="password_error"></span>



            <button type="submit">Submit Your Value</button>
        </form>
    </div>
    <?php
if (isset($_SESSION['name'])) {
    header('location: /form-php/todolist/dashboard.php');
    exit();
} // $login = false;
// $showError = false; {

// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "signup";
// $con = mysqli_connect($server, $username, $password, $database);
// if (!$con) {
//     die("connection to the database failed due to " . mysqli_connect_error());
// }
// // echo"Sucess to connect the database";
// if ($_SERVER["REQUEST_METHOD"] == "POST") 

$server = "localhost";
$username = "root";
$password = "";
$database = "signup";
$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("connection to the database failed due to " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];


    $password = $_POST['password'];


    // $sql = "Select * from signup where email='$email'AND password= '$password' ";
    $sql = "Select * from signup where email='$email' ";

    $result = mysqli_query($con, $sql);
    // $data = mysqli_fetch_assoc($result);

    $num = mysqli_num_rows($result);
    // mysqli_num_rows->record in db
    if ($num == 1) {
        $row = mysqli_fetch_array($result);
        $hashedpassword = $row['password'];
        // var_dump($row);
        // die();
        if (password_verify($password, $hashedpassword)) {
            echo ('Correct Password');
            // exit();
            // session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: /form-php/Todolist/dashboard.php");
            exit();

            // $_SESSION['user_name'] = $username;
        }
        else{
            echo 'lol wrong password';
            exit();
        }

        // echo "logged in sucessfully";
        //    die();
        // session_start();
        // $_SESSION['loggedin'] = true;
        // $_SESSION['email'] = $email;
        // $_SESSION['name'] = $data['name'];

        // header("location: dashboard.php");
        // exit();
    } else {
        echo ('wrong password');
    }
}
$con->close();
// $email = $_POST['email'];


// $password = $_POST['password'];


// $sql = "Select * from signup where email='$email'AND password= '$password' ";
// $result = mysqli_query($con, $sql);
// $num = mysqli_num_rows($result);
// // mysqli_num_rows->record in db
// if ($num == 1) {
//     $login = true;
// } else {
//     $showError = "Invalid ";
// }




// echo $sql;

// if ($con->query($sql) == true) {
//     echo "Successfully inserted";
//     // header('Location:/');
//     exit();
// } else {
//     echo "ERROR:$sql <br> $con->error";
// }



?>
    <!-- <script src="index.js"></script> -->

</body>

</html>