<?php
 require_once('Includes/header.php');
 require_once('Includes/connection.php');
 
?>
<?php
require_once('Includes/header.php');
require_once('Includes/function.php');
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
                    <h3 class="text-center text-white py-3">Edit Acheivement Details</h3>
                </div>

                

                <div class="card-body">

                <form action="update.php" method="POST" enctype="multipart/form-data">
              
                
                <input type="number" placeholder="Achievement no" name="Cno" class="form-control mb-2" >
                
                <select class="form-control mb-2">
                <option value="null">Acheivement Type</option>
                <option value="Award">Award</option>
                <option value="Certificate">Certificate</option>
                <option value="Appearance">Appearance</option>
                </select>
                <select class="form-control mb-2">
                <option value="null">Acheivement description</option>
                <option value="Excellence">Excellence</option>
                <option value="Distinction">distinction</option>
                <option value="Participation">Participation</option>
                </select>
                <input type="text" placeholder="Year" name="Year" class="form-control mb-2" >
                
               
                
<!-- 
                        
                    
                    
                   
                    
                    
--><button class="btn btn-success" name="update">Update</button>

                </form >
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('Includes/footer.php');
?>

<?php
    require_once('Includes/footer.php');
?>