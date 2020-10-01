
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Student Teacher Interaction</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">

    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar"> 
            <span class="navbar-toggler-icon"> </span>
        </button>
        <a href="index.php" class="navbar-brand"><h3>SFIP VIT - Student Faculty Interaction Portal</h3></a>

        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">


                    <?php

                        if(isset($_SESSION['StudentID']) || isset($_SESSION['Faculty']))
                        {

                            echo '<form action="logout.php" method="POST">
                            <button class="btn btn-link" name="logout">Logout</button>
                            </form>';
    


                        }
                        else
                        {
                            echo '<a href="login.php" class="nav-link">Student Login</a></a>                </li>
                            <li class="nav-item">
                                <a href="register.php" class="nav-link">Student Register</a>
                            </li>
                            <a href="faculty-login.php" class="nav-link">Faculty Login</a></a>                </li>
                            <li class="nav-item">
                                <a href="faculty-register.php" class="nav-link">Faculty Register</a>
                            </li>';
                        }

                    ?>


                  

            </ul>
        </div>
    
    </div>
</nav>
    