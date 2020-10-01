<?php

//register Function
function RegisterFun()
{


    $msg="";
    if(isset($_GET['FName'])){
        $msg="Please Enter First Name";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }

    if(isset($_GET['LName'])){
        $msg="Please Enter Last Name";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['Regno'])){
        $msg="Please Enter Registration Number";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['DOB'])){
        $msg="Please Enter Date Of Birth";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['email'])){
        $msg="Please Enter Email";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['password'])){
        $msg="Please Enter Password";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['characters'])){
        $msg="Please Enter Valid Characters in Your Name";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['InValidEmail'])){
        $msg="Please Enter Valid Email";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['UserExits'])){
        $msg="Your Account Already Exits";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['InValid_Format'])){
        $msg="Invalid Format of Image";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['Too_Large'])){
        $msg="Allowed Image size < 1mb";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['success'])){
        $msg="Successfully Registered!";
        echo '<div class="alert alert-success text-center">'.$msg.'
        <a href="login.php">Login Now</a> </div>';

        
    }





}


function loginfun(){

    $msg="";
    if(isset($_GET['empty']))
    {
        $msg="Please Fill All Details";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }

    if(isset($_GET['invalid']))
    {
        $msg="Registration number not registered";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['pinvalid']))
    {
        $msg="Incorrect Password";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_SESSION['StudentID']))
    {
        header("location:view.php?success=".$_SESSION['StudentID']);
    }
}



?>