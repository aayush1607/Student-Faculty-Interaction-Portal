<?php
 require_once('includes/header.php');
 require_once('includes/connection.php');
 if(isset($_GET['edit'])){
    $GetID=$_GET['edit'];
    $sql="select * from student_data where Regno='".$GetID."'";
    $sql2="select * from past_courses where Regno='".$GetID."';";
    $sql3="select * from current_courses where Regno='".$GetID."';";
    mysqli_select_db($con,"student_management");
    $res=mysqli_query($con,$sql);
    $res2=mysqli_query($con,$sql2);
    $res3=mysqli_query($con,$sql3);
    while($row=mysqli_fetch_assoc($res)){
        $Sem=$row['Sem'];
        $CGPA=$row['CGPA'];
        $regno=$row['Regno'];
    }
    $pastCourses= array();
    while($row2=mysqli_fetch_assoc($res2)){
        array_push($pastCourses,$row2['Course']);
    }
    $currentCourses=array();

    while($row3=mysqli_fetch_assoc($res3)){
        array_push($currentCourses,$row3['currCourses']);
    }
}
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
                    <h3 class="text-center text-white py-3">Edit Academic Details</h3>
                </div>

                

                <div class="card-body">

                <form action="update.php" method="POST" enctype="multipart/form-data">
              
                
                <input type="text" value="<?php echo $regno?>" class="form-control mb-2" name='regno' readonly>
                <input type="number" placeholder="Current Semester" name="Sem" class="form-control mb-2" value="<?php echo $Sem?>">
                <input type="text" placeholder="your CGPA" name="cgpa" class="form-control mb-2" value="<?php echo $CGPA?>">
                <br>
                <h5>Past Courses:</h5>
                
<!-- 
                        <option value="null">Choose Branch</option>
                    
                    
                   
                    
                    
-->

                <?php
                $j=1;
                $k=count($pastCourses);
                for($i=0;$i < count($pastCourses); $i++){
                    $j+=$i;
                    echo"<input type='text' placeholder='Past Course$j' name='Coursep$i' class='form-control mb-2' value='$pastCourses[$i]'>";
                                              
                }
                
                ?>
                <br>
                <h5>Current Courses:</h5>
                
                 <?php
                $j=1;
                $cc=count($currentCourses);
                echo"<input type='number' value='$cc' name='sk' style='display:none;'>";
                for($i=0;$i < count($currentCourses); $i++){
                    $j+=$i;

                    echo"<input type='text' placeholder='Current Course$j' name='Course$i' class='form-control mb-2' value='$currentCourses[$i]'>";

                }

                ?>
                
                
                
                
                
                
                <button class="btn btn-success" name="updateacademic">Update</button>

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