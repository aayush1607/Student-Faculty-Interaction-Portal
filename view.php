<?php

require_once('Includes/header.php');
require_once('Includes/connection.php');

    if(isset($_SESSION['StudentID']) || $_SESSION['Faculty'])
    {
        $_SESSION['GET']=$GetID=$_GET['success'];
        $sql="select * from student_data where Regno='".$GetID."'";
        mysqli_select_db($con,"student_management");

        $res=mysqli_query($con,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
            $StudentID= $row['Regno'];
            $Image=$row['Img'];
            $FName=$row['FName'];
            $LName=$row['LName'];
            $DOB=$row['DOB'];
            $Branch=$row['Branch'];
            $Email=$row['Email'];
            $Date=$row['Date'];

        }

    }
    require_once('Includes/footer.php');




?>


<div class="container">

<div class="row">

<div class="col">
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
            Student Details
        </h3>
    </div>
</div>
</div>


    <?php
            if(isset($_SESSION['Faculty']) || $_SESSION['GET']==$_SESSION['StudentID'])
            {
                



        ?>
        <div class="row">
        <div class="col-lg-3">
            <div class="card mt-3">
                <div class="card-title bg-primary text-white py-2 rounded-top">
                    <h4 class="text-center "><?php echo $FName." ".$LName?></h4>
                </div>
                <div class="card-body">
                    <img src="images/<?php echo $Image?>" alt="student image" width="200" height="200" class="rounded-circle" >

                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card mt-3">
                <table class="table table-striped">
                    <tr>
                        <th>Registration no:</th>
                        <td><?php echo $StudentID?></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><?php echo $FName?></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><?php echo $LName?></td>
                    </tr>
                    <tr>
                        <th>Branch</th>
                        <td><?php echo $Branch?></td>
                    </tr>
                    <tr>
                        <th>DOB</th>
                        <td><?php echo $DOB?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $Email?></td>
                    </tr>
                    <tr>
                        <th>Date of Registration</th>
                        <td><?php echo $Date?></td>
                    </tr>

                </table>
                <a href="studentedit.php?edit=<?php echo $StudentID?>" class="btn btn-success btn-sl">Edit</a>
            </div>
        </div>

    </div>


<?php
}
else{

    $msg="Permission Denied";

    echo '<div class="alert alert-danger text-center"><img src="images/pdenied.png" alt="X "> '.$msg.'</div> ';

}


?>

</div>