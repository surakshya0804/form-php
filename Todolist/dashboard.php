<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard </title>
     <link rel="stylesheet" href="todo.css">
 </head>

 <body>
     <?php require 'nav.php' ;
    if (!isset($_SESSION['name'])) {
        header("location: /form-php/login.php");
        exit();
        
    }

    ?>

     <h1 style="margin: 5%;">Welcome! to my website</h1>
     <?php if(isset($_SESSION['name'])){
        echo '<h1 style="margin: 5%;" >Hello! '.$_SESSION['name'].'</h1>';
     }
     ?>
     <a style="margin: 10%;" class="myButton"  href="/form-php/Todolist/todo.php">Add todo</a>



 </body>

 </html>