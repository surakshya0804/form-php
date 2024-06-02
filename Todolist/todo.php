<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo
    </title>
    <link rel="stylesheet" href="todo.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</head>

<body>
    <?php
    include('nav.php');
    if(!isset($_SESSION['user_id'])){
        header('Location:/form-php/login.php');
    }
    
    ?>


    <form action="/form-php/todolist/insert.php" method="post">
        <div class="container">
            <h1 style="text-align: center;">Add Todo</h1>
            <hr>


            <label class="myLable" for="todo">
                <h1 style="text-align: center;">Todo-List</h1>
                
            </label>
            <!-- <input type="number" name="user_id" id=""> -->

            <input class="myInput" type="text" name="task" id="" placeholder="Enter todo-list" required>
            <textarea class="myTextarea" name="description" id="textarea" placeholder="Enter description" rows="2" required></textarea>

            <button class="myButton" type="submit">Add Todo</button>
        </div>
    </form>
    <div>
        <?php
        include('select.php');
        ?>
        <h1 style="text-align: center; margin-top: 10%;">Your Lists</h1>
        <hr>

        <table id="example" class="display" style="width: 100%;" >
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($row as $data)
                  {
                      echo "<tr>
                      <td>".$i."</td>
                      <td>".$data[2]."</td>
                      <td>".$data[3]."</td>
                      <td> <a class='myButton' href='edit.php?id=".$data[0]."&task=".$data[2]."&desc=".$data[3]."'>Edit</a> <a class='deleteBtn' href='delete.php?id=".$data[0]. "'>Delete</a>
                      
                      </td>
                      
                      </tr>";
                      $i++;
                }

                ?>
                






            </tbody>
        </table>


    </div>

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        // let table = new DataTable('#myTable');
        let table = new DataTable('#example');
    </script>
</body>

</html>