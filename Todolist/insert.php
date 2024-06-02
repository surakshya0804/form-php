<?php
session_start();
include('dbtodo.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // else{
    //     echo"Database Connection";
    // }
    // var_dump($_SESSION);
    // exit();

    $task = $_POST['task'];
        
    $userid = $_SESSION['user_id'];
   
    
    $desc = $_POST['description'];

    $mysql = "INSERT INTO `todo` ( `user_id`, `task`, `description`) VALUES ( '$userid', '$task', '$desc')";
    if ($con->query($mysql) == true) {
        echo ("Successful");
        header('Location: /form-php/todolist/todo.php');
        exit();
    }
}


?>
