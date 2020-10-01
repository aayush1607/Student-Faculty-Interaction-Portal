<?php
 require_once('includes/header.php');
 require_once('includes/connection.php');
 
?>
<?php
require_once('includes/header.php');
require_once('includes/function.php');
?>

    <!---->
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-6 m-auto ">
            <div class="mt-5">
                <img src="images/slogin.png" alt="Student Register" width="150" height="150" class="d-flex m-auto">
            </div>
            <div class="card mt-5">
                <div class="card-title bg-dark rounded-top">
                    <h3 class="text-center text-white py-3">Edit Project Details</h3>
                </div>

                

                <div class="card-body">

                <form action="update.php" method="POST" enctype="multipart/form-data">
              
                
                <input type="text" placeholder="Project Title" name="title" class="form-control mb-2" >
                <textarea placeholder="Project description" name="desc" rows="3" cols="8" class="form-control mb-2"></textarea>
                
                <input type="text" placeholder="Technologies Involved" name="tech" class="form-control mb-2" >
                <input type="text" placeholder="Github/Demo Link" name="link" class="form-control mb-2" >
                
                
               
                
<button class="btn btn-success" name="update">Update</button>

                </form >
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php');
?>

<?php
    require_once('includes/footer.php');
?>