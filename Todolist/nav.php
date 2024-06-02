<?php 
session_start(); 
?>
<link rel="stylesheet" href="/form-php/Todolist/nav.css">


    <nav>
        <ul>
            <li><a href="/form-php/<?php echo isset($_SESSION['user_id']) ? '/todolist/dashboard.php' : 'index.php' ?>">Home</a></li>
            <?php 
                if(isset($_SESSION['name']))
                {
                    echo '<li><a href="/form-php/logout.php">Logout</a></li>';
                }
                else
                {
                    echo '<li><a href="/form-php/login.php">Login</a></li>
                    <li><a href="/form-php/signup.php">Signup</a></li>' ;
                }
            ?>
        </ul>
    </nav>