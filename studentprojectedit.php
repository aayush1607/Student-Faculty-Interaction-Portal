<?php
 require_once('includes/header.php');
 require_once('includes/connection.php');
 

if(isset($_GET['edit'])){
    $GetID=$_GET['edit'];
    $sql="select * from projects where Regno='".$GetID."'";
    mysqli_select_db($con,"student_management");
$res=mysqli_query($con,$sql);
class Projects {
    // Properties
    public $id;
    public $title;
    public $desc;
    public $tech;
    public $link;
    // Methods
  
  }
  $i=0;
  $s=array();
  
while($row=mysqli_fetch_assoc($res)){
    $s[$i]=new Projects();
    $s[$i]->id=$row['ID'];
    $s[$i]->title=$row['Title'];
    $s[$i]->desc=$row['Description'];
    $s[$i]->tech=$row['Technologies'];
    $s[$i]->link=$row['Link'];
    $i++;
}

}
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
              
                <?php
                for($i=0;$i<count($s);$i++){
                    $t=$s[$i]->title;
                    $d=$s[$i]->desc;
                    $te=$s[$i]->tech;
                    $l=$s[$i]->link;
                    $k=$i+1;
                echo"<h1 align='center'>Project $k</h1><br>";
                echo "<input type='text' placeholder='Project Title' name='title$i' class='form-control mb-2' value= '$t'>";
                echo "<textarea placeholder='Project description' name='desc$i' rows='3' cols='8' class='form-control mb-2' >$d</textarea>";
                
                echo "<input type='text' placeholder='Technologies Involved' name='tech$i' class='form-control mb-2' value= '$te' >";
                echo "<input type='text' placeholder='Github/Demo Link' name='link$i' class='form-control mb-2' value= '$l'>";
                
                }
                ?>
               
                
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