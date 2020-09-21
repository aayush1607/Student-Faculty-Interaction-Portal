<?php
    require_once('includes/header.php');
    require_once('includes/connection.php');
    if(isset($_SESSION['Faculty']))
    {

        $sql="select * from student_data";
        mysqli_select_db($con,"student_management");

        $res=mysqli_query($con,$sql);
    }
    else{
        header("location:faculty-login.php");
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card bg-dark text-white mt-5">
                    <h3 class="text-center py-3">Student Details</h3>

                </div>
            
            </div>
        
        </div>

        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-title">

                    </div>

                <div class="card-body">
                    <table class="table table-striped">


                        <tr>


                        <form action="search.php" method="POST">
                            <div class="form-inline mb-3">
                                <input type="text" placeholder="Search" class="form-control">
                                <button class="btn btn-success">Search</button>
                            </div>
                        </form>
                        </tr>
                        <tr class="bg-success text-white">
                            <td>Regno</td>
                            <td>Name</td>
                            <td>Branch</td>
                            <td>Email</td>
                            <td colspan="6">Operation</td>
                        </tr>
                        
                    <?php 
                    
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $StudentID= $row['Regno'];
                        $FName=$row['FName'];
                        $LName=$row['LName'];
                        $Branch=$row['Branch'];
                        $Email=$row['Email'];

                    ?>
                    <tr >
                        <td><?php echo $StudentID?></td>
                        <td><?php echo $FName." ".$LName?></td>
                        <td><?php echo $Branch?></td>
                        <td><?php echo $Email?></td>
                        <td><a href="view.php?success=<?php echo $StudentID?>" class="btn btn-success btn-sm">View</a></td>

                    </tr>
                                
                <?php
                }

                    
                ?>
                    
                    </table>
                </div>

            </div>
                
        </div>
    </div>
</div>



<?php   require_once('includes/footer.php');

   


?>