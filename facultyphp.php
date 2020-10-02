<?php
    session_start();
    require_once('includes/connection.php');
    if(isset($_POST['login'])){

        if(empty($_POST['empid']) || empty($_POST['password']))
        {
            header("location:faculty-login.php?empty");
        }
        else{
            $Empid=mysqli_real_escape_string($con,$_POST['empid']);
            $Pass=mysqli_real_escape_string($con,$_POST['password']);

            $sql="select * from faculty_data where FacultyID ='".$Empid."' and FacultyPassword='".$Pass."'";
            mysqli_select_db($con,"student_management");
            $res=mysqli_query($con,$sql);
            if($row=mysqli_fetch_assoc($res))
            {
                $_SESSION['Faculty']=$row['FacultyID'];
                header("location:faculty-view.php");
            }
            else{
                header("location:faculty-login.php?InvalidCre");
            }

        }
    }
    else{


        header("location:faculty-login.php");
    }























?>