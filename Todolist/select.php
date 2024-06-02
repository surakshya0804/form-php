
<?php
// session_start();
include('dbtodo.php');

if(!isset($_SESSION['user_id'])){
    header('Location:/form-php/login.php');
}

$userid = $_SESSION['user_id'];

$sql = "SELECT * FROM todo WHERE user_id = $userid";
$result = mysqli_query($con, $sql);
// var_dump($result);
$row = mysqli_fetch_all($result);
// var_dump($row);
// exit();
// if(!$row){
//     $row = [];

// }
// while ($row = mysqli_fetch_assoc($result)) {
    // INSERT INTO `todo` (`id`, `user_id`, `task`, `description`) VALUES ('1', '11', 'buy a book', 'please buy a book from store.');

// }
?>
