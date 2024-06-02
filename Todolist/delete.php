<?php
include('dbtodo.php');
$id = $_GET['id'];
$sql = "DELETE FROM  `todo` WHERE `todo`.`id` = $id";
$result = $con->query($sql);
header('Location:/form-php/todolist/todo.php');
$con->close();


?>