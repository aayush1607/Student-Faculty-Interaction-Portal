
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery/jquery.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="sstyle.css">
    <title>Student Faculty Interaction</title>
    
</head>
<body>

















<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php"><img class="d-inline-block align-top" src="images/vitlogo.png" alt="VIT Vellore" style="height:75px; width:180px;"></a>
    <h3>Student Faculty Interaction Portal</h3>

    <!-- Toggle button -->
    <button class="navbar-toggler" aria-label="Toggle navigation" aria-controls="navbarSupportedContent" data-toggle="collapse" data-target="#navbarSupportedContent"> 
            <span class="navbar-toggler-icon"> </span>
        </button>


    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav ml-auto">


      <?php

if(isset($_SESSION['StudentID']) || isset($_SESSION['Faculty']))
{
    $_SESSION['GET']=$GetID=$_GET['success'];
    if($_SESSION['GET']==$_SESSION['StudentID'])
    echo '
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/default.png" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="view.php?success='.$GetID.'">Dashboard</a>
        </div>
      </li>   
    </ul>
  </div>
    
  
    
  <li class="nav-item ml-5 mt-2">
    <form action="logout.php" method="POST">
    <button class="btn btn-outline-primary" name="logout">Logout</button>
    </form></li>';
  



}
else
                        {
                            echo '        <!-- Navbar dropdown -->
                            <li class="nav-item dropdown">
                              <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-expanded="false"
                              >
                                I\'m Student
                              </a>
                              <!-- Dropdown menu -->
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="register.php">Register</a></li>
                    
                              </ul>
                            </li>
                             <!-- Navbar dropdown -->
                             <li class="nav-item dropdown">
                              <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-expanded="false"
                              >
                                I\'m Faculty
                              </a>
                              <!-- Dropdown menu -->
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="faculty-login.php">Login</a></li>
                                <li><a class="dropdown-item" href="faculty-register.php">Register</a></li>
                    
                              </ul>
                            </li>';
                        }

                    ?>

      </ul>

    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->




<!-- 



<nav class="navbar navbar-expand-sm bg-light navbar-light">

    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar"> 
            <span class="navbar-toggler-icon"> </span>
        </button>
        <a href="index.php" class="navbar-brand"><h3>SFIP VIT - Student Faculty Interaction Portal</h3></a>

        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav ml-auto">



                    <?php

                        if(isset($_SESSION['StudentID']) || isset($_SESSION['Faculty']))
                        {

                            echo '<form action="logout.php" method="POST">
                            <button class="btn btn-outline-primary" name="logout">Logout</button>
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
    -->