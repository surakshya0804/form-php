<!-- connect to database -->
<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "signup";
$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("connection to the database failed due to " . mysqli_connect_error());
}
?>