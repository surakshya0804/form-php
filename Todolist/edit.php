<?php
// session_start();
 include('dbtodo.php');
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$value =$_POST['task'];
$id = $_POST['todo_id'];
$desc=$_POST['description'];
// var_dump($desc);
// exit();
$sql = "UPDATE `todo` SET  task = '$value', description = '$desc' WHERE id = '$id'";
$result = $con->query($sql);
// $result = mysqli_query($conn, $sql);
// if($result == true);
// echo("Success");
header('Location: /form-php/todolist/todo.php');

// var_dump($result);
// exit();
$con->close();
 }
 if(!($_SERVER['REQUEST_METHOD'] == 'GET' & isset($_GET['id']))){
    header('location: /form-php/todolist/todo.php');
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="todo.css">
</head>

<body>
    <?php
    include('nav.php');
    if(!isset($_SESSION['user_id'])){
        header('Location:/form-php/login.php');
    }
    
    ?>
    
    <form action="edit.php" method="post">
        <div class="container">
            <h1>Edit Page</h1>


            <label class="myLabel" for="todo">
                <h1>Edit-List</h1>
            </label>
            <input class="myInput" type="text" name="todo_id" id="" value="<?php echo $_GET['id'];?>"hidden>
           

            <input class="myInput" type="text" name="task" id="" placeholder="Enter edit-list" value="<?php echo $_GET['task'];?>">
            <textarea class="myTextarea" name="description" id="" placeholder="Edit your description"  rows="3"><?php echo $_GET['desc'];?></textarea>

            <button class="myButton" type="submit">Edit</button>
        </div>

    </form>

</body>

</html>